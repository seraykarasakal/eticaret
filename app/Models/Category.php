<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
      'image',
      'name',
    ];


    public function products(){
        return $this->hasMany('App\Models\Product');
    }

    public function categoryProductCount()
    {
        return $this->products()->count();
    }
}
