
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
  <div class="list-group">
  <a href="{{ url('/') }}" class="list-group-item active">
    Home
  </a>
  <a href="{{ url('/viewproperty') }}" class="list-group-item ">View property</a>
  <a href="{{ url('/registerproperty') }}" class="list-group-item ">Register property</a>
  <a href="{{ url('/heloo') }}" class="list-group-item "> heloo</a>
</div>

        </div>
        <div class="col-md-8">
           <h3>your property</h3>
        </div>
    </div>
</div>
@endsection
