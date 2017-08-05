@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

    <h1>Welcome To The Check-In</h1>

    <hr>
    
    @if ( isset($child) )

        {{ $child }}
        
    @endif
    
    <h3>Search for a child</h3>
    
    <form method="GET" action="/check-in/{child}">
                    
                    {{ csrf_field() }}
                    
                    <div class="form-group">
                        
                        <label for="child">Child Name:</label>
                        
                        <input type="text" class="form-control" id="child" name="child">
                        
                    </div>
                    
                    
                    <div class="form-group">
                        
                         <button type="submit" class="btn btn-default">Search</button>
                         
                    </div>
                    
                </form>

                @include('layouts.formerror')

</div>
@endsection