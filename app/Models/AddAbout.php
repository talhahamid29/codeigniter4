<?php

namespace App\Models;

use CodeIgniter\Model;

class AddAbout extends Model
{
    protected $table = 'about';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'img4', 'img5'];
}