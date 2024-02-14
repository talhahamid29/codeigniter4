<?php

namespace App\Controllers;

class Apartments extends BaseController
{
    public function premium_apartment(): string
    {
        return view('creativehomes/apartment.html');
    }
    public function standard_apartment(): string
    {
        return view('creativehomes/standard_apartment.html');
    }
    public function studio_apartment(): string
    {
        return view('creativehomes/studio_apartment.html');
    }
}
