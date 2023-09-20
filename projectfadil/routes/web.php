<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/hello', function () {
    return view('Hello World');
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama  ";
});

Route::get('/laptop/{namalaptop}', function ($merek) {
    return "merek laptop $merek" ;
});

Route::get('/siswa' , function () {
 $arry_hp = ["Nopaiya","Milkyha","Kusuma"] ; 
 return view ('universitas.mahasiswa') -> with ('mahasiswa' , $arry_hp) ;

});