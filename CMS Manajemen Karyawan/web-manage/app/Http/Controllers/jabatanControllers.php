<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class jabatanControllers extends Controller
{
    public function tambah(){
        return view ('jabatan.tambah');
    }
    public function kirim(Request $request){
        $request->validate([
            'namapegawai' => 'required',
            'jabatanpegawai' => 'required'
        ]);
        DB::table('jabatan')->insert([
            'namapegawai' => $request['namapegawai'],
            'jabatanpegawai' => $request['jabatanpegawai']
        ]);
        return redirect('/jabatan');
       }
       public function index(){
        $jabatan = DB::table('jabatan')->get();
        return view('jabatan.tampil', ['jabatan' => $jabatan]);
       }
       public function show($id){
        $jabatan = DB::table('jabatan')->where('id', $id)->first();
        return view('jabatan.detail', ['jabatan' => $jabatan]);
       }
       public function edit($id){
        $jabatan = DB::table('jabatan')->where('id', $id)->first();
        return view('jabatan.edit', ['jabatan' => $jabatan]);
       }
       //Edit
       public function update(Request $request, $id){
        $request->validate([
            'namapegawai' => 'required',
            'jabatanpegawai' => 'required'
        ]);
                  DB::table('jabatan')
                  ->where('id', $id)
                  ->update(
                    [
                    'namapegawai' => $request->namapegawai,
                    'jabatanpegawai' => $request->jabatanpegawai
                    ]
                  );
                  return redirect('/jabatan');
       }
       //Hapus
       public function hapus($id){
         $deleted = DB::table('jabatan')->where('id', $id)->delete();
         return redirect('/jabatan');
       }
}
