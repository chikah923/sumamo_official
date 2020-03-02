@extends('layout.plan')

@include('layout.head')

@section('body_till_navbar')
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
@endsection

@include('layout.navbar_light')

@include('layout.plan.plan_topmenu')

@section('main')
      <!-- Page Content-->
      <main class="page-content section-top-98 section-sm-top-110">
        <!-- Carousel content box-->
        <section>
          <div class="shell">
            <h1>建物の内外を余すことなくスマートに</h1>
            <hr class="divider bg-mantis">
            <div class="range range-sm-center offset-top-66">
              <!-- Simple quote Slider-->
              <div class="cell-sm-8 cell-md-8 inset-md-right-80">
                <div class="owl-carousel owl-carousel-classic owl-carousel-class-light shadow-drop-md" data-items="1" data-nav="false" data-dots="false" data-nav-custom=".owl-custom-navigation">
                  <div>
                    <!-- Media Elements-->
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" src="//www.youtube.com/embed/-AhmuMqZB0s?wmode=transparent"></iframe>
                    </div>
                  </div>
                  <div><img class="img-responsive element-fullwidth" src="{{ asset('/images/portfolio/portfolio-single-01-716x404.jpg') }}" width="716" height="404" alt=""></div>
                  <div><img class="img-responsive element-fullwidth" src="{{ asset('/images/portfolio/portfolio-single-02-716x404.jpg') }}" width="716" height="404" alt=""></div>
                </div>
              </div>
              <div class="cell-sm-8 cell-md-4 text-sm-left offset-top-34 offset-md-top-0">
                <h3>{{ $plan_category }}</h3>
                <p>最新のスマートシステムを余すことなくお使いになられたい場合におすすめなのがエリートプランです。このプランでは、音声制御、ホームシアターのインストール、そして屋外のオートメーションが可能になります。</p>
                <div class="owl-custom-navigation owl-customer-navigation offset-top-24">
                  <div class="owl-nav">
                    <div class="owl-prev mdi mdi-chevron-left" data-owl-prev></div>
                    <div class="owl-next mdi mdi-chevron-right" data-owl-next></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="offset-top-98">
          <div class="shell">
            <hr class="hr hr-gradient">
          </div>
        </section>
        <!-- Call to action type 2-->
        <section class="section-66 bg-blue-gray context-dark">
          <div class="shell">
            <div class="range range-xs-middle range-condensed">
              <div class="text-center text-md-center">
                <h5>
                エリートプランでは、ベーシックプラン、ライトプラン、スタンダードプラン、アドバンスプランの内容に加えて音声制御システム、ホームシアターのインストール、屋外設備のオートメーションが可能です。
                アプリやタッチパネルから建物の内外をコントロールするのみでなく、場合によっては音声だけで建物をコントロールした方が便利な時もあります。例えば両手がふさがっているときや料理中に「キッチンの照明をつけて」「音楽を流して」などの音声で建物を制御できたらとても便利です。
                </h5>
              </div>
            </div>
          </div>
        </section>
        <!-- Light parallax content box-->
        <section>
          <div class="parallax-container" data-parallax-img="{{ asset('/images/backgrounds/background-05-1920x960.jpg') }}">
            <div class="parallax-content">
              <div class="bg-overlay-white">
                <div class="shell section-98">
                  <div class="range range-xs-center text-sm-left">
                    <div class="cell-sm-9 cell-lg-12">
                      <div class="range range-xs-center">
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">ソリューション</h6>
                          <p>ベーシックプラン、ライトプラン、スタンダードプラン、アドバンスプランの内容に以下が追加されます。</p>
                          <li>堅牢な有線接続でインストール</li>
                          <li>屋外のスプリンクラー、ガレージドア、照明などもオートメーションで制御</li>
                          <li>屋内、屋外を音声で制御可能。音声制御は遠隔からでもご利用になれます。</li>
                          <li>数多くのスピーカーを使用して、多次元音響環境を搭載したホームシアターをインストール。詳しくは<a href="/solutions/entertainment#theatre">こちら</a></li>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">特徴</h6>
                          <li>最新のスマートホーム機能の全てをご利用可能</li>
                          <li>インストール後機能を追加される場合、何年後でも割引あり</li>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')