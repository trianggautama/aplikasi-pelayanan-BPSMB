@extends('layouts.login_register')

@section('content')<!-- Container-fluid starts -->
<div class="container-fluid">
    <div class="row">

        <div class="col-sm-12">
            <div class="login-card card-block">
                 <form class="md-float-material" method="POST" action="{{ route('login') }}">
                 @csrf
                    <div class="text-center">
                        <img src="assets/images/logo_pemprov.png" alt="logo" width="150">
                    </div>
                    <h3 class="text-center txt-primary">
                        Silahkan Login
                    </h3>
                    <div class="md-input-wrapper">
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}  md-form-control md-static" name="email" value="{{ old('email') }}" required autofocus>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                        <label>Email</label>
                    </div>
                    <div class="md-input-wrapper">
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}  md-form-control md-static" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                        <label>Password</label>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                        <div class="rkmd-checkbox checkbox-rotate checkbox-ripple m-b-25">
                            <label class="input-checkbox checkbox-primary">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span class="checkbox"></span>
                            </label>
                            <div class="captions">Remember Me</div>

                        </div>
                            </div>
                        <div class="col-sm-6 col-xs-12 forgot-phone text-right">
                            @if (Route::has('password.request'))
                            <a  href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 offset-xs-1">
                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                {{ __('Login') }}
                            </button>

                        </div>
                    </div>
                    <!-- <div class="card-footer"> -->
                    <div class="col-sm-12 col-xs-12 text-center">
                        <span class="text-muted">Belum Punya Akun?</span>
                        <a href="/register" class="f-w-600 p-l-5">Daftar Sekarang</a>
                    </div>

                    <!-- </div> -->
                </form>
                <!-- end of form -->
            </div>
            <!-- end of login-card -->
        </div>
        <!-- end of col-sm-12 -->
    </div>
    <!-- end of row -->
</div>
<!-- end of container-fluid -->
@endsection
