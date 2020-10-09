<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'thumbnail',
        'length',
        'mp3_link'
        
    ];

    protected $appends = ['permalink'];
    public function playlists()
    {
        return $this->belongsToMany('App\Models\Playlist');
    }

    public function getPermalinkAttribute()
    {
        return route('songs.show', $this);
    }
}
