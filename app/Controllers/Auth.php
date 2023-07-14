<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $model = model(UserModel::class);

        $user = $model->where([
            'email' => $email,
            'senha' => $password
        ])->first();

        // var_dump($user); exit();

        if (isset($user)) {
            
                $session = session();

                $session_data = [
                    'user_id'       => $user['id'],
                    'user_name'     => $user['nome'],
                    'user_email'    => $user['email'],
                    'logged_in'     => TRUE
                ];

                $session->set($session_data);

                return redirect()->to('/dashboard');
        } else {
            return redirect()->to('/');
        }
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to('/');
    }

    

}