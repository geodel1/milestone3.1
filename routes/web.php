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

Route::get('/home', 'SidebarmenuController@index');

Route::get('/articles', 'ArticlesController@showArticles'); 
Route::get('/articles/create','ArticlesController@createArticle');   
Route::get('/articles/{id}','ArticlesController@showArticle');	
Route::post('/articles/create','ArticlesController@saveArticle');  


Route::get('/articles/{id}/delete','ArticlesController@deleteArticle');  
Route::get('/articles/{id}/edit','ArticlesController@editformArticle');  
Route::post('/articles/{id}/edit','ArticlesController@editArticle');

Route::post('/articles/{id}/comment','ArticlesController@addComment'); 


Route::get('/sidebarmenu/dashboard', function(){
	return view('sidebarmenu.sidebardashboard');
});








Route::get('/sidebarmenu/users', function(){
	return view('sidebarmenu.sidebarusers');
});

Route::get('/sidebarmenu/users', 'SidebarmenuController@showUsers'); 
Route::get('/sidebarmenu/adduserform','SidebarmenuController@addUsers');

Route::post('/sidebarmenu/users','SidebarmenuController@saveUser');
Route::get('/sidebarmenu/{id}/delete','SidebarmenuController@deleteUser');  
Route::get('/sidebarmenu/{id}/editUser','SidebarmenuController@edituserform');
Route::post('/sidebarmenu/{id}/edit','SidebarmenuController@editUser');



Route::get('/sidebarmenu/sidebarcategories', function(){
	return view('sidebarmenu.sidebarcategories');
});
Route::get('/sidebarmenu/sidebarcategories', 'SidebarmenuController@showCategories'); 
Route::get('/sidebarmenu/addcategoryform','SidebarmenuController@addCategories');
Route::post('/sidebarmenu/sidebarcategories','SidebarmenuController@saveCategories');
Route::get('/sidebarmenu/{id}/deleteCategories','SidebarmenuController@deleteCategories');  
Route::get('/sidebarmenu/{id}/editCategories','SidebarmenuController@editcategoryform');
Route::post('/sidebarmenu/{id}/editCategories','SidebarmenuController@editCategories');



Route::get('/sidebarmenu/sidebaritems', function(){
	return view('sidebarmenu.sidebaritems');
});
Route::get('/sidebarmenu/sidebaritems', 'SidebarmenuController@showItems'); 
Route::get('/sidebarmenu/additemform','SidebarmenuController@addItems');
Route::post('/sidebarmenu/sidebaritems','SidebarmenuController@saveItems');
Route::get('/sidebarmenu/{id}/deleteItem','SidebarmenuController@deleteItem');  
Route::get('/sidebarmenu/{id}/editItem','SidebarmenuController@edititemform');
Route::post('/sidebarmenu/{id}/edit','SidebarmenuController@editItem');



Route::get('/sidebarmenu/sidebarsuppliers', function(){
	return view('sidebarmenu.sidebarsuppliers');
});

Route::get('/sidebarmenu/sidebarsuppliers', 'SidebarmenuController@showSuppliers'); 
Route::get('/sidebarmenu/addsupplierform','SidebarmenuController@addSupplier');
Route::post('/sidebarmenu/sidebarsuppliers','SidebarmenuController@saveSupplier');
Route::get('/sidebarmenu/{id}/delete','SidebarmenuController@deleteSupplier');  
Route::get('/sidebarmenu/{id}/editSupplier','SidebarmenuController@editsupplierform');
Route::post('/sidebarmenu/{id}/edit','SidebarmenuController@editSupplier');

Auth::routes();
