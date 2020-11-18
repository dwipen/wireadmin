<?php

return [
    'roles' => [ 'super-admin', 'admin', 'member' ],
    'permissions' => [
        'manage-administrator' =>[ 'super-admin', 'admin'],
        'manage-settings'  => ['super-admin', 'admin'],
        'impersonate-user'  => ['super-admin', 'admin'],
        'manage-tree'  => ['super-admin', 'admin'],
        'manage-epins'  => ['super-admin', 'admin'],
        'manage-roles'  => ['super-admin', 'admin'],
        'manage-permissions'  => ['super-admin', 'admin'],
        'manage-ranks'  => ['super-admin', 'admin'],
        'manage-rank-achievers'  => ['super-admin', 'admin'],
        'manage-profiles'  => ['super-admin', 'admin'],
        'manage-earnings'  => ['super-admin', 'admin'],
        'manage-withdraws'  => ['super-admin', 'admin'],
        'manage-wallets'  => ['super-admin', 'admin'],
        'manage-products'  => ['super-admin', 'admin'],
        'manage-members'  => ['super-admin', 'admin'],
        'view-profile'  => ['super-admin', 'member'],
        'view-epins'  => ['super-admin', 'member'],
        'view-earnings'  => ['super-admin', 'member'],
        'view-withdraws'  => ['super-admin', 'member'],
        'view-wallets'  => ['super-admin', 'member'],
        'manage-investments'  => ['super-admin', 'admin'],
    ],
];
