<?php

namespace App\Controllers;

use \App\Models\AddHome;

class Home extends BaseController
{
    public function index(): string
    {
        $homeModel = new AddHome();
        $data['homes'] = $homeModel->findAll();
        return view('creativehomes/index.html', $data);
    }
}
