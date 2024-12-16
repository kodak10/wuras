<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryArticleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\WebsiteController;


Route::get('/', [WebsiteController::class, 'index']);
Route::get('/magasin', [WebsiteController::class, 'shop'])->name('shop');
Route::get('/magasin/{slug}', [WebsiteController::class, 'show'])->name('article.show');
Route::post('/upload-vignette', [ArticleController::class, 'updloadVignette'])->name('store-vignette');
// Route::get('/login', [WebsiteController::class, 'login'])->name('login');
Route::get('/panier', [WebsiteController::class, 'cart'])->name('panier');

Route::post('/add-to-cart', [WebsiteController::class, 'addToCart'])->name('addToCart');
Route::post('/update-cart', [WebsiteController::class, 'updateCart'])->name('updateCart');
Route::get('/remove-from-cart/{productId}', [WebsiteController::class, 'removeFromCart'])->name('removeFromCart');
// Route::get('/clear-cart', [WebsiteController::class, 'clearCart'])->name('clearCart');
Route::post('/clear-cart', [WebsiteController::class, 'clearCart'])->name('clearCart');



Route::get('/admin', function () {
    return view('backend.pages.index');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('articles', ArticleController::class);
    Route::post('categories/store', [CategoryArticleController::class, 'store'])->name('categories.store');
    Route::post('tags', [TagController::class, 'store'])->name('tags.store');
    Route::resource('banners', BannerController::class);

    Route::delete('articles/{article}/image/{id}', [ArticleController::class, 'destroyImage'])->name('image.delete');


});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
