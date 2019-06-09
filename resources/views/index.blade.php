@extends('layout.common')

@include('layout.head')

@section('body_till_navbar')
<div class="page text-center">
      <div class="page-loader page-loader-variant-1">
        <div><img class='img-responsive' style='margin-top: -20px;margin-left: -18px;' width='330' height='67' src='images/intense/logo-big.png' alt=''/>
          <div class="offset-top-41 text-center">
            <div class="spinner"></div>
          </div>
        </div>
      </div>
      <!-- Page Head-->
      <header class="page-head slider-menu-position">
@endsection
@include('layout.navbar_light')

@section('top')
        <!--Swiper-->
        <div class="swiper-container swiper-slider" data-loop="true" data-autoplay="true" data-height="100vh" data-dragable="false" data-min-height="480px">
          <div class="swiper-wrapper text-center">
            <div class="swiper-slide" id="page-loader" data-slide-bg="images/intros/intro-04-1920x955.jpg" data-preview-bg="images/intros/intro-04-1920x955.jpg">
              <div class="swiper-caption swiper-parallax">
                <div class="swiper-slide-caption">
                  <div class="shell">
                    <div class="range range-lg-center">
                      <div class="cell-lg-12">
                        <h1><span class="big text-uppercase" data-caption-animate="fadeIn" data-caption-delay="700">Welcome to SUMAMO</span></h1>
                      </div>
                      <div class="cell-lg-10 offset-top-30">
                        <h4 class="hidden reveal-sm-block text-light" data-caption-animate="fadeIn" data-caption-delay="900">
                          The smartest and most flexible bootstrap template by TemplateMonster you've ever seen.
                          Create exactly what you need with our powerful bootstrap toolkit.
                        </h4>
                        <div class="group group-xl offset-top-20 offset-xs-top-50"><a class="btn btn-primary btn-lg btn-anis-effect" href="//ld-wp2.template-help.com/novi-builder/intense-builder/" data-caption-animate="fadeIn" data-caption-delay="1200"><span class="btn-text">Try builder now</span></a><a class="btn btn-default btn-lg btn-anis-effect" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense" data-caption-animate="fadeIn" data-caption-delay="1200"><span class="btn-text">Buy intense now</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide" data-preview-bg="video/intro-video/intro-video-lg.jpg">
                      <div class="bg-vide" data-vide-bg="video/intro-video/intro-video-lg" data-vide-options="posterType: jpg">
                        <div class="swiper-caption swiper-parallax">
                          <div class="swiper-slide-caption">
                            <div class="shell">
                              <div class="range range-lg-center">
                                <div class="cell-lg-12">
                                  <h1><span class="big text-uppercase" data-caption-animate="fadeIn" data-caption-delay="700">Built as a framework</span></h1>
                                </div>
                                <div class="cell-lg-10 offset-top-30">
                                  <h4 class="hidden reveal-sm-block text-light" data-caption-animate="fadeIn" data-caption-delay="900">
                                    Intense was designed as extended version of bootstrap, built as a complex
                                    and flexible solution with a dozen of completely new
                                    utilities, components and plugins.
                                  </h4>
                                  <div class="group group-xl offset-top-20 offset-xs-top-50"><a class="btn btn-icon btn-icon-left btn-default btn-lg btn-anis-effect" href="ui-kit.html" data-caption-animate="fadeIn" data-caption-delay="1200"><span class="btn-text">See it in action</span></a></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
            </div>
            <div class="swiper-slide" data-slide-bg="images/intros/intro-06-1920x955.jpg" data-preview-bg="images/intros/intro-06-1920x955.jpg">
              <div class="swiper-caption swiper-parallax">
                <div class="swiper-slide-caption">
                  <div class="shell">
                    <div class="range range-lg-center">
                      <div class="cell-lg-12">
                        <h1><span class="big text-uppercase" data-caption-animate="fadeIn" data-caption-delay="700">ULTRA sharp & RESPONSIVE</span></h1>
                      </div>
                      <div class="cell-lg-10 offset-top-30">
                        <h4 class="hidden reveal-sm-block text-light offset-bottom-0" data-caption-animate="fadeIn" data-caption-delay="900">
                          Beautiful and clean designs are optimized for all screen sizes
                          and types. Taste a new meaning of Retina Ready.
                        </h4>
                        <div class="group group-xl offset-top-20 offset-xs-top-50"><a class="btn btn-icon btn-icon-left btn-primary btn-lg btn-anis-effect" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense" data-caption-animate="fadeIn" data-caption-delay="1200"><span class="icon mdi mdi-cart-outline"></span><span class="btn-text">Buy intense now</span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button swiper-button-prev swiper-parallax">
            <div class="preview">
              <div class="preview__img preview__img-3"></div>
              <div class="preview__img preview__img-2"></div>
              <div class="preview__img preview__img-1"></div>
            </div>
          </div>
          <div class="swiper-button swiper-button-next swiper-parallax">
            <div class="preview">
              <div class="preview__img preview__img-1"></div>
              <div class="preview__img preview__img-2"></div>
              <div class="preview__img preview__img-3"></div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
@endsection
@section('main')
      <!-- Page Contents-->
      <main class="page-content">
        <!-- Skills-->
        <section class="section-98" id="section-skills">
          <div class="shell-wide">
            <div class="range range-xs-center">
              <div class="cell-sm-10 cell-lg-12">
                <div class="range range-xs-center">
                  <div class="cell-md-3 cell-sm-5">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon linearicons-file-code text-mantis"></span>
                              <div class="offset-top-10"><span class="h1 text-bold counter" data-speed="1200" data-from="0" data-to="500"></span><span class="h1 text-bold">+</span></div>
                              <div class="h6 text-uppercase text-spacing-60 text-bold offset-top-14">html Templates</div>
                            </div>
                  </div>
                  <div class="cell-md-3 cell-sm-5 offset-top-66 offset-sm-top-0">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon linearicons-star text-malibu"></span>
                              <div class="offset-top-10"><span class="h1 text-bold counter" data-speed="1600" data-from="0" data-to="25"></span><span class="h1 text-bold">+</span></div>
                              <div class="h6 text-uppercase text-spacing-60 text-bold offset-top-14">niche templates</div>
                            </div>
                  </div>
                  <div class="cell-md-3 cell-sm-5 offset-top-66 offset-md-top-0">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon linearicons-palette text-carrot"></span>
                              <div class="offset-top-10">
                                <div class="h1 text-bold counter" data-speed="2000" data-from="0" data-to="10"></div>
                              </div>
                              <div class="h6 text-uppercase text-spacing-60 text-bold offset-top-14">different skins</div>
                            </div>
                  </div>
                  <div class="cell-md-3 cell-sm-5 offset-top-66 offset-md-top-0">
                            <!-- Counter type 2-->
                            <div class="counter-type-2"><span class="icon linearicons-file-image text-red"></span>
                              <div class="offset-top-10"><span class="h1 text-bold counter" data-speed="2400" data-from="0" data-to="500"></span><span class="h1 text-bold">+</span></div>
                              <div class="h6 text-uppercase text-spacing-60 text-bold offset-top-14">psd files</div>
                            </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-98 section-md-124 bg-lighter">
          <div class="shell">
            <div>
              <h2><span class="big">Novi Visual Page Builder</span></h2>
            </div>
            <h2 class="offset-top-10">with Intense UI Kit</h2>
            <div class="offset-top-30 offset-md-top-66 text-md-left">
              <div class="range range-md-center range-xl-justify grid-group-md">
                <div class="cell-md-6 cell-lg-5">
                  <div class="unit unit-md-horizontal unit-md-middle">
                    <div class="unit-left"><img src="images/landing/landing-96-420x316.png" alt></div>
                    <div class="unit-body">
                      <h3 class="text-regular">Create Your Stunning HTML Website Quickly and Easily</h3>
                    </div>
                  </div>
                  <p class="offset-top-20">Novi Builder is a perfect match for both non-techies planning to launch their own websites, as well as coding experts delivering web products for their clients.</p>
                  <div class="offset-top-41"><a class="btn btn-primary btn-md btn-anis-effect" href="//ld-wp2.template-help.com/novi-builder/intense-builder/"><span class="btn-text">Try Builder</span></a></div>
                </div>
                <div class="cell-md-6">
                  <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/e_TCFkRDmls" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Our Works -->
        <section class="section-98 section-sm-110 smooth">
          <div class="shell-wide">
            <h2><span class="big">Niche Templates</span></h2>
            <div>
              <hr class="divider bg-mantis offset-top-24">
            </div>
            <h3 class="text-regular offset-top-66">Check out other themes based on<span class="text-uppercase text-ubold text-mantis"> Intense</span></h3>
            <div class="offset-top-66">
              <div class="range grid-group-md">
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="index-variant-2.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-03-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Main Theme</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-job-board/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-04-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Job Board</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-child-care/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-05-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Child Care</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-financial-analytic/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-06-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Financial Advisor</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-gym/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-07-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Gym</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-dental-clinic/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-08-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Dental Clinic</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-handmade/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-09-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Handmade</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-real-estate/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-10-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Real Estate</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-personal-blog/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-11-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Personal Blog</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-photographer-portfolio/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-12-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Photographer</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-restaurant/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-13-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Restaurant</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/intense-product/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-14-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense Product</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/intense-application/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-15-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense app</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/intense-startup/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-16-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense startup</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/intense-book/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-18-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense book</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/intense-travel/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-19-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense travel</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/intense-event/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-20-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense event</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-taxi/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-21-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense taxi</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-barbershop/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-22-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense barbershop</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-pet-shop/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-23-420x316.jpg"></div>
                            <h4 class="caption text-bold">Intense pet shop</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/landing-agency/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-24-420x316.jpg"></div>
                            <h4 class="caption text-bold">Agency landing</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/landing-business/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-25-420x316.jpg"></div>
                            <h4 class="caption text-bold">Business landing</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/landing-corporate/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-26-420x316.jpg"></div>
                            <h4 class="caption text-bold">Corporate landing</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/landing-personal/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-27-420x316.jpg"></div>
                            <h4 class="caption text-bold">Personal landing</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/landing-shop/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-28-420x316.jpg"></div>
                            <h4 class="caption text-bold">Shop landing</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="cell-xs-12 cell-sm-6 cell-md-4 cell-lg-3"><a class="thumbnail-simple" target="_blank" href="intense-landings/landing-startup/index.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-29-420x316.jpg"></div>
                            <h4 class="caption text-bold">Startup landing</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="section-98 section-sm-110 bg-lighter">
          <div class="shell-wide">
            <h2><span class="big">Best-Selling & Most Trusted</span><span class="big text-mantis"> HTML5</span><span class="big"> Template</span></h2>
            <p class="text-dark">Experience the Ever-Growing Feature Rich Template since 2016</p>
          </div>
        </section>
        <!-- Page Layouts-->
        <section class="section-98 section-md-124">
          <div class="shell-wide">
            <h2><span class="big"> Multi-Page & One-Page Layouts</span></h2>
            <hr class="divider bg-mantis">
            <div class="offset-top-41">
                      <div class="isotope-wrap">
                        <div class="row">
                          <!-- Isotope Filters-->
                          <div class="col-lg-12">
                            <div class="isotope-filters isotope-filters-horizontal">
                              <ul class="list-inline list-inline-sm">
                                <li class="veil-md">
                                  <p>Choose your category:</p>
                                </li>
                                <li class="section-relative">
                                  <button class="isotope-filters-toggle btn btn-sm btn-default" data-custom-toggle="isotope-1" data-custom-toggle-disable-on-blur="true">Filter<span class="caret"></span></button>
                                  <ul class="list-sm-inline isotope-filters-list" id="isotope-1">
                                    <li><a class="text-bold active" data-isotope-filter="*" data-isotope-group="gallery" href="#">All</a></li>
                                    <li><a class="text-bold" data-isotope-filter="Types" data-isotope-group="gallery" href="#">Types</a></li>
                                    <li><a class="text-bold" data-isotope-filter="Skins" data-isotope-group="gallery" href="#">Skins</a></li>
                                    <li><a class="text-bold" data-isotope-filter="Intro" data-isotope-group="gallery" href="#">Intro</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </div>
                          </div>
                          <!-- Isotope Content-->
                          <div class="col-lg-12 offset-top-34">
                            <div class="isotope" data-isotope-layout="fitRows" data-isotope-group="gallery">
                              <div class="row grid-group-md">
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Types"><a class="thumbnail-simple" target="_blank" href="index.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-30-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Home Default</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Types"><a class="thumbnail-simple" target="_blank" href="index-one-page.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-31-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Home One Page</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Skins"><a class="thumbnail-simple" target="_blank" href="index-variant-2.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-32-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Home Default Intense</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Skins"><a class="thumbnail-simple" target="_blank" href="index-skin-sunset.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-33-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Sunset</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Skins"><a class="thumbnail-simple" target="_blank" href="index-skin-simply-chic.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-34-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Simply Chic</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Skins"><a class="thumbnail-simple" target="_blank" href="index-skin-minimal-blue.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-35-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Minimal Blue</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Skins"><a class="thumbnail-simple" target="_blank" href="index-skin-sunrise.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-36-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Sunrise</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Skins"><a class="thumbnail-simple" target="_blank" href="index-skin-renaissance.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-37-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Renaissance</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Skins"><a class="thumbnail-simple" target="_blank" href="index-skin-green-space.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-38-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Green Space</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Skins"><a class="thumbnail-simple" target="_blank" href="index-skin-red-energy.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-39-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Red Energy</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Skins"><a class="thumbnail-simple" target="_blank" href="index-skin-eternal-joy.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-40-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Eternal Joy</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Skins"><a class="thumbnail-simple" target="_blank" href="index-skin-commercial.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-41-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Commercial</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Intro"><a class="thumbnail-simple" target="_blank" href="index-promo.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-42-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Promo</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Intro"><a class="thumbnail-simple" target="_blank" href="index-fast-registration.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-43-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Fast Registration</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Intro"><a class="thumbnail-simple" target="_blank" href="index-make-an-appointment.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-44-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Appointment</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 isotope-item" data-filter="Intro"><a class="thumbnail-simple" target="_blank" href="index-video-background.html">
                                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-45-420x316.jpg"></div>
                                            <h4 class="caption text-bold">Video Background</h4>
                                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
            </div>
          </div>
        </section>
        <section class="section-98 section-sm-110 bg-lighter">
          <div class="shell-wide">
            <h2><span class="big">Loved by</span><span class="big text-mantis"> 1600+</span><span class="big"> Happy Customers</span></h2>
            <p class="text-dark">Powered by Top-Notch Support &amp; Stellar <a class="text-primary" href="#">Customer Reviews<span class="mdi mdi-chevron-right text-middle"></span></a>
            </p>
          </div>
        </section>
        <!-- Core features-->
        <section class="section-98 section-md-124">
          <div class="shell-wide">
            <h2><span class="big"> Core Features</span></h2>
            <hr class="divider bg-mantis">
            <div class="offset-top-66">
              <div class="range range-xs-center grid-group-md">
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft" data-wow-delay="0.6s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-46-40x40.png"></div>
                            <div class="caption">Revolution Slider (15 variants)</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft" data-wow-delay="0.4s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-48-40x40.png"></div>
                            <div class="caption">Swiper Slider</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-47-38x47.png"></div>
                            <div class="caption">Owl Carousel</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-50-48x36.png"></div>
                            <div class="caption">Parallax</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-49-41x41.png"></div>
                            <div class="caption">Video Background</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight" data-wow-delay="0.2s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-52-32x26.png"></div>
                            <div class="caption">RD Twitter Feed</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight" data-wow-delay="0.4s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-51-15x30.png"></div>
                            <div class="caption">RD Facebook Feed</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight" data-wow-delay="0.6s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-53-43x21.png"></div>
                            <div class="caption">RD Flickr Gallery</div>
                          </div>
                </div>
                <div class="cell-xl-12 wrapper"></div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft" data-wow-delay="0.6s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-57-34x34.png"></div>
                            <div class="caption">RD Event Calendar</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft" data-wow-delay="0.4s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-58-34x32.png"></div>
                            <div class="caption">Mail Form</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-56-38x38.png"></div>
                            <div class="caption">ReCaptcha</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-54-37x40.png"></div>
                            <div class="caption">Mailchimp</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-61-35x23.png"></div>
                            <div class="caption">Campaign Monitor</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight" data-wow-delay="0.2s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-59-35x35.png"></div>
                            <div class="caption">4 Footer layouts</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight" data-wow-delay="0.4s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-60-35x32.png"></div>
                            <div class="caption">Charts and Graphs</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight" data-wow-delay="0.6s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-55-40x40.png"></div>
                            <div class="caption">Bootstrap</div>
                          </div>
                </div>
                <div class="cell-xl-12 wrapper"></div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft" data-wow-delay="0.6s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-67-37x24.png"></div>
                            <div class="caption">26 Child Themes</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft" data-wow-delay="0.4s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-68-30x30.png"></div>
                            <div class="caption">Search Form</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-63-34x34.png"></div>
                            <div class="caption">Gallery (Isotope) (Hover Effects)</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInLeft">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-65-34x34.png"></div>
                            <div class="caption">Shop</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-62-38x38.png"></div>
                            <div class="caption">Google Fonts</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight" data-wow-delay="0.2s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-66-32x32.png"></div>
                            <div class="caption">Icon Fonts (FontAwesome, Material Design Icons)</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight" data-wow-delay="0.4s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-69-47x18.png"></div>
                            <div class="caption">Animate CSS, WOW Animation</div>
                          </div>
                </div>
                <div class="cell-xs-6 cell-sm-3 cell-md-2 cell-xl-1">
                          <div class="blurb-mini wow fadeInRight" data-wow-delay="0.6s">
                            <div class="img-wrap bg-lighter"><img src="images/landing/landing-64-34x34.png"></div>
                            <div class="caption">UI Kit</div>
                          </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Buy Now-->
        <section>
                  <!-- Call to action type 2-->
                  <section class="section-66 bg-acapulco context-dark">
                    <div class="shell">
                      <div class="range range-xs-middle range-condensed">
                        <div class="cell-md-8 cell-lg-9 text-center text-md-left">
                          <h2><span class="big">Intense is exactly what you need</span></h2>
                        </div>
                        <div class="cell-md-4 cell-lg-3 offset-top-41 offset-md-top-0"><a class="btn btn-icon btn-lg btn-default btn-anis-effect btn-icon-btn-icon-left" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense"><span class="icon mdi mdi-cart-outline"></span>Buy intense now</a>
                        </div>
                      </div>
                    </div>
                  </section>
        </section>
        <!-- Core features-->
        <section class="section-98 section-md-124">
          <div class="shell-wide"><img src="images/landing/landing-105-154x25.png" alt>
            <h2 class="offset-top-10"><span class="big">Our Customer Reviews</span></h2>
            <hr class="divider bg-mantis">
            <div class="offset-top-66">
              <div class="range range-xs-center grid-group-sm" data-photo-swipe-gallery="reviews">
                <div class="cell-xs-12 wow fadeIn"><a class="review-wrap shadow-drop" data-photo-swipe-item href="images/landing/landing-98-1362x208.jpg" data-size="1362x208"><img src="images/landing/landing-98-1362x208.jpg" alt></a></div>
                <div class="cell-xs-12 wow fadeIn"><a class="review-wrap shadow-drop" data-photo-swipe-item href="images/landing/landing-99-1362x187.jpg" data-size="1362x187"><img src="images/landing/landing-99-1362x187.jpg" alt></a></div>
                <div class="cell-xs-12 wow fadeIn"><a class="review-wrap shadow-drop" data-photo-swipe-item href="images/landing/landing-100-1362x208.jpg" data-size="1362x208"><img src="images/landing/landing-100-1362x208.jpg" alt></a></div>
                <div class="cell-xs-12 wow fadeIn"><a class="review-wrap shadow-drop" data-photo-swipe-item href="images/landing/landing-101-1362x187.jpg" data-size="1362x187"><img src="images/landing/landing-101-1362x187.jpg" alt></a></div>
                <div class="cell-xs-12 wow fadeIn"><a class="review-wrap shadow-drop" data-photo-swipe-item href="images/landing/landing-102-1362x208.jpg" data-size="1362x208"><img src="images/landing/landing-102-1362x208.jpg" alt></a></div>
                <div class="cell-xs-12 wow fadeIn"><a class="review-wrap shadow-drop" data-photo-swipe-item href="images/landing/landing-103-1362x183.jpg" data-size="1362x183"><img src="images/landing/landing-103-1362x183.jpg" alt></a></div>
              </div>
            </div>
          </div>
        </section>
        <!-- Features-->
        <section class="section-98 section-md-124 bg-lighter">
          <div class="shell-wide">
            <h2><span class="big">Features</span></h2>
            <div>
              <hr class="divider bg-mantis offset-top-24">
            </div>
            <h3 class="text-regular offset-top-66">Other Features<span class="text-uppercase text-ubold text-mantis"> Intense</span></h3>
            <div class="offset-top-50">
              <div class="owl-carousel owl-carousel-default owl-carousel-present owl-carousel-arrows veil-owl-nav veil-xl-owl-dots reveal-xl-owl-nav" data-items="1" data-xs-items="2" data-md-items="3" data-lg-items="4" data-nav="true" data-dots="true" data-autoplay="true" data-loop="true" data-xs-margin="30" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]">
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="revolution-crossfade.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-70-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Crossfade</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="revolution-slidingoverlayhorizontal.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-74-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Overlay 1</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="revolution-fadethrough.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-71-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Fade Through</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="revolution-slidingoverlayvertical.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-75-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Overlay 2</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="revolution-slidehorizontal.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-72-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Slide 1</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="revolution-boxslide.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-76-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Box Slide</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="revolution-slidevertical.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-73-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Slide 2</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="revolution-slotslide.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-77-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Slot Slide</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="revolution-boxfade.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-78-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Box Fade</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="revolution-slotzoom-horizontal.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-82-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Slot Zoom 1</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="revolution-slotfade.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-79-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Slot Fade</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="revolution-slotzoom-vertical.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-83-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Slot Zoom 2</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="revolution-parallaxhorizontal.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-80-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Parallax 1</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="revolution-incube.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-84-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - In Cube</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="revolution-parallaxvertical.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-81-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Parallax 1</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="rd-event-calendar.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-85-420x316.jpg"></div>
                            <h4 class="caption text-bold">RD Event Calendar</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="rd-parallax.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-86-420x316.jpg"></div>
                            <h4 class="caption text-bold">Parallax</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="rd-facebook-feed.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-90-420x316.jpg"></div>
                            <h4 class="caption text-bold">Revolution Slider - Parallax 2</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="rd-video.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-87-420x316.jpg"></div>
                            <h4 class="caption text-bold">Vide</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="rd-navbar.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-88-420x316.jpg"></div>
                            <h4 class="caption text-bold">RD Navbar</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="rd-mailform.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-92-420x316.jpg"></div>
                            <h4 class="caption text-bold">Form Plugins</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="rd-twitter-feed.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-89-420x316.jpg"></div>
                            <h4 class="caption text-bold">RD Twitter Feed</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="captcha.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-93-420x316.jpg"></div>
                            <h4 class="caption text-bold">google reCaptcha</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a><a class="thumbnail-simple" target="_blank" href="charts-and-graphs.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-94-420x316.jpg"></div>
                            <h4 class="caption text-bold">Charts and Graphs</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
                <div class="offset-top-10 grid-group-md"><a class="thumbnail-simple" target="_blank" href="ui-kit.html">
                            <div class="thumbnail-wrap"><img width="420" height="316" src="images/landing/landing-95-420x316.jpg"></div>
                            <h4 class="caption text-bold">Advanced UI Kit</h4>
                            <hr class="divider divider-xs bg-mantis veil reveal-md-block"></a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Revolution-->
        <section class="section-98 smooth section-sm-110">
          <div class="shell-wide">
            <h1>15+<span class="text-red"> Revolution </span>Slider effects</h1><img class="img-responsive center-block offset-top-0 wow fadeInUp" src="images/logos/slider.jpg" alt>
          </div>
        </section>
        <!-- Extremely Responsive and Retina-->
        <section class="section-66 bg-lighter">
          <div class="shell-wide">
            <div class="range range-xs-center grid-group-md">
              <div class="cell-sm-10 cell-md-6 cell-xl-7 reveal-sm-block"><img class="img-responsive wow fadeInLeft reveal-sm-inline-block" src="images/landing/landing-97-780x462.png" width="780" height="462" alt data-wow-delay="0.3s"></div>
              <div class="cell-sm-8 cell-md-6 cell-xl-4 text-md-left offset-md-top-41">
                <h1>Extremely Responsive <br class="veil reveal-lg-block">and Retina</h1>
                <p>Create Your Own Business, Blog or any kind of activity Quick <br class="veil reveal-lg-block">and Easy with our unbelievable already made niche templates.</p>
              </div>
            </div>
          </div>
        </section>
        <section class="context-dark">
                  <div class="parallax-container" data-parallax-img="images/landing/landing-104-1920x1348.jpg">
                    <div class="parallax-content">
                      <div class="shell section-98 section-sm-110">
                        <h1>Limitless Header and Footer Variations</h1>
                        <div class="range range-xs-center offset-top-20">
                          <div class="cell-sm-10 cell-lg-12">
                            <p>Choose from a wide variety of our awesome ready-made Header & Footer styles or just create your own.</p>
                          </div>
                        </div>
                        <div class="range range-xs-center offset-top-66">
                          <div class="cell-sm-10 cell-lg-12">
                            <div class="range range-xs-center">
                              <div class="cell-xs-6 cell-sm-5 cell-md-4 cell-lg-2 wow fadeInRight"><img class="img-responsive center-block" src="images/features/home-intro-04-150x100.png" width="150" height="100" alt>
                                <p>Transparent</p>
                              </div>
                              <div class="cell-xs-6 cell-sm-5 cell-md-4 cell-lg-2 offset-top-66 offset-xs-top-0 wow fadeInRight" data-wow-delay="0.1s"><img class="img-responsive center-block" src="images/features/home-intro-05-150x100.png" width="150" height="100" alt>
                                <p>Background Header</p>
                              </div>
                              <div class="cell-xs-6 cell-sm-5 cell-md-4 cell-lg-2 offset-top-66 offset-md-top-0 wow fadeInRight" data-wow-delay="0.2s"><img class="img-responsive center-block" src="images/features/home-intro-06-150x100.png" width="150" height="100" alt>
                                <p>Center Aligned</p>
                              </div>
                              <div class="cell-xs-6 cell-sm-5 cell-md-4 cell-lg-2 offset-top-66 offset-lg-top-0 wow fadeInRight" data-wow-delay="0.3s"><img class="img-responsive center-block" src="images/features/home-intro-07-150x100.png" width="150" height="100" alt>
                                <p>Floating</p>
                              </div>
                              <div class="cell-xs-6 cell-sm-5 cell-md-4 cell-lg-2 offset-top-66 offset-lg-top-0 wow fadeInRight" data-wow-delay="0.4s"><img class="img-responsive center-block" src="images/features/home-intro-08-150x100.png" width="150" height="100" alt>
                                <p>Left Side-Header</p>
                              </div>
                              <div class="cell-xs-6 cell-sm-5 cell-md-4 cell-lg-2 offset-top-66 offset-lg-top-0 wow fadeInRight" data-wow-delay="0.5s"><img class="img-responsive center-block" src="images/features/home-intro-09-150x100.png" width="150" height="100" alt>
                                <p>Fullscreen Overlay</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
        </section>
        <!-- Portfolio Templates-->
        <section class="section-top-66 section-md-top-98">
          <div class="shell-wide">
            <div class="range range-xs-center range-xl-right grid-group-md">
              <div class="cell-sm-8 cell-lg-4 cell-xl-3 offset-lg-top-20 text-lg-left">
                <h1>Portfolio <br class="veil reveal-lg-block">Templates</h1>
                <p>Showcase any of your products or projects with <br class="veil reveal-lg-block">our great selection of Portfolio templates.</p>
              </div>
              <div class="cell-sm-10 cell-lg-8 cell-xl-7">
                <div class="mock-up-1">
                  <div class="scene">
                    <div class="object object-1"><img class="shadow-drop-lg wow fadeInUp" src="images/landing/landing-106-446x295.jpg" width="446" height="295" alt data-wow-delay="0.9s"></div>
                    <div class="object object-2"><img class="shadow-drop-lg wow fadeInUp" src="images/landing/landing-107-412x456.jpg" width="412" height="456" alt data-wow-delay="0.6s"></div>
                    <div class="object object-3"><img class="shadow-drop-lg wow fadeInUp" src="images/landing/landing-108-572x416.jpg" width="572" height="416" alt data-wow-delay="0.3s"></div>
                    <div class="object object-4"><img class="shadow-drop-lg wow fadeInUp" src="images/landing/landing-109-434x444.jpg" width="434" height="444" alt></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Blog Templates-->
        <section class="section-66 section-lg-top-110 section-lg-bottom-0 context-dark bg-mantis">
          <div class="shell-wide">
            <div class="range range-xs-center range-lg-left">
              <div class="cell-sm-10 cell-lg-8 cell-xl-7">
                <div class="mock-up-2">
                  <div class="scene">
                    <div class="object"><img class="wow fadeInUp" src="images/landing/landing-110-1056x457.png" width="1056" height="457" alt></div>
                  </div>
                </div>
              </div>
              <div class="cell-sm-8 cell-lg-4 cell-xl-3 text-lg-left">
                <div class="inset-xl-left-50">
                  <h1>Blog Templates</h1>
                  <p>Create any kind of blog variations & styles using our well-done Blog templates</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- eCommerce Ready-->
        <section class="section-top-66 section-xl-top-110">
          <div class="shell-wide">
            <div class="range range-xs-center range-lg-bottom range-xl-right grid-group-md">
              <div class="cell-sm-8 cell-lg-4 cell-xl-3 text-lg-left">
                <div class="section-lg-bottom-66">
                  <h1>eCommerce Ready</h1>
                  <p>We have included all you may need to build an <br class="veil reveal-lg-block">Amazing eCommerce Website from a scratch. Create your successful business now!</p>
                  <ul class="list list-marked inset-left-30">
                    <li>Grid View</li>
                    <li>Shopping Cart Page</li>
                    <li>Checkout Page</li>
                    <li>Single Product Page</li>
                  </ul>
                </div>
              </div>
              <div class="cell-sm-10 cell-lg-8 cell-xl-7">
                <div class="mock-up-3">
                  <div class="object object-1"><img class="shadow-drop-lg wow fadeInUp" src="images/landing/landing-111-492x358.png" width="492" height="358" alt></div>
                  <div class="object object-2"><img class="shadow-drop-lg wow fadeInUp" src="images/landing/landing-112-492x358.png" width="492" height="358" alt data-wow-delay="0.4s"></div>
                  <div class="object object-3"><img class="shadow-drop-lg wow fadeInUp" src="images/landing/landing-113-492x437.png" width="492" height="437" alt data-wow-delay="0.8s"></div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- Event Managing -->
        <section class="section-66 section-lg-top-85 section-lg-bottom-0 bg-blue-gray context-dark">
          <div class="shell-wide">
            <div class="range range-xs-center grid-group-md">
              <div class="cell-sm-6 cell-lg-7 cell-xl-5">
                <div class="mock-up-4">
                  <div class="object"><img class="wow fadeInUp" src="images/landing/landing-114-676x485.png" width="676" height="485" alt></div>
                </div>
              </div>
              <div class="cell-sm-8 cell-lg-5 cell-xl-3 text-lg-left">
                <div class="inset-xl-left-50 section-lg-top-34">
                  <h1>Event Managing</h1>
                  <p>Share your public events quick and easy with your customers. Use our extremely customizable event calendar to create your own comps.</p>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- PSD Included-->
        <section class="section-98 section-sm-110 bg-white" style="position: relative; z-index: 1; box-shadow: 0px -5px 23px 0 rgba(0, 0, 0, 0.15);">
          <div class="shell-wide">
            <h1>More Than 500+ Templates to minimize your Development Time</h1>
            <p>Create Your Own Amazing Experience</p>
          </div>
        </section>
        <!-- Demo Images Included for Free-->
        <section class="context-dark">
                  <div class="parallax-container" data-parallax-img="images/features/home-intro-15-1920x592.jpg">
                    <div class="parallax-content">
                      <div class="bg-overlay-gray-darkest">
                        <div class="shell section-98 section-sm-110 section-lg-254">
                          <h1>Demo Images Included for Free</h1>
                          <p>Save more than $35 on awesome premium images included in demo</p>
                        </div>
                      </div>
                    </div>
                  </div>
        </section>
        <!-- Dedicated 24/7 Support-->
        <section class="bg-white section-top-66 section-md-top-0">
          <div class="shell-wide text-md-left">
            <div class="range range-xs-center range-xs-bottom range-lg-top">
              <div class="cell-md-6 cell-xl-4">
                <div class="section-md-66 section-lg-top-124"><span class="icon icon-lg linearicons-headset text-mantis"></span>
                  <h1 class="offset-top-20">Dedicated 24/7 Support</h1>
                  <p>Our Support Service is always available 24 hours a day, 7 days a week to help you create your own business solution.</p>
                </div>
              </div>
              <div class="cell-sm-6 cell-xl-4"><img class="img-responsive" src="images/landing/landing-115-569x465.jpg" alt></div>
            </div>
          </div>
        </section>
        <!-- Buy Now-->
        <section>
                  <!-- Call to action type 2-->
                  <section class="section-66 bg-mantis context-dark">
                    <div class="shell">
                      <div class="range range-xs-middle range-condensed">
                        <div class="cell-md-8 cell-lg-9 text-center text-md-left">
                          <h2><span class="big">Intense is exactly what you need</span></h2>
                        </div>
                        <div class="cell-md-4 cell-lg-3 offset-top-41 offset-md-top-0"><a class="btn btn-icon btn-lg btn-default btn-anis-effect btn-icon-btn-icon-left" href="//www.templatemonster.com/intense-multipurpose-html-template.html?utm_source=livedemo&amp;utm_medium=themebutton&amp;utm_campaign=intense"><span class="icon mdi mdi-cart-outline"></span>Buy intense now</a>
                        </div>
                      </div>
                    </div>
                  </section>
        </section>
      </main>
@endsection
@include('layout.footer')