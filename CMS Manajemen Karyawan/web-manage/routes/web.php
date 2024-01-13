<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\eventControllers;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\jabatanControllers;
use App\Http\Controllers\UserRegistrationController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/datapegawai', function () {
    return view('pages.datapegawai');
});

//User registration
Route::get('/registration', [UserRegistrationController::class, 'showForm'])->name('registration.form');
Route::post('/registration', [UserRegistrationController::class, 'submitForm'])->name('registration.submit');

//CRUD Event
//Form Tambah Event
Route::get('/event/tambah',[eventControllers::class, 'tambah']);
//Kirim data ke database
Route::post('/event',[eventControllers::class, 'kirim']);
//Tampilkan semua data
Route::get('/event',[eventControllers::class, 'index']);
//Detail event berdasarkan kategori
Route::get('/event/{event_id}',[eventControllers::class, 'show']);
//Update
//Form untuk update
Route::get('/event/{event_id}/edit',[eventControllers::class, 'edit']);
//Update data ke database berdasarkan id
Route::put('/event/{event_id}',[eventControllers::class, 'update']);
//Delete
//Delete berdasarkan id
Route::delete('/event/{event_id}',[eventControllers::class, 'hapus']);


//CRUD Jabatan
//Form Tambah Jabatan
Route::get('/jabatan/tambah', [jabatanControllers::class, 'tambah']);
//Kirim data ke database
Route::post('/jabatan',[jabatanControllers::class, 'kirim']);
//Read
//Tampilkan semua data
Route::get('/jabatan',[jabatanControllers::class, 'index']);
//Detail jabatan berdasarkan kategori
Route::get('/jabatan/{jabatan_id}',[jabatanControllers::class, 'show']);
//Update
//Form untuk update
Route::get('/jabatan/{jabatan_id}/edit',[jabatanControllers::class, 'edit']);
//Update data ke database berdasarkan id
Route::put('/jabatan/{jabatan_id}',[jabatanControllers::class, 'update']);
//Delete
//Delete berdasarkan id
Route::delete('/jabatan/{event_id}',[jabatanControllers::class, 'hapus']);




//Route Login Page
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('dashboard');
Route::get('/login', [LoginController::class, 'halamanlogin'])->name('login');
Route::post('/login', [LoginController::class, 'postlogin'])->name('postlogin');
