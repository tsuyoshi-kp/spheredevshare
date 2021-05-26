<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// controllerを使用してのview表示やdb連携テスト
// 完全な名前空間を使用する コントローラ名単体では認識しない！ 参考※https://qiita.com/tamakiiii/items/e71040173fa0a1fcad83
Route::get('foo/foo1', 'App\Http\Controllers\FooController@foo1');
Route::get('foo/foo2', 'App\Http\Controllers\FooController@foo2');
Route::get('foo/foo3', 'App\Http\Controllers\FooController@foo3');
Route::get('foo/foo4', 'App\Http\Controllers\FooController@foo4');
Route::resource('users', 'App\Http\Controllers\UserController');