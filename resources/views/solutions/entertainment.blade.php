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
            <h1>音楽と動画を最新の方法で楽しめます</h1>
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
                <p>一つの部屋でも、複数の部屋でも音楽と動画を最新の方法で楽しむことができます。</p>
                <div class="offset-top-20">
                  <p>たとえば自宅のリビングやルーフ、庭で好きな音楽をタブレットやスマホ、または音声コマンドを使って簡単に流すことができます。音楽や映画の楽しみ方が変わります。</p>
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
                          <h6 class="text-bold text-malibu">ホームシアター</h6>
                          <p>映画館で映画を見ているかのような感覚を自宅で体験しましょう。</p>
                          <li>タッチパネルで「シアター」モードを選択するか、音声コマンドで「シアターモードにして」と言うことで、スクリーンが降り、ブラインドが閉じ、音響システムを起動して部屋の照明の照度を下げます。</li>
                          <li>数多くのスピーカーを使用して、多次元音響環境を作り出すことにより、映画館にいるかのような臨場感を体感できます。</li>
                          <li>映画の再生中に一時停止ボタンを押すと、照明の照度を上げてブラインドを上げます。</li>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">音楽</h6>
                          <p>例えばいつもスマートフォンで流している音楽を、自宅のリビングや庭のスピーカーで聞くと、まるで自宅がカフェになったかのような体験ができます。一つの音楽を建物全体で聞くことも、好きな部屋だけで流すこともできます。</p>
                          <li>寝室ではクラシック音楽を、キッチンではジャズを、そして別の部屋ではロックを同時にかけられます</li>
                          <li>Bluethooth接続やLINEIN接続で、スマートフォンで聞いている音楽を簡単にスピーカーで再生することができます</li>
                          <li>タッチパネルやスマートフォンから、再生/停止や音量調整が可能です</li>
                          <li>必ずしもスマートフォンから音楽を流す必要はなく、ハードディスクに入れてある音楽を再生することもできますし、Spotifyなどの音楽配信サービスのアカウントをシステムに組み込んで音楽を流すこともできます。</li>
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
                自宅で過ごす時間を更にリッチなものに。
                エンターテイメントも照明など建物の他の構成要素との組み合わせが無限大です。
                </h4>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')