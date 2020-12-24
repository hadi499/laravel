@extends('layouts/master')
@section('title', 'Daftar Siswa')

@section('content')
    <div class="main">
    <div class="main-content">
      <div class="container-fluid">   
        <div class="col-md-12">     
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">Data Shinobi</h3>
                <div class="right">
                  <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-plus-square"></i>
                  </button>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Depan</th>
                      <th scope="col">Nama Belakang</th>
                      <th scope="col">Jutsu</th>
                      <th scope="col">aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($data_siswa as $siswa)
                    <tr>
                        <td scope="row">{{ $loop->iteration}}</td>
                        <td><a href="/siswa/{{$siswa->id}}/profile">{{$siswa->nama_depan}}</a></td>
                        <td>{{$siswa->nama_belakang}}</td>
                        <td>{{$siswa->jutsu}}</td>
                        <td>
                          <a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sm">edit</a>
                          <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="confirm('anda yakin?')">delete</a>
                        </td>
                        
                    </tr>
                        
                    @endforeach 
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </div> 
     <!-- Modal -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="/siswa/create">
              @csrf
              <div class="form-group">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" class="form-control @error('nama_depan') is-invalid @enderror" id="nama_depan" placeholder="masukkan nama_depan" name="nama_depan" ">                         
              </div>
              <div class="form-group">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text" class="form-control @error('nama_belakang') is-invalid @enderror" id="nama_belakang" placeholder="masukkan nama_belakang" name="nama_belakang" ">                          
              </div>
              <div class="form-group">
                <label for="jutsu">Jutsu</label>
                <input type="text" class="form-control @error('jutsu') is-invalid @enderror" id="jutsu" placeholder="masukkan jutsu" name="jutsu" ">                          
              </div>                       
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
              
            </form>
          </div>
          
        </div>
      </div>
    </div>
@endsection
    

   