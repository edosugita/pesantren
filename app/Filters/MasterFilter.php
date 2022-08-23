<?php

namespace App\Filters;

use App\Models\AdminModel;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class MasterFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if (session()->get('role') !== 'Master') {
            return redirect()->to('/admin/dashboard')->with('fail', 'Anda Bukan Master Admin!');
        }

        $admin = new AdminModel();

        $check = $admin->where('id', session()->get('id'))->first();
        // dd($check);
        if (session()->get('role') !== $check['role']) {
            if (session()->has('loggedUser')) {
                session()->remove(['loggedUser', 'id', 'nama', 'username', 'role']);
                return redirect()->to('/admin/login?access=out')->with('fail', 'Role Telah Berubah');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
