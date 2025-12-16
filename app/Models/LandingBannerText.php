<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingBannerText extends Model
{
    protected $table = 'landing_banner_text';

    protected $fillable = [
        'text1', 'text2', 'text3',
        'pera1', 'pera2', 'pera3',
    ];
}