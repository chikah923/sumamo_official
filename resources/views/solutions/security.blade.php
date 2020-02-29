@extends('layout.solution')

@include('layout.head')

@section('body_till_navbar')
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
@endsection

@include('layout.navbar_light')

@include('layout.solution.solution_topmenu')

@section('main')
      <!-- Page Content-->
      <main class="page-content section-top-98 section-sm-top-110">
        <!-- Carousel content box-->
        <section>
          <div class="shell">
            <h1>家やオフィスにいるときもいないときも安心を</h1>
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
                <h3>{{ $solution_category }}</h3>
                <p>SUMAMOは、高度なセキュリティソリューションを利用して、建物や施設の監視サービスを提供します。</p>
                <div class="offset-top-20">
                  <p>どこにいても建物内のすべての扉と窓の状態を監視することができますし、外出中に窓が開いたらスマートフォンに即時写真と共に通知を送ります。</p>
                </div>
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
                          <h6 class="text-bold text-malibu">外出時の窓や扉の閉め忘れを通知</h6>
                          <p>例えばスマートフォンやタッチパネルからホームやオフィスを「外出」のシーンに設定した際に閉め忘れている窓やドアがあれば、即時スマートフォンに通知します。</p>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">家やオフィスにいないときも人がいるように見せる</h6>
                          <p>スマートシステムを導入することで、家の外にいるときも照明やブラインドをスケジューラで動かして、あたかもそこに人がいるかのように見せることができます</p>
                        </div>
                        <div class="range-spacer veil reveal-lg-inline-block offset-lg-top-50"></div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">ライブで屋内・屋外を可視化</h6>
                          <p>セキュリティカメラを屋内・屋外の好きな位置に設置することで、お子様や親御様、また外の様子をいつでもスマートフォンで確認できます。</p>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">屋内にもアクセスコントロールシステムを</h6>
                          <p>屋内の特定の部屋にアクセスコントロールシステムを導入することができます。認証されたカードをスワイプしたり、指紋認証をすることでロックが解錠される仕組みです。</p>
                        </div>
                        <div class="range-spacer veil reveal-lg-inline-block offset-lg-top-50"></div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">施錠とアラーム</h6>
                          <p>施設内の全ての扉と窓の施錠状況をどこにいても監視できます。</p>
                        </div>
                        <div class="cell-lg-5">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Call to action type 2-->
        <section class="section-66 bg-blue-gray context-dark">
          <div class="shell">
            <div class="range range-xs-middle range-condensed">
              <div class="text-center text-md-center">
                <h4>
                セキュリティもスマート化することで、どこにいても施設の安全を守ることができます
                </h4>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')