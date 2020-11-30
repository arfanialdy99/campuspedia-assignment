@extends('layout/main')

@section('title', 'Detail Kampus')

@section('container')
<div class="container">
    <div class="card my-4">
        <div class="card-body">
            <h2 class="text-center">Detail Kampus</h2>
            
            <div class="row justify-content-center">
            @foreach ($kampus as $k)
            <div class="card my-4 mx-2 col-md-5">
            <div class="card-body">
                <h3 class="card-title">{{$k->nama_kampus}}</h3>
                <span class="badge badge-info">Akreditasi: {{$k->akreditasi}}</span>
                <span class="text-muted">{{$k->jenis_kampus}}</span>
                <hr>
                <span class="card-text">Berlokasi di </span><span style="color:orange">{{$k->lokasi}}</span>
                <hr>
                <h5>Peringkat Asia </h5><span class="text-muted">#{{$k->peringkat_asia}}</span>
                <h5>Peringkat Lokal </h5><span class="text-muted">#{{$k->peringkat_lokal}}</span>
            </div>
            </div>
            @endforeach
            </div>
            

        </div>
    </div>
</div>
@endsection