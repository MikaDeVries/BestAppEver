<?php

namespace App\Http\Controllers;

use App\Models\Song;
use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


use Inertia;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Song $song) 
    {
        $songs = Song::all();
        $playlists = Playlist::all();
        $songs->load('playlists');
        // return view('songs.index', ['songs' => $songs]);

        return Inertia\Inertia::render('Songs/Index', [
            'songs' => $songs  , 'playlists' => $playlists
        ]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia\Inertia::render('Songs/Create',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'thumbnail' => 'required',
            'length' => 'required',
            'mp3_link' => 'required',
            
        ]);

        Song::create([
            'name' => $request->get('name'),
            'thumbnail' => $request->get('thumbnail'),
            'length' => $request->get('length'),
            'mp3_link' => $request->get('mp3_link'),
            
        ]);

        return redirect()->route('songs.index')
            ->with('success', 'Song created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function show(Song $song)
    {
        $song->load('playlists');
        // return view('songs.show', ['song' => $song]);
        return Inertia\Inertia::render('Songs/Show', [
            'song' => $song
        ]);

        // return view('songs.show', compact('songs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function edit(Song $song)
    {
        return Inertia\Inertia::render('Songs/Edit', [
            'song' => $song
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Song $song)
    {   
        $request->validate([
            'name' => 'required',
            'thumbnail' => 'required',
            'length' => 'required',
            
        ]);
         

        $song->update([
            'name' => $request->get('name'),
            'thumbnail' => $request->get('thumbnail'),
            'length' => $request->get('length'),
        ]);
    
        return redirect()->route('songs.index')
            ->with('success', 'songs updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Song  $song
     * @return \Illuminate\Http\Response
     */
    public function destroy(Song $song)
    {   
        $song->delete();
           
        return redirect()->route('songs.index')
            ->with('success', 'songs deleted successfully');
    }
}
