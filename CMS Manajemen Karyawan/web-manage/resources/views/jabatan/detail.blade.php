@extends('layout.master')
@section('judul')
    Detail Jabatan Pegawai
@endsection
@section('content')  
  <div class="card">
    <div class="card-body">
        <h6>Nama Pegawai</h6>
        <h2>{{$jabatan->namapegawai}}</h2>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
        <p>Jabatan Pegawai</p>
        <p>{{$jabatan->jabatanpegawai}}</p>
    </div>
  </div>
  <a href="/jabatan" class="btn btn-primary">Kembali</a>
@endsection