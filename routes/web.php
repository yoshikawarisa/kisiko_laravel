<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CommentsController;  //コメント用

Route::get('/', [PostsController::class, 'index'])->name('posts.index');
Route::post('/posts/store', [PostsController::class, 'store'])->name('posts.store');
Route::get('/posts/{post}', [PostsController::class,'show'])->name('posts.show');
Route::post('/comments/store', [CommentsController::class, 'store'])->name('comments.store');  //コメント
Route::delete('/comments/{comment}', [CommentsController::class, 'destroy'])->name('comments.destroy'); //コメント削除