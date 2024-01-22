@extends('front.layouts.layout')
@section('content')
    <div id="app">
        <div class="site-section">
            <div class="container">
                <div class="row">
                    @if($product)
                        <div class="col-md-6">
                            <img src="http://localhost/kurs-sitesi/storage/app/public/{{$product->courseImage ?? ''}}"
                                 alt="Image" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h2 class="text-black">{{$product->title}}</h2>
                            <p>{{$product->description}}</p>

                            <form action="{{ route('cart.add') }}" method="POST">
                                @csrf
                                @auth
                                    <input type="text" value="{{ $product->id }}" name="id" hidden/>
                                    <input type="text" value="{{ $product->title }}" name="title" hidden/>
                                    <input type="text" value="{{ $product->courseSlug }}" name="courseSlug" hidden/>
                                    <input type="text" value="{{ $product->image }}" name="courseImage" hidden/>
                                    <input type="text" value="{{ $product->price }}" name="price" hidden/>
                                    <button class="btn col-md-4 col-lg-3 float-end btn-primary m-lg-2 m-md-1 mb-2"
                                            type="submit"><i class="icon icon-shopping_cart"></i>{{ $product->price }}₺
                                    </button>
                                @else
                                    <button
                                        class="btn col-md-4 col-lg-3 float-end btn-primary m-lg-2 m-md-1 mb-2 disabled"
                                        type="submit"><i class="icon icon-shopping_cart"></i>{{ $product->price }}₺
                                    </button>
                                @endauth
                            </form>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
