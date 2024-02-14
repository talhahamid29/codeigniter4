<?php

namespace App\Controllers;

class Contact extends BaseController
{
    public function contactus(): string
    {
        return view('creativehomes/contact.html');
    }
}
