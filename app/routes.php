<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Event::listen('illuminate.query',function($query){
    
      //var_dump($query);
});

/*Public Erişim*/
Route::get('login','LoginController@login');
Route::post('loginpost','LoginController@loginpost');
Route::get('logout','LoginController@logout');


Route::get('/',function(){
  return "Ön Tasarım";
});


Route::get('{nameusername}/tasks','UserTasksController@index');
Route::get('{nameusername}/tasks/{id}',['as'=>'user.tasks.show','uses'=>'UserTasksController@show']);
Route::post('/tasks','TaskController@store');
Route::patch('/tasks/{id}',['as'=>'tasks.update','uses'=>'TaskController@update']);
/*Admin Rotasyonları*/

Route::group(array('before'=>'auth'),function()
{

     Route::controller('kullanici','KullaniciController');
     Route::controller('tasks','TaskController');
     Route::controller('calendar','CalendarController');
     Route::controller('project','ProjeController');
     

});

/*Ortak Rotasyonlar*/
Route::group(array('before'=>'ortak'),function()
{

     Route::controller('panel','PanelController');

});

/*Personel Rotaasyonları*/
Route::group(array('before'=>'personel'),function()
{

     Route::controller('tasks','TaskController');
     Route::controller('calendar','CalendarController');
     Route::controller('project','ProjeController');

});

