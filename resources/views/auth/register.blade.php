@extends('layouts.sidenav')

@section('innercontent')

<!--Page Content-->
<main>
<div class="light b-t">
    <div id="primary" class="content-area"
         data-bg-possition="center"
         data-bg-repeat="false"
         data-bg-size="cover"
         style="background: url('{{asset('assets/img/icon/icon-circles.png')}}');"
         >
        <main id="main" class="site-main">
            <div class="container-register">
                <div class="col-xl-6 mx-lg-auto p-t-b-100">
                    <header class="text-center" id="register-header">
                        <h1 class="custom-head">Create New Account</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <img class="p-t-b-50" src="assets/img/icon/icon-join.png" alt="">
                    </header>
                    <div class="col-md-12 card p-5" id="form-design">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <!-- <input type="text" class="form-control form-control-lg" placeholder="First Name"> -->
                                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <!-- <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="Last Name">
                                    </div>
                                </div> -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <!-- <input type="text" class="form-control form-control-lg" placeholder="Email Address"> -->
                                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <!-- <input type="text" class="form-control form-control-lg" placeholder="Password"> -->
                                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror " placeholder="Password" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <!-- <input type="text" class="form-control form-control-lg"
                                               placeholder="Confirm Password"> -->
                                        <input id="password-confirm" type="password" class="form-control form-control-lg"
                                               placeholder="Confirm Password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <!-- <input type="submit" class="btn btn-success btn-lg btn-block" value="Create Account"> -->
                                    <button type="submit" class="btn loginbtn btn-success btn-lg btn-block">
                                        {{ __('Create Account') }}
                                    </button>
                                    <!--<p class="forget-pass">A verification email wil be sent to you</p>-->
                                </div>
                            </div>
                        </form>
                    </div>
                    <!--<div class="col-md-5  p-5" style="display:inline-block;">
                        <h1 class="custom-head">Login Here</h1>
                        <p>Already have an account</p>
                        <a href="{{route('login')}}"><span class="btn btn-outline-primary s-14 pl-4 pr-4">
                                        {{ __('Login into Account') }}</span>
                        </a>
                    </div>-->
                </div>
                
            </div>
        </main>
        <!-- #main -->
@endsection
