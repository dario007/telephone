<?php

namespace App\Controllers\frontend;



class IndexController extends BaseController
{

    public function indexAction($request, $response)
    {

        return $this->view->render($response, '/frontend/index/index.twig');
    }
}

?>