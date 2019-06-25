@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ url('/css/login.css') }}" />
@section('content')
<div class="container">
    <div class="row justify-content-center h-100">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h3>Log In</h3>
                <div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group form-group ">
                    
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="input-group form-group ">
                        
                            <label for="email" class="col-md-4 col-form-label text-md-right"></label> 

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label  align-items-center remember" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <input type="submit" value="Login" class="btn btn-primary float-right login_btn">
                                </input>

                               
                            </div>
                        </div>
                    </form>
                    <div class="card-footer">
				        <div class="d-flex justify-content-center">
				                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
				</div>
                    </div>
				
			

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
