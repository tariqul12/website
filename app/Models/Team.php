<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['title', 'sub_title', 'name', 'designation','image', 'facebook', 'linkdin', 'twiter', 'description'];
}
