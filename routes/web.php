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
//use Notification;
//use App\Notifications\MailNotification;
Route::get('/', function () {


    return view('welcome');

});

Route::get('chat',['as'=>'chat','uses'=>'PageCont@chat']);

Route::get('task','TasksController@show');
Route::get('app','TasksController@show1');
Route::get('sprints','SprintController@show');
Route::post('sprint/delete','SprintController@delete');
Route::post('sprint/Add','SprintController@store');

Route::get('project','projectController@show');
Route::get('shatha', 'Controller@freichatx_get_hash');
Route::get('calendar','HomeController@show');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('post','PostNot');
Route::post('AcceptedTask','TasksController@markasaccepted');
Route::post('DeclinedTask','TasksController@markasDeclined');
Route::post('task/store','TasksController@store');
Route::post('task/delete','TasksController@delete');
Route::get('MarkAllSeen','PostNot@seen');


Route::post('task/handleupload','uploadcontroller@handlefile');

