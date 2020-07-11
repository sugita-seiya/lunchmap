<?php

//一覧ページ
Route::get('/shops','ShopController@index')->name('shop.list');            //ドメイン名の後にshopsになっていたらindexアクションへ

//お店登録ページ
Route::get('/shop/new','ShopController@new')->name('shop.new');

//お店登録処理
Route::post('/shop','ShopController@store')->name('shop.store');

//編集ページ
Route::get('/shop/edit/{id}','ShopController@edit')->name('shop.edit');

//更新処理
Route::post('/shop/update/{id}','ShopController@update')->name('shop.update');

//詳細ページ
Route::get('/shop/{id}','ShopController@show')->name('shop.detail');

//お店削除機能
Route::delete('/shop/{id}','ShopController@destroy')->name('shop.destroy');

//ドメイン名だけの場合はshopsにリダイレクト→結果indexアクションへいく
Route::get('/', function () {
    return redirect('/shops');
});
