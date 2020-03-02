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
            <h1>エンターテイメントも、屋外もスマートに</h1>
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
                <p>最新のスマートシステムのセキュリティ機能も導入された場合、または屋内だけでなく屋外でも使用されたい場合や、音楽もコントロールしたい場合におすすめなのがアドバンスプランです。</p>
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
                アドバンスプランでは、照明やブラインドなど日常不可欠な機能のみならず、セキュリティ機能やガス漏れセンサ、水漏れセンサの設備が追加され、更に建物全体で音楽をコントロールすることが可能になります。更に、屋内だけではなく、ガレージ、屋根、スイミングプール、庭などの屋外の設備もコントロールできるようになります。もちろん、屋外で音楽をコントロールすることも可能です。
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
                          <p>ベーシックプラン、ライトプラン、スタンダードプランの内容に以下が追加されます。</p>
                          <li>堅牢な有線接続でインストール</li>
                          <li>スマートホームアプリからワンタッチで、建物全体、あるいは特定の部屋で音楽を流すことが可能</li>
                          <li>セキュリティ機能も含まれます。セキュリティ機能について詳しくは<a href="/solutions/security">こちら</a></li>
                          <li>水漏れセンサー、ガス漏れセンサーを設置し、異常の際はスマートフォンに即時通知送信</li>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">特徴</h6>
                          <li>スマートホーム機能の殆ど全てをご利用可能</li>
                          <li>将来的に音声操作機能を追加可能</li>
                          <li>インストール後3年以内にスマートシステムを導入する場合、割引あり</li>
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