@extends('master')
@section('content')

<div class="container custom-login">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <h1>Register Here</h1>
            <form action="register" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" required class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                  </div>
                <div class="form-group">
                  <label for="mail">Email address</label>
                  <input type="email" required class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" required class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>

    </div>
</div>

@endsection
