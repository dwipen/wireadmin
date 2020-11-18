<?php

namespace App\Repositories;

use File;

class SystemUpdateRepository
{
    private $url = 'http://updater.ffegu.xyz/aiomlm/updates/', $tmp_backup_dir;

    public function getLatestVersion()
    {
        try {
           $info = json_decode(\Http::get($this->url.'info.json'), true);
           if (version_compare($info['version'], setting('system.version'), '>')) {
             return $info;
           }
        } catch (\Exception $e) {
          return false;
        }
    }

    public function download($info)
    {
       try {
         return \Storage::disk('local')->put('updater-temp/'.$info['archive'], \Http::get($this->url.$info['archive']));
       } catch (\Exception $e) {
         return false;
       }
    }

    public function install($info)
    {
       try {
         \Artisan::call('up');
         $this->tmp_backup_dir = storage_path('app/updater-temp/backup_'.now());

         $file = \Storage::disk('local')->path('updater-temp/'.$info['archive']);

         $execute_commands = false;
         $upgrade_cmds_filename = 'upgrade.php';
         $upgrade_cmds_path = storage_path($upgrade_cmds_filename);
         $zipHandle = zip_open($file);
         $archive = substr($info['archive'],0, -4);

         while ($zip_item = zip_read($zipHandle) ){
           $filename = zip_entry_name($zip_item);
           $dirname = dirname($filename);

           if(	substr($filename,-1,1) == '/' || dirname($filename) === $archive || substr($dirname,0,2) === '__') continue;

          if (substr($dirname,0, strlen($archive)) === $archive) {
            $dirname = substr($dirname, (strlen($dirname)-strlen($archive)-1)*(-1));
          }

          $filename = $dirname.'/'.basename($filename);

              if ( !is_dir(base_path().'/'.$dirname) ){
                  File::makeDirectory(base_path().'/'.$dirname, $mode = 0755, true, true);
              }

              if ( !is_dir(base_path().'/'.$filename) ){
                  $contents = zip_entry_read($zip_item, zip_entry_filesize($zip_item));
                  $contents = str_replace("\r\n", "\n", $contents);

                  if ( strpos($filename, 'upgrade.php') !== false ) {
                      File::put($upgrade_cmds_path, $contents);
                      $execute_commands = true;
                  }else {
                      if(File::exists(base_path().'/'.$filename)) $this->backup($filename);
                      File::put(base_path().'/'.$filename, $contents);
                      unset($contents);
                  }

              }

         }
         zip_close($zipHandle);

         if($execute_commands == true){
             include ($upgrade_cmds_path);
             unlink($upgrade_cmds_path);
             File::delete($upgrade_cmds_path); //clean TMP
         }

         File::delete($file);
         File::deleteDirectory($this->tmp_backup_dir);
         setting([ 'system.version' => $info['version'] ]);
         setting()->save();
         \Artisan::call('up');
         return ['status'=>true];
       } catch (\Exception $e) {
         \Artisan::call('up');
          return ['status'=>false, 'message'=>$e->getMessage()];
       }

    }

    private function backup($filename){
        $backup_dir = $this->tmp_backup_dir;
        if ( !is_dir($backup_dir) ) File::makeDirectory($backup_dir, $mode = 0755, true, true);
        if ( !is_dir($backup_dir.'/'.dirname($filename)) ) File::makeDirectory($backup_dir.'/'.dirname($filename), $mode = 0755, true, true);
        File::copy(base_path().'/'.$filename, $backup_dir.'/'.$filename);
    }


}
