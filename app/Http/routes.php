<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//////////////-----------------------------------------------View---------------------------------------

Route::get('/','getDanhMucSanPham@getdanhmuc');
/*use App\Http\Controllers\getDanhMucSanPham;
Route::get('/', function () {
	//$bien=Route::get('','getDanhMucSanPham@getdanhmuc');ư
    return getDanhMucSanPham::gettest();

});*/

Route::get("blog.html","blog@Viewblog");
Route::get("giai-phap.html","giaiphap@giaiphaplapdat");

Route::get("/{infomation}","detailPages@getname");


/////////////////-------------------------------------------admin pages--------------------------------------
Route::controller("admin/menu","admin\menu");
Route::get("admin/login","admin\login@getLogin");
Route::get("admin/index","admin\login@checksessionlogin");
Route::post("admin/login","admin\login@checklogin");
Route::get("admin/logout","admin\login@logout");
Route::get("admin/products-list","admin\login@products_list");
Route::get("admin/add-product","admin\login@add_product");
Route::post("admin/add-product","admin\products@insert");

Route::get("admin/test","admin\login@test");
