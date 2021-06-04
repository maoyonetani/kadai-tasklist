<?php

// デフォルトのコメント部分は省略

Route::get('/', function () {
    return view('welcome');
});

// CRUD
// メッセージの個別詳細ページ表示
Route::get('tasks/{id}', 'TasksController@show');
// メッセージの新規登録を処理（新規登録画面を表示するためのものではありません）
Route::post('tasks', 'TasksController@store');
// メッセージの更新処理（編集画面を表示するためのものではありません）
Route::put('tasks/{id}', 'TasksController@update');
// メッセージを削除
Route::delete('tasks/{id}', 'TasksController@destroy');

// index: showの補助ページ
Route::get('tasks', 'TasksController@index');

Route::resource('tasks', 'TasksController');