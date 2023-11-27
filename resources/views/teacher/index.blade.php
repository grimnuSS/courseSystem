@extends('layouts.app')
@section('content')
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="list-tab" data-bs-toggle="tab" data-bs-target="#waiting" type="button" role="tab" aria-controls="waiting" aria-selected="true">Kurslarım</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="create-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="false">Kurs Oluştur</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="edit-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Kurs Düzenle</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="delete-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Kurs Sil</button>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="waiting" role="tabpanel" aria-labelledby="list-tab">

            </div>
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="create-tab">
                <teacher-create-component></teacher-create-component>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="edit-tab">

            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="delete-tab">

            </div>
        </div>
    </div>
@endsection
