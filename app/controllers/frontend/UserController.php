<?php

namespace App\Controllers\frontend;

use App\Models\User;

class UserController extends BaseController
{

    public function indexAction($request, $response)
    {

        $users = User::get();

        $data =
            [
                'users' => $users
            ];

        return $this->view->render($response, '/frontend/user/index.twig', $data);
    }



    public function updateAction($request, $response, $args)
    {
        $user = User::where("id", "=", $args['id'] )->first();

        if($request->isPost())
        {
            $user->first_name = $request->getParam('first_name');
            $user->last_name = $request->getParam('last_name');
            $user->username = $request->getParam('username');
            $user->email = $request->getParam('email');
            $user->phone = $request->getParam('phone');
            $user->redirect = $request->getParam('redirect');
            $user->right = $request->getParam('right');
            $user->firm = $request->getParam('firm');

            $user->save();

            return $this->view->render($response, '/frontend/user/index.twig');

        }
        else
        {

            $data =
                [
                    'user' => $user
                ];

            return $this->view->render($response, '/frontend/user/update.twig', $data);
        }

    }

    public function deleteAction($request, $response, $args)
    {

        $user = User::where("id", "=", $args['id'] )->first();

        if($request->isPost())
        {

            $user->delete();

            return $this->view->render($response, '/frontend/user/index.twig');

        }
        else
        {
            $data =
                [
                    'user' => $user
                ];

            return $this->view->render($response, '/frontend/user/delete.twig', $data);
        }


    }


}

?>