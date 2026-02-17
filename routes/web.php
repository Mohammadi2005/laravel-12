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
