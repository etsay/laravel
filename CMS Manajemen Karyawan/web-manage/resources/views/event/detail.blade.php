@extends('layout.master')
@section('judul')
    Detail Kategori
@endsection
@section('content')  
  <div class="card">
    <div class="card-body">
        <h6>Nama Event Kerja</h6>
        <h2>{{$event->nama}}</h2>
    </div>
  </div>
  <div class="card">
    <div class="card-body">
        <p>Deskripsi</p>
        <p>{{$event->deskripsi}}</p>
    </div>
  </div>
  <a href="/event" class="btn btn-primary">Kembali</a>
@endsection