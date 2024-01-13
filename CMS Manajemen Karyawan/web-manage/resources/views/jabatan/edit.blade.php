@extends('layout.master')
@section('judul')
    Edit Event
@endsection
@section('content')
<form action="/jabatan/{{$jabatan->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Pegawai</label>
      <input type="text" class="form-control" value="{{$jabatan->namapegawai}}" name="namapegawai" placeholder="Masukkan nama pegawai">
      @error('namapegawai')
         <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Jabatan Pegawai</label>
      <input type="text" class="form-control" value="{{$jabatan->jabatanpegawai}}" name="jabatanpegawai" placeholder="Masukkan jabatan pegawai">
      @error('jabatanpegawai')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-success">Tambah</button>  
  </form>
@endsection