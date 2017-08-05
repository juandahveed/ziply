@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

    <h1>Welcome To The Services</h1>
    
    <ul>
        
        @foreach ( $services as $service )
        
        <li> {{ $service->day_of_week }} </li>
        
        @endforeach
        
    </ul>

    <hr>

</div>
@endsection