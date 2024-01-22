@extends('front.layouts.layout')
@section('content')
    <div class="col-5 mx-auto">
        <form action="{{route('cart.checkout')}}" class="mx-auto p-5" method="POST">
            @csrf
            <div class="row">
                <h3 class="text-center p-3">Ödeme Sayfası</h3>
                <label for="name">
                    <input type="text" name="name" class="form-control" placeholder="Kart Üzerindeki Ad Soyad">
                </label><br>
                <label for="card_no">
                    <input type="number" name="card_no" class="form-control" placeholder="Kart Numarası">
                </label><br>
                <label for="expire_month">
                    <input type="number" name="card_month" class="form-control" placeholder="Son Kullanım Ayı">
                </label><br>
                <label for="expire_year">
                    <input type="number" name="card_year" class="form-control" placeholder="Son Kullanım Yılı">
                </label><br>
                <label for="cvc">
                    <input type="number" name="cvc" class="form-control" placeholder="CVC">
                </label><br>
                <button type="submit" class="mt-4 p-2 btn btn-primary">Ödeme Yap</button>
            </div>
        </form>
    </div>
@endsection
