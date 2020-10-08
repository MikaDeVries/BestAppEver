<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia;

use App\Models\Song;

class DashboardController extends Controller
{
    public function index(){

        $songs = Song::all();

        return Inertia\Inertia::render('Dashboard', [
            'songs' => $songs
        ]);
    }
}
