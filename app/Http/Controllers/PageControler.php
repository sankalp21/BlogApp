<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControler extends Controller
{
    //
    public function index(){
        
        return view('page');
    }
    
    public function service(){
        
        $data=['Create Post','Delete Post','Edit Post', 'Read Post'];
        
        return view('service')->with('datas',$data);
    }
    
    public function about(){
        
        return view('about');
    }
}
