<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JournalViewer extends Model
{
    protected $fillable = [
        'journal_id',
        'user_id',
        'ip',
        'country',
        'city',
        'region',
        'postal_code',
        'latitude',
        'longitude',
        'timezone',
        'user_agent',
        'platform',
        'browser',
        'device',
    ];

    public function journal()
    {
        return $this->belongsTo(Journal::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
