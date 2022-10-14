<?php

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

Route::get('/', function () {
    return view('index');
});


Route::get('/services', function(){
    return view('services');
});

Route::get('/eropa', function(){
    $benua0 = 'Eropa';
    $waktu0 = '10 Hari';
    $negara0 =[
        ["namaNegara" => "Austria", "harga" => 10000000,],
        ["namaNegara" => "Belanda", "harga" => 15000000,],
        ["namaNegara" => "Prancis", "harga" => 15000000,],
        ["namaNegara" => "Italia", "harga" => 10000000,],
        ["namaNegara" => "Jerman", "harga" => 8000000,],
    ];
    return view('services.eropa', compact('benua0','waktu0','negara0'));
});

Route::get('/asia', function(){
    $benua1 = 'Asia';
    $waktu1 = '10 Hari';
    $negara1 =[
        ["namaNegara" => "Jepang", "harga" => 15000000,],
        ["namaNegara" => "India", "harga" => 8000000,],
        ["namaNegara" => "Thailand", "harga" => 7000000,],
        ["namaNegara" => "Maldives", "harga" => 20000000,],
        ["namaNegara" => "Korea Selatan", "harga" => 15000000,],
    ];
    return view('services.asia', compact('benua1','waktu1','negara1'));
});

Route::get('/australia', function(){
    $benua2 = 'Australia';
    $waktu2 = '10 Hari';
    $negara2 =[
        ["namaNegara" => "Sydney", "harga" => 15000000,],
        ["namaNegara" => "Melbourne", "harga" => 10000000,],
        ["namaNegara" => "Perth", "harga" => 7000000,],
    ];
    return view('services.australia', compact('benua2','waktu2','negara2'));
});

Route::get('/about', function(){
    return view('about');
});

Route::get('/testi', function(){
    $nama =[
        ["namaCust" => "Bella", "teks" => "Mantap!",],
        ["namaCust" => "BeDananglla", "teks" => "Oke banget!",],
        ["namaCust" => "Lila", "teks" => "Travel asik dan suka ngajak belusukan!",],
    ];
    return view('testi', compact('nama'));
});
