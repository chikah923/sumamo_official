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
            <h1>モノを繋ぐ、ヒトを繋ぐ。</h1>
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
                <p>スマートプロダクトと呼ばれるものは既に多く市場に流通していますが、スマートビルやスマートホームの本質が発揮されるのは、施設内の照明や空調、ブラインド、センサーからTVまでの構成要素が全て繋がって一元管理できるようになった時と言えます。</p>
                <div class="offset-top-20">
                  <p>SUMAMOでは二つの方法で、このようなスマートビル・スマートホームを提供します。</p>
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
                          <h6 class="text-bold text-malibu">無線接続</h6>
                          <p>ワイヤレスのスマートシステムは、世界でも最も普遍的に使用されています。既に建ってある建物に対して、比較的安価で導入できます。SUMAMOが提供するワイヤレスソリューションは、市場で流通しているほとんどのデバイスと互換性があるため、現在お手持ちの照明などと統合して、簡単にインストールできます。</p>
                          <li>どのような構造の建物に対しても導入することができます。壁に穴を開ける必要もありません。</li>
                          <li>スマートシステムを提供しているあらゆる会社の製品を使用することができます。</li>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">有線接続</h6>
                          <p>有線のスマートシステムは、ワイヤレスに比べて複雑で高価ですが、より安全で安定しています。分散型システムを使用しているため、仮に一つのデバイスが故障したとしても他のデバイスは正常に動作をします。</p>
                          <li>ホテルやタワー、空港などの大きなプロジェクトに対応できます。</li>
                          <li>ネットワークが不安定になったとしても動作にはその影響を受けません。</li>
                        </div>
                        <div class="range-spacer veil reveal-lg-inline-block offset-lg-top-50"></div>
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
                  どちらの接続方法をお選びいただいても、SUMAMOのチームでお客様にベストなオートメーションをご提案させて頂きます。
                </h4>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')