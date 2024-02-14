<?php

namespace App\Controllers;

use \App\Models\AddAbout;

class About extends BaseController
{
    public function about()
    {
        $homeModel = new AddAbout();
        $data['homes'] = $homeModel->findAll();
        return view('creativehomes/about.html', $data);
    }
}
