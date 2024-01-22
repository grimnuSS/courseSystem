@extends('back.admin.layouts.layout')

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
                                        Yönetici paneline hoşgeldin!
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-5 text-center text-sm-left">
                                <div class="card-body pb-0 px-0 px-md-4">
                                    <img
                                        src="{{ asset('admin') }}/assets/img/illustrations/man-with-laptop-light.png"
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
                            <h5 class="card-title m-0 me-2 text-primary">İstatistikleri Görüntüle</h5>
                        </div>
                        <div class="card-body">
                            <ul class="p-0 m-0">
                                <li class="d-flex">
                                    <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                        <div class="me-2">
                                            <p>Öğrenciler, Eğitmenler hakkında raporlar al ve istatistiklerini gör!</p>

                                            <a href="{{ route('admin') }}" class="btn btn-sm btn-outline-primary">İstatistikler</a>
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
                                <img class="card-img card-img-left" src="{{ asset('admin') }}/assets/img/elements/21.jpg" alt="Card image" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title text-primary">Kurs Nasıl İzlenir?</h5>
                                    <p class="card-text">
                                        <b>Kurslar -> Tüm Kurslarım</b> sekmesine giderek hemen satın aldığın kursları izleyebilirsiniz!
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
                                    <h5 class="card-title text-primary">Yorum Yapmak İstiyorum?</h5>
                                    <p class="card-text">
                                        Satın aldığınız ve izleyip beğendiğiniz kurslara <b>Tüm Kurslarım -> Kurs Seç -> Yorum Yap</b> sekmesine giderek yorum yazabilirsin!
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <img class="card-img card-img-right" src="{{ asset('admin') }}/assets/img/elements/22.jpg" alt="Card image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- / Content -->
    </div>
@endsection
