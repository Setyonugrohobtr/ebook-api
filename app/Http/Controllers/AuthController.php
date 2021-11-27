<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103119178,
            'Name' => 'Setyo Nugroho',
            'Gender' => 'Male',
            'Phone' => '081770680555',
            'Class' => 'XII RPL 6'
        ];
    }
}
