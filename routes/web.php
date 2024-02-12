<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\UserController;

//PUBLIC

Route::get('/', function () {
    return view('index');
});

Route::get('/register', [UserController::class, 'show_register']);
Route::post('/register', [UserController::class, 'register']);

Route::get('/login', [UserController::class, 'show_login']);
Route::post('/login', [UserController::class, 'login']);

Route::get('/logout', [UserController::class, 'logout']);

Route::get('/admin', [UserController::class, 'show_admin_login']);
Route::post('/admin',[UserController::class, 'admin_login']);
Route::get('/admin/logout', [UserController::class, 'admin_logout']);

Route::get('/products', [ProductController::class, 'products']);
Route::get('/products/{id}', [ProductController::class, 'products_d']);
Route::get('/laptop/{id}', [ProductController::class, 'laptop_page']);
Route::get('/mobile/{id}', [ProductController::class, 'mobile_page']);
Route::get('/audio/{id}', [ProductController::class, 'audio_page']);

//USER SIDE

Route::middleware('checkSessionCustomer')->get('/checkout/cart', [CheckoutController::class, 'checkout_cart']);
Route::middleware('checkSessionCustomer')->get('/checkout/{id}', [CheckoutController::class, 'checkout_product']);
Route::middleware('checkSessionCustomer')->post('/cart/{id}', [CheckoutController::class, 'add_to_cart']);
Route::middleware('checkSessionCustomer')->get('/cart', [CheckoutController::class, 'view_cart']);
Route::middleware('checkSessionCustomer')->delete('/cart/delete/{id}', [CheckoutController::class, 'delete_cart_product']);
Route::middleware('checkSessionCustomer')->post('/order/cart', [CheckoutController::class, 'place_order_cart']);
Route::middleware('checkSessionCustomer')->post('/order/{id}', [CheckoutController::class, 'place_order']);
Route::middleware('checkSessionCustomer')->get('/orders', [CheckoutController::class, 'view_orders']);
Route::middleware('checkSessionCustomer')->get('/orders/details/{id}', [CheckoutController::class, 'order_details']);
Route::middleware('checkSessionCustomer')->get('/profile', [UserController::class, 'show_profile']);
Route::middleware('checkSessionCustomer')->get('/profile/edit', [UserController::class, 'show_edit']);
Route::middleware('checkSessionCustomer')->put('/profile/edit', [UserController::class, 'edit']);


//ADMIN SIDE
Route::middleware('checkSessionAdmin')->get('/admin/products', [ProductController::class, 'admin_products']);
Route::middleware('checkSessionAdmin')->get('/admin/mobile/form', [ProductController::class, 'add_mobile_form']);
Route::middleware('checkSessionAdmin')->post('/admin/mobile', [ProductController::class, 'add_mobile']);
Route::middleware('checkSessionAdmin')->get('/admin/audio/form', [ProductController::class, 'add_audio_form']);
Route::middleware('checkSessionAdmin')->post('/admin/audio', [ProductController::class, 'add_audio']);
Route::middleware('checkSessionAdmin')->get('/admin/laptop/form', [ProductController::class, 'add_laptop_form']);
Route::middleware('checkSessionAdmin')->post('/admin/laptop', [ProductController::class, 'add_laptop']);
Route::middleware('checkSessionAdmin')->get('/admin/mobile/view/{id}', [ProductController::class,'view_mobile']);
Route::middleware('checkSessionAdmin')->get('/admin/audio/view/{id}', [ProductController::class,'view_audio']);
Route::middleware('checkSessionAdmin')->get('/admin/laptop/view/{id}', [ProductController::class,'view_laptop']);
Route::middleware('checkSessionAdmin')->get('/admin/mobile/edit/{id}', [ProductController::class, 'edit_mobile_form']);
Route::middleware('checkSessionAdmin')->put('/admin/edit/mobile/{id}', [ProductController::class, 'edit_mobile']);
Route::middleware('checkSessionAdmin')->get('/admin/audio/edit/{id}', [ProductController::class, 'edit_audio_form']);
Route::middleware('checkSessionAdmin')->put('/admin/edit/audio/{id}', [ProductController::class, 'edit_audio']);
Route::middleware('checkSessionAdmin')->get('/admin/laptop/edit/{id}', [ProductController::class, 'edit_laptop_form']);
Route::middleware('checkSessionAdmin')->put('/admin/edit/laptop/{id}', [ProductController::class, 'edit_laptop']);
Route::middleware('checkSessionAdmin')->delete('/admin/delete/mobile/{id}', [ProductController::class, 'delete_mobile']);
Route::middleware('checkSessionAdmin')->delete('/admin/delete/audio/{id}', [ProductController::class, 'delete_audio']);
Route::middleware('checkSessionAdmin')->delete('/admin/delete/laptop/{id}', [ProductController::class, 'delete_laptop']);
Route::middleware('checkSessionAdmin')->get('/admin/orders', [CheckoutController::class, 'view_orders_admin']);
Route::middleware('checkSessionAdmin')->get('/admin/orders/details/{id}', [CheckoutController::class, 'orders_details_admin']);
Route::middleware('checkSessionAdmin')->put('/admin/orders/accept/{id}', [CheckoutController::class, 'order_accept']);
Route::middleware('checkSessionAdmin')->put('/admin/orders/update/{id}', [CheckoutController::class, 'order_update']);
Route::middleware('checkSessionAdmin')->get('/admin/dashboard', [CheckoutController::class, 'show_dashboard']);

