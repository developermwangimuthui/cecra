<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pagecontroller;
use App\Http\Controllers\Shopcontroller;
use App\Http\Controllers\RestaurantPortal\RestaurantController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\BusinessUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManageStoreController;
use App\Http\Controllers\FileManagerController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
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
Route::get('/',[Pagecontroller::class,'index'])->name('/');
Route::get('lang/{locale}',[Pagecontroller::class,'lang'])->name('lang/{locale}');
Route::post('locale',[Pagecontroller::class,'locale'])->name('locale');
Route::get('bus/lang/{locale}',[Pagecontroller::class,'lang'])->name('bus/lang/{locale}');
Route::get('lang2/{locale}',[Pagecontroller::class,'lang'])->name('lang2');

Route::get('/shops',[Shopcontroller::class,'showShops'])->name('shops');
Route::get('/restaurants',[RestaurantController::class,'showRestaurants'])->name('restaurants');
Route::get('/user_login',[Usercontroller::class,'login'])->name('user_login');
Route::post('/login_check',[Usercontroller::class,'loginCheck'])->name('login_check');
Route::get('/user/logout',[Usercontroller::class,'logout'])->name('user/logout');
Route::get('/user/signup',[Usercontroller::class,'signup'])->name('user_signup');
Route::post('/signup_check',[Usercontroller::class,'signupCheck'])->name('signup_check');
Route::get('/user/dashboard',[Usercontroller::class,'userProfile'])->name('user/dashboard');
Route::get('/user/billing',[Usercontroller::class,'userBilling'])->name('user/billing');
Route::get('/user/passwordsec',[Usercontroller::class,'userPasswordSec'])->name('user/passwordsec');
Route::get('/user/contactinfo',[Usercontroller::class,'userContactInfo'])->name('user/contactinfo');
Route::get('/user/cart',[Usercontroller::class,'userCart'])->name('user/cart');
Route::get('/user/orderhistory',[Usercontroller::class,'userOrderHistory'])->name('user/orderhistory');
Route::get('/bus/signup',[BusinessUserController::class,'signup'])->name('bus/signup');
Route::post('/bus/signup_submit',[BusinessUserController::class,'signup_submit'])->name('bus/signup_submit');
Route::get('/bus/signin',[BusinessUserController::class,'signin'])->name('bus/signin');
Route::post('/bus/logincheck',[BusinessUserController::class,'logincheck'])->name('bus/logincheck');
Route::get('/bus/signout',[BusinessUserController::class,'signout'])->name('bus/signout');
Route::get('/bus/dashboard',[BusinessUserController::class,'dashboard'])->name('bus/dashboard');
Route::get('/bus/customers',[BusinessUserController::class,'customers'])->name('bus/customers');
Route::get('/bus/store',[BusinessUserController::class,'manageStore'])->name('bus/store');
Route::post('/bus/storeUpdate',[BusinessUserController::class,'storeUpdate'])->name('bus/storeUpdate');
//Route::get('/bus/products',[BusinessUserController::class,'manageProducts'])->name('bus/products');
Route::get('/bus/singleproduct/{id}',[BusinessUserController::class,'showSingleProduct'])->name('bus/singleproduct');
Route::get('/bus/editproduct/{id}',[BusinessUserController::class,'editProduct'])->name('bus/editproduct');

Route::get('/bus/product/create',[\App\Http\Controllers\Seller\Shop\ProductController::class,'create'])->name('shop.product.create');
Route::post('/bus/product/fetch',[\App\Http\Controllers\Seller\Shop\ProductController::class,'fetch'])->name('shop.product.fetch');
Route::get('/bus/product/edit/{id}',[\App\Http\Controllers\Seller\Shop\ProductController::class,'edit'])->name('shop.product.edit');
Route::get('/bus/product/delete/{id}',[\App\Http\Controllers\Seller\Shop\ProductController::class,'delete'])->name('shop.product.delete');
Route::post('/bus/product/update/{id}',[\App\Http\Controllers\Seller\Shop\ProductController::class,'update'])->name('shop.product.update');
Route::get('/bus/product',[\App\Http\Controllers\Seller\Shop\ProductController::class,'index'])->name('shop.product');
Route::post('/bus/shop/product/store',[\App\Http\Controllers\Seller\Shop\ProductController::class,'store'])->name('shop.product.store');
Route::post('/bus/shop/product/fetch-subcategories', [\App\Http\Controllers\Seller\Shop\ProductController::class, 'fetchChildCategory'])->name('shop.product.fetch-subcategories');
// Delete Image
Route::post('/bus/shop/product/delete/image/{id}', [
    \App\Http\Controllers\Seller\Shop\ProductController::class, 'deleteImage'
])->name('shop.product.delete.image');

// Delete Color
Route::post('/bus/shop/product/delete/color/{id}', [
    \App\Http\Controllers\Seller\Shop\ProductController::class, 'deleteColor'
])->name('shop.product.delete.color');
// Delete Size
Route::post('/bus/shop/product/delete/size/{id}', [
    \App\Http\Controllers\Seller\Shop\ProductController::class, 'deleteSize'
])->name('shop.product.delete.size');

Route::get('/bus/deleteProduct/{id}',[BusinessUserController::class,'deleteProduct'])->name('bus/deleteProduct');

Route::post('/bus/ajaxSubCats',[BusinessUserController::class,'ajaxSubCats'])->name('bus/ajaxSubCats');
Route::post('/bus/editproductsubmit',[BusinessUserController::class,'editproductsubmit'])->name('bus/editproductsubmit');

Route::get('/bus/orders',[BusinessUserController::class,'manageOrders'])->name('bus/orders');

Route::get('/site-owner',[AdminController::class,'index'])->name('site-owner');
Route::get('/site-owner/dashboard',[AdminController::class,'dashboard'])->name('site-owner/dashboard');
Route::get('/site-owner/cmspages',[AdminController::class,'cmspageList'])->name('site-owner/cmspages');
Route::get('/site-owner/cmspageform',[AdminController::class,'cmsPageEdit'])->name('site-owner/cmspageform');


Route::get('/site-owner/cmspageform',[AdminController::class,'cmsPageEdit'])->name('site-owner/cmspageform');



Route::get('/bus/manage-store', [
    \App\Http\Controllers\BusinessUserController::class, 'index'
])->name('manage-store');

Route::post('/fetch-categories', [
    \App\Http\Controllers\BusinessUserController::class, 'fetchParentCategory'
])->name('fetch-categories');

Route::post('/fetch-subcategories', [
    \App\Http\Controllers\BusinessUserController::class, 'fetchChildCategory'
])->name('fetch-subcategories');

Route::post('/bus/manage-store/update', [
    \App\Http\Controllers\BusinessUserController::class, 'update'
])->name('update-store');


/**
 * Restuarant Controller
 */



Route::prefix('restaurantportal')->group(function() {
    Route::get('/', [
        \App\Http\Controllers\RestaurantPortal\DashboardController::class, 'index'
    ])->name('dashboard');

    Route::get('/dashboard', [
        \App\Http\Controllers\RestaurantPortal\DashboardController::class, 'index'
    ])->name('restaurantportal.dashboard');

    Route::get('/clients', [
        \App\Http\Controllers\RestaurantPortal\ClientController::class, 'index'
    ])->name('clients');

    Route::get('/menus', [
        \App\Http\Controllers\RestaurantPortal\MenuController::class, 'index'
    ])->name('menus');

    /** Dish Route */

    Route::post('/dish/fetch', [
        \App\Http\Controllers\RestaurantPortal\MenuController::class, 'fetchDish'
    ])->name('dish.fetch');
    Route::get('/dish/add', [
        \App\Http\Controllers\RestaurantPortal\MenuController::class, 'create'
    ])->name('dish.add');
    Route::post('/dish/store', [
        \App\Http\Controllers\RestaurantPortal\MenuController::class, 'store'
    ])->name('dish.store');
    Route::get('/dish/edit/{id}', [
        \App\Http\Controllers\RestaurantPortal\MenuController::class, 'edit'
    ])->name('dish.edit');
    // Delete dish
    Route::get('/dish/delete/{id}', [
        \App\Http\Controllers\RestaurantPortal\MenuController::class, 'delete'
    ])->name('dish.delete');

    // delete selected

    Route::get('/dish/d-selected', [
        \App\Http\Controllers\RestaurantPortal\MenuController::class, 'deleteSelected'
    ])->name('dish.delete-selected');

    Route::post('/dish/update/{id}', [
        \App\Http\Controllers\RestaurantPortal\MenuController::class, 'update'
    ])->name('dish.update');

    Route::post('/dish/delete/image/{id}', [
        \App\Http\Controllers\RestaurantPortal\MenuController::class, 'deleteImage'
    ])->name('dish.delete.image');


    Route::get('/orders', [
        \App\Http\Controllers\RestaurantPortal\OrderController::class, 'index'
    ])->name('orders');

    Route::any('/restaurants', [
        \App\Http\Controllers\RestaurantPortal\RestaurantController::class, 'index'
    ])->name('restaurants');

    Route::get('/mentions', [
        \App\Http\Controllers\RestaurantPortal\MentionController::class, 'index'
    ])->name('mentions');

    Route::get('/tasks', [
        \App\Http\Controllers\RestaurantPortal\TaskController::class, 'index'
    ])->name('tasks');

    Route::get('/filemanager', [
        \App\Http\Controllers\FileManagerController::class, 'index'
    ]);
});



Route::get('/how-to-create-your-business', [
    \App\Http\Controllers\Pagecontroller::class, 'howToCreateYourBusiness'
])->name('how-to-create-your-business');

// password reset

// -----------------------------User forget password ------------------------------
Route::get('/forget-password', [
    App\Http\Controllers\Auth\ForgotPasswordController::class, 'getEmail'
])->name('forget-password');

Route::post('/forget-password', [
    App\Http\Controllers\Auth\ForgotPasswordController::class, 'postEmail'
])->name('forget-password');

// ------------------------------User Reset Password--------------------------------
Route::get('/reset-password/{token}', [
    App\Http\Controllers\Auth\ResetPasswordController::class, 'getPassword'
])->name('show-reset_form');

Route::post('/reset-password', [
    App\Http\Controllers\Auth\ResetPasswordController::class, 'updatePassword'
])->name('reset-password');


// -----------------------------Vendor forget password ------------------------------
Route::get('/bus/forget-password', [
    App\Http\Controllers\Auth\VendorForgotPasswordController::class, 'getVendorEmail'
])->name('V_forget-password');

Route::post('/bus/forget-password', [
    App\Http\Controllers\Auth\VendorForgotPasswordController::class, 'postVendorEmail'
])->name('V_forget-password');

// ------------------------------Vendor Reset Password--------------------------------
Route::get('/bus/reset-password/{token}', [
    App\Http\Controllers\Auth\VendorResetPasswordController::class, 'getVendorPassword'
])->name('V_show-reset_form');

Route::post('/bus/reset-password', [
    App\Http\Controllers\Auth\VendorResetPasswordController::class, 'updateVendorPassword'
])->name('V_reset-password');

// thankyou page test Route

Route::view('/thankyou', 'user_pages.thankyou_page');

// Route::view('/shop-Portal', 'seller.shop.Shop_Portal.index');

Route::get('/shop-page/{id}', [
    App\Http\Controllers\Seller\Shop\ShopPortalController::class, 'index'
])->name('shop-portal');

Route::get('/shop-category/{id}', [
    App\Http\Controllers\Seller\Shop\ShopPortalController::class, 'showCategory'
])->name('shop.category.show');


Route::get('/productos/{id}',[
    \App\Http\Controllers\Seller\Shop\ShopPortalController::class,'showProduct'
    ])->name('shop.product.show');




