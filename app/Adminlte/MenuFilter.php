<?php

namespace App\Adminlte;

use JeroenNoten\LaravelAdminLte\Menu\Filters\FilterInterface;
use Laratrust\Laratrust;

class MenuFilter implements FilterInterface
{
    public function transform($item)
    {
      if (!$this->isImpersonate($item)) {
        $item['restricted'] = true;
      }

      if (!$this->isConditioned($item)) {
        $item['restricted'] = true;
      }

      if (isset($item['text'])) {
        if (is_array($item['text'])) {
            if ($user = \Auth::user()) {
                foreach ($item['text'] as $permission => $text) {
                   if ($user->hasPermissionTo($permission)) {
                       $item['text'] = ucfirst($text);
                   }
                }
            }
        }
        else {
          $item['text'] = ucfirst($item['text']);
        }
      }

      return $item;
    }

    protected function isConditioned($item)
    {
       if (empty($item['conditions'])) {
         return true;
       }

       foreach ($item['conditions'] as $key => $condition) {
          if ($key === 'setting') {
              if ($condition[1] === '>') {
                if (setting($condition[0]) > $condition[2]) {
                  return true;
                }
              }elseif ($condition[1] === '==' || $condition[1]==='===') {
                 if (setting($condition[0]) === $condition[2]) {
                   return true;
                 }
              }
          }
       }

       return false;
    }

    protected function isImpersonate($item)
    {
       if (!isset($item['impersonate'])) {
          return true;
       }

       if ($item['impersonate']) {
         if (\Auth::check()) {
           if (\Auth::user()->isImpersonated()) {
              return true;
           }
         }
       }

       return false;
    }

}
