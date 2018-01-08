<?php

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


Route::get('/',[
    'as'=>'home',
    'uses'=>'PageController@home'
]);
Route::get('page/{pageName}',[
   'as'=>'pages.view',
   'uses'=>'PageController@viewPage'
]);
Route::post('page/contact/send', [
    'as' => 'contact.send',
    'uses' => 'Admin\customerController@sendContactForm'
]);
Route::post('home/best-seller', [
    'as' => 'home.best-seller',
    'uses' => 'PageController@bestSeller'
]);

// router admin
Route::group(['prefix'=>'admin', 'middleware' => 'auth'],function ($route){

    /*
     * dashboard
     */
    Route::get('dashboard',[
        'as'=>'admin.dashboard.index',
        'uses'=>'Admin\DashboardController@index'
    ]);
    /*
     * Product
     */
    Route::get('product',[
        'as'=>'admin.product.index',
        'uses'=>'admin\ProductController@index'
    ]);
    Route::get('product/create',[
        'as'=>'admin.product.create',
        'uses'=>'admin\ProductController@create'
    ]);
    Route::post('product/store',[
        'as'=>'admin.product.store',
        'uses'=>'admin\ProductController@store'
    ]);
    Route::get('product/{id}/edit',[
        'as'=>'admin.product.edit',
        'uses'=>'admin\ProductController@edit'
    ]);
    Route::post('product/{id}/update',[
        'as'=>'admin.product.update',
        'uses'=>'admin\ProductController@update'
    ]);
    Route::post('product/{id}/delete',[
        'as'=>'admin.product.delete',
        'uses'=>'admin\ProductController@delete'
    ]);

    /*
     * Category
     */
    Route::get('category',[
        'as'=>'admin.category.index',
        'uses'=>'admin\CategoryController@index'
    ]);
    Route::get('category/create',[
        'as'=>'admin.category.create',
        'uses'=>'admin\CategoryController@create'
    ]);
    Route::post('category/store',[
        'as'=>'admin.category.store',
        'uses'=>'admin\CategoryController@store'
    ]);
    Route::get('category/{id}/edit',[
        'as'=>'admin.category.edit',
        'uses'=>'admin\CategoryController@edit'
    ]);
    Route::post('category/{id}/update',[
        'as'=>'admin.category.update',
        'uses'=>'admin\CategoryController@update'
    ]);
    Route::post('category/{id}/delete',[
        'as'=>'admin.category.delete',
        'uses'=>'admin\CategoryController@delete'
    ]);
    /*
    * User
    */
    Route::get('user',[
        'as'=>'admin.user.index',
        'uses'=>'admin\UserController@index'
    ]);
    Route::get('user/create',[
        'as'=>'admin.user.create',
        'uses'=>'admin\UserController@create'
    ]);
    Route::post('user/store',[
        'as'=>'admin.user.store',
        'uses'=>'admin\UserController@store'
    ]);
    Route::get('user/{id}/edit',[
        'as'=>'admin.user.edit',
        'uses'=>'Admin\UserController@edit'
    ]);
    Route::post('user/{id}/update',[
        'as'=>'admin.user.update',
        'uses'=>'Admin\UserController@update'
    ]);
    Route::post('user/{id}/delete',[
        'as'=>'admin.user.delete',
        'uses'=>'Admin\UserController@delete'
    ]);
    /*
    * roles
    */
    Route::get('role',[
        'as'=>'admin.role.index',
        'uses'=>'admin\RoleController@index'
    ]);
    Route::get('role/create',[
        'as'=>'admin.role.create',
        'uses'=>'admin\RoleController@create'
    ]);
    Route::post('role/store',[
        'as'=>'admin.role.store',
        'uses'=>'admin\RoleController@store'
    ]);
    Route::get('role/{id}/edit',[
        'as'=>'admin.role.edit',
        'uses'=>'admin\RoleController@edit'
    ]);
    Route::post('role/{id}/update',[
        'as'=>'admin.role.update',
        'uses'=>'admin\RoleController@update'
    ]);
    Route::post('role/{id}/delete',[
        'as'=>'admin.role.delete',
        'uses'=>'admin\RoleController@delete'
    ]);
    /*
    * customer
    */
    Route::get('customer',[
        'as'=>'admin.customer.index',
        'uses'=>'Admin\CustomerController@index'
    ]);

    Route::get('customer/mail/{id}',[
        'as'=>'admin.customer.mail',
        'uses'=>'Admin\CustomerController@readMail'
    ]);
    Route::post('message/{id}/delete',[
        'as'=>'admin.customer.delete',
        'uses'=>'Admin\CustomerController@delete'
    ]);
    Route::post('message/deleteMany',[
        'as'=>'admin.message.delete-many',
        'uses'=>'Admin\CustomerController@deleteMany'
    ]);
    Route::post('message/send', [
        'as' => 'admin.message.send',
        'uses' => 'Admin\CustomerController@send'
    ]);

    /**
     * Permissions
     */
    Route::get('permissions',[
        'as'=>'admin.permission.index',
        'uses'=>'Admin\PermissionController@index'
    ]);
    Route::get('permissions/create',[
        'as'=>'admin.permission.create',
        'uses'=>'Admin\PermissionController@create'
    ]);
    Route::post('permissions/store', [
        'as' => 'admin.permission.store',
        'uses' => 'Admin\PermissionController@store'
    ]);
    Route::get('permissions/{id}/edit',[
        'as'=>'admin.permission.edit',
        'uses'=>'Admin\PermissionController@edit'
    ]);
    Route::post('permissions/{id}/update',[
        'as' => 'admin.permission.update',
        'uses' => 'Admin\PermissionController@update'
    ]);
    Route::post('permissions/{id}/delete',[
        'as' => 'admin.permission.delete',
        'uses' => 'Admin\PermissionController@delete'
    ]);
});

Route::post('page/contact/send', [
    'as' => 'contact.send',
    'uses'=> 'HomeController@sendContactForm'
]);

Auth::routes();
Route::get('logout',[
    'as'=>'logout',
    'uses'=>'Auth\LoginController@logout'
]);

Route::group(['prefix' => 'shop'], function ($route) {
    $route->get('/', [
        'as' => 'shop.home',
        'uses' => 'ShopController@shop'
    ]);
    $route->get('category/{id}', [
        'as' => 'shop.category',
        'uses' => 'ShopController@category'
    ]);
    $route->get('product/{id}', [
        'as' => 'shop.product',
        'uses' => 'ShopController@product'
    ]);
    $route->post('product/add-to-cart', [
        'as' => 'shop.product.add-to-cart',
        'uses' => 'ShopController@addToCart'
    ]);
    $route->post('product/delete', [
        'as' => 'shop.product.delete',
        'uses' => 'ShopController@deleteProduct'
    ]);
    $route->post('product/inc-dec',[
        'as'=>'shop.product.inc-dec',
        'uses'=>'ShopController@incrementDecrement'
    ]);
});
Route::post('product/image-uploade',[
   'as'=> 'product.image.upload',
   'uses'=> 'ImageController@image'
]);