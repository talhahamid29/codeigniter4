<?php

namespace App\Models;

use CodeIgniter\Model;

class AddHome extends Model
{
    protected $table = 'home';
    protected $primaryKey = 'id';
    protected $allowedFields = ['slider_img_1', 'text_1', 'slider_img_2', 'text_2', 'slider_img_3', 'text_3', 'title', 'description', 'img4', 'img5'];
}