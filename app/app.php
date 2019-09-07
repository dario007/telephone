<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/config/connection.php';


$container = $app->getContainer();

$capsule = new\Illuminate\Database\Capsule\Manager;
$capsule ->addConnection($container['settings']['db']);
$capsule->setAsGlobal();
$capsule->bootEloquent();

$container['db'] = function($container) use ($capsule) {
    return $capsule;
};



$container['view'] = function ($container) {
    $view = new\Slim\Views\Twig(__DIR__ . '/views', [
        'cache' => false,
    ]);

    $view->addExtension(new \Slim\Views\TwigExtension(

        $container->router,
        $container->request->getUri()
    ));


    return $view;
};

$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

$container['validator'] = function ($container) {
    return new App\Validation\Validator;
};

require __DIR__ . '/../app/config/routes.php';



?>