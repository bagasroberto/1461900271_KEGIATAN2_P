<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainControll extends Controller
{
   public function index(){
        return view('index0271');
    }
    public function databuku(){
        $item = DB::table('buku as b')
            ->select('b.*', 'k.*')
            ->leftjoin('kategori as k', 'b.kategori_id', '=', 'k.kategori_id')
            ->get();

        return view('databuku0271', compact('item'));
    }
    public function datapetugas(){
        $item = DB::table('petugas')
            ->select('*')
            ->get();

        return view('datapetugas0271', compact('item'));
    }   
    public function dataanggota(){
        $item = DB::table('anggota')
            ->select('*')
            ->get();
        
    return view('dataanggota0271', compact('item'));
    }  
    public function statuspeminjaman(){
        $item = DB::table('pinjam as p')
            ->select('p.*', 'b.*', 'a.*')
            ->leftjoin('buku as b', 'b.buku_id', '=', 'p.buku_id')
            ->leftjoin('anggota as a', 'a.anggota_id', '=', 'p.anggota_id')
            ->get();

        return view('statuspeminjaman0271', compact('item'));
    }  
    public function laporan(){
        $item = DB::table('kembali as k')
            ->select('k.*', 'b.*', 'p.*', 'a.*')
            ->leftjoin('pinjam as p', 'p.pinjam_id', '=', 'k.pinjam_id')
            ->leftjoin('buku as b', 'b.buku_id', '=', 'p.buku_id')
            ->leftjoin('anggota as a', 'a.anggota_id', '=', 'p.anggota_id')
            ->get();

        return view('laporan0271', compact('item'));
    }  

    public function anggotaLike(){
        $item = DB::table('anggota')
            ->select('*')
            ->where('anggota_nama','like','z%')
            ->get();
            
        return view('dataanggota0271', compact('item'));
    }

    public function pinjamSelectLike(){
        $item = DB::table('pinjam as p')
            ->select('p.*', 'b.*', 'a.*')
            ->leftjoin('buku as b', 'b.buku_id', '=', 'p.buku_id')
            ->leftjoin('anggota as a', 'a.anggota_id', '=', 'p.anggota_id')
            ->where('b.buku_judul', 'like', 's%')
            ->get();
            
        return view('statuspeminjaman0271', compact('item'));
    }
}
