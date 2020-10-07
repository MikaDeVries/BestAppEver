@extends('layouts.default')
@section('content')

<h1 class="flex pl-5 mb-5 items-center bg-gray-200 h-20">{{$song->name}}</h1>

<form action="{{ route('songs.update',$song) }}" class=" max-w-sm" method="POST">
  @method('PUT')
  @csrf
  <table>
      <tr>
          <td>Name:</td>
          <td><input type="text" name="name" placeholder="{{$song->name}}"></td>
      </tr>
      <tr>
          <td>Thumbnail:</td>
          <td><input type="text" name="thumbnail" placeholder="{{$song->thumbnail}}"></td>
      </tr>
      <tr>
          <td>Length:</td>
          <td><input type="text" name="length" placeholder="{{$song->length}}"></td>
      </tr>
      <tr>
          <td><button type="submit">Submit</button></td>
      </tr>
  </table>
  </form>


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
@stop]
  {{-- {{$song->name}}
  {{$song->thumbnail}}
  {{$song->length}} --}}