<?php

namespace App\Controllers\frontend;
use App\Models\Admin;
use App\Models\User;
use App\Models\Customer;


class CreateController extends BaseController
{

    public function userAction($request, $response)
    {

        if($request->isPost())
        {

            $right = $request->getParam('right');

            if($right == 1)
            {
                $role = new User();
                $role_name = 'mittarbeiter';
            }

            if($right == 2)
            {
                $role = new Customer();
                $role_name = 'kunde';
            }

            if($right == 3)
            {
                $role = new Admin();
                $role_name = 'administrator';
            }


            $role->first_name = $request->getParam('first_name');
            $role->last_name = $request->getParam('last_name');
            $role->username = $request->getParam('username');
            $role->email = $request->getParam('email');
            $role->phone = $request->getParam('phone');
            $role->redirect = $request->getParam('redirect');
            $role->right = $request->getParam('right');
            $role->firm = $request->getParam('firm');

            $role->save();

            return $this->view->render($response, '/frontend/create/user.twig');

        }
        else
        {
            return $this->view->render($response, '/frontend/create/user.twig');
        }



    }


}

?>