<?php

namespace App\Controllers;

class AdminContact extends BaseController
{
    public function contactus(): string
    {
        return view('AdminLTE/contact.html');
    }
    public function all_contactus(): string
    {
        return view('AdminLTE/all_contact.html');
    }
}
