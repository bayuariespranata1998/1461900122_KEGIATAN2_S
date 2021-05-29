<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class crud extends Controller
{
    public function index(){
        $siswas = DB::select('select * from siswa');
        return view('tampil',['siswas'=> $siswas]);
    }
    public function SELECTLIKE(){
       $term = '1001';
       $filterDatas = DB::table('siswa')->where('nis','LIKE','%'.$term.'%')->get();
       return view('SELECTLIKE',['filterDatas'=>$filterDatas]);
    }
    public function Join(){
        $users = DB::table('siswa')
        ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')->get();
        return view('Join',['users'=>$users]);
    }
    public function Last(){
        $Jws = DB::table('siswa')
        ->join('kelas','siswa.id_kelas','=','kelas.id_kelas')->where('kelas.id_kelas','=',01)->get();
        return view('Last',['Jws'=>$Jws]);
    }
}
