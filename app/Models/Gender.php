<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    protected $fillable = [];

    public const MAN        = 1;
    public const WOMAN      = 2;
    public const KIDS       = 3;

    public const GENDERS = [
        1 => 'Erkek',
        2 => 'Kadin',
        3 => 'Cocuk',
    ];
}
