<?php

/* FRONTEND */

$app->get('/', App\Controllers\frontend\IndexController::class . ':indexAction')->setName('frontend.index.index');
$app->post('/', App\Controllers\frontend\IndexController::class . ':indexAction')->setName('post.frontend.index.index');

/* admin */


$app->get('/admin', App\Controllers\frontend\AdminController::class . ':indexAction')->setName('frontend.admin.index');
$app->post('/admin', App\Controllers\frontend\AdminController::class . ':indexAction')->setName('post.frontend.admin.index');

/* user */

$app->get('/user', App\Controllers\frontend\UserController::class . ':indexAction')->setName('frontend.user.index');
$app->post('/user', App\Controllers\frontend\UserController::class . ':indexAction')->setName('post.frontend.user.index');


/* create user */

$app->get('/create_user', App\Controllers\frontend\CreateUserController::class . ':indexAction')->setName('frontend.create_user.index');
$app->post('/create_user', App\Controllers\frontend\CreateUserController::class . ':indexAction')->setName('post.frontend.create_user.index');


/* option */

$app->get('/option', App\Controllers\frontend\OptionController::class . ':indexAction')->setName('frontend.option.index');
$app->post('/option', App\Controllers\frontend\OptionController::class . ':indexAction')->setName('post.frontend.option.index');







