<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
    'name', 
    'last_name',
    'email', 
    'phone',
    'subject', 
    'message', 
    'ip', 
    'status'
    ];
}
