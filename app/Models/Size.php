<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $fillable = [];

    public const SM     = 1;
    public const MD     = 2;
    public const L      = 3;
    public const XL     = 4;

    public const SIZES = [
        1 => 'Small',
        2 => 'Medium',
        3 => 'Large',
        4 => 'Extra Large',
    ];
}
