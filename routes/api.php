<?php
use App\Http\Controllers\Api\AutobotController;

Route::get('/autobots', [AutobotController::class, 'index']);
Route::get('/autobots/count', [AutobotController::class, 'count']);
// Route::get('/autobots/{id}/posts', [AutobotController::class, 'posts']);
Route::get('/posts/{postId}/comments', [AutobotController::class, 'comments']);
Route::get('/autobots/{id}/posts', [AutobotController::class, 'posts']);
