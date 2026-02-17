<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// define route
Route::get('/aaa', function () {
    return [
        'name',
        'laravel',
    ];
});

// define dynamic route
Route::get('/dynamic/{name}', function ($name) {
    return dd('Hello ' . $name . ' World');
});

// define optional param in route
Route::get('/optional/{fname}/{lname?}', function ($fname, $lname = null) {
    return dd('Hello ' . $fname . ' ' . $lname . ' World');
});

// blade
Route::get('/courses', function () {
    return view('courses');
});

// send param to blade
Route::get('/course/{name}', function ($name) {
    return view('course', ['name' => $name]);
});

// route name
Route::get('/home', function () {
    return view('home');
})->name('home');

//// route name
//Route::get('/posts', function () {
//    return view('posts.index');
//})->name('posts');
//
//// route name
//Route::get('/posts/{postId}', function ($postId) {
//    return view('posts.show', ['postId' => $postId]);
//})->name('posts.show');

// route posts group
Route::prefix('posts')->name('posts')->group(function () {
    // route name
    Route::get('/', function () {
        return view('posts.index');
    });

    // route name
    Route::get('{postId}', function ($postId) {
        return view('posts.show', ['postId' => $postId]);
    })->name('.show');
});

Route::get('/foreach', function () {
    $array = [
        [
            'id' => 1,
            'name' => 'John',
        ],
        [
            'id' => 2,
            'name' => 'ali',
        ],
        [
            'id' => 3,
            'name' => 'amir',
        ],
        [
            'id' => 4,
            'name' => 'reza',
        ],
    ];
    return view('array', compact('array'));
});
