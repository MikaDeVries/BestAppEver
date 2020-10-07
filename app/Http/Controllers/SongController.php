<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $songs = Song::all();
        $users = DB::table('songs')->get();

        return view('songs.index', ['songs' => $songs]);

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('songs.create');
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
            
        ]);

        Song::create([
            'name' => $request->get('name'),
            'thumbnail' => $request->get('thumbnail'),
            'length' => $request->get('length'),
            
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
        return view('songs.show', ['song' => $song]);

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
        return view('songs.edit', ['song' => $song]);

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
