@extends('master')
@section('content')
<div class="container custom-login" >
    <div class="row">
        <div class="col-sm-4">
        <form> 
        <form>
  <fieldset>
    <legend>Legend</legend>
  
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
  </fieldset>
        </form>
        </fieldset>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>


        </div>
    </div>

</div>

@endsection