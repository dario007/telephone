<?php

namespace App\Controllers\frontend;



class UserController extends BaseController
{

    public function indexAction($request, $response)
    {

        return $this->view->render($response, '/frontend/user/index.twig');
    }


    public function createAction($request, $response)
    {

        return $this->view->render($response, '/frontend/user/create.twig');
    }


    public function updateAction($arg,$request, $response)
    {

        return $this->view->render($response, '/frontend/user/update.twig');
    }


    public function deleteAction($arg,$request, $response)
    {

        return $this->view->render($response, '/frontend/user/update.twig');
    }
}

?>