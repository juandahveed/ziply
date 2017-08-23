@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

    <h1>Welcome To The Children</h1>
    
    <ul>
        
        @foreach ( $children as $child )
        
        <li> [{{ $child->id }}] {{ $child->first_name }} </li>
        
        @endforeach
        
    </ul>

    <hr>

</div>
@endsection