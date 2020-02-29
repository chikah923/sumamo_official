@extends('layout.service')

@include('layout.head')

@section('body_till_navbar')
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
@endsection

@include('layout.navbar_light')

@include('layout.service.service_topmenu')

@section('main')
      <!-- Page Content-->
      <main class="page-content section-top-98 section-sm-top-110">
        <!-- Carousel content box-->
        <section>
          <div class="shell">
            <h1>ルーティンワークはシステムに任せましょう</h1>
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
                <h3>{{ $service_category }}</h3>
                <p>SUMAMOの提供するスマートシステムの特徴は、照明や空調、ブラインド、センサーからTVまでの構成要素を全て繋げてしまうことです。</p>
                <div class="offset-top-20">
                  <p>こうすることによって、それぞれの構成要素どうしが会話できるようになります。例えば空調は、室内の温度が上がったという情報を温度センサーから教えてもらうことができ、それに合わせて設定温度を下げて過ごしやすい室温になるよう運転を切り替えることができます。これにより、家やオフィスの日々のルーティンワークをシステムに任せることが可能になります。</p>
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
                          <h6 class="text-bold text-malibu">屋内のオートメーション</h6>
                          <p>
                          天候や季節、週末などお好みのスケジュールに合わせて照明、ブラインド、空調などを自動で最適化することができます。
                          </p>
                          <li>室温や湿度に合わせて、空調を自動で最適化</li>
                          <li>特定の時間に、事前に設定しておいた設定値に照明、ブラインド、空調などを動作</li>
                          <li>照明、ブラインド、空調などがどんな状態になっているかは、スマートフォンやスマートウォッチからいつでも確認可能</li>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">屋外のオートメーション</h6>
                          <p>
                          屋内だけでなく、屋外のプールやスプリンクラー、ガレージドアなどの屋外の設備もオートメーションに任せましょう。
                          </p>
                          <li>指定した時間にプールに水を入れる</li>
                          <li>庭の地中に湿度を測るセンサを設置して、地面が乾いているときにスプリンクラーを作動させる</li>
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
                  
                </h4>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')