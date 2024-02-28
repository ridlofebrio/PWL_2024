<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){
        $nama = "Muhammad Ridlo Febrio Putra";
        $nim = "2241720098";

        return $nama . " dan " . $nim;
    }
}
