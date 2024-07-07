<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ImageController;
use App\Models\Article;


// class PublicController extends Controller
// {
//     public function homepaage(){
//         return view('welcome');
//     }
// }

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/article/create',[ArticleController::class, 'create'])->name('article.create');
Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');
Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');
Route::get('/article/show/{article}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/article/category/{category}', [ArticleController::class, 'byCategory'])->name('article.byCategory');
Route::get('/article/user/{user}', [ArticleController::class, 'byUser'])->name('article.byUser');



