<?php
$config = [
    'home' => [
        'decorator' => [
//            'App\decorator\Login',
//            'App\decorator\Template',
            'App\decorator\Json'
        ]
    ],
    'default' => 'hello world'
];

return $config;