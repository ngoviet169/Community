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

Route::get('/', function () {
    if(Auth::check()) {
        return view('front-end.mypage.mypage');
    }
    return view('front-end.index');
});

Route::get('index.html', function () {
    if(Auth::check()) {
        return view('front-end.mypage.mypage');
    }
   return view('front-end.index');
});

Route::get('/test', 'MailController@test')->name('send');

Route::get('/about.html', 'AboutController@index')->name('about');

Route::get('/faq.html', 'FaqController@index')->name('faq');

Route::get('/support.html', 'SupportController@index')->name('support');
Route::post('/support.html', 'SupportController@handle')->name('support-check');
//Route::post('/support.html', 'SupportController@insert')->name('insert-support');

Route::get('/nenrei_info.html', 'NenreiInfoController@index')->name('nenrei');
Route::get('/nenrei_mikan.html/{uid?}', 'Auth\RegisterController@confirmAccount')->name('confirm-account');

Route::get('/company.html', 'CompanyController@index')->name('company');

Route::get('/kiyaku.html', 'KiyakuController@index')->name('kiyaku');

Route::get('/payment.html', 'PaymentController@index')->name('payment');

Route::get('/privacy.html', 'PrivacyController@index')->name('privacy');

Route::get('/ryoukin.html', 'PrivacyController@index')->name('ryoukin');

Route::get('/ashiato.html', 'AshiatoController@index')->name('ashiato');

Route::get('/point_1.html', 'PointController@index')->name('point');

Route::get('/kensaku_r.html', 'KensakuController@index')->name('kensaku');

Route::get('/profile.html', 'ProfileController@index')->name('profile');

Route::get('/jyusin.html', 'MailController@index')->name('jyusin');
Route::get('/jyusin2.html', 'MailController@jyusin2')->name('jyusin2');
Route::get('/jyusin3.html', 'MailController@jyusin3')->name('jyusin3');
Route::get('/sousin.html', 'MailController@sousin')->name('sousin');

Route::get('/entry.html', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('entry.html', 'Auth\RegisterController@showRegistrationForm')->name('register_check');
Route::post('insert-data', 'Auth\RegisterController@insertData')->name('insert');

Route::get('/mypage.html', 'HomeController@index')->name('home');

// Login 
Route::get('/login.html', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login.html', 'Auth\LoginController@login')->name('login');
// Logout
Route::get('/logout.html', 'Auth\LoginController@logout')->name('logout');