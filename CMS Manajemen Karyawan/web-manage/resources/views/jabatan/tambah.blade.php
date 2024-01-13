@extends('layout.master')
@section('judul')
    Tambah Jabatan
@endsection
@section('content')
<form action="/jabatan" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Pegawai</label>
      <input type="text" class="form-control" name="namapegawai" placeholder="Masukkan nama pegawai">
      @error('nama')
         <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Jabatan Pegawai</label>
      <input type="text" class="form-control" name="jabatanpegawai" placeholder="Masukkan jabatan">
      @error('jabatanpegawai')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-success">Tambah</button>
    <a href="/dashboard" class="btn btn-primary">Kembali</a>
  </form>
@endsection