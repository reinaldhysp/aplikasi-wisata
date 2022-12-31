<?php

use Illuminate\Support\Facades\Route;
use App\Models\Berita;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
  $data = Berita::paginate(3);
  $berit = DB::select('select * from beritas');
  $datas = DB::select('select * from users');
  $wisatas = DB::select('select * from wisatas');
  $akomodasis = DB::select('select * from akomodasis');
    return view('index',['data'=>$data,'berit'=>$berit,'author'=>$datas,'wisatas'=>$wisatas,'akomodasis'=>$akomodasis]);
});
Route::get('/create', function () {
    return view('layouts.backend.create');
});
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/general', function () {
    return view('layouts.backend.general');
});
Route::get('/edit', function () {
    return view('layouts.backend.edit');
});

Route::get('/objekwisata', [App\Http\Controllers\WisataController::class, 'open']);

Route::get('tampil/{wisata}', [App\Http\Controllers\WisataController::class, 'tampil'])->name('tampil');

Route::get('/halamanakomodasi', [App\Http\Controllers\AkomodasiController::class, 'open']);

Route::get('tampil/{wisata}', [App\Http\Controllers\BeritasController::class, 'tampil'])->name('tampil');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin', [App\Http\Controllers\UserController::class, 'index'])->name('admin');
Route::get('/wisata', [App\Http\Controllers\WisataController::class, 'index'])->name('wisata');
Route::get('/berita', [App\Http\Controllers\BeritaController::class, 'index'])->name('berita');
Route::get('/beritas', [App\Http\Controllers\BeritasController::class, 'index'])->name('beritas');
Route::get('/cari', [App\Http\Controllers\BeritasController::class, 'cari'])->name('cari');
Route::get('/cari', [App\Http\Controllers\WisataController::class, 'cari'])->name('cari');
Route::get('/cari', [App\Http\Controllers\AkomodasiController::class, 'cari'])->name('cari');
Route::get('/comment', [App\Http\Controllers\ContactController::class, 'comment'])->name('comment');
Route::get('/berita/create', 'App\Http\Controllers\BeritaController@create');
Route::post('/berita','App\Http\Controllers\BeritaController@store');
Route::get('/akomodasi', [App\Http\Controllers\AkomodasiController::class, 'index'])->name('akomodasi');
Route::post('/contact/simpan', 'App\Http\Controllers\ContactController@simpan');
Route::delete('berita/{id}','App\Http\Controllers\BeritaController@destroy');
Route::delete('akomodasi/{id}','App\Http\Controllers\AkomodasiController@destroy');
Route::delete('wisata/{id}','App\Http\Controllers\WisataController@destroy');
Route::get('/berita/ubah/{id}','App\Http\Controllers\BeritaController@edit');
Route::patch('/berita/{id}','App\Http\Controllers\BeritaController@update');
Route::get('/wisata/ubah/{id}','App\Http\Controllers\WisataController@edit');
Route::patch('/wisata/{id}','App\Http\Controllers\WisataController@update');
Route::get('/akomodasi/ubah/{id}','App\Http\Controllers\AkomodasiController@edit');
Route::patch('/akomodasi/{id}','App\Http\Controllers\AkomodasiController@update');




Route::get('/logout', function()
{
    auth()->logout();
    session()->flush();
    return Redirect::to('/');
})->name('keluar');