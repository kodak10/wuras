<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\CategoryArticleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\MarketingController;

use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\HomeController;


Route::get('/', [WebsiteController::class, 'index']);
Route::get('/magasin', [WebsiteController::class, 'shop'])->name('shop');
Route::get('/magasin/{slug}', [WebsiteController::class, 'show'])->name('article.show');
Route::post('/upload-vignette', [ArticleController::class, 'updloadVignette'])->name('store-vignette');
// Route::get('/login', [WebsiteController::class, 'login'])->name('login');
Route::get('/panier', [WebsiteController::class, 'cart'])->name('panier');

Route::post('/add-to-cart', [WebsiteController::class, 'addToCart'])->name('addToCart');
Route::post('/update-cart', [WebsiteController::class, 'updateCart'])->name('updateCart');
Route::delete('/remove-from-cart/{product_id}', [WebsiteController::class, 'removeFromCart'])->name('removeFromCart');
// Route::get('/clear-cart', [WebsiteController::class, 'clearCart'])->name('clearCart');
Route::post('/clear-cart', [WebsiteController::class, 'clearCart'])->name('clearCart');

Route::get('/checkout', [OrderController::class, 'index'])->name('checkout');
Route::post('/commander', [OrderController::class, 'store'])->name('order.store');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index']);

    Route::resource('articles', ArticleController::class);
    Route::get('articles/{id}/promotion', [ArticleController::class, 'promotion'])->name('articles.promotion');
    Route::post('articles/{id}/toggle-promotion', [ArticleController::class, 'togglePromotion'])->name('articles.togglePromotion');


    Route::post('categories/store', [CategoryArticleController::class, 'store'])->name('categories.store');
    Route::post('tags', [TagController::class, 'store'])->name('tags.store');
    Route::resource('banners', BannerController::class);

    Route::delete('articles/{article}/image/{id}', [ArticleController::class, 'destroyImage'])->name('image.delete');

    Route::resource('marketing', MarketingController::class);


});

// Route::prefix('home')->name('home.')->group(function () {
//     Route::get('/', [UserController::class, 'index'])->name('index');
// });


Auth::routes();


Route::prefix('home')->name('home.')->group(function () {
    // Route pour la page d'accueil
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
    // Route pour afficher les commandes
    // Route::get('/my-orders', [OrderController::class, 'myOrders'])->name('orders.index');
    
    // Route pour afficher les détails d'une commande
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');

    Route::post('/account', [UserController::class, 'updateAccount'])->name('account.update');

});



