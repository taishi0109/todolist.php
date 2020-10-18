<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function() {
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/folders/{id}/tasks','App\Http\Controllers\TaskController@index')->name('tasks.index');
Route::get('/folders/create', 'App\Http\Controllers\FolderController@showCreateForm')->name('folders.create');
Route::post('/folders/create', 'App\Http\Controllers\FolderController@create');
Route::get('/folders/{id}/tasks/create', 'App\Http\Controllers\TaskController@showCreateForm')->name('tasks.create');
Route::post('/folders/{id}/tasks/create', 'App\Http\Controllers\TaskController@create');
Route::get('/folders/{id}/tasks/{task_id}/edit', 'App\Http\Controllers\TaskController@showEditForm')->name('tasks.edit');
Route::post('/folders/{id}/tasks/{task_id}/edit', 'App\Http\Controllers\TaskController@edit');
});

Auth::routes();


// <?php

// Route::group(['middleware' => 'auth'], function() {
//     Route::get('/', 'HomeController@index')->name('home');

//     Route::get('/folders/{id}/tasks', 'TaskController@index')->name('tasks.index');

//     Route::get('/folders/create', 'FolderController@showCreateForm')->name('folders.create');
//     Route::post('/folders/create', 'FolderController@create');

//     Route::get('/folders/{id}/tasks/create', 'TaskController@showCreateForm')->name('tasks.create');
//     Route::post('/folders/{id}/tasks/create', 'TaskController@create');

//     Route::get('/folders/{id}/tasks/{task_id}/edit', 'TaskController@showEditForm')->name('tasks.edit');
//     Route::post('/folders/{id}/tasks/{task_id}/edit', 'TaskController@edit');
// });








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