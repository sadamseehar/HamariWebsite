<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\adminController;
use App\http\controllers\proController;

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


route::get('admin',[adminController::class, 'login']);
route::post('login_post',[adminController::class,"login_post"]);
route::get('logout',[adminController::class,"logout"]);



route::group(['middleware'=>'admin_auth'],function(){
    route::get('/',[adminController::class,"dashboard"]);
    route::get('category',[adminController::class,"category"]);
    route::get('addCategory',[adminController::class,"addCategory"]);
    route::post('addCategoryPost',[adminController::class,"addCategoryPost"]);

    route::get('delete/{id}',[adminController::class,'deleteCategory']);
    route::get('edit/{id}',[adminController::class,'editCategory']);


    route::get('subCategory',[adminController::class,"subCategory"]);
    route::get('addSubCategory',[adminController::class,"addSubCategory"]);
    route::post('addSubCategoryPost',[adminController::class,"addSubCategoryPost"]);

    route::post('subCategoryAjax',[adminController::class,'subCategoryAjax']);

    route::resource('product',proController::class);
    
});