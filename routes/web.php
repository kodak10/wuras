<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryArticleController;
use App\Http\Controllers\Admin\CommandesController;
use App\Http\Controllers\Admin\MarketingController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;

use App\Http\Controllers\Admin\StoreController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserAdminController;
use App\Http\Controllers\Admin\VentesController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\BarcodeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;





Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create();

    // Ajouter les routes principales
    $sitemap->add(Url::create('/')->setPriority(1.0)->setChangeFrequency('daily'))
            ->add(Url::create('/magasin')->setPriority(0.9)->setChangeFrequency('daily'))
            ->add(Url::create('/panier')->setPriority(0.8)->setChangeFrequency('daily'))
            ->add(Url::create('/checkout')->setPriority(0.8)->setChangeFrequency('monthly'));

    // Ajouter dynamiquement les articles
    $articles = \App\Models\Article::all();
    foreach ($articles as $article) {
        $sitemap->add(Url::create('/magasin/' . $article->slug)
            ->setPriority(0.7)
            ->setChangeFrequency('weekly'));
    }

    // Ajouter dynamiquement d'autres routes ou ressources selon vos besoins

    return $sitemap->toResponse(request());
});






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
Route::get('/get-cart-count', [WebsiteController::class, 'getCartCount']);

Route::get('/checkout', [OrderController::class, 'index'])->name('checkout');
Route::post('/commander', [OrderController::class, 'store'])->name('order.store');
// Route::get('/order/success', [OrderController::class, 'success'])->name('order.success');
Route::get('/order-success/{orderId}', [OrderController::class, 'success'])->name('order.success');
// Route::get('/receipt/{orderId}/pdf', [OrderController::class, 'downloadReceipt'])->name('receipt.pdf');
Route::get('order/{orderId}/receipt/download', [OrderController::class, 'downloadReceipt'])->name('order.downloadReceipt');


Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');


// Au cas ou
// Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
//     Route::get('/', [AdminController::class, 'index']);

//     Route::resource('articles', ArticleController::class);
//     Route::get('articles/{id}/promotion', [ArticleController::class, 'promotion'])->name('articles.promotion');
//     Route::post('articles/{id}/toggle-promotion', [ArticleController::class, 'togglePromotion'])->name('articles.togglePromotion');

//     Route::post('categories/store', [CategoryArticleController::class, 'store'])->name('categories.store');
//     Route::post('tags', [TagController::class, 'store'])->name('tags.store');
//     // Route::resource('banners', BannerController::class);

//     Route::delete('articles/{article}/image/{id}', [ArticleController::class, 'destroyImage'])->name('image.delete');

//     // Route::resource('marketing', MarketingController::class);

//     Route::resource('commandes', CommandesController::class);

//     //Route::put('commandes/{id}', [CommandesController::class, 'update'])->name('commande.update');

//     Route::get('stock', [AdminController::class, 'StockArticle'])->name('stock.index');

//     Route::get('stock/edit/{id}', [AdminController::class, 'EditStockArticle'])->name('edit.stock.article');
//     Route::put('stock/edit/{id}', [AdminController::class, 'Stockupdate'])->name('stock.update');

//     // Route::post('/notifications/{product}/markAsRead', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');

//    // Route::resource('codeBarres', BarcodeController::class);
    
//     Route::get('codeBarres', [BarcodeController::class, 'index'])->name('codeBarres.index');

//     // Route pour générer et afficher le code-barres
//     Route::post('codeBarres', [BarcodeController::class, 'store'])->name('codeBarres.store');





//     Route::get('/api/roles/{role}/permissions', function (Role $role) {
//         return $role->permissions;
//     });
    

//     // Groupe de routes pour les administrateurs
//     // Route::middleware(['role:admin'])->group(function () {
//     //     Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
//     // });

//     // Groupe de routes pour les managers
//     // Route::middleware(['role:manager'])->group(function () {
//     //     Route::get('/store/{store}/orders', [StoreController::class, 'manageOrders'])->name('store.orders');
//     // });

//     // Routes pour la gestion des permissions
//     // Route::get('/permissions', [PermissionController::class, 'index'])->name('permissions.index');
//     // Route::post('/permissions/update', [PermissionController::class, 'update'])->name('permissions.update');
//     // Route::get('/roles/{roleId}/permissions', [PermissionController::class, 'getPermissions']);

    
//     Route::resource('stores', StoreController::class);
//     Route::resource('ventes', VentesController::class);


//     //Route::resource('roles', RoleController::class)->middleware('can:manage roles');
//     Route::resource('permissions', PermissionController::class)->middleware('can:manage roles');

//     //Route::post('/users/{user}/assign-role', [UserAdminController::class, 'assignRole'])->name('users.assignRole');


//     Route::resource('utilisateurs', UserAdminController::class)->middleware('can:manage users');

    

// });


Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index']);

    Route::middleware(['role:admin'])->group(function () {
        Route::get('stores', [StoreController::class, 'index'])->name('stores.index');
        Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');
        Route::get('stock', [AdminController::class, 'StockArticle'])->name('stock.index');
        Route::get('ventes', [VentesController::class, 'index'])->name('ventes.index');
        Route::get('commandes', [CommandesController::class, 'index'])->name('commandes.index');
        //Creéation des users du magasins
        Route::get('utilisateurs', [UserAdminController::class, 'index'])->name('utilisateurs.index');
        Route::get('utilisateurs/create', [UserAdminController::class, 'create'])->name('utilisateurs.create');
        Route::post('utilisateurs', [UserAdminController::class, 'store'])->name('utilisateurs.store');

    });

    // Routes accessibles uniquement par les managers
    Route::middleware(['role:manager'])->group(function () {
        Route::resource('stores', StoreController::class);
        Route::resource('utilisateurs', UserAdminController::class)->middleware('can:manage users');
        
        // Gestion des articles
        Route::resource('articles', ArticleController::class);
        Route::get('articles/{id}/promotion', [ArticleController::class, 'promotion'])->name('articles.promotion');
        Route::post('articles/{id}/toggle-promotion', [ArticleController::class, 'togglePromotion'])->name('articles.togglePromotion');
        
        // Stock articles
        Route::get('stock', [AdminController::class, 'StockArticle'])->name('stock.index');
        Route::get('stock/edit/{id}', [AdminController::class, 'EditStockArticle'])->name('edit.stock.article');
        Route::put('stock/edit/{id}', [AdminController::class, 'Stockupdate'])->name('stock.update');

        // Génération de code-barres
        Route::get('codeBarres', [BarcodeController::class, 'index'])->name('codeBarres.index');
        Route::post('codeBarres', [BarcodeController::class, 'store'])->name('codeBarres.store');

        Route::resource('ventes', VentesController::class);

        // Gestion des commandes
        Route::resource('commandes', CommandesController::class);
        
    });

    // Routes accessibles uniquement par les employés
    Route::middleware(['role:employee'])->group(function () {
        // Route::get('dashboard', [EmployeeController::class, 'index'])->name('employee.dashboard');
        Route::resource('orders', OrderController::class);


        // Gestion des commandes
        Route::resource('commandes', CommandesController::class);

        // Gestion des articles
        Route::resource('articles', ArticleController::class);
        Route::get('articles/{id}/promotion', [ArticleController::class, 'promotion'])->name('articles.promotion');
        Route::post('articles/{id}/toggle-promotion', [ArticleController::class, 'togglePromotion'])->name('articles.togglePromotion');
         
        // Stock articles
        Route::get('stock', [AdminController::class, 'StockArticle'])->name('stock.index');
        Route::get('stock/edit/{id}', [AdminController::class, 'EditStockArticle'])->name('edit.stock.article');
        Route::put('stock/edit/{id}', [AdminController::class, 'Stockupdate'])->name('stock.update');
 
        // Génération de code-barres
        Route::get('codeBarres', [BarcodeController::class, 'index'])->name('codeBarres.index');
        Route::post('codeBarres', [BarcodeController::class, 'store'])->name('codeBarres.store');
 
        Route::resource('ventes', VentesController::class);

    });
});


// Auth::routes();
Auth::routes(['verify' => true]);

Route::get('/email/verify', [VerificationController::class, 'show'])->name('verification.notice');

Route::middleware(['auth', 'verified'])->prefix('home')->name('home.')->group(function () {
    // Route pour la page d'accueil
    Route::get('/', [HomeController::class, 'index'])->name('home');
    
    // Route pour afficher les détails d'une commande
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('orders.show');

    Route::post('/account', [UserController::class, 'updateAccount'])->name('account.update');

});



Route::fallback(function() {
    // Récupérer toutes les catégories (ou vous pouvez ajuster la logique selon vos besoins)
    $categories = Category::all();

    // Retourner la vue 404 en passant les catégories
    return view('frontend.pages.404', ['categories' => $categories]);
});




