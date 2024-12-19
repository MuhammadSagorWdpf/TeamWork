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
              <p>New user? <a href="{{route('sign-up')}}">Create an account</a></p>
            </div>
            <form method="POST" action="{{ route('login') }}" class="tm-sign-in-up-form">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username"  class="form-control" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                 class="form-control"
                                required autocomplete="current-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
              
            </form>
          </div>
        </div>
      </section>
    </main>
</div>
@endsection