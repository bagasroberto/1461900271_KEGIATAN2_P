<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainControll extends Controller
{
   public function index(){
        return view('index0271');
    }
    public function artikel(){
        return view('databuku0271');
    }
    public function kontak(){
        return view('datapetugas0271');
    }   
        public function kontak(){
        return view('dataanggota0271');
    }  
        public function kontak(){
        return view('statuspeminjaman0271');
    }  
        public function kontak(){
        return view('laporan0271');
    }  
}
