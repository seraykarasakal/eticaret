<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = [];

    public const RED        = 1;
    public const BLUE       = 2;
    public const GREEN      = 3;
    public const PURPLE     = 4;
    public const YELLOW     = 5;

    public const COLORS = [
        1 => 'Kirmizi',
        2 => 'Mavi',
        3 => 'Yesil',
        4 => 'Mor',
        5 => 'Sari',
    ];
}
