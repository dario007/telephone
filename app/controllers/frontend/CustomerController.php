<?php

namespace App\Controllers\frontend;

use App\Models\Customer;

class CustomerController extends BaseController
{

    public function indexAction($request, $response)
    {

        $customers = Customer::get();

        $data =
            [
                'customers' => $customers
            ];

        return $this->view->render($response, '/frontend/customer/index.twig', $data);
    }




    public function updateAction($arg,$request, $response)
    {

        return $this->view->render($response, '/frontend/customer/update.twig');
    }


    public function deleteAction($arg,$request, $response)
    {

        return $this->view->render($response, '/frontend/customer/delete.twig');
    }
}

?>