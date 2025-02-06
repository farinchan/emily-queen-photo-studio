<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function album()
    {
        return $this->belongsTo(GalleryAlbum::class);
    }
}
