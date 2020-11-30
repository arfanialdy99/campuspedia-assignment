@extends('layout/main')

@section('title', 'Welcome')

@section('container')
    <div class="container">
        <div class="card" style="width: 35rem; margin: 25%">
            <div class="card-body" id="card-body">
                <h2 class="card-title">Perbandingan Kampus</h2>
                <p class="card-text">Perbandingan kampus besar di Indonesia</p>
                <a href="/colleges" class="btn btn-primary sm-0">Lihat</a>
            </div>
        </div>
    </div>
@endsection
