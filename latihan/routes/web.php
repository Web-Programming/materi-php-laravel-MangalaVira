<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/profil", function() {
    return view ('profil');
});

Route::get("/berita/{id}/{title?}", function($id, $title= NULL){
    return view("berita", ['id' => $id, 'title' => $title]);
});

Route::get("/total/{bil1?}/{bil2?}/{bil3?}", function($bil1, $bil2, $bil3 = 0){
    return view("hasil", [
        'total' => $bil1 + $bil2 + $bil3,
        'bil1' => $bil1,
        'bil2' => $bil2,
        'bil3' => $bil3,
    ]);
});
//=======
Route::get('/fakultas', function(){
    // return view('fakultas.index', ["ilkom" => "Fakultas Ilmu Komputer dan Rekayasa"]);
    // return view('fakultas.index', ["fakultas" => ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"]]);
    // return view('fakultas.index')->with("fakultas", [Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi]);
    $kampus = "Universitas Multi Data Palembang";
    //$fakultas = [];
    $fakultas = ["Fakultas Ilmu Komputer dan Rekayasa", "Fakultas Ilmu Ekonomi"];

    return view('fakultas.index', compact('fakultas', 'kampus'));
});