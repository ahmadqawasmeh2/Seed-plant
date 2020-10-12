<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('admin')->name('login.')->group(function(){
    Route::get('login', 'auth\LoginController@login_page')->name('login.login_page');
    Route::post('login', 'auth\LoginController@login')->name('login.login');
    Route::post('logout', 'auth\LoginController@logout')->name('logout');

});


Route::prefix('admin')->namespace('admin')->name('admin.')->middleware('auth:admins')->group(function () 
{

    Route::get('/home', 'home\HomeController@home_page')->name('admin.home');
    Route::get('addcategroy', 'categroy\AddController@add_page')->name('admin.categroy');
    Route::post('addcategroy', 'categroy\AddController@add_categroy')->name('admin.add_categroy');
    Route::get('{category}/editcategroy', 'categroy\EditCategroyController@edit_categroy')->name('admin.edit_categroy');
    Route::post('{category}/editcategroy', 'categroy\EditCategroyController@editcategroy')->name('admin.editcategroy');
    Route::get('/{category}/deletecategroy', 'categroy\EditCategroyController@delete')->name('admin.deletecat');

    Route::get('addproduct', 'product\AddController@addpage')->name('admin.product');
    Route::post('addproduct', 'product\AddController@add_product')->name('admin.add_product');
    Route::get('{products}/editproducts', 'product\EditProductCotroller@edit_products')->name('admin.edit_products');
    Route::post('{products}/edit-products', 'product\EditProductCotroller@editproducts')->name('admin.editproducts');
    Route::get('/{products}/deleteproduct', 'product\EditProductCotroller@delete')->name('admin.delete');

    Route::get('addAdmin', 'Admin\AddController@add_page')->name('admin.admin');
    Route::post('addAdmin', 'Admin\AddController@add_Admin')->name('admin.add_Admin');
    Route::get('Profile', 'Admin\EditProfileController@edit_page')->name('admin.edit');
    Route::post('{admins}/updateprofile', 'Admin\EditProfileController@updateprofile')->name('admin.updateprofile');
    Route::get('/{admins}/deleteuser','Admin\EditProfileController@deleteuser')->name('admin.deleteuser');

    Route::get('Showuser', 'Admin\ShowController@show_page')->name('admin.show');
    Route::get('showcategroy', 'categroy\ShowController@show_page')->name('admin.showcategroy');
    Route::get('showproduct', 'product\ShowController@show_page')->name('admin.showproduct');

    Route::get('/contact','contact\ContactCotroller@Show_Page')->name('admin.contact');
});

Route::namespace('user')->group(function()
{
    Route::get('/','Home\HomeCotroller@home');
});

Route::prefix('user')->namespace('user')->name('user.')->group(function()
{
 Route::get('product','product\ProductCotroller@product')->name('showproduct');
 Route::get('/{id}/details','product\DetailsProductCotroller@detailsproduct')->name('detailsproduct');

 Route::get('contact','contact\ContactCotroller@contact')->name('contact');
 Route::get('about','About\AboutCotroller@about')->name('about');
});