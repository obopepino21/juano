<?php

namespace App\Controllers;


class ControleLogin extends BaseController
{

    public function login(): string
    {
        return view('login');
    }
}