@extends('forntend.layouts.app')
@section('content')
<div>
<main>
      <!-- page title start -->
      <section class="page-top-title">
        <div class="container">
          <div class="page-content-wrapper">
            <h1 class="page-title">Sign In</h1>
          </div>
        </div>
      </section>
      <!-- page title end -->
      <section class="sign-in-section">
        <div class="sign-in-up-content-wrapper">
          <div class="sign-in-up-image-area">
            <img src="./assets/images/sign-in.png" alt srcset />
          </div>
          <div class="sign-in-up-form-area">
            <div class="form-header-para align-items-start w-100">
              <h1>Login To Your Account</h1>
              <p>New user? <a href="./account-type.html">Create an account</a></p>
            </div>
            <form class="tm-sign-in-up-form">
              <div class="form-floating">
                <input
                  type="email"
                  class="form-control"
                  id="floatingInput"
                  placeholder="name@example.com" />
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input
                  type="password"
                  class="form-control"
                  id="floatingPassword"
                  placeholder="Password" />
                <label for="floatingPassword">Password</label>
              </div>
              <div class="remember-forgot">
                <label class="custom-checkbox tm-remember-me">
                  <input type="checkbox" name="remember" />
                  <span class="checkmark"></span>
                  Remember Me
                </label>
                <a class="forgot-password" href="forgot-password.html">Forgot password?</a>
              </div>
              <button type="submit">Sign In</button>
              <p class="tm-create-btn-link">
                Don't have an account? <a href="{{route('sign-up')}}">Sign Up</a>
              </p>
              
            </form>
          </div>
        </div>
      </section>
    </main>
</div>
@endsection