<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return 'Selamat Datang';
       }
       
        public function greeting(){
            return view('blog.hello')
            ->with('name','Fenrio')
            ->with('occupation','Astronaut');}
 }
 

