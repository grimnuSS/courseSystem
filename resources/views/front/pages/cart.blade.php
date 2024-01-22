@extends('front.layouts.layout')
@section('content')
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <div class="col-md-12 site-blocks-table">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th class="product-thumbnail">Kurs Resmi</th>
                            <th class="product-name">Kurs Adı</th>
                            <th class="product-price">Kurs Ücreti</th>
                            <th class="product-remove">Sepetten Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if($cartItem)
                            @foreach($cartItem as $key => $item)
                                <tr>
                                    <td class="product-thumbnail">
                                        <img
                                            src="http://localhost/kurs-sitesi/storage/app/public/{{$item['image'] ?? ''}}"
                                            alt="Image" class="img-fluid w-75">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black">{{$item['title'] ?? ''}}</h2>
                                    </td>
                                    <td>{{$item['price'] ?? ''}}</td>
                                    <td>
                                        <form action="{{ route('cart.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" value="{{$key}}" name="id">
                                            <button class="btn btn-primary btn-sm">X</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="text-black h4" for="coupon">Kupon</label>
                            <p>Eğer Bir İndirim Kuponuna Sahipsemiz Tanımlama Yapabilirsiniz!</p>
                        </div>
                        <div class="col-md-8 mb-3 mb-md-0">
                            <input type="text" class="form-control py-3" id="coupon" placeholder="Kupon Kodu">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-sm">Kodu Uygula</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 pl-5">
                    <div class="row justify-content-end">
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-12 text-right border-bottom mb-5">
                                    <h3 class="text-black h5 text-uppercase">Sepet Toplamı</h3>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <span class="text-black">Toplam</span>
                                </div>
                                <div class="col-md-6 text-right">
                                    <strong class="text-black">{{ $totalPrice }}</strong>
                                </div>
                            </div>

                            @if($totalPrice > 0)
                                <div class="row">
                                    <div class="col-md-12">
                                        <a class="btn btn-primary btn-lg py-3 btn-block" href="{{ route('cart.payment') }}">Ödemeyi Tamamla</a>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
