@extends('layouts.app')

@section('content')
<div class="row">
                            <div class="col col-login mx-auto">
                                <div class="text-center mb-6">
                                    <img src="assets\images\brand\logo.png" class="h-8" alt="">
                                </div>
                                <form class="card authentication" method="post" action="{{ route('register') }}">
@csrf
                                    <div class="card-body sign-up-page p-7">
                                        <div class="card-title text-center">{{ __('Register') }}</div>
					<div class="input-icon form-group">
                                            <span class="input-icon-addon search-icon">
                                                <i class="mdi mdi-account"></i>
                                            </span>
                                            <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="{{ __('Name') }}">
                                        </div>
                                    
                                        <div class="input-icon form-group">
                                            <span class="input-icon-addon search-icon">
                                                <i class="zmdi zmdi-email"></i>
                                            </span>
                                            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="{{ __('E-Mail Address') }}">

                             
                                        </div>
   @error('email')
                                    <div class="form-group invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                        <div class="input-icon form-group">
                                            <span class="input-icon-addon search-icon">
                                                <i class="zmdi zmdi-lock"></i>
                                            </span>
                                            <input type="password" class="form-control  @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" id="exampleInputPassword1" placeholder="{{ __('Password') }}">

                                        </div>
<br>
   @error('password')
                                    <div class="form-group invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
<div class="input-icon form-group">
                                            <span class="input-icon-addon search-icon">
                                                <i class="zmdi zmdi-lock"></i>
                                            </span>
                                            <input type="password" class="form-control " name="password_confirmation" required autocomplete="new-password"  id="exampleInputPassword1" value="{{ old('password_confirmation') }}" placeholder="{{ __('Confirm Password') }}">

                                        </div>
   @error('password')
                                    <div class="form-group invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                                        <!--div class="form-group mt-5">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input">
                                                <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
                                            </label>
                                        </div-->
                                        <div class="form-footer">
                                            <button type="submit" class="btn btn-primary btn-block">Create new account</button>
                                        </div>
                                        <div class="text-center text-muted mt-4">
                                        Already have account? <a href="{{Route('login')}}">Sign in</a>
                                    </div>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
@endsection
