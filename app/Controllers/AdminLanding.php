<?php

namespace App\Controllers;

use App\Models\DisplayModel;
use App\Models\LeadModel;
use App\Models\TentangModel;

class AdminLanding extends BaseController
{
    public function __construct()
    {
        $this->display = new DisplayModel();
        $this->lead = new LeadModel();
        $this->tentang = new TentangModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Edit Landing Page',
            'display' => $this->display->first(),
            'lead' => $this->lead->first(),
            'tentang' => $this->tentang->first(),
        ];

        return view('Admin/LandingPage/index', $data);
    }
}
