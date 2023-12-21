@extends('back.instruct.layouts.layout')

@section('content')
    <div class="container">
        <div id="app" class="row mt-4">
            <div class="col-md-8">
                <teacher-create-component></teacher-create-component>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Dikkat Çekici Olmalıdır!</h5>
                            <p class="card-text">Kurs başlığınız ve içerikleri dikkat çekici olmalıdır. Böylece hedef kitlenize daha etkili ulaşabilirsiniz!</p>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="card bg-primary text-white text-center p-3">
                        <figure class="mb-0">
                            <blockquote class="blockquote">
                                <p>İyi İçerik, İyi Kazanç!</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mb-0 text-white">
                                İçeriğiniz ne kadar iyi olursa o kadar çabuk ve o kadar fazla para kazanırsınız!
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="card text-center">
                        <div class="card-body">
                            <h5 class="card-title">Fiyatlandırma Ve Kuponlar</h5>
                            <p class="card-text">Var olan bir kitleniz varsa onlar için indirim kuponları hazırlamak ister misiniz?</p>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="card bg-primary text-white text-center p-3">
                        <figure class="mb-0">
                            <blockquote class="blockquote">
                                <p>Yardım Etmektende Almaktanda Çekinme</p>
                            </blockquote>
                            <figcaption class="blockquote-footer mb-0 text-white">
                                Kimse her şeyi mükemmel yapmak ya da bilmek zorunda değildir. Yardım almak ve yardım etmekten çekinmeyin!
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
