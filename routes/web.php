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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::resource("wallet", 'WalletController');
Route::get('/campaign', 'HomeController@campanha')->name("campaign");

// |        | POST      | Wallet                                 | Wallet.store     | App\Http\Controllers\WalletController@store                            | web          |
// |        | GET|HEAD  | Wallet                                 | Wallet.index     | App\Http\Controllers\WalletController@index                            | web          |
// |        | GET|HEAD  | Wallet/create                          | Wallet.create    | App\Http\Controllers\WalletController@create                           | web          |
// |        | DELETE    | Wallet/{Wallet}                        | Wallet.destroy   | App\Http\Controllers\WalletController@destroy                          | web          |
// |        | PUT|PATCH | Wallet/{Wallet}                        | Wallet.update    | App\Http\Controllers\WalletController@update                           | web          |
// |        | GET|HEAD  | Wallet/{Wallet}                        | Wallet.show      | App\Http\Controllers\WalletController@show                             | web          |
// |        | GET|HEAD  | Wallet/{Wallet}/edit                   | Wallet.edit      | App\Http\Controllers\WalletController@edit                         