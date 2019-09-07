<?php

namespace App\Controllers\frontend;



class AdminController extends BaseController
{

    public function indexAction($request, $response)
    {

        return $this->view->render($response, '/frontend/admin/index.twig');
    }


}

?>