<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function index(){
        return '<h1>Selamat Datang</h1>';
    }
    function about(){
        return '<h1>Nama : Muhamad Maulana Givari <br> NIM : 2141720141 </h1>';
    }
    function article($id){
        return "<h1>Halaman Artikel dengan Id $id </h1>";
    }
    
}
