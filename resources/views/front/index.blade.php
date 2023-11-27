@extends('layouts.app')
@section('content')
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 mt-3">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 rounded" src="{{ asset('/images/basari.jpg') }}">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100 rounded" src="{{ asset('/images/egitim.jpg') }}">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Önceki</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Sonraki</span>
                </a>
            </div>
        </div>

        <div class="mt-3">
            <h2 class="text-center"><em>"Siz İlk Adımı Attığınızda, Devamının Gelmemesi Gibi Bir İhtimal Kalmıyor"</em></h2>
        </div>
@endsection
