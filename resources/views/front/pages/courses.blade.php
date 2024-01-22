@extends('front.layouts.layout')
@section('content')
    <div class="container">
        <div id="app">
            <div class="col-md-12">
                <div class="site-section">
                    <div class="container">

                        <div class="row mb-5">
                            <div class="col-md-9 order-2">

                                <div class="row">
                                    <div class="col-md-12 mb-5">
                                        <div class="float-md-left mb-4"><h2 class="text-black h5">Kurslarımıza Gözat!</h2></div>
                                        <div class="d-flex">
                                            <div class="dropdown mr-1 ml-md-auto">
                                                <button type="button" class="disabled btn btn-secondary btn-sm dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Yakında!
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                                                    <a class="dropdown-item" href="#">Yakında!</a>
                                                    <a class="dropdown-item" href="#">Yakında!</a>
                                                    <a class="dropdown-item" href="#">Yakında!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-5">
                                    <div id="app" data-aos="fade-up">
                                            <course-component></course-component>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 order-1 mb-5 mb-md-0">
                                <div class="border p-4 rounded mb-4">
                                    <h3 class="mb-3 h6 text-uppercase text-black d-block">Tüm Kategoriler</h3>
                                    <ul class="list-unstyled mb-0">
                                        @foreach($categories as $category)
                                            <li class="mb-1"><a href="#" class="d-flex"><span>{{ $category->categoryName }}</span> <span class="text-black ml-auto">(2,220)</span></a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="site-section site-blocks-2">
                            <div class="container">
                                <div class="row mb-5">
                                    <h2 class="text-black h4 text-uppercase">Kategoriler</h2>
                                    @foreach($categories as $category)
                                        <div class="col-sm-4 col-md-4 col-lg-3 mb-3 mb-lg-0 mt-4" data-aos="fade" data-aos-delay="">
                                            <a class="block-2-item" href="{{route('course_single', 'mobil-uygulama-gelistirme')}}">
                                                <figure class="image">
                                                    <img src="{{ asset($category->categoryImg) }}" alt="" class="img-fluid">
                                                </figure>
                                                <div class="text">
                                                    <span class="text-uppercase">Kategoriler</span>
                                                    <h3 class="fs-2">{{ $category->categoryName }}</h3>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
