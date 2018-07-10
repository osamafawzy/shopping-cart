@extends('layouts.master')

@section('content')
<div class="row">
  <div class="col-md-4 col-md-offset-4">
    <h1>Sign In</h1>
    @if(count($errors) > 0 )
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
      <p>{{ $error }}</p>
      @endforeach
    </div>
    @endif
    <form action="{{route('user.signin')}}" method="post">
      <div class="form-group">
        <label for="email">E-Mail</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password">
      </div>
      <!-- <input type="hidden" name="_token" value="{{ Session::token() }}"> -->
      <button type="submit" class="btn btn-primary">Sign In</button>
      {{ csrf_field() }}
      <p>Don't have account? <a href="{{route('user.signup')}}"><strong>Sign up</strong></a></p>
    </form>
  </div>
</div>
@endsection
