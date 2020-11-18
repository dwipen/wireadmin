<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#61-title
    |
    */

    'title' => 'AdminLTE 3',
    'title_prefix' => '',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#62-favicon
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => true,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#63-logo
    |
    */

    'logo' => '<b>Aio</b>MLM',
    'logo_img' => 'storage/uploads/siteimg/logo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'Aiomlm',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#64-user-menu
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-warning',
    'usermenu_image' => true,
    'usermenu_desc' => true,
    'usermenu_profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#71-layout
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#721-authentication-views-classes
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#722-admin-panel-classes
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-warning elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-warning navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#73-sidebar
    |
    */

    'sidebar_mini' => true,
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => true,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#74-control-sidebar-right-sidebar
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'dark',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#65-urls
    |
    */

    'use_route_url' => false,

    'dashboard_url' => 'dashboard',

    'logout_url' => 'logout',

    'login_url' => 'login',

    'register_url' => 'register',

    'password_reset_url' => 'password/reset',

    'password_email_url' => 'password/email',

    'profile_url' => true,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#92-laravel-mix
    |
    */

    'enabled_laravel_mix' => true,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#8-menu-configuration
    |
    */

    'menu' => [
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
           'can'=>['manage-settings', 'manage-administrator'],
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
               [
                 'text' => 'business',
                 'icon' => 'fas fa-circle',
                 'route' => [ 'settings', [ 'prefix' => 'business' ] ],
                 'active' => ['/settings/business'],
               ],
               [
                 'text' => 'binary',
                 'icon' => 'fas fa-circle',
                 'route' => [ 'settings', [ 'prefix' => 'binary' ] ],
                 'active' => ['/settings/binary'],
                 'conditions' => ['setting' => ['business.leg', '==', '2' ]],
               ],
               [
                 'text' => 'register',
                 'icon' => 'fas fa-circle',
                 'route' => [ 'settings', [ 'prefix' => 'register' ] ],
                 'active' => ['/settings/register'],
               ],
               [
                 'text' => 'marketing',
                 'icon' => 'fas fa-envelope',
                 'route' => [ 'settings', [ 'prefix' => 'marketing' ] ],
                 'active' => ['/settings/marketing'],
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
               ]
            ],
        ],

        [
          'header' => 'products-and-services',
          'can'=>['manage-products', 'manage-epins', 'view-epins'],
          'classes' => 'text-info',
        ],

        [
            'text' => 'products',
            'route'  => 'products',
            'can' => 'manage-products',
            'icon' => 'fas fa-box',
            'icon_color' => 'red'
        ],
        [
            'text' => 'epins',
            'icon' => 'fas fa-key',
            'can' => [ 'manage-epins', 'view-epins' ],
            'icon_color' => 'pink',
            'route' => ['epins', [ 'status' => 'unuse']],
            'active' => ['epins'],
            'label' => 'unuse',
            'label_color' => 'info',
        ],

        [
          'header' => 'members-and-downline',
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
        [
            'text' => 'tree',
            'route'  => 'tree',
            'can' => 'manage-tree',
            'icon' => 'fas fa-tree',
            'icon_color' => 'red',
            'conditions' => ['setting' => ['business.leg', '>', 1 ]],
            'active' => ['tree'],
            'label' => 1001,
            'label_color' => 'warning',
        ],

        [
          'header' => 'earnings-and-payouts',
          'can'=>['manage-earnings', 'view-earnings', 'manage-withdraws', 'view-withdraws', 'manage-wallets', 'view-wallets' ],
          'classes' => 'text-info',
        ],
        [
            'text' => 'earnings',
            'icon' => 'fas fa-money-bill',
            'can' => ['manage-earnings', 'view-earnings'],
            'icon_color' => 'green',
            'route' => ['earnings', [ 'status' => 'pending']],
            'active' => ['earnings'],
            'label' => 'pending',
            'label_color' => 'info',
        ],

        [
            'text' => 'withdraws',
            'icon' => 'fas fa-won-sign',
            'can' => ['manage-withdraws', 'view-withdraws'],
            'icon_color' => 'blue',
            'route' => ['withdraws', [ 'status' => 'pending']],
            'active' => ['withdraws'],
            'label' => 'pending',
            'label_color' => 'info',
        ],

        [
            'text' => ['view-wallets'=>'mywallet', 'manage-wallets'=>'wallets'],
            'icon' => 'fas fa-wallet',
            'can' => ['manage-wallets', 'view-wallets'],
            'icon_color' => 'pink',
            'route' => 'wallets',
            'active' => ['wallets'],
            // 'label' => 'pending',
            // 'label_color' => 'info',
        ],


        ['header'=> 'MENU-END'],



    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#83-custom-menu-filters
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        App\Adminlte\MenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#91-plugins
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For more detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/#93-livewire
    */

    'livewire' => true,
];
