<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalComment extends Model
{
    protected $fillable = [
        'name',
        'email',
        'comment',
        'status',
        'parent_id',
        'journal_id',
        'user_id',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function parent()
    {
        return $this->belongsTo(JournalComment::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(JournalComment::class, 'parent_id');
    }
}
