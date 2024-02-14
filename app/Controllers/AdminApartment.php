<?php

namespace App\Controllers;

class AdminApartment extends BaseController
{
    public function premiumapartment(): string
    {
        return view('AdminLTE/premium_apartment.html');
    }
    public function standardapartment(): string
    {
        return view('AdminLTE/standard_apartment.html');
    }
    public function studioapartment(): string
    {
        return view('AdminLTE/studio_apartment.html');
    }

    public function all_premiumapartment(): string
    {
        return view('AdminLTE/all_premium_apartment.html');
    }
    public function all_standardapartment(): string
    {
        return view('AdminLTE/all_standard_apartment.html');
    }
    public function all_studioapartment(): string
    {
        return view('AdminLTE/all_studio_apartment.html');
    }
}
