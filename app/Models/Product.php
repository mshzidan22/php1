<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = ['title','details','quantity','img','price','category_id'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
