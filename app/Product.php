<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filltable = ['imagePath', 'title', 'description', 'price'];
}
