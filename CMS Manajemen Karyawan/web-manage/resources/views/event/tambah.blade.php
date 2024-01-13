@extends('layout.master')
@section('judul')
    Tambah Event
@endsection
@section('content')
<form action="/event" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Nama Event</label>
      <input type="text" class="form-control" name="nama" placeholder="Masukkan nama event">
      @error('nama')
         <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Deskripsi Event</label>
      <textarea name="deskripsi" class="form-control" cols="30" rows="10"></textarea>
      @error('deskripsi')
          <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    </div>
    <button type="submit" class="btn btn-success">Tambah</button>
    <a href="/dashboard" class="btn btn-primary">Kembali</a>
  </form>
@endsection