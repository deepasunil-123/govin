<?php
use App\Http\Controllers\mainprjectcontroller;
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

Route::get('index',[mainprjectcontroller::class,'index']);
Route::get('index_details/{id}',[mainprjectcontroller::class,'index_details']);
//Route::post('index_add_to_cart/{id}',[mainprjectcontroller::class,'index_add_to_cart']);

Route::get('login',[mainprjectcontroller::class,'login']);
Route::get('buyer_reg',[mainprjectcontroller::class,'buyreg']);
Route::get('seller_reg',[mainprjectcontroller::class,'sellerreg']);
Route::post('buyer_insert_form',[mainprjectcontroller::class,'buyer_insert_form']);
Route::post('seller_insert_form',[mainprjectcontroller::class,'seller_insert_form']);
Route::post('login_form',[mainprjectcontroller::class,'login_form']);
Route::get('home',[mainprjectcontroller::class,'home']);
Route::get('home_buyer',[mainprjectcontroller::class,'home_buyer']);
Route::get('home_seller',[mainprjectcontroller::class,'home_seller']);

Route::get('admin_view_profile',[mainprjectcontroller::class,'admin_view_profile']);
Route::get('admin_edit_profile',[mainprjectcontroller::class,'admin_edit_profile']);
Route::post('admin_update_profile',[mainprjectcontroller::class,'admin_update_profile']);

Route::get('buyer_view_profile',[mainprjectcontroller::class,'buyer_view_profile']);
Route::get('buyer_edit_profile',[mainprjectcontroller::class,'buyer_edit_profile']);
Route::post('buyer_update_profile',[mainprjectcontroller::class,'buyer_update_profile']);

Route::get('seller_view_profile',[mainprjectcontroller::class,'seller_view_profile']);
Route::get('seller_edit_profile',[mainprjectcontroller::class,'seller_edit_profile']);
Route::post('seller_update_profile',[mainprjectcontroller::class,'seller_update_profile']);


Route::get('admin_view_seller',[mainprjectcontroller::class,'admin_view_seller']);
Route::get('admin_view_seller_details/{id}',[mainprjectcontroller::class,'admin_view_seller_details']);
Route::post('approvereject/{id}',[mainprjectcontroller::class,'approvereject']);


Route::get('admin_view_buyer',[mainprjectcontroller::class,'admin_view_buyer']);
Route::get('admin_view_buyer_details/{id}',[mainprjectcontroller::class,'admin_view_buyer_details']);
Route::post('approvereject_buyer/{id}',[mainprjectcontroller::class,'approvereject_buyer']);


Route::get('admin_add_category_form',[mainprjectcontroller::class,'admin_add_category_form']);
Route::post('admin_insert_category',[mainprjectcontroller::class,'admin_insert_category']);
Route::get('admin_view_category',[mainprjectcontroller::class,'admin_view_category']);
Route::get('admin_edit_cat/{id}',[mainprjectcontroller::class,'admin_edit_cat']);
Route::post('admin_update_cat/{id}',[mainprjectcontroller::class,'admin_update_cat']);
Route::get('admin_delete_cat/{id}',[mainprjectcontroller::class,'admin_delete_cat']);



Route::get('admin_add_sub_cat_form',[mainprjectcontroller::class,'admin_cat_data']);

Route::post('admin_add_sub_cat',[mainprjectcontroller::class,'admin_sub_cat_insert']);

Route::get('admin_view_sub_cat_view',[mainprjectcontroller::class,'admin_view_sub_category']);

Route::get('admin_edit_sub_cat/{id}',[mainprjectcontroller::class,'admin_edit_sub_cat']);

Route::post('admin_update_sub_cat/{id}',[mainprjectcontroller::class,'admin_update_sub_cat']);

Route::get('admin_delete_sub_cat/{id}',[mainprjectcontroller::class,'admin_delete_sub_cat']);

Route::get('sub_category_data',[mainprjectcontroller::class,'viewsub_cat_data']);

Route::get('add_product',[mainprjectcontroller::class,'add_product']);

Route::post('add_pro_data',[mainprjectcontroller::class,'add_pro_data']);
Route::get('view_product',[mainprjectcontroller::class,'view_product']);
Route::get('seller_edit_product/{id}',[mainprjectcontroller::class,'seller_edit_product']);
Route::post('seller_update_pro_data/{id}',[mainprjectcontroller::class,'seller_update_pro_data']);
Route::get('seller_delete_product/{id}',[mainprjectcontroller::class,'seller_delete_product']);


Route::get('buyer_view_product',[mainprjectcontroller::class,'buyer_view_product']);

// Route::post('search_product',[mainprjectcontroller::class,'search_product']);

Route::get('check_search_product',[mainprjectcontroller::class,'check_search_product']);

Route::get('buyer_view_product_details/{id}',[mainprjectcontroller::class,'buyer_view_product_details']);

Route::get('admin_view_product',[mainprjectcontroller::class,'admin_view_product']);

Route::post('add_to_cart/{id}',[mainprjectcontroller::class,'add_to_cart']);

Route::get('buyer_view_cart',[mainprjectcontroller::class,'buyer_view_cart']);

Route::get('buyer_qty_update/{id}',[mainprjectcontroller::class,'buyer_qty_update']);

Route::get('proceed_to_checkout',[mainprjectcontroller::class,'proceed_to_checkout']);

Route::post('proceed_to_checkout_data',[mainprjectcontroller::class,'proceed_to_checkout_insert_data']);

Route::get('remove_cart_data/{id}',[mainprjectcontroller::class,'remove_cart_data']);
Route::get('buyer_view_order',[mainprjectcontroller::class,'buyer_view_order']);

Route::get('product_details/{id}',[mainprjectcontroller::class,'product_details']);


Route::get('view_orders',[mainprjectcontroller::class,'view_orders']);

Route::get('seller_view_product_details/{id}',[mainprjectcontroller::class,'seller_view_product_details']);
Route::post('seller_view_product_app_rej/{id}',[mainprjectcontroller::class,'seller_view_product_app_rej']);



Route::get('contact-us',[mainprjectcontroller::class,'contactus']);

Route::get('about_us',[mainprjectcontroller::class,'aboutus']);

Route::post('stripe',[mainprjectcontroller::class,'stripe']);
Route::post('stripePost',[mainprjectcontroller::class,'stripePost'])->name('stripepost');

Route::get('sel_change_pwd',[mainprjectcontroller::class,'sel_change_pwd']);
Route::post('sel_change_pwdfunction',[mainprjectcontroller::class,'sel_change_pwdfunction']);

Route::get('buy_change_pwd',[mainprjectcontroller::class,'buy_change_pwd']);
Route::post('buy_change_pwdfunction',[mainprjectcontroller::class,'buy_change_pwdfunction']);
Route::get('adm_change_pwd',[mainprjectcontroller::class,'adm_change_pwd']);
Route::post('adm_change_pwdfunction',[mainprjectcontroller::class,'adm_change_pwdfunction']);

Route::get('forgot_pwd',[mainprjectcontroller::class,'forgot_pwd']);

Route::post('forgot_pwd_function',[mainprjectcontroller::class,'forgot_pwd_function']);
Route::post('forgot_pwd2_function',[mainprjectcontroller::class,'forgot_pwd2_function']);
Route::post('forgot_pwd3_function',[mainprjectcontroller::class,'forgot_pwd3_function']);


Route::get('tracking_det/{id}',[mainprjectcontroller::class,'tracking_det']);

Route::post('tracking_det_insert/{id}',[mainprjectcontroller::class,'tracking_det_insert']);
Route::get('logout',[mainprjectcontroller::class,'logout']);

Route::get('search_product_data',[mainprjectcontroller::class,'search_product_data']);
Route::get('admin_view_orders',[mainprjectcontroller::class,'admin_view_orders']);
Route::get('admin_view_order_details/{id}',[mainprjectcontroller::class,'admin_view_order_details']);


