@extends('layouts.default')
@section('content')
<link rel="stylesheet" href="{{ URL::asset('css/delete_modal.css') }}">
<a href="/songs">terug</a>
<h1 class="ml-5">{{$song->name}}</h1>

<div class=" flex flex-wrap flex-col items-center   bg-gray-500 bg-opacity-25 rounded pt-10 pb-10">
    <div class="flex flex-wrap justify-center center">
        <div class="max-w-lg w-full lg:max-w-full lg:flex ">
            <div class="h-48 lg:h-auto lg:w-56 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('{{$song->thumbnail}}')" title="Woman holding a mug">
            </div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                <div class="mb-8">
                    <div class="text-gray-900 font-bold text-xl mb-2">{{$song->name}}</div>
                    <p class="text-gray-700 text-base">made by "background story"</p>
                </div>
                <div class="flex items-center">
                    <div class="grid grid-flow-col grid-cols-2 grid-rows-2 ">
                        <div class="text-gray-900 leading-none"><span>Artist:</span> "???"</div>
                        <div class="text-gray-900 leading-none"><span>Date:</span> "???"</div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <div class="flex flex-rows">
        <div>1</div>
        <a href="" onclick="delete()">
            button
        </a>
    </div>
</div>   
<a class="bg-gray-500 hover:bg-gray-700  text-2xl rounded-md p-2" href="{{route('songs.edit', $song)}}" class="">Edit</a>
            


    <!-- The Modal -->
    

    </div>
        <script type="text/javascript" src="{{ URL::asset('js/delete_modal.js') }}"></script>
        
@stop
