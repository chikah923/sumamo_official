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
      <main class="page-content section-top-85 section-sm-top-110">
        <!-- Carousel content box-->
        <section>
          <div class="shell">
            <h1>最高の性能を実感しましょう</h1>
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
                <p>スマートシステムにおける照明は家やオフィスに快適さ、効率だけでなく、シーンに合ったムードを添えてくれます。</p>
                <div class="offset-top-20">
                  <p>
                    音声やアプリを使って家やオフィスの全ての照明をコントロールすることが可能です。防犯を考慮した使用例の一つとして、ユーザが家にいないときも、外から照明をコントロールして建物の中に誰かがいるように見せることもできます。
                  </p>
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
                  <h1>スマート照明の活用</h1>
                  <hr class="divider bg-mantis">
                  <div class="range range-xs-center text-sm-left">
                    <div class="cell-sm-9 cell-lg-12">
                      <div class="range range-xs-center">
                          <div style="max-width: 82.66667%;margin-left: auto;margin-right: auto;">
                            <h6 class="text-bold text-malibu">スマート照明とは？</h6>
                            <p>
                            1つの部屋だけでも、建物全体でも、スマート照明を使用することができます。 壁に取り付けられたお好みのタッチボタンやタッチパネルから、ワンクリックで特定の部屋または建物全体の照明をオン・オフしたり、照度を調整することができます。さらに、スマート照明を音楽、カーテン、部屋の温度、セキュリティシステムと組み合わせることで、使用にはほぼ無限の可能性とパターンが生まれます。お好みに合わせてカスタマイズが可能です。
                            </p>
                            <li>タッチボタンやタッチパネルに「クッキング」や「ディナー」、「シアターモード」のボタンを設置し、ワンタッチでダイニングやキッチンの照明、音楽、カーテン、空調を事前に設定しておいた状態に切り替える</li>
                            <li>「就寝」ボタン一つで全ての照明を消灯、ドアの施錠を確認、空調を最適化する</li>
                            <li>夜中にトイレやキッチンに行くユーザの動きをセンサーで感知し、低めの照度で必要な照明だけを自動でONにする</li>
                            <li>オフィスであれば、「プレゼンテーション」ボタンで一つで消灯しブラインドを閉じ、プロジェクターを下ろす</li>
                            <li>「自動制御モード」をONにすることで、日没や日照の時間など、特定の時間に合わせて自動で照明を事前に設定しておいた状態に切り替える</li>
                            <li>照度センサーで照度を監視し、周囲が明るいときは照明を低い照度にし暗くなったら照度を上げる</li>
                            <br />
                            <p>
                              使用の可能性は無限大なので、ご自宅やオフィスに合ったスマート照明を提案させて頂きます。
                            </p>
                          </div>
                        <div class="range-spacer veil reveal-lg-inline-block offset-lg-top-50"></div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">音声による照明制御</h6>
                          <p>
                          上記のソリューションは全て、音声でも行うことが可能です。SiriやAlexa、google homeに「クッキングのシーンにして」と言うことで、キッチンの照明、音楽、空調を事前に設定しておいた状態に切り替えることができます。例えば手がふさがっているときは音声制御を使用するなど、状況に合わせてタッチボタンと音声制御を使い分けられます。
                          </p>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">照明とセキュリティ</h6>
                          <p>
                          スマート照明を使うことで、家やオフィスにいるときも、そうでない時もセキュリティ管理ができます。例えば家にいない時に人感センサーが反応したら即時にユーザへ通知をすることはもちろん、防犯システムが作動した際には全照明を点滅させて不審者を牽制したり、周囲の注意を引いたりすることが可能です。家にいない時に、照明やカーテン、TVを操作して人がいるように見せることもできます。
                          </p>
                        </div>
                        <div class="range-spacer veil reveal-lg-inline-block offset-lg-top-50"></div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">省エネへの貢献</h6>
                          <p>
                            SUMAMOには、照明の利便性を最大限に引き出すことと省エネへ貢献することの双方を達成させるソリューションがあります。
                          </p>
                          <li>室外に退室すると照明をOFFにすることで、照明の消し忘れを防ぐ</li>
                          <li>日照や日没、周囲の明るさに合わせて自動でON・OFFまたは照度を最適化</li>
                          <li>最高照度を70%にしておくことで電気代を30%節約し、照明の寿命を伸ばす</li>
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
                  SUMAMOのスマート照明ソリューションは利便さと省エネの双方を提供します。
                  エンタテインメントなど照明以外のソリューションと組み合わせることで、
                  あなただけのスマートホーム・スマートオフィスを実現することが可能です。
                </h4>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')