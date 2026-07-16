<?php
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
Route::get('/menu',[ProductController::class,'index']);
?>