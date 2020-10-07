@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/delete_modal.css') }}">
<a href="/playlists">terug</a>
<h1 class="ml-5">{{$playlist->name}}</h1>


    <table class="table-auto ml-5 mb-3">
        <tr>
            <td class="border px-4 py-2">Name:</td>
            <td class="border px-4 py-2">{{$playlist->name}}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">Description:</td>
            <td class="border px-4 py-2">{{$playlist->description}}</td>
        </tr>
        <tr>
            <td class="border px-4 py-2">thumbnail:</td>
            <td class="border px-4 py-2">{{$playlist->thumbnail}}</td>
        </tr>
    </table>
    <div>
        <div>
            @foreach ($playlist->songs as $song)
                <div>{{$song->name}}</div>
            @endforeach
        </div>
    </div>
    <div class="ml-5">
    <a href="{{route('playlists.edit', $playlist)}}" class="">edit</a>
    <a href="playlists/creat" class="">update</a>
    <a href="{{route('playlists.destroy', $playlist)}}">delete</a>
    </div>

 <!-- The Modal -->
 <div id="myModal" class="modal">
    <div class="modal-content text-black">
        <span class="close">&times;</span>
        <div class="mb-5">Weet je het zeker dat je het wilt verwijderen?</div>
        <span class="bg-gray-500 hover:bg-gray-700  text-2xl rounded-md p-2"><a href="">annuleren</a></span> | 
        <form action="{{ route('songs.destroy',$song) }}" class=" max-w-sm" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="text-red">delete</button>
        </form>
    </div>

    </div>
        <script type="text/javascript" src="{{ URL::asset('js/delete_modal.js') }}"></script>
        
@stop
{{-- {{$song->id}} --}}