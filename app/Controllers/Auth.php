<?php

namespace App\Controllers;

use App\Models\modelLogin;
use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function inputRegister(){
        $validation = \Config\Services::validation();
        $validation->setRules([
            'name' => 'required',
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required',
            'confirm-password' => 'required|matches[password]'
        ]);

        if(!$validation->withRequest($this->request)->run()){
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];

        $registerModel = new UserModel();
        $registerModel->insertRegister($data);

        return redirect()->to('/')->with('message', 'Data Berhasil diinput');
    }
    public function register()
    {
        return view('auth/register');
    }
    
    public function login_real(){
        $validation = \Config\Services::validation();
    $validation->setRules([
        'email' => 'required|valid_email',
        'password' => 'required',
    ]);

    if ($this->request->getMethod() == 'POST') {
        if (!$validation->withRequest($this->request)->run()) {
            echo 'Halo';
        } else {
            $email = $this->request->getPost('email', FILTER_SANITIZE_EMAIL);
            $password = $this->request->getPost('password', FILTER_SANITIZE_STRING);

            if (is_string($email) && is_string($password)) {
                $user = new modelLogin();
                $data = $user->getUserByEmail($email);
                if ($password == $data['password']) {
                    $session = session();
                    $session->set([
                        'username' => $data['name'],
                        'email' => $data['email'],
                        'isLoggedIn' => true
                    ]);

                    // Redirect ke dashboard setelah login berhasil
                    return redirect()->to('/dashboard');
                } else {
                    echo 'halo';
                }
            } else {
                echo 'Halo';
            }
        }
    }
    echo 'Haloo';
    }
    public function login()
{
    

    return view('auth/login');
}



    public function logout()
    {
        $session = session();
        $session->destroy();

        return redirect()->to('auth/login');
    }
}
