<?php

namespace App\Controllers;

class AdminAuth extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Login',
        ];

        return view('Auth/Admin/index', $data);
    }
}
