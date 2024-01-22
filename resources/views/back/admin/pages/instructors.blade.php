@extends('back.admin.layouts.layout')

@section('content')
    <div class="container">
        <div id="app" class="row mt-4">
            <admin-instructors-component></admin-instructors-component>
            <admin-instructor-forms-component></admin-instructor-forms-component>
        </div>
    </div>
@endsection
