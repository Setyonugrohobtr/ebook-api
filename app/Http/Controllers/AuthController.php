<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'nis'=>3103119178,
            'name'=>'Setyo',
            'phone'=>'6281770680555',
            'class'=>'XII RPL 6'
        ];
    }
}
