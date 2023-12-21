@extends('back.instruct.layouts.layout')

@section('content')
    <div class="content-wrapper">
        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
                <div class="col-lg-7 mb-4 order-0">
                    <div class="card">
                        <div class="d-flex align-items-end row">
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Hoşgeldin {{ Auth::user()->name }} 🎉</h5>
                                    <p class="mb-4">
                                        Hemen yeni bir kurs oluştur. Hem bilgilerini aktar hem de para kazan!
                                    </p>

                                    <a href="javascript:;" class="btn btn-sm btn-outline-primary">Kurs Oluştur</a>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img
                                        src="{{ asset('instruct') }}/assets/img/illustrations/man-with-laptop-light.png"
                                        height="140"
                                        alt="View Badge User"
                                        data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                        data-app-light-img="illustrations/man-with-laptop-light.png"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 order-2 mb-4">
                    <div class="card h-100">
                        <div class="card-header d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2 text-primary">Destek Al</h5>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex">
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <p>Öğrenmek istediğiniz veya desteğe ihtiyacınızın olduğu bir konu var ise çekinmeden bize ulaşabilirsiniz!</p>

                                            <a href="{{ route('instruct') }}" class="btn btn-sm btn-outline-primary">Destek Al</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="card-img card-img-left" src="{{ asset('instruct') }}/assets/img/elements/21.jpg" alt="Card image" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Kurs Nasıl Oluşturulur?</h5>
                                    <p class="card-text">
                                        <b>Kurslar -> Kurs Oluştur</b> sekmesine giderek hemen kurs oluşturabilirsin!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Yorumlarımı Okumak İstiyorum?</h5>
                                    <p class="card-text">
                                        Kurslarına gelen yorumları okumak için <b>İletişim -> Yorumlar</b> sekmesine giderek yorumları okuyabilirsin!
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img class="card-img card-img-right" src="{{ asset('instruct') }}/assets/img/elements/22.jpg" alt="Card image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="card-img card-img-left" src="{{ asset('instruct') }}/assets/img/elements/23.jpg" alt="Card image" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Para Kazanmaya Başlayın!</h5>
                                    <p class="card-text">
                                        İlk kursunuzu yükleyin kitlenizi büyütün ve para kazanmaya başlayın!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card mb-3">
                        <div class="row g-0">
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Performansınızı Raporlarla Görüntüleyin</h5>
                                    <p class="card-text">
                                        Kurslarınızın istatistiklerini ve performansınızı <b>İstatistikler</b> sekmesinden görüntüleyebilirsiniz!
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img class="card-img card-img-right" src="{{ asset('instruct') }}/assets/img/elements/24.jpg" alt="Card image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- / Content -->
    </div>
@endsection
