<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/AutobotCount', function () {
    return view('autobot-count'); // Ensure the file name matches exactly
});
Route::get('/autobots', function () {
    return view('autobots'); // This will render the resources/views/autobots.blade.php file
});

Route::get('/another-view', function () {
    return view('another-view');
});

Route::get('/autobots/{id}/posts-view', function ($id) {
    return view('autobot-posts', ['autobot_id' => $id]);
});
