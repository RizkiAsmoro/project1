<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SiswaController extends Controller {
    function index() {
        $siswa = DB::select("select * from mahasiswa");
        
        $data = [
            'siswa' => $siswa
        ];
        return view ('siswa/index', $data);
    }
    
}
