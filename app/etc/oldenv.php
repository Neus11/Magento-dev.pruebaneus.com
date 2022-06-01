<?php
return [
    'backend' => [
        'frontName' => 'admin_bxu3a7'
    ],
    'crypt' => [
        'key' => '3be87d16a740f0b04a1b14b5e4c7b7c4'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'admin_pruebaNeus2',
                'username' => 'admin_pruebaNeus',
                'password' => 'azsxdcfv',
                'active' => '1',
                'driver_options' => [

                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'default',
    'session' => [
        'save' => 'files'
    ],
    'cache' => [
        'frontend' => [
            'default' => [
                'id_prefix' => '1dd_'
            ],
            'page_cache' => [
                'id_prefix' => '1dd_'
            ]
        ]
    ],
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ]
];
