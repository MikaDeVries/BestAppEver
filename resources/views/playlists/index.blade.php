@extends('layouts.default')
@section('content')
<h1 class="pl-20">Playlist<h1>
<a href="playlists/create">Create</a>
<div class="container mx-auto pl-20">
<table class="table-auto">
    <thead>
      <tr>
        <th class="px-4 py-2">Name</th>
        <th class="px-4 py-2">description</th>
        <th class="px-4 py-2">thumbnail</th>
        <th class="px-4 py-2">user</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($playlists as $playlist)
            <tr>
            <td class="border px-4 py-2"><a href="{{route('playlists.show', $playlist)}}">{{$playlist->name}}<a></td>
                <td class="border px-4 py-2">{{$playlist->description}}</td>
                <td class="border px-4 py-2">{{$playlist->thumbnail}}</td>
                <td class="border px-4 py-2">{{$playlist->user->name}}</td>
            </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
@if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop
