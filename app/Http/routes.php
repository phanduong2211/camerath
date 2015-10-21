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

Route::get('/','getDanhMucSanPham@getdanhmuc');
/*use App\Http\Controllers\getDanhMucSanPham;
Route::get('/', function () {
	//$bien=Route::get('','getDanhMucSanPham@getdanhmuc');ư
    return getDanhMucSanPham::gettest();

});*/

Route::get("blog.html","blog@Viewblog");
Route::get("giai-phap.html","giaiphap@giaiphaplapdat");
Route::get("/{infomation}","detailPages@getname");

