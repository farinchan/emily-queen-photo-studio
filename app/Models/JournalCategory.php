<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function journals()
    {
        return $this->hasMany(Journal::class);
    }
}
