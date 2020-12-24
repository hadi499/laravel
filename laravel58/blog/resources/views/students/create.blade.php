@extends('layout/main')
@section('title', 'Tambah Data Mahasiswa')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Tambah Data Mahasiswa</h1>                                
         
            <form method="post" action="/students">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukkan nama" name="nama" value="{{old('nama')}}">
                  @error('nama')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                  <label for="nrp">NRP</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nrp" placeholder="masukkan nrp" name="nrp" value="{{old('nrp')}}">
                  @error('nrp')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="email" placeholder="masukkan email" name="email" value="{{old('email')}}">
                  @error('email')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="jurusan" placeholder="masukkan jurusan" name="jurusan" value="{{old('jurusan')}}">
                  @error('jurusan')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
                
              </form>
        </div>
    </div>
</div>
@endsection