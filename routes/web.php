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

Route::post('nineteenth', function () {
    echo"success";
});