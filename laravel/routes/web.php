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

// Voyager route for admin

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

// Get current url and if there is no locale, fill in with standard /en

Route::get('/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'nl', 'de'])) {
        abort(400);
    }
    App::setLocale($locale);

});

Route::get('/', function () {
    return redirect(url('/en'))->with('status', 'Profile updated!');
});

// Route functions to controller

Route::get('{locale}/', 'homeController@index')->name('home');
Route::get('{locale}/home', 'homeController@index')->name('home');

Route::get('{locale}/blog', 'blogController@index')->name('blog');
Route::get('{locale}/blog/{slug}', 'blogController@show')->name('post');

Route::get('{locale}/donates', 'ShopController@show')->name('donates');
Route::post('/payment', 'ShopController@preparePayment')->name('payment');
Route::get('/payment-success', 'ShopController@paymentSuccess')->name('payment.success');
Route::post('/webhooks/mollie', 'ShopController@handle')->name('webhooks.mollie');

Route::get('/newsletter', 'MailchimpController@index')->name('newsletter');
Route::post('/newsletter', 'MailchimpController@store')->name('newsletter');

Route::get('{locale}/contact', 'MailController@index')->name('contact');
Route::post('/contact', 'MailController@postContact')->name('contact.save');

// If no view exist but exists in database

Route::get('{locale}/{slug}', 'PagesController@show')->name('{slug}');
