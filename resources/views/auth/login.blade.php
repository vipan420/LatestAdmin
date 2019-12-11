

@extends('layouts.app')
@section('content')
<div class="row authentication">
   <div class="col col-login mx-auto">
      <div class="text-center mb-6">
         <img src="assets\images\brand\logo.png" class="h-8" alt="">
      </div>
      <form class="card" method="POST" action="{{ route('login') }}">
         @csrf
         <div class="card-body p-6 ">
            <div class="card-title text-center">Login to your Account</div>
            <div class="input-icon form-group wrap-input">
               <span class="input-icon-addon search-icon">
               <i class="mdi mdi-account"></i>
               </span>
               <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ __('E-Mail Address') }}">
               @error('email')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
            </div>
            <div class="input-icon form-group wrap-input">
               <span class="input-icon-addon search-icon">
               <i class="zmdi zmdi-lock"></i>
               </span>
               <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="{{ __('Password') }}">
               @error('password')
               <span class="invalid-feedback" role="alert">
               <strong>{{ $message }}</strong>
               </span>
               @enderror
               <label class="form-label">
               @if (Route::has('password.request'))
               <a class="float-right small" href="{{ route('password.request') }}">
               {{ __('Forgot Your Password?') }}
               </a>
               @endif
               </label>
            </div>
            <div class="form-group mt-5">
               <label class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input"  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
               <span class="custom-control-label">{{ __('Remember Me') }}</span>
               </label>
            </div>
            <div class="form-footer">
               <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
            </div>
            @if (Route::has('register'))
            <div class="text-center text-muted mt-3">
               Don't have account yet?<a href="{{ route('register') }}">Register</a>
            </div>
            @endif
            <!--div class="flex-c-m text-center mt-5">
               <a href="#" class="login100-social-item bg1">
               	<i class="fa fa-facebook"></i>
               </a>
               
               <a href="#" class="login100-social-item bg2">
               	<i class="fa fa-twitter"></i>
               </a>
               
               <a href="#" class="login100-social-item bg3">
               	<i class="fa fa-google"></i>
               </a>
               </div-->
         </div>
      </form>
   </div>
</div>

@endsection


