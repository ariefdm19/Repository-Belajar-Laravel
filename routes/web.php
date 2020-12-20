<?php

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

Route::get('/', function () {
    return view('welcome');
});
// Route Latihan
Route::get('/student','StudentController@index');
Route::get('/student/tugassatu','StudentController@TugasSatu'); //Route Tugas 1
Route::get('/student/tugasdua','StudentController@TugasDua'); //Route Tugas 2
Route::get('/student/tugastiga','StudentController@TugasTiga'); //Route Tugas 3
Route::get('/student/tugasempat','StudentController@TugasEmpat'); //Route Tugas 4
Route::get('/student/tugaslima','StudentController@TugasLima'); //Route Tugas 5

Route::get('/course','CourseController@index');
Route::get('/person','PersonController@index');
Route::get('/person/{nilai_awal}/{nilai_akhir}','PersonController@cetak');
Route::get('/person/data','PersonController@data');
Route::get('/person/send-data','PersonController@sendData');
Route::get('/person/show/{param}','PersonController@show');
Route::get('/person/add', 'PersonController@add');
Route::post('/person/addProcess', 'PersonController@addProcess');
Route::get('/student/my-academic/{course}/{task}/{quiz}/{mid_term}/{final}','StudentController@MyCourse');
Route::get('/homepage',function(){
    return view('home',["name" => "AriefDM"]);
});



