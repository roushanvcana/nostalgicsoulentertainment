@extends('layouts.sidenav')

@section('innercontent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card p-5 m-5" id="form-design">
                <div class="card-header" id="reset-design">{{ __('Reset Password') }}</div>

                <div class="card-body p-5" >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                        <!--<label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>-->

                            <div class="col-lg-12 p-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-Mail Address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-lg-12">
                                <button type="submit" class="btn loginbtn btn-success btn-lg btn-block">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
