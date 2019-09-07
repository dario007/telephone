<?php

$app = new \Slim\App([

    'settings' => [

        'displayErrorDetails' => true,

        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'my_shop',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ] ,
        'app' => [
            'base_url' => '/nbsp_tel/',
            'img_url' => '/nbsp_tel/public/img/'
        ]
    ],
]);
