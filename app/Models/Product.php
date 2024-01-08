<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'image',
        'category_id',
        'price',
        'size',
        'color',
        'description',
        'gender',
        
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
}
