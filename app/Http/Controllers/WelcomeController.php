<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Selamat Datang';
       }

    //    public function greeting(){
    //     return view('blog.hello', ['name' => 'Febrio']);}
       
        public function greeting(){
            return view('blog.hello')
            ->with('name','Febrio')
            ->with('occupation','Astronaut');}
 }
 

