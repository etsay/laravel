<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class eventControllers extends Controller
{
   public function tambah(){
    return view('event.tambah');
   }
   public function kirim(Request $request){
    $request->validate([
        'nama' => 'required',
        'deskripsi' => 'required'
    ]);
    DB::table('event')->insert([
        'nama' => $request['nama'],
        'deskripsi' => $request['deskripsi']
    ]);
    return redirect('/event');
   }
   public function index(){
    $event = DB::table('event')->get();
    return view('event.tampil', ['event' => $event]);
   }
   public function show($id){
    $event = DB::table('event')->where('id', $id)->first();
    return view('event.detail', ['event' => $event]);
   }
   public function edit($id){
    $event = DB::table('event')->where('id', $id)->first();
    return view('event.edit', ['event' => $event]);
   }
   //Edit
   public function update(Request $request, $id){
    $request->validate([
        'nama' => 'required',
        'deskripsi' => 'required'
    ]);
              DB::table('event')
              ->where('id', $id)
              ->update(
                [
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi
                ]
              );
              return redirect('/event');
   }
   //Hapus
   public function hapus($id){
     $deleted = DB::table('event')->where('id', $id)->delete();
     return redirect('/event');
   }
}
