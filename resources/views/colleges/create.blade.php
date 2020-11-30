@extends('layout/main')

@section('title', 'Form Tambah Data')

@section('container')
<div class="container">
    <div class="card my-4">
        <div class="card-body">
            <h2 class="text-center">Form Tambah Data</h2>

            <form class="mt-5 col-md-6" method="POST" action="/colleges">
            @csrf
                <div class="form-group">
                    <label for="nama_kampus">Nama Universitas</label><span style="color: red">*</span>
                    <input type="text" class="form-control @error('nama_kampus') is-invalid @enderror" id="nama_kampus" name="nama_kampus" placeholder="Masukkan nama universitas" value="{{ old('nama_kampus') }}">
                    @error('nama_kampus')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="akreditasi">Akreditasi</label><span style="color: red">*</span><br>
                        <input type="radio" value="A" id="akreditasiA" name="akreditasi" checked>
                        <label for="akreditasiA">A</label>
                        <input type="radio" value="B" id="akreditasiB" name="akreditasi">
                        <label for="akreditasiB">B</label>  
                        <input type="radio" value="C" id="akreditasiC" name="akreditasi">
                        <label for="akreditasiC">C</label>  
                        <input type="radio" value="D" id="akreditasiD" name="akreditasi">
                        <label for="akreditasiD">D</label>  
                </div>
                <div class="form-group">
                    <label for="jenis_kampus">Jenis Universitas</label><span style="color: red">*</span><br>
                        <input type="radio" value="Negeri" id="jenis_kampus" name="jenis_kampus" checked>
                        <label for="jenis_kampus">Negeri</label>  
                        <input type="radio" value="Swasta" id="jenis_kampus" name="jenis_kampus">
                        <label for="jenis_kampus">Swasta</label>
                </div>
                <div class="form-group">
                    <label for="peringkat_asia">Peringkat Asia</label><span style="color: red">*</span>
                    <input type="text" class="form-control @error('peringkat_asia') is-invalid @enderror" id="peringkat_asia" name="peringkat_asia" placeholder="Masukkan peringkat di Asia" value="{{ old('peringkat_asia') }}">
                    @error('peringkat_asia')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="peringkat_lokal">Peringkat Lokal</label><span style="color: red">*</span>
                    <input type="text" class="form-control @error('peringkat_lokal') is-invalid @enderror" id="peringkat_lokal" name="peringkat_lokal" placeholder="Masukkan peringkat di Indonesia" value="{{ old('peringkat_lokal') }}">
                    @error('peringkat_lokal')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="lokasi">Lokasi</label><span style="color: red">*</span>
                    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" placeholder="Masukkan lokasi universitas" value="{{ old('lokasi') }}">
                    @error('lokasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success my-4">Tambah Data</button>
            </form>
            
        </div>
    </div>
</div>
@endsection