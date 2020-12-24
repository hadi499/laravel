@extends('layout/main')
@section('title', 'Edit Data Mahasiswa')
    
@section('container')
<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Ubah Data Mahasiswa</h1>                                
         
            <form method="post" action="/students/{{ $student->id }}">
                @method('put')
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" placeholder="masukkan nama" name="nama" value="{{$student->nama}}">
                  @error('nama')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                  <label for="nrp">NRP</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nrp" placeholder="masukkan nrp" name="nrp" value="{{$student->nrp}}">
                  @error('nrp')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="email" placeholder="masukkan email" name="email" value="{{$student->email}}">
                  @error('email')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <div class="form-group">
                  <label for="jurusan">Jurusan</label>
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="jurusan" placeholder="masukkan jurusan" name="jurusan" value="{{$student->jurusan}}">
                  @error('jurusan')<div id="validationServer03Feedback" class="invalid-feedback">{{$message}}</div>@enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit Data</button>
                
              </form>
        </div>
    </div>
</div>
@endsection