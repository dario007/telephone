<?php

namespace App\Controllers\frontend;



class OptionController extends BaseController
{

    public function indexAction($request, $response)
    {

        return $this->view->render($response, '/frontend/option/index.twig');
    }


}

?>