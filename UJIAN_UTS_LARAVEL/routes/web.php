<?php

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
// route::get('/',[homeController::class,'index']);

route::get('/', function (){
    return view('home/index');
});

// route::get('produk', function (){
//     return view('prdk/produk');
// });

route::get('tambahmhswa', function(){
    return view('TmbhMhswa/tambah');
});

route::get('produk', function(){
    $kode = ['BRG001','BRG002'];
    $nama = ['Buku', 'Pena'];    
    $jenis = ['Alat Tulis', 'Alat Tulis'];  
    $harga = ['25000', '15000']; 
    $jumlah = count($kode);
    return view('prdk/produk', compact('kode', 'jumlah', 'nama', 'jenis', 'harga'));
});