<?php

/* FRONTEND */

$app->get('/', App\Controllers\frontend\IndexController::class . ':indexAction')->setName('frontend.index.index');
$app->post('/', App\Controllers\frontend\IndexController::class . ':indexAction')->setName('post.frontend.index.index');

/* ADMIN */


$app->get('/admin', App\Controllers\frontend\AdminController::class . ':indexAction')->setName('frontend.admin.index');
$app->post('/admin', App\Controllers\frontend\AdminController::class . ':indexAction')->setName('post.frontend.admin.index');

$app->get('/admin/update/{id}', App\Controllers\frontend\AdminController::class . ':updateAction')->setName('frontend.admin.update');
$app->post('/admin/update/{id}', App\Controllers\frontend\AdminController::class . ':updateAction')->setName('post.frontend.admin.update');

$app->get('/admin/delete/{id}', App\Controllers\frontend\AdminController::class . ':deleteAction')->setName('frontend.admin.delete');
$app->post('/admin/delete/{id}', App\Controllers\frontend\AdminController::class . ':deleteAction')->setName('post.frontend.admin.delete');

/* USER */

$app->get('/user', App\Controllers\frontend\UserController::class . ':indexAction')->setName('frontend.user.index');
$app->post('/user', App\Controllers\frontend\UserController::class . ':indexAction')->setName('post.frontend.user.index');

$app->get('/user/update/{id}', App\Controllers\frontend\UserController::class . ':updateAction')->setName('frontend.user.update');
$app->post('/user/update/{id}', App\Controllers\frontend\UserController::class . ':updateAction')->setName('post.frontend.user.update');

$app->get('/user/delete/{id}', App\Controllers\frontend\UserController::class . ':deleteAction')->setName('frontend.user.delete');
$app->post('/user/delete/{id}', App\Controllers\frontend\UserController::class . ':deleteAction')->setName('post.frontend.user.delete');


/* CUSTOMER */

$app->get('/customer', App\Controllers\frontend\CustomerController::class . ':indexAction')->setName('frontend.customer.index');
$app->post('/customer', App\Controllers\frontend\CustomerController::class . ':indexAction')->setName('post.frontend.customer.index');

$app->get('/customer/update/{id}', App\Controllers\frontend\CustomerController::class . ':updateAction')->setName('frontend.customer.update');
$app->post('/customer/update/{id}', App\Controllers\frontend\CustomerController::class . ':updateAction')->setName('post.frontend.customer.update');

$app->get('/customer/delete/{id}', App\Controllers\frontend\CustomerController::class . ':deleteAction')->setName('frontend.customer.delete');
$app->post('/customer/delete/{id}', App\Controllers\frontend\CustomerController::class . ':deleteAction')->setName('post.frontend.customer.delete');

/* PHONE COMMAND */

$app->get('/phone_command', App\Controllers\frontend\PhoneCommandController::class . ':indexAction')->setName('frontend.phone_command.index');
$app->post('/phone_command', App\Controllers\frontend\PhoneCommandController::class . ':indexAction')->setName('post.frontend.phone_command.index');


/* CREATE */

/*user*/
$app->get('/create/user', App\Controllers\frontend\CreateController::class . ':userAction')->setName('frontend.create.user');
$app->post('/create/user', App\Controllers\frontend\CreateController::class . ':userAction')->setName('post.frontend.create.user');
/*phone_commands*/
$app->get('/create/phone_command', App\Controllers\frontend\CreateController::class . ':phoneCommandAction')->setName('frontend.create.phone_command');
$app->post('/create/phone_command', App\Controllers\frontend\CreateController::class . ':phoneCommandAction')->setName('post.frontend.create.phone_command');


/* option */

$app->get('/option', App\Controllers\frontend\OptionController::class . ':indexAction')->setName('frontend.option.index');
$app->post('/option', App\Controllers\frontend\OptionController::class . ':indexAction')->setName('post.frontend.option.index');







