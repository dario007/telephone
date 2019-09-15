<?php
namespace App\Controllers\frontend;

use App\Models\PhoneCommands;


class PhoneCommandController extends BaseController
{

    public function indexAction($request, $response)
    {
        $phone_commands = PhoneCommands::get();

        $data =
            [
                'phone_commands' => $phone_commands
            ];


        return $this->view->render($response, '/frontend/phone_command/index.twig', $data);
    }


}

?>