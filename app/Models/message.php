<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class message extends Model
{
    protected $table = 'messages';
    protected $fillable = ['name', 'email', 'phone', 'subject', 'message'];
}
