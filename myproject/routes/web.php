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

Route::middleware(['checklogin'])->group(function () {
    Route::get('',"BaivietController@index")->name('newspaper.index');
Route::get('newspaper/newsArticle',"BaivietController@NewsArticle")->name('newspaper.NewsArticle');
Route::get('newspaper/newsHot',"BaivietController@NewsHot")->name('newspaper.NewsHot');
Route::get('newspaper/detail/{id}',"BaivietController@show")->name('newspaper.detail');
Route::get('newspaper/search',"BaivietController@search")->name('newspaper.search');
Route::post('newspaper',"BaivietController@store")->name('newspaper.store');
Route::get('newspaper/create',"BaivietController@create")->name('newspaper.create');
Route::delete('newspaper/newsArticle/{id}',"BaivietController@destroy")->name('newspaper.destroy');
Route::get('newspaper/{id}/edit',"BaivietController@edit")->name('newspaper.edit');
Route::put('newspaper/{id}',"BaivietController@update")->name('newspaper.update');
Route::get('newspaper/reply',"ReplyBaiViet@index")->name('newspaper.reply');
Route::delete('newspaper/reply/{id}',"ReplyBaiViet@destroy")->name('newspaper.destroyReplyBaiViet');
Route::get('newspaper/replyApp',"ReplyApp@index")->name('newspaper.replyApp');
Route::delete('newspaper/replyApp/{id}',"ReplyApp@destroy")->name('newspaper.destroyReplyApp');
Route::get('newspaper/account',"Account@index")->name('newspaper.accountIndex');
Route::get('newspaper/account/store',"Account@storeAccount")->name('newspaper.storeAccount');
Route::get('newspaper/account/add',"Account@addAccount")->name('newspaper.addAccount');
Route::get('newspaper/account/{id}/edit',"Account@edit")->name('newspaper.editAccount');
Route::put('newspaper/{id}',"Account@update")->name('newspaper.updateAccount');
Route::delete('newspaper/{id}',"Account@destroy")->name('newspaper.destroyAccount');
Route::get('newspaper/account/follow',"Account@followAccount")->name('newspaper.followAccount');
Route::get('newspaper/category',"Catagorys@Index")->name('newspaper.categoryIndex');
Route::get('newspaper/comment',"Comment@Index")->name('newspaper.commentIndex');
Route::delete('newspaper/comment/delete',"Comment@destroy")->name('comment.Destroy');
Route::get('newspaper/category/createget',"Catagorys@create")->name('hihi.create');
Route::post('newspaper/category/createpost',"Catagorys@store")->name('hihi.store');

Route::get('newspaper/category/updateget/{id}',"Catagorys@update")->name('hihi.update');
Route::put('newspaper/category/updateput/{id}',"Catagorys@edit")->name('hihi.handleupdates');

Route::delete('newspaper/category/delete/{id}',"Catagorys@delete")->name('hihi.delete');
});


//dang nhap
Route::get('dang-nhap',"DangNhapController@index")->name('login.index');
Route::post('dang-nhap',"DangNhapController@login")->name('login.login');
Route::get('dang-xuat',"DangNhapController@logout")->name('login.logout');