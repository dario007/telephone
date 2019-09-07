<?php

namespace App\Controllers\frontend;



class CreateUserController extends BaseController
{

    public function indexAction($request, $response)
    {

        return $this->view->render($response, '/frontend/create_user/index.twig');
    }


}

?>