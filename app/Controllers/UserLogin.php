<?php

namespace App\Controllers;

class UserLogin extends BaseController
{
    public function login()
    {
        return view('login');
    }

    public function inicio() {
        return view('products_list');
    }
}