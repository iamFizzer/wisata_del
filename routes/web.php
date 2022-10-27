<?php

use App\Http\Controllers\DestinasiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [DestinasiController::class, 'GetAllData'])->name('awal');

// Route::get('/', function () {
//     return view('layouts.index'); 
// })->middleware(['guest']);

// Route::get('/', function () {
//     return view('layouts.index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('content.dashboard.V_isi_dashboard');
    });
    Route::get('/destinasi', [DestinasiController::class, 'index'])->name('destinasi');
    Route::get('/destinasi/tambah',[DestinasiController::class, 'add']);
    Route::post('/destinasi/tambah/post',[DestinasiController::class, 'tambah']);



    //semua route dalam grup ini hanya bisa diakses siswa
});

require __DIR__.'/auth.php';
