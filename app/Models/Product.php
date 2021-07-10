<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    public $timestamps = false;

    protected $guarded = ['id', 'product_name','explanation','price','quantity','category','is_del'];
    protected $table = 'product';

}