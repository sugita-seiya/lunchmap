<?php

//一覧ページ
Route::get('/shops','ShopController@index')->name('shop.list');            //ドメイン名の後にshopsになっていたらindexアクションへ

//詳細ページ
Route::get('/shop/{id}','ShopController@show')->name('shop.detail');

//ドメイン名だけの場合はshopsにリダイレクト→結果indexアクションへいく
Route::get('/', function () {
    return redirect('/shops');
});
