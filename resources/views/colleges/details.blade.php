@extends('layout/main')

@section('title', 'Detail Kampus')

@section('container')
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h2 class="text-center">Detail Kampus</h2>

            <a href="/colleges" class="btn btn-secondary mt-4">Kembali</a>
                <div class="card my-4 col-md-6">
                    <div class="card-body">
                        <h3 class="card-title">{{$college->nama_kampus}}</h3>
                        <span class="badge badge-info">Akreditasi: {{$college->akreditasi}}</span>
                        <i class="fas fa-medal"></i><span class="text-muted"> {{$college->jenis_kampus}}</span>
                        <hr>
                        <span class="card-text">Berlokasi di </span><span style="color:orange">{{$college->lokasi}}</span>
                        <hr>
                        <h5>Peringkat Asia </h5><span class="text-muted">#{{$college->peringkat_asia}}</span>
                        <h5>Peringkat Lokal </h5><span class="text-muted">#{{$college->peringkat_lokal}}</span>
                    </div>
                </div>
            <a href="{{ $college->id }}/edit" class="btn btn-primary">Edit</a>
            <form action="/colleges/{{ $college->id }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection