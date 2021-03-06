@extends('layout.master')

@section('content')
  <div class="sufee-login d-flex align-content-center flex-wrap" style="background-color:whitesmoke; height:100vh; padding-top: 4%" >
    <div class="container">
      <div class="login-content">
        <div class="login-logo">
          <a href="index.html">
            <!-- <img class="align-content" src="images/logo.png" alt=""> -->
          </a>
        </div>
        <div class="login-form">
          <form>
            <div class="form-group">
              <label>User Name</label>
              <input type="email" class="form-control" placeholder="User Name">
            </div>
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password">
            </div>

            <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
            <!-- <div class="register-link m-t-15 text-center">
              <p>Already have account ? <a href="#"> Sign in</a></p>
            </div> -->
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection