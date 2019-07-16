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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('themdb',function(){
// 	$a =  new App\listuser();
// 	$a->username='hungcfc';
// 	$a->email='abc@gmail.com';
// 	$a->address='ha noi';
// 	$a->save();
// });

Route::get('hienthiarray',function(){
	$a = App\listuser::all()->toArray();
	var_dump($a);
});

Route::get('test','Myfirstcontroller@getcontroller');


Route::group(['prefix'=>'thaotac'], function(){
	Route::get('danhsach','Myfirstcontroller@getDanhSach');

	Route::get('them','Myfirstcontroller@getThem')->name('add');
	Route::post('them','Myfirstcontroller@postThem') ;
	
	Route::get('sua/{id}','Myfirstcontroller@getSua')->name('Update');
	Route::post('sua/{id}','Myfirstcontroller@postSua');

	Route::get('xoa/{id}','Myfirstcontroller@getXoa')->name('Delete');

});