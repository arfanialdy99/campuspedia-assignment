@extends('layout/main')

@section('title', 'Daftar Kampus')

@section('container')
<div class="container">
    <!-- <div class="flash-data" data-flashdata="{{ session('status')}}"></div> -->
    <div class="card my-4">
        <div class="card-body">
            <h2 class="text-center">Daftar Kampus</h2>

            <a href="/colleges/create" class="btn btn-success my-4">Tambah Data</a>
            <a href="/compare" class="btn btn-primary my-4 inline">Bandingkan Universitas</a>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status')}}
                </div>
            @endif

            <table class='table table-bordered'>
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Kampus</th>
                        <th scope="col">Lokasi</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach( $college as $c )
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $c->nama_kampus }}</td>
                        <td>{{ $c->lokasi }}</td>
                        <td>
                            <a class="badge badge-info" href="/colleges/{{ $c->id }}">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <small><i>Versi QS Asia University Rankings 2021</i></small>
        </div>
    </div>
</div>
@endsection