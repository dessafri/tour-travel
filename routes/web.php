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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'homeController@index')
    ->name('home');
Route::get('/travel_packages', 'travelPackageController@index')
    ->name('travel_pakackages');
Route::get('/travel_packages/search', 'travelPackageController@search')
    ->name('travel_pakackages_search');

Route::get('/detail/{slug}', 'DetailController@index')
    ->name('detail');
Route::post('/checkout/{id}', 'CheckoutController@process')
    ->name('checkout_process')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/{id}', 'CheckoutController@index')
    ->name('checkout')
    ->middleware(['auth', 'verified']);

Route::post('/checkout/create/{detail_id}', 'CheckoutController@create')
    ->name('checkout-create')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/remove/{detail_id}', 'CheckoutController@remove')
    ->name('checkout-remove')
    ->middleware(['auth', 'verified']);

Route::get('/checkout/confirm/{id}', 'CheckoutController@success')
    ->name('checkout-success')
    ->middleware(['auth', 'verified']);


Route::get('/transactions', 'Admin\TransactionController@lihat')
    ->name('myTransactions');
Route::get('/transactions/detail/{id}', 'Admin\TransactionController@detail')
    ->name('myTransactionsDetail');
Route::get('/transactions/hapus/{id}', 'Admin\TransactionController@hapus')
    ->name('myTransactionsHapus');

Route::get('/myaccount/{id}', 'myAccountController@index')
    ->name('myAccount');
Route::get('/myaccount/edit/{id}', 'myAccountController@edit')
    ->name('myAccountEdit');
Route::put('/myaccount/update/{id}', 'myAccountController@update')
    ->name('myAccountUpdate');
Route::get('/myaccount/store/{id}', 'myAccountController@store')
    ->name('myAccountStore');

Route::get('/logout', 'Auth\LoginController@logout');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function () {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');



        Route::resource('travel-packages', 'TravelPackagesController');
        Route::resource('gallery', 'GalleryController');
        Route::resource('transaction', 'TransactionController');
    });

Auth::routes();
