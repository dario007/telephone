<?php

namespace App\Controllers\frontend;

use App\Models\Admin;



class AdminController extends BaseController
{

    public function indexAction($request, $response)
    {

        $admins = Admin::get();

        $data =
            [
                'admins' => $admins
            ];

        return $this->view->render($response, '/frontend/admin/index.twig', $data);
    }





    public function updateAction($request, $response, $args)
    {
        $admin = Admin::where("id", "=", $args['id'] )->first();

        if($request->isPost())
        {
            $admin->first_name = $request->getParam('first_name');
            $admin->last_name = $request->getParam('last_name');
            $admin->username = $request->getParam('username');
            $admin->email = $request->getParam('email');
            $admin->phone = $request->getParam('phone');
            $admin->redirect = $request->getParam('redirect');
            $admin->right = $request->getParam('right');
            $admin->firm = $request->getParam('firm');

            $admin->save();

            return $this->view->render($response, '/frontend/admin/index.twig');

        }
        else
        {

            $data =
                [
                    'admin' => $admin
                ];

            return $this->view->render($response, '/frontend/admin/update.twig', $data);
        }

    }

    public function deleteAction($request, $response, $args)
    {

        $admin = Admin::where("id", "=", $args['id'] )->first();

        if($request->isPost())
        {

            $admin->delete();

            return $this->view->render($response, '/frontend/admin/index.twig');

        }
        else
        {
            $data =
                [
                    'admin' => $admin
                ];

            return $this->view->render($response, '/frontend/admin/delete.twig', $data);
        }


    }


}

?>