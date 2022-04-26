<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kontrolcum;


Route::get('/',function (){return view("welcome");});
Route::get("/anaSayfayaGit/{isim}",[Kontrolcum::class,'anaSayfayaGit']);
?>