@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

    <h1>Welcome To The Dashboard</h1>

    <hr>
    
    @if ( isset($userObj) )

        {{-- $userObj --}}

        <!--<h3>{{ $userObj->first_name }}, You have logged in successfully!</h3>-->

    @else

        <h3>Welcome Back!!</h3>

    @endif

</div>
@endsection