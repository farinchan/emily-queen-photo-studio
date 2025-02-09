<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SettingWebsite extends Model
{
    protected $table = 'setting_websites';
    protected $fillable = [
        'name',
        'favicon',
        'logo_small',
        'logo_mid',
        'logo_large',
        'email',
        'phone',
        'address',
        'latitude',
        'longitude',
        'instagram',
        'twitter',
        'tiktok',
        'linkedin',
        'about',
    ];

}
