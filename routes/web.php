<?php

use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ToolsController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function (){
    return view('home');
})->name('home');

Route::get(('/home/categorys'), [CategoryController::class, 'showCategories'])->name('categorys');
Route::get('/home/category_search', [CategoryController::class, 'searchCategories'])->name('category_search');

Route::get(('/home/tools'), [ToolsController::class, 'showTools'])->name('tools');
Route::get(('/home/tools_search'), [ToolsController::class, 'searchTool'])->name('tools.search');
Route::get(('/home/tools/details/{id}'), [ToolsController::class, 'showToolDetails'])->name('tools.details');


Route::get('/home/products/{id}', [ProductsController::class, 'showProducts'])->name('products');
Route::get('/home/products/details/{id}', [ProductsController::class, 'showProductDetails'])->name('products.details');
Route::get('/home/product_search', [ProductsController::class, 'searchProducts'])->name('products.search');

Route::get(('/home/articles'), [ArticlesController::class, 'showArticles'])->name('articles');
Route::get(('/home/article/content/{id}'), [ArticlesController::class, 'showArticleContent'])->name('articles.detailes');
Route::get(('/home/article_search'), [ArticlesController::class, 'searchArticle'])->name('articles.search');


