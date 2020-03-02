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
            <h1>将来的にスマートホームを導入されたい場合</h1>
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
                <p>新しく施設を建設されるご予定で、スマートシステムを将来的に導入されたいとお考えでも、今すぐの導入が難しい場合や、建築後にスマートシステムの仕様を決めたい、という場合の選択肢です。建築時に、将来的にスマートシステムを導入するための基礎となる電気工事をさせて頂きます。有線接続のスマートシステムとなりますので、商業施設やホテルなどの大型施設にも適しています。</p>
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
                家やオフィスなどが建築される段階よりも、実際に竣工が終わって建物を使い慣れてからスマートシステムを導入したい場合もあるかと思います。
                建築の段階でスマートシステムの基礎配線を施すことで、竣工後いつでもお好きなスマートホーム機能ややタッチパネルのインストールを行うことができるようになります。
                <br />
                例) セキュリティカメラ、センサー、ブラインド操作用のケーブルを配線しておき、竣工後にセンサー、セキュリティカメラを1台ずつ足していくなど徐々にスマートシステムを導入する
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
                          <li>堅牢な有線接続でインストール</li>
                          <li>施設の構造や内部ネットワーク構造に最適なスマートシステムをご提案</li>
                          <li>永続的なシステムメンテナンス</li>
                          <li>スマートシステムについてのコンサルティングは竣工前〜竣工後、スマートシステム導入〜導入後を通して全て無料</li>
                          <li>弊社の提供するスマートシステムに関する講座に低価格でご参加が可能、またオンライン教材を無料で閲覧可能</li>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">特徴</h6>
                          <li>低価格でインストール可能</li>
                          <li>インストール後1年以内にスマートシステムを導入する場合、割引あり</li>
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