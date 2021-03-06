<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class MediaController extends Controller {

  public function __construct()
  {
    //security check apakah user sudah login atau belum, jika belum akan ke redirect ke login
    $this->middleware('auth');
  }

  function upload(Request $request) {

    $success = false;
    if($request->isMethod('post')) {

      // Ambil file dari request
      $mainpicture = $request->file('mainpicture');
      if($mainpicture) {
        // Simpan file
        $dir = storage_path('app/public');
        $mainpicture->move($dir, $mainpicture->getClientOriginalName());
      }

      // Handle gallery
      $gallery = $request->file('gallery');

      $dir = storage_path('app/public');
      foreach ($gallery as $picture) {
        $picture->move($dir, $picture->getClientOriginalName());
      }

      $success = true;
    }

    $data = [
      'success' => $success
    ];
    return view('media/upload', $data);
  }



  function index() {

    // Ambil daftar file
    $contents = Storage::disk('public')->listContents();

    $data = [
      'contents' => $contents
    ];

    return view('media/index', $data);
  }
}
