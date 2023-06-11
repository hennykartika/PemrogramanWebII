<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Home extends BaseController
{
    public function index()
    {
        $loggedIn = false;
        $loginError = false;

        if (session('isLoggedIn')) {
            $loggedIn = true;
        }
        if (session('loginError')) {
            $loginError = true;
        }

        $data = [
            'loggedIn' => $loggedIn,
            'loginError' => $loginError,
        ];

        $bukuModel = new BukuModel();
        $data['buku'] = $bukuModel->findAll();

        return view('pages/index', $data);
    }
}
