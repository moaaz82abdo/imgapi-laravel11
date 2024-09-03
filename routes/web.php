<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\ImageController;
  

Route::get('/', function () {
    return view('imageUpload');
});
Route::get('image-upload', [ImageController::class, 'index']);
Route::post('image-upload', [ImageController::class, 'store'])->name('image.store');

