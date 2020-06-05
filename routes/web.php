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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    $posts = App\Post::all();
    return view('pages/blog', compact('posts'));});

    
Route::get('/mollie-payment', 'ShopController@preparePayment')->name('mollie.payment');
Route::get('/payment-success', 'ShopController@paymentSuccess')->name('payment.success');
Route::post('/webhooks/mollie', 'ShopController@handle')->name('webhooks.mollie');


/*Route::get('{slug}', 'PagesController@show');*/

Route::get('/newsletter', 'MailchimpController@index')->name('newsletter');
Route::post('/newsletter', 'MailchimpController@store')->name('newsletter');


Route::get('post/{slug}', function($slug){
	$post = App\Post::where('slug', '=', $slug)->firstOrFail();
	return view('components/post', compact('post'));
});

Route::get('/donates', function () {
    $donates = App\Donate::where('message_public', true)->get();
    return view('pages/donate', compact('donates'));
});

Route::get('/contact', 'MailController@getContact')->name('contact');
Route::post('/contact', 'MailController@postContact')->name('contact.save');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/{slug}', 'PagesController@show')->name('page');