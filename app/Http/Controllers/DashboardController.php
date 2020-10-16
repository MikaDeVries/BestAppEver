<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia;

use App\Models\Song;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(){

        $songs = Song::all();
        $users = User::all();

        return Inertia\Inertia::render('Dashboard', [
            'songs' => $songs , 'users' => $users
        ]);
    }
}
