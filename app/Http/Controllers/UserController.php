<?php

namespace App\Http\Controllers;

class UserController extends Controller {

    function welcome(){
        return view ('welcome');
    }

    function siswa(){
        $siswa = [
            'id' => '',
            'name' => 'John',
            
        ];
        return view ('about', $siswa);
    }

}

?>