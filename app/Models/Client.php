<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['name', 'image', 'phone', 'email', 'address'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
