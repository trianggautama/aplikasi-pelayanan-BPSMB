@extends('layouts.login_register')

@section('content')<!-- Container-fluid starts -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="login-card card-block">
                    <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="text-center">
                        <img src="assets/images/logo_pemprov.png" alt="logo" width="150">
                    </div>
                    <h3 class="text-center txt-primary">
                        Register Akun Anda
                    </h3>
                    <div class="md-input-wrapper">
                            <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }} md-form-control md-static" name="name" value="{{ old('name') }} " required autofocus>
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        <label>Nama Perusahaan</label>
                    </div>
                    <div class="md-input-wrapper">
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} md-form-control md-static" name="email" value="{{ old('email') }} " required>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        <label>Email</label>
                    </div>
                    <div class="md-input-wrapper">
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} md-form-control md-static" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        <label>Password</label>
                    </div>
                    <div class="md-input-wrapper">
                            <input id="password-confirm" type="password" class="form-control  md-form-control md-static" name="password_confirmation" required>
                        <label>Confirm Password</label>
                    </div>
                    <div class="row">
                        <div class="col-xs-10 offset-xs-1">
                            <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">
                                    {{ __('Register') }}
                            </button>

                        </div>
                    </div>
                    <!-- <div class="card-footer"> -->
                    <div class="col-sm-12 col-xs-12 text-center">
                        <span class="text-muted">Sudah Punya Akun?</span>
                        <a href="/login" class="f-w-600 p-l-5">Login Sekarang</a>
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
