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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="icon-lg mdi mdi-coin icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">プラン</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">ホーム</a></li>
                <li><a href="/plans">プラン</a></li>
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
      <main class="page-content section-98 section-lg-110">
        <!-- Section Plans Type 1-->
        <div class="shell shell-wide">
          <h1>多くの選択肢と統一された品質</h1>
          <p>建物の一部でも、建物全体であっても、SUMAMOの提供するスマートシステムはライフスタイルや個人のニーズに合うものに設計することができます。 
            将来的にプランを変更する場合も、新たに壁に穴を開けたりケーブルを追加したりすることなく修正が可能になります。
            以下の利用可能なプランの中から、最適なものをご選択ください。もちろん、これらのプランに留まらず、ご要望の詳細をお伺いしてカスタマイズプランを提供させて頂くことも可能です。
　        </p>
          <div class="divider bg-mantis"></div>
          <div class="range range-condensed range-md-center">
            <div class="cell-xs-8 cell-xs-preffix-2 cell-md-3 cell-md-preffix-0 cell-xl-2">
              <!-- Planning Box type 1-->
              <div class="box-planning box-planning-type-1">
                <div class="box-planning-label">
                  <svg class="box-planning-svg" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4-11.4l76.5,76.5L76.4,76.5L0,0.1L11.4-11.4z"></path>
                  </svg><span>Popular</span>
                </div>
                <h2>Personal</h2>
                <p class="h1">$19</p>
                <p class="small text-uppercase">per month</p>
                <hr class="hr-gradient"/>
                <ul class="list list-unstyled">
                  <li><span class="text-bold">1</span><span class="text-dark">Hosting</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">E-Mail Marketing</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Databases</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">Design packs</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Website layouts</span></li>
                </ul><a class="btn btn-block btn-default" href="register.html">Sign up</a>
              </div>
            </div>
            <div class="cell-xs-8 cell-xs-preffix-2 cell-md-3 cell-md-preffix-0 cell-xl-2 offset-top-50 offset-md-top-0">
              <!-- Planning Box type 1-->
              <div class="box-planning box-planning-type-1 active">
                <div class="box-planning-label">
                  <svg class="box-planning-svg" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4-11.4l76.5,76.5L76.4,76.5L0,0.1L11.4-11.4z"></path>
                  </svg><span>Popular</span>
                </div>
                <h2>Team</h2>
                <p class="h1">$59</p>
                <p class="small text-uppercase">per month</p>
                <hr class="hr-gradient"/>
                <ul class="list list-unstyled">
                  <li><span class="text-bold">1</span><span class="text-dark">Hosting</span></li>
                  <li><span class="text-bold">2</span><span class="text-dark">E-Mail Marketing</span></li>
                  <li><span class="text-bold">5</span><span class="text-dark">Databases</span></li>
                  <li><span class="text-bold">2</span><span class="text-dark">Design packs</span></li>
                  <li><span class="text-bold">3</span><span class="text-dark">Website layouts</span></li>
                </ul><a class="btn btn-block btn-primary" href="register.html">Sign up</a>
              </div>
            </div>
            <div class="cell-xs-8 cell-xs-preffix-2 cell-md-3 cell-md-preffix-0 cell-xl-2 offset-top-50 offset-md-top-0">
              <!-- Planning Box type 1-->
              <div class="box-planning box-planning-type-1">
                <div class="box-planning-label">
                  <svg class="box-planning-svg" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4-11.4l76.5,76.5L76.4,76.5L0,0.1L11.4-11.4z"></path>
                  </svg><span>Popular</span>
                </div>
                <h2>Studio</h2>
                <p class="h1">$89</p>
                <p class="small text-uppercase">per month</p>
                <hr class="hr-gradient"/>
                <ul class="list list-unstyled">
                  <li><span class="text-bold">1</span><span class="text-dark">Hosting</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">E-Mail Marketing</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Databases</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">Design packs</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Website layouts</span></li>
                </ul><a class="btn btn-block btn-default" href="register.html">Sign up</a>
              </div>
            </div>
            <div class="cell-xs-8 cell-xs-preffix-2 cell-md-3 cell-md-preffix-0 cell-xl-2 offset-top-50 offset-md-top-0">
              <!-- Planning Box type 1-->
              <div class="box-planning box-planning-type-1">
                <div class="box-planning-label">
                  <svg class="box-planning-svg" x="0px" y="0px" viewbox="0 0 76.5 76.5" enable-background="new 0 0 76.5 76.5" xml:space="preserve">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.4-11.4l76.5,76.5L76.4,76.5L0,0.1L11.4-11.4z"></path>
                  </svg><span>Popular</span>
                </div>
                <h2>Business</h2>
                <p class="h1">$129</p>
                <p class="small text-uppercase">per month</p>
                <hr class="hr-gradient"/>
                <ul class="list list-unstyled">
                  <li><span class="text-bold">1</span><span class="text-dark">Hosting</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">E-Mail Marketing</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Databases</span></li>
                  <li><span class="text-bold">0</span><span class="text-dark">Design packs</span></li>
                  <li><span class="text-bold">1</span><span class="text-dark">Website layouts</span></li>
                </ul><a class="btn btn-block btn-default" href="register.html">Sign up</a>
              </div>
            </div>
          </div>
        </div>
        <div class="shell offset-top-66 code-box-pricing text-left"></div>
      </main>
@endsection
@include('layout.footer')