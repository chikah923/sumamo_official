@extends('layout.common')

@include('layout.head')

@section('body_till_navbar')
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
@endsection
@include('layout.navbar_light')        

@section('main')
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-map-marker-circle icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">会社概要</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">ホーム</a></li>
                <li><a href="/company">企業概要</a></li>
                <li>企業情報
                </li>
              </ul>
            </div>
          </div>
        </div>
        <svg class="svg-triangle-bottom" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
            <lineargradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:rgb(110,192,161);stop-opacity:1;"></stop>
              <stop offset="100%" style="stop-color:rgb(111,193,156);stop-opacity:1;"></stop>
            </lineargradient>
          </defs>
          <polyline points="0,0 60,0 29,29" fill="url(#grad1)"></polyline>
        </svg>
      </section>
      <!-- Page Content-->
      <main class="page-content section-top-98 section-sm-top-110">
        <!-- Get In Touch-->
        <section>
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-sm-9 cell-md-8 cell-lg-12">
                <div class="range">
                  <div class="cell-lg-4 text-left offset-top-66 offset-lg-top-0">
                    <div>
                      <p class="text-darker text-uppercase text-bold">会社名</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div class="offset-top-20">
                      <p>SUMAMO株式会社</p>
                    </div>
                    <div class="offset-top-41">
                      <p class="text-darker text-uppercase text-bold">所在地</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div>
                      <p class="offset-top-20">〒116-0013</p>
                      <p>東京都荒川区西日暮里1丁目22番9号</p>
                    </div>
                    <div class="offset-top-50">
                      <p class="text-darker text-uppercase text-bold">役員</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div class="offset-top-20">
                      <p class="offset-top-20">代表取締役社長: Ahmed Zaki</p>
                    </div>
                    <div class="offset-top-10">
                      <p class="offset-top-10">取締役: 平野 知伽</p>
                    </div>
                    <div class="offset-top-50">
                      <p class="text-darker text-uppercase text-bold">設立</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div class="offset-top-20">
                      <p>令和2年2月20日</p>
                    </div>
                    <div class="offset-top-50">
                      <p class="text-darker text-uppercase text-bold">資本金</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div class="offset-top-20">
                      <p>500,000円</p>
                    </div>
                    <div class="offset-top-50">
                      <p class="text-darker text-uppercase text-bold">取引銀行</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div class="offset-top-20">
                      <p>登録申請中</p>
                    </div>
                    <div class="offset-top-50">
                      <p class="text-darker text-uppercase text-bold">連絡先</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div class="offset-top-20">
                      <p>Email: <a class="text-primary" href="mailto:#">info@sumamo.co.jp</a></p>
                    </div>
                    <div>
                      <p>TEL: 080-4885-9890</p>
                    </div>
                    <div>
                      <p>FAX: </p>
                    </div>
                    <div class="offset-top-50">
                      <p class="text-darker text-uppercase text-bold">事業内容</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <div class="offset-top-20">
                      <p>・スマートハウス、スマートビルの設計、施工、メンテナンス、及び管理業務</p>
                      <p>・オートメーション事業に関わる設計、施工、メンテナンス、及び管理業務</p>
                      <p>・学習教室の経営</p>
                    </div>
                    <div class="offset-top-50">
                      <p class="text-darker text-uppercase text-bold">follow us</p>
                    </div>
                    <div class="text-subline offset-top-10"></div>
                    <ul class="list-inline list-inline-sm list-inline-white offset-top-30 text-darker">
                      <li class="h6 offset-top-0"><span class="big"><a class="text-dark fa fa-facebook" href="#"></a></span></li>
                      <li class="h6 offset-top-0"><span class="big"><a class="text-dark fa fa-twitter" href="#"></a></span></li>
                      <li class="h6 offset-top-0"><span class="big"><a class="text-dark fa fa-youtube" href="#"></a></span></li>
                      <li class="h6 offset-top-0"><span class="big"><a class="text-dark fa fa-linkedin" href="#"></a></span></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="offset-top-124">
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')