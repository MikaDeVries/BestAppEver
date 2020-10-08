@extends('layouts.default')
@section('content')
<h1 class="text-center text-6xl">songs</h1>
<a class="rounded-r-lg bg-blue-500 hover:bg-blue-700 p-5"href="songs/create">Create</a>
<div class="container mx-auto pl-20">
    <div class="flex flex-wrap bg-gray-500 bg-opacity-25 rounded justify-center ">
        @foreach ($songs as $song)
            <div class="w-2/5 flex-none p-2 pt-20">
                <div class="max-w-sm rounded overflow-hidden shadow-lg bg-white" >
                    <a href="{{route('songs.show', $song)}}">
                    <img class="w-full object-cover h-48 overflow-hidden" src="{{$song->thumbnail}}" alt="Sunset in the mountains">
                    </a>
                    <div class="px-6 py-4">
                    <div class="font-bold text-black text-xl mb-2 text-center"><a href="{{route('songs.show', $song)}}">{{$song->name}}<a></div>
                    <p class="text-gray-700 text-base flex" >
                        <audio controls class="flex-1 align-center">
                            <source src="{{$song->mp3_link}}" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </p>
                    </div>
                    <div class="px-6 pt-4 pb-2 flex items-center">
                        <span class="flex-1 text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#pop</span>
                        <span class="flex-1 text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#USA</span>
                        <span class="flex-1 text-center inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#rock</span>
                        </div>
                </div>
            </div>
        @endforeach
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
