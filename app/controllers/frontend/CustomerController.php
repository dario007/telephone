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



    public function updateAction($request, $response, $args)
    {
        $customer = Customer::where("id", "=", $args['id'] )->first();

        if($request->isPost())
        {
            $customer->first_name = $request->getParam('first_name');
            $customer->last_name = $request->getParam('last_name');
            $customer->username = $request->getParam('username');
            $customer->email = $request->getParam('email');
            $customer->phone = $request->getParam('phone');
            $customer->redirect = $request->getParam('redirect');
            $customer->right = $request->getParam('right');
            $customer->firm = $request->getParam('firm');

            $customer->save();

            return $this->view->render($response, '/frontend/customer/index.twig');

        }
        else
        {

            $data =
                [
                    'customer' => $customer
                ];

            return $this->view->render($response, '/frontend/customer/update.twig', $data);
        }

    }

    public function deleteAction($request, $response, $args)
    {

        $customer = Customer::where("id", "=", $args['id'] )->first();

        if($request->isPost())
        {

            $customer->delete();

            return $this->view->render($response, '/frontend/customer/index.twig');

        }
        else
        {
            $data =
                [
                    'customer' => $customer
                ];

            return $this->view->render($response, '/frontend/customer/delete.twig', $data);
        }


    }


}

?>