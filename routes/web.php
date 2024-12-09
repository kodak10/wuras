<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryArticleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\WebsiteController;



Route::get('/', [WebsiteController::class, 'index']);
// Route::get('/{slug}', [WebsiteController::class, 'show'])->name('article.index.show');

Route::get('/magasin', [WebsiteController::class, 'shop'])->name('shop');
Route::get('/magasin/{slug}', [WebsiteController::class, 'show'])->name('article.show');

Route::get('/admin', function () {
    return view('backend.pages.index');
});


// Route::prefix('admin')->name('admin.')->group(function () {
//     Route::resource('articles', ArticleController ::class);

// });

Route::prefix('admin')->name('admin.')->group(function () {

    

    Route::resource('articles', ArticleController::class);
    Route::post('categories/store', [CategoryArticleController::class, 'store'])->name('categories.store');
    Route::post('tags', [TagController::class, 'store'])->name('tags.store');

    Route::resource('banners', BannerController::class);


});


Route::post('/upload-vignette', [ArticleController::class, 'updloadVignette'])->name('store-vignette');




// Route::post('/article/upload-images', [ArticleController::class, 'uploadImages'])->name('article.uploadImages');
