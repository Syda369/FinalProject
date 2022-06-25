<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('admin:admin')->group(function () {
    Route::get('admin/login', [AdminController::class, 'loginForm']);
    Route::post('admin/login', [AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin/dashboard');
    })->name('dashboard')->middleware('auth:admin');
});
 //Admin All route
 Route::get('admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
 Route::get('admin/profile', [AdminProfileController::class, 'AdminProfile'])->name('admin.profile');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
 //index
 Route::get('/',[indexController::class,'index']);


 //AdminBrands Route///
  Route::prefix('brand')->group(function(){

Route::get('/view', [brandController::class, 'BrandView'])->name('all.brand');
Route::post('/store', [brandController::class, 'BrandStore'])->name('brand.store');

Route::get('/edit/{id}', [brandController::class, 'BrandEdit'])->name('brand.edit');
Route::post('/update', [brandController::class, 'BrandUpdate'])->name('brand.update');
Route::get('/delete/{id}', [brandController::class, 'BrandDelete'])->name('brand.delete');
  });

  //Admin  Catogery route
  Route::prefix('Category')->group(function(){

    Route::get('/view', [CategoryController::class, 'CategoryView'])->name('view.category');
    Route::post('/store', [CategoryController::class, 'CategoryStore'])->name('category.store');
    
    Route::get('/edit/{id}', [CategoryController::class, 'CategoryEdit'])->name('category.edit');
    Route::post('/update', [CategoryController::class, 'CategoryUpdate'])->name('category.update');
    Route::get('/delete/{id}', [CategoryController::class, 'CategoryDelete'])->name('category.delete');
  //sub Admin Category
  
  Route::get('/sub/view', [SubCategoryController::class, 'subCategoryView'])->name('sub.category');

  Route::post('/sub/store', [SubCategoryController::class, 'SubCategoryStore'])->name('subcategory.store');
  
  Route::get('/sub/edit/{id}', [SubCategoryController::class, 'subCategoryEdit'])->name('subcategory.edit');
  Route::post('/sub/update', [SubCategoryController::class, 'subCategoryUpdate'])->name('subcategory.update');
  Route::get('/sub/delete/{id}', [SubCategoryController::class, 'subCategoryDelete'])->name('subcategory.delete');
});

//add product Admin
Route::prefix('product')->group(function(){

  Route::get('/add', [ProductController::class, 'addProduct'])->name('add-product');
  Route::get('/subcategory/ajax/{category_id}', [ProductController::class, 'getSubCategory']);
  Route::post('/store', [ProductController::class, 'StoreProduct'])->name('product-store');
  Route::get('/manage', [ProductController::class, 'ManageProduct'])->name('manage-product');
  Route::get('/edit/{id}', [ProductController::class, 'editProduct'])->name('product-edit');
  Route::get('/inactive/{id}', [ProductController::class, 'ProductInactive'])->name('product-inactive');
  Route::get('/active/{id}', [ProductController::class, 'ProductActive'])->name('product-active');
  Route::get('/delete/{id}', [ProductController::class, 'ProductDelete'])->name('product.delete');

    });
  