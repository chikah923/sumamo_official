@extends('layout.common')

@include('layout.head')

@section('body_till_navbar')
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
@endsection
@include('layout.navbar_light')

@section('main')
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="icon-lg mdi mdi-account-multiple icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">SUMAMOについて</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">ホーム</a></li>
                <li><a href="#">企業概要</a></li>
                <li>SUMAMOについて
                </li>
              </ul>
            </div>
          </div>
        </div>
        <svg class="svg-triangle-bottom" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
            <lineargradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:rgb(110,192,161);stop-opacity:1;"></stop>
              <stop offset="100%" style="stop-color:rgb(111,193,156);stop-opacity:1;"></stop>
            </lineargradient>
          </defs>
          <polyline points="0,0 60,0 29,29" fill="url(#grad1)"></polyline>
        </svg>
      </section>
      <!-- Page Content-->
      <main class="page-content">
        <!-- About Us-->
        <section class="section-85 section-sm-110">
          <div class="shell">
            <div class="range range-xs-center">
              <div class="cell-xs-10 cell-lg-6 cell-lg-push-2"><img class="img-responsive reveal-inline-block offset-top-10" src="{{ asset('/images/pages/careers-01-960x540.jpg') }}" width="960" height="540" alt=""></div>
              <div class="cell-xs-10 cell-lg-6 text-md-left inset-md-right-80 cell-lg-push-1 offset-top-30 offset-lg-top-0">
                <div>
                  <p class="text-bold">SUMAMOへようこそ!</p>
                  <p>近年「スマートロック」や「スマート家電」など、「スマートプロダクト」と呼ばれるものは既に多く市場に流通し、その数は将来更に増えていくと考えられますが、これらの製品をバラバラに使うのではなく、全て組み合わせて一元管理できるようにすることが急務となってきています。SUMAMOは、「ホーム」や「オフィス」、「商業施設」を丸ごとスマート化することを専門としています。</p>
                  <p>SUMAMOは「スマートホーム」や「スマート施設」の総括的なソリューションを通して感動的な快適さ、そして１ステップ先の「スマートなもの」を提供したいという情熱のもと設立されました。お客様のご期待に応え、それを上回ることに重点を置いています。 住宅または商業施設の如何を問わず、すべてのニーズが完全に満たされ、プロジェクトに対し最もスマートなソリューションを提供します。</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Why Choose Us-->
        <section class="section-top-98 section-sm-top-110 section-sm-bottom-110 section-lg-top-66 section-bottom-98 section-lg-bottom-0 bg-lightest">
          <div class="shell">
            <h1 class="offset-none">SUMAMOを選ぶ理由</h1>
            <div class="range range-sm-center range-md-middle">
              <div class="cell-sm-10 cell-lg-5 section-lg-bottom-50">
                <div class="offset-top-66 offset-lg-top-50">
                          <!-- Icon Box Type 2-->
                          <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                            <div class="unit-body">
                              <h4 class="text-bold text-malibu offset-sm-top-14">プロフェッショナル性</h4>
                              <p>SUMAMOはスマート施設のデザイン、施工、プログラミング、IoTネットワーク管理に専門性を持ち、ホームや施設に最適なソリューションを提供します。</p>
                            </div>
                          </div>
                  <div class="offset-top-66 offset-lg-top-34">
                            <!-- Icon Box Type 2-->
                            <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                              <div class="unit-body">
                                <h4 class="text-bold text-malibu offset-sm-top-14">品質管理とアフターサポート</h4>
                                <p>施工前から施工中はもちろん、施工後まで品質管理、サポートを継続的にさせて頂きます。</p>
                              </div>
                            </div>
                  </div>
                  <div class="offset-top-66 offset-lg-top-34">
                            <!-- Icon Box Type 2-->
                            <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                              <div class="unit-body">
                                <h4 class="text-bold text-malibu offset-sm-top-14">柔軟性</h4>
                                <p>SUMAMOの代表的な特徴の一つは、「カスタマイズ」サービスです。お客様のライフスタイル、お仕事のスタイルに合わせてスマート施設の動作や使用する製品をカスタマイズさせて頂きます。世界に一つしかない、ニーズに合ったスマート施設をご提案します。</p>
                              </div>
                            </div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-10 cell-lg-5 section-lg-bottom-50">
                <div class="offset-top-66 offset-lg-top-50">
                          <!-- Icon Box Type 2-->
                          <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                            <div class="unit-body">
                                <h4 class="text-bold text-malibu offset-sm-top-14">最新技術の追求</h4>
                                <p>
                                  その時代ごとの最新の技術を駆使し、お客様のすべての要件を満たすための研究開発を日々行っています。
                                  <br />
                                  <br />
                                </p>
                            </div>
                          </div>
                  <div class="offset-top-66 offset-lg-top-34">
                            <!-- Icon Box Type 2-->
                            <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                              <div class="unit-body">
                                <h4 class="text-bold text-malibu offset-sm-top-14">価格保証</h4>
                                <p>無理のない価格でサービスを提供させて頂きます。また、金額以上の価値提供をすることに重点を置いています。</p>
                              </div>
                            </div>
                  </div>
                  <div class="offset-top-66 offset-lg-top-34">
                            <!-- Icon Box Type 2-->
                            <div class="unit unit-sm unit-sm-horizontal text-sm-left">
                              <div class="unit-body">
                                <h4 class="text-bold text-malibu offset-sm-top-14">無料相談</h4>
                                <p>
                                  SUMAMOのカスタマーサポートではスマート施設に関するご質問、ご相談をいつでも承っております。また、日本初のフルスマートホームとして建築された弊社オフィスにお越し頂き、スマートホームの操作感をご体験いただくことが可能です。
                                  <br />
                                  ご訪問のフォームは<a href="/company/contact_us">こちら</a>
                                </p>
                              </div>
                            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Our Team-->
        <section class="section-98 section-sm-110">
          <div class="shell">
            <h1>チーム紹介</h1>
            <hr class="divider bg-mantis">
            <div class="range range-xs-center text-center text-md-left offset-top-66">
              <div class="cell-sm-5 cell-md-3"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-alex-merphy-270x270.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">Ahmed Zaki</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:080-4885-9890">080-4885-9890</a>
                    </li>
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:zaki@sumamo.co.jp">zaki@sumamo.co.jp</a>
                    </li>
                  </ul>
                </address>
              </div>
              <div class="cell-sm-5 cell-md-3 offset-top-50 offset-sm-top-0"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-amanda-smith-270x270.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">Chika Hirano</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:070-2288-4027">070-2288-4027</a>
                    </li>
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:hirano@sumamo.co.jp">hirano@sumamo.co.jp</a>
                    </li>
                  </ul>
                </address>
              </div>
              <div class="cell-sm-5 cell-md-3 offset-top-50 offset-md-top-0"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-bernard-show-270x270.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">Said Arabi</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:080-4885-9890">080-4885-9890</a>
                    </li>
                    <li class="reveal-block"><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:info@sumamo.co.jp">info@sumamo.co.jp</a>
                    </li>
                  </ul>
                </address>
              </div>
              <div class="cell-sm-5 cell-md-3 offset-top-50 offset-md-top-0"><img class="img-responsive reveal-inline-block" src="{{ asset('/images/users/user-diana-russo-270x270.jpg') }}" width="270" height="270" alt="">
                <div class="text-md-left offset-top-20">
                  <div>
                    <h5 class="text-bold text-primary"><a href="team-member.html">Hassan Mustafa</a></h5>
                  </div>
                </div>
                <address class="contact-info text-md-left">
                  <ul class="list-unstyled p">
                    <li><span class="icon icon-xxs mdi mdi-phone text-middle"></span> <a class="reveal-inline-block text-middle" href="callto:080-4885-9890">080-4885-9890</a>
                    </li>
                    <li><span class="icon icon-xxs mdi mdi-email-open text-middle"></span> <a class="reveal-inline-block text-middle" href="mailto:info@sumamo.co.jp">info@sumamo.co.jp</a>
                    </li>
                  </ul>
                </address>
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