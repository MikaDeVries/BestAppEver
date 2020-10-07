@extends('layouts.default')
@section('content')
<h1 class="pl-20">songs<h1>
<a href="songs/create">Create</a>
<div class="container mx-auto pl-20">
<div class="">
    <thead>
      <tr>
        <th class="px-4 py-2">Name</th>
        <th class="px-4 py-2">thumbnail</th>
        <th class="px-4 py-2">Length</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($songs as $song)
            <tr>
            <td class="border px-4 py-2"><a href="{{route('songs.show', $song)}}">{{$song->name}}<a></td>
                <td class="border px-4 py-2"><img src="{{$song->thumbnail}}"  class="object-fit w-32 h-32"/></td>
                <td class="border px-4 py-2">{{$song->length}}</td>
                <div class="border px-4 py-2">
                    <audio controls>
                        <source src="{{$song->mp3_link}} type="audio/mpeg">
                    Your browser does not support the audio element.
                    </audio>
                </div> 
            </tr>
        @endforeach
    </tbody>
</div>
  
  
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
