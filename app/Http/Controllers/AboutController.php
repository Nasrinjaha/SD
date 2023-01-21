<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about($c, $sc){
        if($c==null){
            $c='empty';
        }
        if($sc==null){
            $sc='empty';
        }
        // if($c=='sports'){
        //     if($sc=='cricket'){
        //         return view('sport',['subcategory'=>$sc]);
        //     }
        // }
        return view('about',['category'=>$c,'subcategory'=>$sc]);
    }
}
