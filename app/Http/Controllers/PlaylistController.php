<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Inertia;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlists = Playlist::all();
        $songs = Song::all();
        $playlists->load('songs');
        

        // return view('playlists.index', ['playlists' => $playlists]);
        
        return Inertia\Inertia::render('Playlists/Index', [
            'playlists' => $playlists , 'songs' => $songs  
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia\Inertia::render('Playlists/Create',);
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
            'description' => 'required',
            'thumbnail' => 'required',
            'user_id' => 'required',
        ]);

        Playlist::create([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'thumbnail' => $request->get('thumbnail'),
            'user_id' => $request->get('user_id'),
        ]);
        return redirect()->route('playlists.index')
            ->with('success', 'Playlist created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function show(Playlist $playlist)
    {   
        $playlist->load('songs');

        return Inertia\Inertia::render('Playlists/Show', [
            'playlist' => $playlist
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function edit(Playlist $playlist)
    {
        return Inertia\Inertia::render('Playlists/Edit', [
            'playlist' => $playlist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playlist $playlist)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'thumbnail' => 'required',
            'user_id' => 'required'
            
        ]);
        // $playlists->update($request->all());
        $playlist->update([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'thumbnail' => $request->get('thumbnail'),
            'user_id' => $request->get('user_id'),
        ]);

        return redirect()->route('playlists.index')
            ->with('success', 'playlists updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Playlist  $playlist
     * @return \Illuminate\Http\Response 
     */
    public function destroy(Playlist $playlist)
    {
        $playlist->delete();
           
        return redirect()->route('playlists.index')
            ->with('success', 'songs deleted successfully');
    }
}
