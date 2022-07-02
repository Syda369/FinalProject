<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\brandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeImageController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\CartPageController;


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
   //Admin homePage image Route///
   Route::prefix('image')->group(function(){

    Route::get('/view', [HomeImageController::class, 'imagesView'])->name('manage-image');
    Route::post('/store', [HomeImageController::class, 'ImageStore'])->name('image.store');
    
    
    Route::get('/edit/{id}', [HomeImageController::class, 'ImageEdit'])->name('image.edit');
    Route::post('/update', [HomeImageController::class, 'ImageUpdate'])->name('image.update');
    Route::get('/delete/{id}', [HomeImageController::class, 'ImageDelete'])->name('image.delete');
      });
      // product Details Page
      Route::get('/product/details/{id}', [IndexController::class, 'ProDetails']);
      //Subcategory data
      Route::get('subcategory/products/{subcat_id}/{slug}', [IndexController::class, 'subacategroypro']);

     //shop page (all product page)
 
     

     Route::get('/shope', [IndexController::class, 'shope']);
     Route::get('/product/view/modal/{id}', [IndexController::class, 'productViewajax']);
     
     Route::any('/cart/data/store/{id}', [AddToCartController::class, 'AddToCart']); 

    
     Route::group(['prefix'=>'user','middleware' => ['user','auth'],'namespace'=>'User'],function(){

    
      
      Route::get('/mycart', [AddToCartController::class,'MyCart'])->name('mycart');

      Route::get('/get-cart-product', [AddToCartController::class,'GetCartProduct']);
      Route::get('/cart-remove/{rowId}', [AddToCartController::class, 'RemoveCartProduct']);
      Route::get('/cart-increment/{rowId}', [AddToCartController::class, 'CartIncrement']);
      Route::get('/cart-decrement/{rowId}', [AddToCartController::class, 'CartDecrement']);
      
           
      
      });
      
Route::prefix('shipping')->group(function(){
  
// Ship Division 
Route::get('/division/view', [ShippingAreaController::class, 'DivisionView'])->name('manage-division');
Route::post('/division/store', [ShippingAreaController::class, 'DivisionStore'])->name('division.store');
Route::get('/division/edit/{id}', [ShippingAreaController::class, 'DivisionEdit'])->name('division.edit');
Route::post('/division/update/{id}', [ShippingAreaController::class, 'DivisionUpdate'])->name('division.update');
Route::get('/division/delete/{id}', [ShippingAreaController::class, 'DivisionDelete'])->name('division.delete');


  // Ship District 
Route::get('/district/view', [AdminProfileController::class, 'DistrictView'])->name('manage-district');

Route::post('/division/store', [AdminProfileController::class, 'DivisionStore'])->name('division.store');
Route::post('/district/store', [AdminProfileController::class, 'DistrictStore'])->name('district.store');

Route::get('/division/edit/{id}', [AdminProfileController::class, 'DivisionEdit'])->name('division.edit');
Route::get('/district/edit/{id}', [AdminProfileController::class, 'DistrictEdit'])->name('district.edit');

Route::post('/division/update/{id}', [AdminProfileController::class, 'DivisionUpdate'])->name('division.update');
Route::post('/district/update/{id}', [AdminProfileController::class, 'DistrictUpdate'])->name('district.update');

Route::get('/division/delete/{id}', [AdminProfileController::class, 'DivisionDelete'])->name('division.delete');
Route::get('/district/delete/{id}', [AdminProfileController::class, 'DistrictDelete'])->name('district.delete');

Route::get('/state/view', [AdminProfileController::class, 'StateView'])->name('manage-state');
Route::post('/state/store', [AdminProfileController::class, 'StateStore'])->name('state.store');


Route::get('/state/edit/{id}', [AdminProfileController::class, 'StateEdit'])->name('state.edit');


Route::get('/state/delete/{id}', [AdminProfileController::class, 'StateDelete'])->name('state.delete');

 



  
  }); 