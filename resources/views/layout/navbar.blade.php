@section('navbar')
        <!-- RD Navbar Transparent-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-default rd-navbar-transparent" data-md-device-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-static" data-lg-auto-height="true" data-md-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-stick-up="true">
            <div class="rd-navbar-inner">
              <!-- RD Navbar Panel-->
              <div class="rd-navbar-panel">
                <!-- RD Navbar Toggle-->
                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar, .rd-navbar-nav-wrap"><span></span></button>
                <!--Navbar Brand-->
                <div class="rd-navbar-brand"><a href="/"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src='images/intense/logo-light.png' alt=''/></a></div>
              </div>
              <div class="rd-navbar-menu-wrap">
                <div class="rd-navbar-nav-wrap">
                  <div class="rd-navbar-mobile-scroll">
                    <!--Navbar Brand Mobile-->
                    <div class="rd-navbar-mobile-brand"><a href="/"><img style='margin-top: -5px;margin-left: -15px;' width='138' height='31' src='images/intense/logo-light.png' alt=''/></a></div>
                    <div class="form-search-wrap">
                      <!-- RD Search Form-->
                      <form class="form-search rd-search" action="search-results.html" method="GET">
                        <div class="form-group">
                          <label class="form-label form-search-label form-label-sm" for="rd-navbar-form-search-widget">Search</label>
                          <input class="form-search-input input-sm form-control form-control-gray-lightest input-sm" id="rd-navbar-form-search-widget" type="text" name="s" autocomplete="off"/>
                        </div>
                        <button class="form-search-submit" type="submit"><span class="mdi mdi-magnify"></span></button>
                      </form>
                    </div>
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li><a href="/"><span>ホーム</span></a>
                      </li>
                      <li><a href="#"><span>企業概要</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="/company/about_us"><span class="text-middle">SUMAMOについて</span></a>
                          </li>
                          <li><a href="/company/why_us"><span class="text-middle">企業情報</span></a>
                          </li>
                          <li><a href="/company/contact_us"><span class="text-middle">お問い合わせ・施設見学</span></a>
                          </li>
                          <li><a href="/company/visit_us"><span class="text-middle">Visit Us</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="/zones"><span>ゾーン</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="/zones/residential"><span class="text-middle">住宅</span></a>
                          </li>
                          <li><a href="/zones/corporate"><span class="text-middle">会社</span></a>
                          </li>
                          <li><a href="/zones/hospitality"><span class="text-middle">ホテル</span></a>
                          </li>
                          <li><a href="/zones/commercial"><span class="text-middle">商業施設</span></a>
                          </li>
                          <li><a href="/zones/education"><span class="text-middle">教育施設</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="/solutions"><span>ソリューション</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="/solutions/sensors"><span class="text-middle">センサー</span></a>
                          </li>
                          <li><a href="/solutions/lightning"><span class="text-middle">照明</span></a>
                          </li>
                          <li><a href="/solutions/automation"><span class="text-middle">オートメーション</span></a>
                          </li>
                          <li><a href="/solutions/security"><span class="text-middle">セキュリティ</span></a>
                          </li>
                          <li><a href="/solutions/networking"><span class="text-middle">ネットワーク</span></a>
                          </li>
                          <li><a href="/solutions/entertainment"><span class="text-middle">エンターテイメント</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="/plans"><span>プラン</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="/plans/basic"><span class="text-middle">ベーシック</span></a>
                          </li>
                          <li><a href="/plans/lite"><span class="text-middle">ライト</span></a>
                          </li>
                          <li><a href="/plans/standard"><span class="text-middle">スタンダード</span></a>
                          </li>
                          <li><a href="/plans/advanced"><span class="text-middle">アドバンス</span></a>
                          </li>
                          <li><a href="/plans/elite"><span class="text-middle">エリート</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="/services"><span>サービス</span></a>
                        <ul class="rd-navbar-dropdown">
                          <li><a href="/services/consultancy"><span class="text-middle">コンサルタント</span></a>
                          </li>
                          <li><a href="/services/designing"><span class="text-middle">デザイン</span></a>
                          </li>
                          <li><a href="/services/training_and_skills"><span class="text-middle">トレーニング＆スキル</span></a>
                          </li>
                          <li><a href="/services/maintainance"><span class="text-middle">メンテナンス</span></a>
                          </li>
                        </ul>
                      </li>
                      <li><a href="/shop"><span>ショップ</span></a>
                      </li>
                      <li><a href="/blog"><span>ブログ</span></a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--RD Navbar Search-->
                <div class="rd-navbar-search"><a class="rd-navbar-search-toggle mdi" data-rd-navbar-toggle=".rd-navbar-inner,.rd-navbar-search" href="#"><span></span></a>
                  <form class="rd-navbar-search-form search-form-icon-right rd-search" action="search-results.html" method="GET">
                    <div class="form-group">
                      <label class="form-label" for="rd-navbar-search-form-input">Type and hit enter...</label>
                      <input class="rd-navbar-search-form-input form-control form-control-gray-lightest" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                    </div>
                    <!--button(type="submit").rd-navbar-search-form-submit.mdi.mdi-magnify-->
                  </form>
                  <!--div.rd-navbar-live-search-results-->
                  <!--button(data-rd-navbar-toggle=".rd-navbar-search, .rd-navbar-inner, .rd-navbar-live-search-results").rd-navbar-search-toggle-->
                  <!--  span-->
                </div>
                <!--RD Navbar shop-->
                <div class="rd-navbar-cart-wrap"><a class="rd-navbar-cart mdi" href="#" data-rd-navbar-toggle=".rd-navbar-cart-dropdown"><span></span></a>
                  <div class="rd-navbar-cart-dropdown">
                    <ul class="rd-navbar-list-products">
                      <li>
                        <div class="rd-navbar-product-image"><img src="{{ asset('/images/shop/product-01-60x60.png') }}" alt=""/></div>
                        <div class="rd-navbar-product-caption">
                          <h6 class="rd-navbar-product-title"><a href="shop-single-product-left-sidebar.html">Fashion model new</a></h6>
                          <p class="rd-navbar-product-price">$129.99</p>
                        </div><a class="mdi mdi-window-close rd-navbar-product-remove" href="#"></a>
                      </li>
                      <li>
                        <div class="rd-navbar-product-image"><img src="{{ asset('/images/shop/product-01-60x60-3.png') }}" alt=""/></div>
                        <div class="rd-navbar-product-caption">
                          <h6 class="rd-navbar-product-title"><a href="shop-single-product-left-sidebar.html">Fashion model new 2</a></h6>
                          <p class="rd-navbar-product-price">$69.99</p>
                        </div><a class="mdi mdi-window-close rd-navbar-product-remove" href="#"></a>
                      </li>
                    </ul>
                    <div class="rd-navbar-cart-total">
                      <h6 class="rd-navbar-cart-total-title">Cart subtotal</h6><span class="rd-navbar-cart-total-price">$199.98</span>
                    </div>
                    <div class="text-center"><a class="btn btn-rect btn-sm btn-primary btn-icon btn-icon-left" href="shop-cart.html"><span class="icon mdi mdi-lock"></span>Go to checkout</a></div>
                  </div>
                </div>
                <div class="rd-navbar-btn-wrap"><a class="btn btn-primary btn-anis-effect" href="/login"><span class="btn-text">LOGIN</span></a></div>
              </div>
            </div>
          </nav>
        </div>
@endsection
