<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,'index'])->name('posts.index');
Route::get('/posts/create',[PostController::class,'create'])->name('posts.create');
Route::get('/posts/{parameter}',[PostController::class,'show'])->name('posts.show');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{parameter}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::delete('/posts/{parameter}', [PostController::class, 'destroy'])->name('posts.destroy');

