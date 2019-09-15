<?php

$app = new \Slim\App([

    'settings' => [

        'displayErrorDetails' => true,

        'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'telephone',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix' => '',
        ] ,
        'app' => [
            'base_url' => '/telephone/',
            'img_url' => '/telephone/public/img/'
        ]
    ],
]);

