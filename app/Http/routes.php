<?php

use App\Task;
use Illuminate\Http\Request;

/**
 * Display All Tasks
 */
Route::get('/', function () {
    return 'hello World';
    //
});

Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});
/**
 * Add A New Task
 */
Route::post('/task', function (Request $request) {
    return 'hello world'
    //

});

Route::put('/task', function (Request $request) {
    
    //

});


/**
 * Delete An Existing Task
 */
Route::delete('/task/{id}', function ($id) {
    //
});

$url = url ('task');