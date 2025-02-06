<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'content',
        'thumbnail',
        'category_id',
        'user_id',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function category()
    {
        return $this->belongsTo(JournalCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function viewers()
    {
        return $this->hasMany(JournalViewer::class);
    }

    public function comments()
    {
        return $this->hasMany(JournalComment::class);
    }
}
