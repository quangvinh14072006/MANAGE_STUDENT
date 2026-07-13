<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test-menu', function() {
    return "Route web hoạt động rồi nè!";
});
Route::get('/menu',[ProductController::class,'index']);