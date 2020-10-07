@extends('layouts.default')
@section('content')

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
    <a href="" class="text-red">delete</a>
    </div>
@stop
{{-- {{$song->id}} --}}