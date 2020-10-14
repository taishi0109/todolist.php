<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/folders/{id}/tasks','App\Http\Controllers\TaskController@index')->name('tasks.index');

Route::get('/archives/', function() {
    return '記事一覧';
});

Route::get('/archives/{category}/', function($category) {
    return $category.'は変態';
});

Route::get('/beginner', 'App\Http\Controllers\BeginnerController@getIndex');

Route::get('/info', function () {
    return 'Hello World';
});

Route::get('/info', function() {
    return view('info');
});