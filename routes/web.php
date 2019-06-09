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

// 会社概要
Route::get('/company', function () { return view('company.about_us');});
Route::get('/company/about_us', function () { return view('company.about_us_variant');});
Route::get('/company/why_us', function () { return view('company.about_us_variant');});
Route::get('/company/contact_us', function () { return view('company.get_in_touch');});
Route::get('/company/visit_us', function () { return view('company.make_an_appointment');});

// ZONES
Route::get('/zones', function () { return view('zones.services');});
Route::get('/zones/residential', function () { return view('zones.content_boxes');});
Route::get('/zones/corporate', function () { return view('zones.content_boxes');});
Route::get('/zones/hospitality', function () { return view('zones.content_boxes');});
Route::get('/zones/commercial', function () { return view('zones.content_boxes');});
Route::get('/zones/education', function () { return view('zones.content_boxes');});

// SOLUTIONS
Route::get('/solutions', function () { return view('solutions.services');});
Route::get('/solutions/automation', function () { return view('solutions.content_boxes');});
Route::get('/solutions/security', function () { return view('solutions.content_boxes');});
Route::get('/solutions/sensors', function () { return view('solutions.content_boxes');});
Route::get('/solutions/electronics', function () { return view('solutions.content_boxes');});
Route::get('/solutions/networking', function () { return view('solutions.content_boxes');});


// プラン
Route::get('/plans', function () { return view('plans.pricing_and_plans');});
Route::get('/plans/basic', function () { return view('plans.pricing');});
Route::get('/plans/lite', function () { return view('plans.pricing');});
Route::get('/plans/standard', function () { return view('plans.pricing');});
Route::get('/plans/advanced', function () { return view('plans.pricing');});
Route::get('/plans/elite', function () { return view('plans.pricing');});

// サービス一覧
Route::get('/services', function () { return view('services.services');});
Route::get('/services/consultancy', function () { return view('services.content_boxes');});
Route::get('/services/designing', function () { return view('services.content_boxes');});
Route::get('/services/training_and_skills', function () { return view('services.content_boxes');});
Route::get('/services/maintainance', function () { return view('services.content_boxes');});

// SHOP
Route::get('/shop', function () { return view('shop.categories');});

// BLOG
// 一覧はblog-default-both-sidebar、詳細がblog-default-single
Route::get('/blog', function () { return view('blog.blog_list');});

// Login、新規登録
Route::get('/login', function () { return view('login.login');});
Route::get('/register', function () { return view('login.register');});

// フッター　Privacy Policy
Route::get('/privacy_policy', function () { return view('privacy_policy');});