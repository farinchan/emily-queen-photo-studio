<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GalleryAlbum extends Model
{
    protected $table = 'gallery_albums';
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
