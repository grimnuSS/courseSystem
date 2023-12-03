<header class="site-navbar" role="banner">
    <div class="site-navbar-top">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                    <form action="" class="site-block-top-search">
                        <span class="icon icon-search2"></span>
                        <input type="text" class="form-control border-0" placeholder="Dilediğiniz İçeriği Arayın!">
                    </form>
                </div>

                <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                    <div class="site-logo">
                        <a href="{{ url('/') }}" class="js-logo-clone">grimCourse</a>
                    </div>
                </div>

                <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                    <div class="site-top-icons">
                        <ul>
                            <li><a href="#"><span class="icon icon-heart-o"></span></a></li>
                            <li>
                                <a href="#" class="site-cart">
                                    <span class="icon icon-shopping_cart"></span>
                                    <span class="count">2</span>
                                </a>
                            </li>
                            <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon icon-person"></span>
                                </a>
                                <div>
                                    @guest
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            @if (Route::has('login'))
                                                <a class="dropdown-item" href="{{ route('login') }}">{{ __('Giriş Yap') }}</a>
                                            @endif

                                            @if (Route::has('register'))
                                                <a class="dropdown-item" href="{{ route('register') }}">{{ __('Kayıt Ol') }}</a>
                                            @endif
                                        </div>
                                    @else
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="">
                                                {{ Auth::user()->name }}
                                            </a>
                                            <a class="dropdown-item" href="">
                                                {{ __('Profil') }}
                                            </a>
                                            <a class="dropdown-item" href="">
                                                {{ __('Öğrenim İçeriği') }}
                                            </a>
                                            <a class="dropdown-item" href="">
                                                {{ __('Sepet') }}
                                            </a>
                                            <a class="dropdown-item" href="">
                                                {{ __('İstek Listesi') }}
                                            </a>
                                            <hr>
                                            <a class="dropdown-item" href="">
                                                {{ __('Bildirimler') }}
                                            </a>
                                            <a class="dropdown-item" href="">
                                                {{ __('Hesap Ayarları') }}
                                            </a>
                                            <a class="dropdown-item" href="">
                                                {{ __('Satın Alma Geçmişi') }}
                                            </a>
                                            <hr>
                                            <a class="dropdown-item" href="">
                                                {{ __('Profili Düzenle') }}
                                            </a>
                                            <hr>
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                                {{ __('Çıkış Yap') }}
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    @endguest
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <nav class="site-navigation text-right text-md-center" role="navigation">
        <div class="container">
            <ul class="site-menu js-clone-nav d-none d-md-block">
                <li class="active"><a href="{{ url('/') }}">Anasayfa</a></li>
                <li class="has-children">
                    <a href="#">Kategoriler</a>
                    <ul class="dropdown">
                        <li><a href="#">Mobil Programlama</a></li>
                        <li><a href="#">Web Tasarım</a></li>
                        <li><a href="#">Siber Güvenlik</a></li>
                    </ul>
                </li>
                <li><a href="#">İndirim Fırsatları</a></li>
                <li><a href="{{ route('instruct') }}">Eğitmen Ol</a></li>
                <li><a href="#">Kurslarım</a></li>
                <li><a href="#">Destek</a></li>
            </ul>
        </div>
    </nav>
</header>
