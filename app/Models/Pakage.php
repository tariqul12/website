<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pakage extends Model
{
    protected $fillable = ['title', 'sub_title', 'speed', 'up_speed', 'dw_speed', 'price', 'description', 'additional'];
}
