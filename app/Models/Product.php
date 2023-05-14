<?php

namespace App\Models;

use CodeIgniter\Model;

class Product extends Model
{
    protected $table            = 'products';
    protected $allowedFields    = ['id', 'name', 'price'];
    protected $useTimestamps = true;


   }