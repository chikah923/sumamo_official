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
            <h1>建物全体にスマートシステムを</h1>
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
                <p>最新のスマートシステムを、建物全体でお手頃な価格で実現できるのがスタンダードプランです。このプランでスマートシステムの機能のほとんどを使用することができます。 新しく施設を建設されるご予定であれば有線接続、無線接続のいずれかをお選び頂けます。既に竣工済みの場合、無線接続となります。</p>
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
                スタンダードプランの焦点は、建物全体で日常的に使う設備である照明、ブラインド、エアコン、ドアの施錠・解錠などをスマートシステムで操作できるようにすることです。このプランでは、ほとんどのスマートシステムの機能をご利用になれます。 たとえば、建物の照明、ブラインドの状態をスマートフォンアプリでリモートから監視/制御したり、日の出や日の入りに合わせて照明やブラインドを自動で動作させるオートメーションの機能がご利用可能になります。
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
                          <p>ベーシックプラン、ライトプランの内容に以下が追加されます。</p>
                          <li>照明、エアコン、ブラインドをオートメーションで管理し空間の温度を均一に保つ。オートメーションについて詳しくは<a href="/solutions/automation">こちら</a></li>
                          <li>会議中、外出中などのシーンに合わせた照明を設定</li>
                          <li>例えばドアが解錠された際にスマートフォンに通知を受け取るなど、お受け取りになられたい通知をカスタマイズ可能</li>
                          <li>火気感知センサ、煙感知センサや湿度センサ、温度計を設置してスマートシステムで監視可能</li>
                          <li>照明設備やエアコン、ブラインドなど普段お使いになる機能をスマートシステムで操作可能</li>
                          <li>スマートフォンやスマートウォッチで建物を遠隔から操作可能</li>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">特徴</h6>
                          <li>初期のご相談内容次第で将来的な機能追加が可能になるよう工事をすることが可能</li>
                          <li>インストール後2年以内にスマートシステムを導入する場合、割引あり</li>
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