<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\SystemUpdateRepository;

class SystemUpdate extends Component
{
    public $info, $backup;

    private $repository;

    public function render()
    {
        return view('system-update');
    }

    public function mount()
    {
       $this->repository = new SystemUpdateRepository();

       $this->checkUpdate();
    }

    public function checkUpdate()
    {
        if (!$this->info = $this->repository->getLatestVersion()) {
           $this->emit('error', 'can not check for the updates at this moment');
        }
    }

    public function update(SystemUpdateRepository $repository)
    {
       $this->emit('hideLoading');
       if (!$repository->download($this->info)) {
          return $this->emit('error', 'error while downloading updates! try later');
       }

       if (!$resp = $repository->install($this->info)) {
          return $this->emit('error', 'error while installing updates! try later');
       }
       if (!$resp['status']) {
         return $this->emit('error', $resp['message']);
       }
       session()->flash('success', ucfirst('System updated to '.$this->info['version']));
       $this->redirectRoute('dashboard');

    }

    private function download()
    {
       $url = 'http://updater.ffegu.xyz/aiomlm/updates/'.$this->info['archive'];
       try {
           $file = \Http::get($url);
          return \Storage::disk('local')->put('updater-temp/'.$this->info['archive'], $file);
       } catch (\Exception $e) {
          $this->emit('error', $e->getMessage());
          return false;
       }

    }

}
