<?php

namespace App\Controllers;

class AdminDashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard'
        ];

        return view('Admin/Dashboard/index', $data);
    }
}
