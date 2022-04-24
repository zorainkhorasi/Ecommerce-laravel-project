@extends('master')
@section('content')
<div class="container custom-login" >
    <div class="row">
        <div class="col-sm-4">
        
        <form action="user" method="POST">
  <fieldset>
    <legend>Login Form</legend>
  
    <div class="form-group">
        @csrf
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
     
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
  </fieldset>
        <br>
    <button type="submit" class="btn btn-primary">Login</button>
</form>

        </div>
    </div>

</div>

@endsection