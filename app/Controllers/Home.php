<?php

namespace App\Controllers;

use App\Models\UserModel;

class Home extends BaseController
{
    public function index()
    {
        return view('header') .
            view('login') .
            view('footer');
    }

    public function dashboard()
    {
        return view('header') .
            view('dashboard') .
            view('footer');
    }

    public function register()
    {
        return view('header') .
            view('register') .
            view('footer');
    }


    public function create_user()
    {
        $model = model(UserModel::class);

        $model->save([
            'nome'          => $this->request->getPost('name'),
            'email'         => $this->request->getPost('email'),
            'instituicao'   => $this->request->getPost('instituicao'),
            'senha'         => $this->request->getPost('password')
        ]);

        return redirect()->to('/');
        
    }

}