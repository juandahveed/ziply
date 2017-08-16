@extends('layouts.master')

@section('content')
<div class="col-sm-8 blog-main">

    <h1>Create or Edit a Child</h1>

    <form method="POST" action="/children/create-edit">
          {{ csrf_field() }}
        <div class="form-group row">
            <label for="first_name" class="col-sm-2 col-form-label">First Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="last_name" class="col-sm-2 col-form-label">Last Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="birthday" class="col-sm-2 col-form-label">Birthday</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="birthday" name="birthday" placeholder="Birthday">
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-2 col-form-label">Phone</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
            </div>
        </div>
        <div class="form-group row">
            <label for="city" class="col-sm-2 col-form-label">City</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="city" name="city" placeholder="City">
            </div>
        </div>
        <div class="form-group row">
            <label for="state" class="col-sm-2 col-form-label">State</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="state" name="state" placeholder="State">
            </div>
        </div>
        <div class="form-group row">
            <label for="zip" class="col-sm-2 col-form-label">Zip</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </div>
    </form>

    <ul>
        @if ( isset($children) )
        @foreach ( $children as $child )

        <li> {{ $child->first_name }} </li>

        @endforeach
        @endif
    </ul>

    <hr>

</div>
@endsection