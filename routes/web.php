<?php

Route::get ('/shops','ShopController@index')->name('shop.list');            //ドメイン名の後にshopsになっていたらindexアクションへ


//ドメイン名だけの場合はshopsにリダイレクト→結果indexアクションへいく
Route::get('/', function () {
    return redirect('/shops');
});
