<?php

namespace App\Controllers;

class AdminIndex extends BaseController
{
    public function index(): string
    {
        return view('AdminLTE/index.html');
    }
    public function index2(): string
    {
        return view('AdminLTE/index2.html');
    }
}
