@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

    <h1>Welcome To The Rooms</h1>
    
    <ul>
        
        @foreach ( $rooms as $room )
        
        <li> {{ $room->name }} </li>
        
        @endforeach
        
    </ul>
    
    <hr>

</div>
@endsection