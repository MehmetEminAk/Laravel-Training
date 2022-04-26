<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Kontrolcum extends Controller
{
    function anaSayfayaGit($isim){
        return view("index",['isim'=>$isim]);
    }
}
