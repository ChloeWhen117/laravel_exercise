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
    $tasks = [
        ['task' => 'Learning Laravel', 'completed' => true],
        ['task' => 'Learning React', 'completed' => true],
        ['task' => 'Learning Vue', 'completed' => false],
        ['task' => 'Learning Postgres', 'completed' => false],
        ['task' => 'Learning modern HTML/CSS', 'completed' => true],
        ['task' => 'Stay calm', 'completed' => true]
    ];
    return view('home', ['tasks' => $tasks]);
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/contact', function () {
    return view('contact');
});