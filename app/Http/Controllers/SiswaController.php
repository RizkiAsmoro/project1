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

    public function __construct()
    {
      //security check apakah user sudah login atau belum, jika belum akan ke redirect ke login
      $this->middleware('auth');
    }

    function add(Request $request) {
        
            $data = [
              'success' => false
            ];
        
            if ($request->isMethod('post')) {
              $idSiswa = $request->input('id_siswa');
              $namaSiswa = $request->input('name_siswa');
              $mediaSiswa = $request->file('media_siswa');
              
            if ($mediaSiswa) {
                $dir = storage_path('app/public');
                $mediaSiswa->move($dir,$mediaSiswa->getClientOriginalName());
            }
              $returnValue = DB::insert('insert into mahasiswa (id, name, media) values (?, ?, ?)',
              [$idSiswa, $namaSiswa, $mediaSiswa->getClientOriginalName()]);
        
              if($returnValue) {
                $data = [
                  'success' => 1
                ];
              }
          }
          return view('siswa/add', $data);
        }

          function view( $id_siswa, Request $request) {
            $mahasiswa = DB::select('SELECT * FROM mahasiswa where id=?', [$id_siswa]);
        
            // Cek data
            
        
            // Ambil first element
            $mahasiswa = reset($mahasiswa);
        
            $data = [
              'mahasiswa' => $mahasiswa
            ];
            return view('siswa/detail', $data);
          }


          function edit($id_siswa, Request $request) {
            
                $siswas = DB::select('SELECT * FROM mahasiswa where id=?', [$id_siswa]);
                $siswa = reset($siswas);
            
                $success = false;
                if($request->isMethod('post')) {
                  $idSiswa = $request->input('id_siswa');
                  $namaSiswa = $request->input('nama_siswa');
                 
                  $returnValue = DB::update('UPDATE mahasiswa SET id=?, name=? WHERE id=?',
                    [$idSiswa, $namaSiswa, $id_siswa]);
            
                  if($returnValue) {
                    $success = true;
                  }
                }
            
                $data = [
                  'siswa' => $siswa,
                  'success' => $success
                ];
                return view('siswa/edit', $data);
              }

              function delete(Request $request) {
                $idSiswa = $request->input('id_siswa');
            
                $returnValue = DB::delete('DELETE from mahasiswa WHERE id=?', [$idSiswa]);
            
                if($returnValue) {
                  return "Data Deleted";
                } else {
                  return "Error";
                }
              }
            
           
}
