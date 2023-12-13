@extends('front.layouts.layout')

@section('content')
<div class="main">
    <section class="sign-in">
        <div class="sign-in-container">
            <div class="signin-content">
                <div class="signin-image col-md-5 ">
                    <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="#" class="signup-image-link">{{ __('Henüz Hesabın Yok Mu?') }}</a>
                </div>
                <div class="signin-form col-md-5">
                    <h2 class="form-title">{{ __('Tekrar Hoşgeldin!') }}</h2>
                    <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="form-lbl"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input class="form-inp @error('email') is-invalid @enderror" type="text" name="email" id="email" placeholder="{{ __('E-Posta') }}" required autocomplete="email" autofocus/>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-group">
                            <label for="password" class="form-lbl"><i class="zmdi zmdi-lock"></i></label>
                            <input class="form-inp @error('password') is-invalid @enderror" type="password" name="password" id="password" placeholder="{{ __('Şifre') }}"/>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit btn btn-primary" value="{{ __('Giriş Yap') }}"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
