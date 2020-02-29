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

// ホーム
Route::get('/', function () { return view('index');});


// 会社概要 Controllerは経由しない
// Route::get('/company', function () { return view('company.about_us');});
Route::get('/company/about_us', function () { return view('company.about_sumamo');});
Route::get('/company/why_us', function () { return view('company.corporate_info');});
Route::get('/company/contact_us', function () { return view('company.get_in_touch');});
Route::get('/company/visit_us', function () { return view('company.make_an_appointment');});


// ZONES  カテゴリはController経由
Route::get('/zones', function () { return view('zones.index');});
Route::get('/zones/{zone_category}', 'ZonesController@getPage');

// SOLUTIONS  Todo:カテゴリはController経由
Route::get('/solutions', function () { return view('solutions.index');});
Route::get('/solutions/{solution_category}', 'SolutionsController@getPage');

// プラン  Todo:カテゴリはController経由
Route::get('/plans', function () { return view('plans.index');});
Route::get('/plans/{plan_category}', 'PlansController@getPage');

// サービス一覧  Todo:カテゴリはController経由
Route::get('/services', function () { return view('services.index');});
Route::get('/services/{service_caterogy}', 'ServicesController@getPage');

// SHOP
Route::get('/shop', 'ShopController@index');
Route::get('/shop/product_detail', 'ShopController@productDetail');

// BLOG
// 一覧はblog-default-both-sidebar、詳細がblog-default-single
Route::get('/blog', function () { return view('blog.blog_list');});


// Login、新規登録
Route::get('/login', function () { return view('login.login');});
Route::get('/register', function () { return view('login.register');});


// フッター　Privacy Policy  テンプレートはothersディレクトリに入れてる
Route::get('/privacy_policy', function () { return view('others/privacy_policy');});
Route::get('/faq', function () { return view('others/faq');});
Route::get('/legal', function () { return view('others/legal');});
Route::get('/careers', function () { return view('others/careers');});
Route::get('/gallery', function () { return view('others/gallery');});

// 機能
Route::post('/company/contact_us/confirm', 'ContactUsController@confirm');
Route::post('/company/contact_us/send', 'ContactUsController@send');
Route::get('/sample/mailable/preview', function () {return new App\Mail\AutoNotification();});