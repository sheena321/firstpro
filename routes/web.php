<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','welcome');
Route::view('second','second');
Route::view('third','third');
route::view('fourth','grid');
route::view('fifth','grid1');
route::view('sixth','mtest');
route::view('seventh','boot');

route::view('eighth','table');
route::view('nineth','javas');
route::view('tenth','message');

route::view('eleventh','conditional');

route::view('twelveth','nested');

route::view('thirteenth','loopquest');
route::view('forteenth','function');
route::view('fifteenth','fun_class');
route::view('sixteenth','pbms');
route::view('seventeenth','multiselection');
route::view('eighteenth','domclass2');
route::view('nineteenth','validation');
route::view('twentith','stringfns');
route::view('twentifirst','stringPbms');
route::view('twentisecond','stringPbm1');
route::view('twentithird','strinreplace');
route::view('twentiforth','calculator');
route::view('twentififth','new');
route::view('twentisixth','jquery');
route::view('twentiseventh','clock');
route::view('twentieighth','animation');
route::view('twentinineth','jquery4');
route::view('thirty','jqueryHW');
route::view('thirtyone','jq');
route::view('thirtytwo','jq5');
route::view('thirtythree','formjquery');
route::view('thirtyfour','carousel');
route::view('sam','sam');
route::view('new1','new1');
route::view('new2','new2');
route::view('php1','php1');
route::view('JQ1','JQ1');
route::view('notes','notes');
route::view('peakvalue','peakvalue');
route::view('leader','leader');
route::view('threearray','threearray');
route::view('signupformtest','signupformtest');
route::view('logintest','logintest');
route::view('homepage','homepage');
route::view('larsum','laravelcrud/lar_sum');
route::post('larsum',[App\Http\Controllers\controller1::class,"sum"]);
route::view('lar_form','laravelcrud/form_larcrud');
route::post('lar_form',[App\Http\Controllers\controller1::class,"data_entry"]);
// route::view('showdata','laravelcrud/show_data'); this command not used because webpage loaded with value so we need only get method
route::get('showdata',[App\Http\Controllers\controller1::class,"display"]);
route::get('delete/{Id}',[App\Http\Controllers\controller1::class,"del"]);
route::get('update/{Id}',[App\Http\Controllers\controller1::class,"update"]);
route::post('update1/{Id}',[App\Http\Controllers\controller1::class,"update_data"]);
route::view('laravellogin','laravelcrud/lar_login');
route::post('laravellogin',[App\Http\Controllers\controller1::class,"login"]);
route::get('logout',[App\Http\Controllers\controller1::class,"logout"]);
// route::view('user_details','laravelcrud/User_details_show');
route::get('view_useerdetails',[App\Http\Controllers\controller1::class,"Profile_show"]);
route::view('fileupload','laravelcrud/file_upload');
route::post('fileupload',[App\Http\Controllers\controller1::class,"file_upload"]);
route::get('fileupload',[App\Http\Controllers\controller1::class,"retrive_data"]);
route::view('reg_model','laravelcrud/registration_usig_model');

route::post('reg_model',[App\Http\Controllers\controller2::class,"insert_data"]);




Route::post('nineteenth', function () {
    echo"success";
});

