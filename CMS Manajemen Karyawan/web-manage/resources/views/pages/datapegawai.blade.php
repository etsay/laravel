@extends('layout.master')
@section('judul')
Data Pegawai
@endsection
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Pegawai</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Doni</td>
        <td>Jln. Griya Asri</td>
        <td> 
          <a href="#" class="btn btn-primary">Lihat</a>
          <a href="#" class="btn btn-warning">Edit</a>
          <input type="submit" value="Delete" class="btn btn-danger">
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Ahmad</td>
        <td>Jln. Griya Asri</td>
        <td> 
          <a href="#" class="btn btn-primary">Lihat</a>
          <a href="#" class="btn btn-warning">Edit</a>
          <input type="submit" value="Delete" class="btn btn-danger">
        </td>
      </tr>
      <tr>
        <td>3</td>
        <td>Dewi</td>
        <td>Jln. Griya Asri</td>
        <td> 
          <a href="#" class="btn btn-primary">Lihat</a>
          <a href="#" class="btn btn-warning">Edit</a>
          <input type="submit" value="Delete" class="btn btn-danger">
        </td>
      </tr>
    </tbody>
  </table>

@endsection