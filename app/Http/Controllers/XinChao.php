<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class XinChao extends Controller
{
    public function GioiThieu(){
               echo "Tôi tên là Yến ahihi";
    }
    public function Ten(Request $request){
        // echo " Tôi tên là : ";
        // return redirect()->route('Route2');
        //return $request->url();
        if($request->is('chao*'))
            echo "có chứa tên";
        else 
            echo "Ko";
        
    }
    
}
