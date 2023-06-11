<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsersModel;

class UsersController extends BaseController
{
    public function login()
    {
        $data = [];

        $data = [
            "loggedIn" => false,
            "loginError" => false,
        ];
        if ($this->request->getMethod() === 'post') {
            $validationRules = [
                'username' => 'required',
                'password' => 'required'
            ];

            $validationMessages = [
                'username' => [
                    'required' => 'Username harus diisi'
                ],
                'password' => [
                    'required' => 'Password harus diisi'
                ]
            ];

            if ($this->validate($validationRules, $validationMessages)) {
                $username = $this->request->getPost('username');
                $password = $this->request->getPost('password');

                $userModel = new UsersModel();
                $user = $userModel->checkLogin($username, $password);

                if ($user) {
                    $session = session();
                    $session->set([
                        'user_id' => $user->id,
                        'username' => $user->username,
                        'isLoggedIn' => true
                    ]);

                    $data = [
                        "loggedIn" => true,
                        "loginError" => false,
                    ];
                    return redirect()->to(base_url('dashboard'));
                } else {
                    $data['loginError'] = 'Username atau password salah';
                    session()->setFlashdata($data);
                }
            } else {
                $data['validation'] = $this->validator;
            }
        }

        return redirect()->to(base_url('/'));
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
