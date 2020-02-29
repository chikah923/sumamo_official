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
            <h1>全てのものを見守る</h1>
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
                <p>センサーは、スマートホーム、スマートビルディングの最も重要な要素の1つです。</p>
                <div class="offset-top-20">
                  <p>
                    センサーはスマートシステムとユーザーに自宅やオフィスのステータスを即時に伝達します。
                    <br />
                    代表的なものとして動き、光、湿度、煙を検知するセンサーがあります。
                    <br />
                    これらのセンサーとスマートシステムを連携させ、例えば人の動きを検知して照明をONにすることができます。
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
                  <div class="range range-xs-center text-sm-left">
                    <div class="cell-sm-9 cell-lg-12">
                      <div class="range range-xs-center">
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">熱・湿度センサー</h6>
                          <p>気候や気温の変化が、家や建物の中の全体的な雰囲気に影響を及ぼしていることは間違いありません。 建物全体の温度を測定し、年間を通して適切な温度になるように調整する温度および湿度センサーの重要性がここにあります。</p>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">水・ガス漏れセンサー</h6>
                          <p>家やオフィスの外にいる間に水やガスの漏れの問題が発生することがあります。 家にいないときは家の中で何が起こっているのかわからず、帰るまで対応することができないことで被害が拡大します。 スマートシステムでは、現在の状況の写真をユーザに通知するだけでなく、水漏れ、ガス漏れを引き起こしているバルブを自動で閉じることができます。</p>
                        </div>
                        <div class="range-spacer veil reveal-lg-inline-block offset-lg-top-50"></div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">煙・火気センサー</h6>
                          <p>煙や火による災害の発生を検知するセンサーは大抵の住宅で使用されていますが、スマートシステムと煙・火気センサーが連携することで以下のようなポテンシャルを発揮することができます。</p>
                          <li>写真と一緒に火や煙の場所の通知を即時に受け取る</li>
                          <li>消防署と救急車に自動的に連絡をする</li>
                          <li>ドアや窓を開けて、住民が退出できるようにする</li>
                        </div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">ドア・窓センサー</h6>
                          <p>家やオフィスの外にいる間に水やガスの漏れの問題が発生することがあります。 家にいないときは家の中で何が起こっているのかわからず、帰るまで対応することができないことで被害が拡大します。 スマートシステムでは、現在の状況の写真をユーザに通知するだけでなく、水漏れ、ガス漏れを引き起こしているバルブを自動で閉じることができます。</p>
                          <li>ドア・窓が解錠された際、写真と一緒に通知を受け取る</li>
                          <li>全てのドア・窓の施錠・解錠の状況を随時確認できる</li>
                        </div>
                        <div class="range-spacer veil reveal-lg-inline-block offset-lg-top-50"></div>
                        <div class="cell-lg-5">
                          <h6 class="text-bold text-malibu">モーションセンサー</h6>
                          <p>人々の動きを追跡するモーションセンサーはスマートシステムには欠かせないものであり、また省エネへの貢献要素でもあります。</p>
                          <li>各部屋で使用されているエネルギー量を知る</li>
                          <li>動きを感知したら照明を付け、そうでないときは照明を消すことで省エネに貢献</li>
                          <li>建物の外にあるモーションセンサーが動きを感知した際は、照明を付けたり、その際の写真を撮って携帯電話に送信する</li>
                          <li>日没時に外灯を照らし、日の出時にそれらを消灯したり、時間に応じてカーテンやブラインドを自動的に開閉する</li>
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
                <h4>日常生活や日々の仕事がSUMAMOと共にスマートに、快適になることを望んでいます。</h4>
              </div>
            </div>
          </div>
        </section>
      </main>
@endsection
@include('layout.footer')