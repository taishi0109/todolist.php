<?php

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', 'TaskController@index')->name('tasks.index');

Route::get('/archives/', function() {
    return '記事一覧';
});

Route::get('/archives/{category}/', function($category) {
    return $category.'は変態';
});

Route::get('/beginner', 'BeginnerController@index');

Route::get('/info', function () {
    return 'Hello World';
});

Route::get('/info', function() {
    return view('info');
});