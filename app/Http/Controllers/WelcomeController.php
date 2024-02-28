<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Selamat Datang';
       }
    public function about(){
        $nama = "Muhammad Ridlo Febrio Putra";
        $nim = "2241720098";

        return $nama . " dan " . $nim;
    }
    public function articel($id){
        if ($id != null) {
            $halaman = $id;
        }
        return "Halaman Artikel dengan yang ke". $halaman;
    }
}
