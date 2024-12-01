<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [ 'title', 'sub_title', 'image', 'broadband _customer', 'service_award', 'call_centre', 'helping_customer', 'future_title', 'future_sub_title', 'future_image', 'customer_satisfaction', 'customer_satisfaction_image', 'trustpilot_image_title', 'trustpilot_image_sub_title', 'trustpilot_image'];
}
