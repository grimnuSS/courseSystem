@extends('front.layouts.layout')

@section('content')
    <div class="main">
        <section class="signup">
            <div class="sign-up-container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">{{ __('Kayıt Ol') }}</h2>
                        <form method="POST" class="register-form" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name" class="form-lbl"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input class="form-inp @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="{{ __('Ad Soyad') }}" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email" class="form-lbl"><i class="zmdi zmdi-email"></i></label>
                                <input class="form-inp @error('email') is-invalid @enderror" type="email" name="email" id="email" placeholder="{{ __('E-Posta') }}" value="{{ old('email') }}" required autocomplete="email"/>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass" class="form-lbl"><i class="zmdi zmdi-lock"></i></label>
                                <input class="form-inp @error('email') is-invalid @enderror" type="password" name="password" id="password" placeholder="{{ __('Şifre') }}" value="{{ old('password') }}" required autocomplete="new-password"/>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="re-pass" class="form-lbl"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input class="form-inp" type="password" name="password_confirmation" id="password-confirm" placeholder="{{ __('Şifre Tekrarı') }}" required autocomplete="new-password"/>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit btn btn-primary" value="{{ __('Kayıt Ol') }}"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">{{ __('Bir Hesabım Var') }}</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
