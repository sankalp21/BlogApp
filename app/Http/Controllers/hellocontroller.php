<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class HelloController extends Controller{
    
    public function index(){
        $sub=['maths','english','hindi'];
        $mark=60;
        $msg="<script>alert('this is sankalp')</script>";
        return view('hello')->withmysub($sub)->withmymarks($mark)->withalert($msg);
    }
    
    public function parameter($fname,$lname){
        echo 'hello '.$fname.' '.$lname;
    }
}

?>