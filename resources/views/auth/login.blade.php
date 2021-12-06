@extends('layouts.sidenav')

@section('innercontent')
<main>
<div id="primary" class="height-full">
    <div class="container-register">
        <div class="col-xl-12 mx-lg-auto p-t-b-100">
            <div class="text-center s-14 l-s-2 my-2">
                <a class="my-2" href="#">

                    <h2 class="custom-head">Login Now</h2>

                </a>
            </div>
            <div class="row" id="column-custom">
                <div class="col-xl-9 mx-md-auto" >
                    <div class="mt-5">
                        <div class="row grid">
                            <div class="col-md-7 card p-5" id="form-design">
                               
                                <form method="POST" action="{{ route('login') }}" class="form-material">
                                @csrf
                                    <!-- Input -->
                                    <div class="body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <!-- <input type="text" class="form-control form-control-lg"> -->
                                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label class="form-label">{{ __('E-Mail Address') }}</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <!-- <input type="text" class="form-control form-control-lg"> -->
                                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <label class="form-label">{{ __('Password') }}</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line-2">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                            <p class="form-check-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </p>
                                            <!-- <label class="form-label"> {{ __('Remember Me') }}</label> -->
                                            </div>
                                        </div>

                                        <!-- <input type="submit" class="btn btn-outline-primary btn-sm pl-4 pr-4"
                                            value="Log In"> -->

                                        <button type="submit" class="btn loginbtn btn-success btn-lg btn-block">
                                            {{ __('Log In') }}
                                        </button>

                                        @if (Route::has('password.request'))
                                        <div class="pt-5">
                                          
                                            <p><a href="{{ route('password.request') }}" style="color:black;">{{ __('Forgot Your Password?') }}</a></p>
                                        </div>
                                        @endif
                                    </div>
                                    <!-- #END# Input -->
                                </form>
                            </div>
                            <div class="col-md-5  p-5">
                                <h1 class="mt-3 font-weight-lighter">Are You New Here?</h1>

                                <div class="pt-3 mb-5">
                                    <p>Lorem ipsum dolor sit amet, sapiente tenetur ut, veritatis.</p>
                                </div>
                                <!-- <input type="submit" value="Create Account" class="btn btn-outline-primary s-14 pl-4 pr-4"> -->
                                <a href="{{route('register')}}"><span class="btn btn-outline-primary s-14 pl-4 pr-4">
                                    {{ __('Create Account') }}</span>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main><!--@Page Content-->
@endsection
