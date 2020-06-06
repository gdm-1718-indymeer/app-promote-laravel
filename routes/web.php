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
Route::get('/', 'homeController@index')->name('home');
Route::get('/home', 'homeController@index')->name('home');


Route::get('/blog', 'blogController@index')->name('blog');
Route::get('/blog/{slug}', 'blogController@show')->name('post');

Route::get('/donates', 'ShopController@show')->name('donates');
Route::post('/payment', 'ShopController@preparePayment')->name('payment');
Route::get('/payment-success', 'ShopController@paymentSuccess')->name('payment.success');
Route::post('/webhooks/mollie', 'ShopController@handle')->name('webhooks.mollie');


Route::get('/newsletter', 'MailchimpController@index')->name('newsletter');
Route::post('/newsletter', 'MailchimpController@store')->name('newsletter');


Route::get('/contact', 'MailController@index')->name('contact');
Route::post('/contact', 'MailController@postContact')->name('contact.save');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/{slug}', 'PagesController@show')->name('page');