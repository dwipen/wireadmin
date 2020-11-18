<?php

return [
  [
    'text' => 'unimpersonate',
    'route' => 'unimpersonate',
    'topnav'  => true,
    'impersonate' => true,
  ],
  //topna
  [
     'search' => true,
     'text'=> 'Search member',
     'input_name' => 'search',
     'method'=>'GET',
     'route' => 'members',
     'topnav' => true,
     'can' => ['manage-members'],
  ],

  [
      'text' => 'dashboard',
      'route'  => 'dashboard',
      'icon' => 'fas fa-home',
      'icon_color' => 'green'
  ],

  [
     'header' => 'admin-area',
     'can'=>['manage-settings', 'manage-administrator', 'manage-ranks'],
     'classes' => 'text-info',
  ],

  [
      'text' => 'settings',
      'label' => 'important',
      'label_color' => 'danger',
      'can' => 'manage-settings',
      'icon' => 'fas fa-fw fa-lock',
      'icon_color' => 'blue',
      'submenu' => [
         [
           'text' => 'site',
           'icon' => 'fas fa-circle',
           'route' => [ 'settings', [ 'prefix' => 'site' ] ],
           'active' => ['/settings/site'],
         ],
      ],
  ],

  [
      'text' => 'administrator',
      'icon' => 'fas fa-fw fa-cog',
      'can' => 'manage-administrator',
      'icon_color' => 'pink',
      'label' => 'super',
      'label_color' => 'danger',
      'submenu' => [
         [
           'text' => 'roles',
           'icon' => 'fas fa-circle',
           'route' => 'roles',
           'active' => ['/admin/roles'],
         ],
         [
           'text' => 'permissions',
           'icon' => 'fas fa-circle',
           'route' => 'permissions',
           'active' => ['/admin/permissions'],
         ],
         [
           'text' => 'system-update',
           'icon' => 'fas fa-circle',
           'route' => 'system.update',
           'active' => ['/admin/system-update'],
         ]
      ],
  ],

  [
    'header' => 'members',
    'can'=> ['manage-members', 'manage-tree'],
    'classes' => 'text-info',
  ],
  [
      'text' => 'members',
      'icon' => 'fas fa-users',
      'can' => 'manage-members',
      'icon_color' => 'orange',
      'route' => ['members', [ 'status' => 'active']],
      'active' => ['members'],
      'label' => 'active',
      'label_color' => 'success',
  ],

  ['header'=> 'MENU-END'],

];
