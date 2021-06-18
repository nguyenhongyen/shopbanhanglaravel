<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class MyController extends Controller
{
    public function XinChao(){
        echo "hiiiiiii ";
    }
    public function formdn(Request $request){
        echo "tên tui là:";
        echo $request->input('hoten');
        echo "tuổi:";
        echo $request->tuoi;
    }
    
}
