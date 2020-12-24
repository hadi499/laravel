@extends('layouts/master')
@section('title', 'Edit Siswa')

@section('content')
<div class="main">
  <div class="main-content">
    <div class="container-fluid">   
      <div class="col-md-12"> 
        <div class="panel">
          <div class="panel-heading">
            <h3 class="panel-title">Edit Data</h3>
          </div>
          <div class="panel-body">
            <form method="post" action="/siswa/{{$siswa->id}}/update" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror" id="nama_depan" placeholder="masukkan nama_depan" name="nama_depan" value="{{$siswa->nama_depan}}">                         
              </div>
              <div class="form-group">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control @error('nama_belakang') is-invalid @enderror" id="nama_belakang" placeholder="masukkan nama_belakang" name="nama_belakang" value="{{$siswa->nama_belakang}}">                          
              </div>
              <div class="form-group">
                <label for="jutsu">Jutsu</label>
                <input type="text" name="jutsu" class="form-control @error('jutsu') is-invalid @enderror" id="jutsu" placeholder="masukkan jutsu" name="jutsu" value="{{$siswa->jutsu}}">                          
              </div>                  
              <div class="form-group">
                <label for="avatar">Avatar</label>
                <input type="file" name="avatar" class="form-control @error('avatar') is-invalid @enderror" id="jutsu" placeholder="masukkan jutsu" name="jutsu" value="{{$siswa->jutsu}}">                          
              </div>                  
              
                <button type="submit" class="btn btn-primary">submit</button>
            
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
    
