@extends('front.layouts.layout')

@section('content')
    <div class="site-blocks-cover" style="background-image: url({{ asset('images/hero_1.jpg') }});" data-aos="fade">
        <div class="container">
            <div class="row align-items-start align-items-md-center justify-content-end">
                <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                    <h1 class="mb-2">Sizi Geliştirecek Kursu Seçin</h1>
                    <div class="intro-text text-center text-md-left">
                        <p class="mb-4">Yüzlerce kurs arasından, ilgi alanınıza ait olan kursu bulun. Öğrenin ve para kazanmaya başlayın! </p>
                        <p>
                            <a href="#" class="btn btn-sm btn-primary">Şimdi Keşfet!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-shield"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Güvenli Öğrenim</h2>
                        <p>Tüm kurslarımız oluşturulduktan sonra içerikleriyle beraber moderatör kontrolünden geçer ve sadece güvenli içeriğe sahip olanlar yayınlanır!</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-refresh2"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Para İadesi</h2>
                        <p>Eğerki öğreticinin içeriğini ve anlatış tarzını beğenmezsen paran iade!</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-help"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">7/24 Destek</h2>
                        <p>Bir sorun mu yaşıyorsunuz? Bize ulaşmaktan çekinmeyin!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-blocks-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('images/siberguvenlik.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <span class="text-uppercase">Kategoriler</span>
                            <h3>Siber Güvenlik</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('images/mobilprogramlama.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <span class="text-uppercase">Kategoriler</span>
                            <h3>Mobil Uygulama</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('images/webtasarim.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <span class="text-uppercase">Kategoriler</span>
                            <h3>Web Tasarımı</h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('images/backend.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <span class="text-uppercase">Kategoriler</span>
                            <h3>Backend</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('images/yapayzeka.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <span class="text-uppercase">Kategoriler</span>
                            <h3>Yapay Zeka</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="#">
                        <figure class="image">
                            <img src="{{ asset('images/oyungelistirme.jpg') }}" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <span class="text-uppercase">Kategoriler</span>
                            <h3>Oyun Geliştirme</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Sık Tercih Edilenler</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="nonloop-block-3 owl-carousel">
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="{{ asset('images/mobil.jpg') }}" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">Kurs İsmi</a></h3>
                                    <p class="mb-0">Kurs Kategorisi</p>
                                    <p class="text-primary font-weight-bold">49.99 TL</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="{{ asset('images/backendgelistirme.jpg') }}" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">Kurs İsmi 2</a></h3>
                                    <p class="mb-0">Kurs Kategorisi</p>
                                    <p class="text-primary font-weight-bold">49.99 TL</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="block-4 text-center">
                                <figure class="block-4-image">
                                    <img src="{{ asset('images/tsql.jpg') }}" alt="Image placeholder" class="img-fluid">
                                </figure>
                                <div class="block-4-text p-4">
                                    <h3><a href="#">Kurs İsmi 3</a></h3>
                                    <p class="mb-0">Kurs Kategorisi</p>
                                    <p class="text-primary font-weight-bold">49.99 TL</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section block-8">
        <div class="container">
            <div class="row justify-content-center  mb-5">
                <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Büyük İndirim!</h2>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-7 mb-5">
                    <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
                </div>
                <div class="col-md-12 col-lg-5 text-center pl-md-5">
                    <h2><a href="#">%50 İndirim Fırsatı!</a></h2>
                    <p>Kurslarımızda siz öğrenebilin diye her zaman güzel fırsatlar sunmaya devam edeceğiz. Ne bekliyorsunuz öğrenmeye başlayın artık!</p>
                    <p><a href="#" class="btn btn-primary btn-sm">Öğrenmeye Başla</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection
