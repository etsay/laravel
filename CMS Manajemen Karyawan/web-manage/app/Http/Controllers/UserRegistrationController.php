<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class UserRegistrationController extends Controller
{
    public function showForm()
    {
        // Logika untuk menampilkan formulir
        return view('registration.form');
    }

    public function submitForm(Request $request)
    {
        try {
            // Validasi data yang diterima dari formulir
            $validatedData = $request->validate([
                'nama_lengkap' => 'required|string|max:255',
                'tanggal_lahir' => 'required|date',
                'alamat' => 'required|string|max:255',
                'no_hp' => 'required|string|max:15',
                'alamat_email' => 'required|email|max:255',
                'pendidikan_terakhir' => 'required|string|max:255',
                'file_pdf' => 'required|mimes:pdf|max:2048', // Maksimal ukuran file 2MB
            ]);

            // Inisialisasi objek Registration
            $registration = new Registration;

            // Simpan data pendaftaran
            $registration->create($validatedData);

            // Simpan file PDF ke dalam folder storage/app/public/pdf
            $pdfPath = $request->file('file_pdf')->store('public/pdf');

            // Ambil nama file PDF saja (tanpa path)
            $pdfFileName = basename($pdfPath);

            // Setel nama file PDF ke dalam model
            $registration->file_pdf = $pdfFileName;

            // Simpan data pendaftaran
            $registration->save();

            // Jika sampai di sini, data berhasil disimpan
            return response()->json(['success' => true, 'message' => 'Data pendaftaran berhasil disimpan.']);

        } catch (\Exception $e) {
            // Tangani kesalahan jika diperlukan
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan. Silakan coba lagi.']);
        }
    }
}
