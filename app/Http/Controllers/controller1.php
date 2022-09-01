<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class controller1 extends Controller
{
    function sum(Request $req){
        $fnumber=$req->fnum;
        $snumber=$req->snum;
        $sum=$fnumber+$snumber;
        return view("laravelcrud/lar_sum",["key_sum"=>$sum]);

    }


    function data_entry(Request $req){
$fir_name=$req->fname;
$sec_name=$req->lname;
$email=$req->email;
$pass=$req->password;
DB::table("register")->insert([ // inserting values from database (use the same db field name used)
    'fname'=>$fir_name,
    'lname'=>$sec_name,
    'email'=>$email,
    'password'=>$pass
  
]);
return view('laravelcrud/form_larcrud');//focous on same page(give the page location)
}



function display(){
    $data_get = DB::table("register")->get();//get() function retrive data from database
    return view('laravelcrud/show_data',["key_disp"=>$data_get]);
}


function del($id){
DB::table("register")->where("id",$id)->delete();
return redirect("showdata");
}


function update($id){
   $element= DB::table("register")->where("id",$id)->first();
   return view(' @csrfupdate',["key_disp"=>$element]);

}

function update_data(Request $req,$id){
    $fir_name=$req->fname;
$sec_name=$req->lname;
$email=$req->email;
$pass=$req->password;

    DB::table("register")->where("id",$id)->update( [ 
    'fname'=>$fir_name,
    'lname'=>$sec_name,
    'email'=>$email,
    'password'=>$pass]);

    return redirect("showdata");
}




function login(Request $req){
    $em=$req->email;
    $psw1=$req->psw;

    $db_email= DB::table("register")->where("email",$em)->first();
    // return view("laravelcrud/lar_login",["key_disp"=>$db_email]);
    if(is_null($db_email)){
        $msg="no elements";
        return view("laravelcrud/lar_login",["key_chkvalue"=>$msg]);
    }
    elseif($em==$db_email->email && $psw1==$db_email->password)
    {
        $req->session()->put("login_session_name",$db_email->id);//inside put()(name of the session name as our choice,id of that row)
return redirect("showdata");
    }else{
        $msg="wrong password";
        return view("laravelcrud/lar_login",["key_chkvalue"=>$msg]);
    }
}




function logout(){
session()->forget("login_session_name");// to distroy session session()->flush()
session()->flush();
return redirect("laravellogin");
}



function Profile_show(Request $req){
if(session()->has("login_session_name")){
    //to get session
    $id1=  $req->session()->get("login_session_name");//getting its id
echo $id1;
$details=DB::table("register")->where("id",$id1)->first();//select det

return view("laravelcrud/User_details_show",["key_display"=>$details]);

}else{
    return view("laravelcrud/lar_login");
}



}




function file_upload(Request $req){
    $name1=$req->name;
    $email1=$req->email;
    $img1="img".time().".".$req->file1->getClientOriginalExtension();//getClientOriginalExtension() is used to  extract extension of file
    // echo $img1;
    $req->file1->storeAs("public/img_file",$img1);
    db::table("file_details")->insert([
'uname'=>$name1,
'email'=>$email1,
'image_file'=>$img1
    ]);
    // return view('laravelcrud/file_upload',['key_value'=>"insert successfuly"]);
    return redirct("filedetails");

    }




    function retrive_data(){

$get_element=DB::table("file_details")->get();
// echo $get_element;
return view('laravelcrud/file_upload',['key1_value'=>$get_element]);


    }

}
