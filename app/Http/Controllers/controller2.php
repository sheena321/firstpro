<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;//importing model

class controller2 extends Controller
{
    function insert_data(Request $req){
        $fir_name=$req->fname;
        $sec_name=$req->lname;
        $email=$req->email;
        $pass=$req->password;    
$ob=new customer(['fname'=>$fir_name,'lname'=>$sec_name,'email'=>$email,'password'=>$pass]);
$ob->save();
    }
}
