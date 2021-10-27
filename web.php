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

Route::get('/', function () {
    return view('welcome');
});
Route::get('about',function () {
    $name ='mosa';

    return view('about',['name'=>$name]);
});

Route::get('contact', function () {
    $name ="mohammed";
    return view('contact',compact('name'));
});
Route::post('/send', function () {
    $name = $_REQUEST['name'];
    return view('contact',compact('name'));
});
Route::post('/store', function () {
    $name = request('name');
    return view('about',compact('name'));
});

Route::get('tasks', function () {
    $tasks=[
    'first- task'=>  'Task 1',
    'second-task'=>  'Task 2',
    'third- task'=>  'Task 3',
    ] ;

    return view('tasks', compact ('tasks'));
});

Route::get('show/{id}', function ($id){
    $tasks=[
    'first- task'=>  'Task 1',
    'second-task'=>  'Task 2',
    'third- task'=>  'Task 3',
    ] ;
   $task = $tasks[$id];
    return view('show',compact('task'));

});


