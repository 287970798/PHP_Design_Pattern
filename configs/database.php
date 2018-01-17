<?php
$config = [
    'master' => [
        'type' => 'MySQL',
        'host' => '127.0.0.1',
        'user' => 'root',
        'password' => 'qing43',
        'dbname' => 'test'
    ],
    'slave' => [
        'slave1' => [
            'type' => 'MySQL',
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => 'qing43',
            'dbname' => 'test'
        ],
        'slave2' => [
            'type' => 'MySQL',
            'host' => '127.0.0.1',
            'user' => 'root',
            'password' => 'qing43',
            'dbname' => 'test'
        ]
    ]
];

return $config;