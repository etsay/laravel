@extends('layout.master')
@section('judul')
    Bilik Event Kerja
@endsection
@section('content')
        <a href="/event/tambah" class="btn btn-success">Tambah Event</a>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Event</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
            @forelse ($event as $key => $value)
                <tr>
                    <td>{{$key + 1}}</td>
                    <td>{{$value->nama}}</td>
                    <td>
                        <form action="/event/{{$value->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="/event/{{$value->id}}" class="btn btn-primary">Lihat</a>
                            <a href="/event/{{$value->id}}/edit" class="btn btn-warning">Edit</a>
                            <input type="submit" value="Delete" class="btn btn-danger">
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Tidak ada Event</td>
                </tr>
            @endforelse
            </tbody>
          </table>
    </div>
@endsection