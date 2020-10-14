<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'thumbnail',
        'user_id',
        
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function songs()
    {
        return $this->belongsToMany('App\Models\Song');
    }


    public function containsSong($song)
    {
        return $this->songs()->where('song_id', $song->id)->exists();
    }
}
