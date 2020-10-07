@extends('layouts.default')
@section('content')

<h1> This is a create song</h1>

<form action="{{ route('songs.store') }}" method="POST">
    @csrf
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" placeholder="name"></td>
        </tr>
        <tr>
            <td>Thumbnail:</td>
            <td><input type="text" name="thumbnail" placeholder="thumbnail"></td>
        </tr>
        <tr>
            <td>Length:</td>
            <td><input type="text" name="length" placeholder="length"></td>
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

@stop
{{-- {{$song->id}} --}}