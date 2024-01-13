@extends('layout.master')
@section('judul')
    Bilik Jabatan Pegawai
@endsection
@section('content')
        <a href="/jabatan/tambah" class="btn btn-success">Tambah Jabatan Pegawai</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pegawai</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @forelse ($jabatan as $key => $value)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$value->namapegawai}}</td>
                    <td>
                        <form action="/jabatan/{{$value->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/jabatan/{{$value->id}}" class="btn btn-primary">Lihat</a>
                            <a href="/jabatan/{{$value->id}}/edit" class="btn btn-warning">Edit</a>
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Tidak ada Jabatan Pegawai yang di tambah</td>
                </tr>
            @endforelse
            </tbody>
          </table>
    </div>
@endsection