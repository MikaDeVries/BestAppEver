@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/delete_modal.css') }}">
<a href="/songs">terug</a>
<h1 class="ml-5">{{$song->name}}</h1>


    <div class="ml-5 mb-3">
        <div class="grid grid-cols-2 gap-4 border">
            <div class=" px-4 py-2">Name:</div>
            <div class=" px-4 py-2">{{$song->name}}</div>
        </div>
        <div class="grid grid-cols-2 gap-4 border">
            <div class=" px-4 py-2">Thumbnail:</div>
            <div class=" px-4 py-2">{{$song->thumbnail}}</div>
        </div>
        <div class="grid grid-cols-2 gap-4 border">
            <div class=" px-4 py-2">Length:</div>
            <div class=" px-4 py-2">{{$song->length}}</div>
        </div>
        
    </div>
    <div>
    <a class="bg-gray-500 hover:bg-gray-700  text-2xl rounded-md p-2" href="{{route('songs.edit', $song)}}" class="">Edit</a> |
    {{-- <a href="" onclick="delete()"></a> --}}
    <button class="bg-red-500 hover:bg-red-700 text-2xl rounded-md p-2" id="myBtn">Delete</button>
    </div>
    <a href="{{route('songs.destroy', $song)}}">delete</a>

    

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
