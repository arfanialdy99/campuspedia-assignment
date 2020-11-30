@extends('layout/main')

@section('title', 'Bandingkan Universitas')

@section('container')
<div class="container">
    <div class="card mt-3">
        <div class="card-body">
            <h2 class="text-center">Bandingkan Universitas</h2>
            

            <form class="my-4 col-md-6" action="{{route('compare.show', 'id=>1')}}">
                <div class="form-group">
                    <label for="kampus1">Universitas 1</label><span style="color: red">*</span>
                    <select class="form-control" id="kampus1" name="kampus[]">
                    <option value="">Pilih Universitas...</option>
                    @foreach($nama_kampus as $n)
                        <option value="{{$n->id}}">{{$n->nama_kampus}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kampus2">Universitas 2</label><span style="color: red">*</span>
                    <select class="form-control" id="kampus2" name="kampus[]">
                    <option value="">Pilih Universitas...</option>
                    @foreach($nama_kampus as $n)
                        <option value="{{$n->id}}">{{$n->nama_kampus}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kampus3">Universitas 3</label><span style="color: red">*</span>
                    <select class="form-control" id="kampus3" name="kampus[]">
                    <option value="">Pilih Universitas...</option>
                    @foreach($nama_kampus as $n)
                        <option value="{{$n->id}}">{{$n->nama_kampus}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="kampus4">Universitas 4</label><span style="color: red">*</span>
                    <select class="form-control" id="kampus4" name="kampus[]">
                    <option value="">Pilih Universitas...</option>
                    @foreach($nama_kampus as $n)
                        <option value="{{$n->id}}">{{$n->nama_kampus}}</option>
                    @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mt-4">Bandingkan</button>
            </form>
            
        </div>
    </div>
</div>
@endsection