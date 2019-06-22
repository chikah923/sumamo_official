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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-arrange-send-to-back icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Blog</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
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
      <main class="page-content section-98 section-sm-110">
        <div class="shell">
          <div class="range range-xs-center">
            <div class="cell-lg-6 cell-lg-push-2">
              <div class="inset-left-0 inset-md-left-20 inset-right-0 inset-md-right-20">
                <!-- Blog Default Single-->
                <section>
                                  <!-- Post Wide-->
                                  <article class="post post-default text-left">
                                    <!-- Post Header-->
                                    <div class="header post-header">
                                      <!-- Post Meta-->
                                      <ul class="post-controls list-inline list-inline-sm p text-dark">
                                        <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-clock"></span>
                                          <time class="text-middle small" datetime="2016-01-01">Mar 7, 2016</time>
                                        </li>
                                        <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-account-outline">&nbsp;</span><span class="text-middle small">July Mao</span></li>
                                        <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-folder-outline">&nbsp;</span><a class="text-middle" href="#">UX</a>, <a class="text-middle" href="#">Design</a>
                                        </li>
                                        <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-comment-multiple-outline">&nbsp;</span><a class="text-middle small" href="blog-default-single-left-sidebar.html#comments">42<span>&nbsp;Comments</span></a></li>
                                      </ul>
                                      <!-- Post Meta-->
                                      <h3 class="post-title"><a href="blog-default-single-left-sidebar.html#">5 Steps to Blog’s Success.</a></h3>
                                      <!-- Post Media-->
                                      <div class="post-media offset-top-34">
                                        <header class="post-media">
                                          <div data-photo-swipe="gallery"><a class="thumbnail-classic" href="blog-default-single-left-sidebar.html" target="_self">
                                                              <figure><img width="570" height="321" src="{{ asset('/images/blog/post-01-570x321.jpg') }}" alt="">
                                                              </figure></a>
                                          </div>
                                        </header>
                                      </div>
                                    </div>
                                    <section class="post-content offset-top-41">
                                      <p>Unfortunately people will not come to your blog just to see what you have published on it. To make sure that your blog becomes a successful one, you have to work on it to attract visitors interested in your content.</p>
                                      <p>This can be achieved by serious work on some important aspects. In a word, give people the reason to see what you have to say or offer.</p><a class="offset-top-24 btn btn-default" href="blog-default-single-left-sidebar.html">Read More</a>
                                    </section>
                                  </article>
                  <hr class="hr offset-top-66">
                  <div class="offset-top-66">
                                    <!-- Post Wide-->
                                    <article class="post post-default text-left">
                                      <!-- Post Header-->
                                      <div class="header post-header">
                                        <!-- Post Meta-->
                                        <ul class="post-controls list-inline list-inline-sm p text-dark">
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-clock"></span>
                                            <time class="text-middle small" datetime="2016-01-01">Mar 7, 2016</time>
                                          </li>
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-account-outline">&nbsp;</span><span class="text-middle small">John Doe</span></li>
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-folder-outline">&nbsp;</span><a class="text-middle" href="#">UX</a>, <a class="text-middle" href="#">Design</a>
                                          </li>
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-comment-multiple-outline">&nbsp;</span><a class="text-middle small" href="blog-default-single-left-sidebar.html#comments">42<span>&nbsp;Comments</span></a></li>
                                        </ul>
                                        <!-- Post Meta-->
                                        <h3 class="post-title"><a href="blog-default-single-left-sidebar.html#">Making Money Online with Your Computer Only.</a></h3>
                                        <!-- Post Media-->
                                      </div>
                                      <section class="post-content offset-top-41">
                                        <p>Making money online is a kind of everyone’s dream job. No investments are needed and you can do whatever you need to do when you are in the mood or have free time.Flexible work schedule is something you’ll hardly get working at the office. However, online business rarely starts to bring you money from the very first day. It takes some time as a rule. But once you understand the whole process (like what are your abilities, where to work, for whom to work and so on) you'll be earning money in no time.</p><a class="offset-top-24 btn btn-default" href="blog-default-single-left-sidebar.html">Read More</a>
                                      </section>
                                    </article>
                  </div>
                  <hr class="hr offset-top-66">
                  <div class="offset-top-66">
                                    <!-- Post Wide-->
                                    <article class="post post-default text-left">
                                      <!-- Post Header-->
                                      <div class="header post-header">
                                        <!-- Post Meta-->
                                        <ul class="post-controls list-inline list-inline-sm p text-dark">
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-clock"></span>
                                            <time class="text-middle small" datetime="2016-01-01">Mar 7, 2016</time>
                                          </li>
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-account-outline">&nbsp;</span><span class="text-middle small">Bernard Show</span></li>
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-folder-outline">&nbsp;</span><a class="text-middle" href="#">UX</a>, <a class="text-middle" href="#">Design</a>
                                          </li>
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-comment-multiple-outline">&nbsp;</span><a class="text-middle small" href="blog-default-single-left-sidebar.html#comments">42<span>&nbsp;Comments</span></a></li>
                                        </ul>
                                        <!-- Post Meta-->
                                        <h3 class="post-title"><a href="blog-default-single-left-sidebar.html#">Proper Color Solutions For The Office.</a></h3>
                                        <!-- Post Media-->
                                        <div class="post-media offset-top-34">
                                          <header class="post-media">
                                                            <div class="embed-responsive embed-responsive-16by9">
                                                              <iframe class="embed-responsive-item" src="//www.youtube.com/embed/-AhmuMqZB0s?wmode=transparent"></iframe>
                                                            </div>
                                          </header>
                                        </div>
                                      </div>
                                      <section class="post-content offset-top-41">
                                        <p>When it comes to remodeling an office, one of the most important aspects is painting. Any shade of paint can change the complete look of a room as a color has an ability to change a drab and boring room into a stunning one. Many people prefer to paint their homes in serene colors as it relaxes the mind.</p>
                                        <p>There are many hues of colors to choose from that match...</p><a class="offset-top-24 btn btn-default" href="blog-default-single-left-sidebar.html">Read More</a>
                                      </section>
                                    </article>
                  </div>
                  <hr class="hr offset-top-66">
                  <div class="offset-top-66">
                                    <!-- Post Wide-->
                                    <article class="post post-default text-left">
                                      <!-- Post Header-->
                                      <div class="header post-header">
                                        <!-- Post Meta-->
                                        <ul class="post-controls list-inline list-inline-sm p text-dark">
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-clock"></span>
                                            <time class="text-middle small" datetime="2016-01-01">Mar 7, 2016</time>
                                          </li>
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-account-outline">&nbsp;</span><span class="text-middle small">Sam Cole</span></li>
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-folder-outline">&nbsp;</span><a class="text-middle" href="#">UX</a>, <a class="text-middle" href="#">Design</a>
                                          </li>
                                          <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-comment-multiple-outline">&nbsp;</span><a class="text-middle small" href="blog-default-single-left-sidebar.html#comments">42<span>&nbsp;Comments</span></a></li>
                                        </ul>
                                        <!-- Post Meta-->
                                        <h3 class="post-title"><a href="blog-default-single-left-sidebar.html#">Four Types of Verbal Communication.</a></h3>
                                        <!-- Post Media-->
                                        <div class="post-media offset-top-34">
                                          <header class="post-media">
                                                            <!-- Owl Carousel-->
                                                            <div class="owl-carousel owl-carousel-classic" data-items="1" data-dots="true" data-nav="true" data-nav-class="[&quot;owl-prev mdi mdi-chevron-left&quot;, &quot;owl-next mdi mdi-chevron-right&quot;]" data-photo-swipe-gallery><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="{{ asset('/
                                                              images/blog/post-04-1170x600.jpg') }}">
                                                                                <figure><img width="570" height="321" src="{{ asset('/images/blog/post-04-570x321.jpg') }}" alt="">
                                                                                </figure></a><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="{{ asset('/images/blog/post-05-1170x600.jpg') }}">
                                                                                <figure><img width="570" height="321" src="{{ asset('/images/blog/post-05-570x321.jpg') }}" alt="">
                                                                                </figure></a><a class="thumbnail-classic" data-photo-swipe-item="" data-size="1170x600" href="{{ asset('/images/blog/post-06-1170x600.jpg') }}">
                                                                                <figure><img width="570" height="321" src="{{ asset('/images/blog/post-06-570x321.jpg') }}" alt="">
                                                                                </figure></a>
                                                            </div>
                                          </header>
                                        </div>
                                      </div>
                                      <section class="post-content offset-top-41">
                                        <p>Verbal communication include sounds, words, language, and speech. Speaking is an effective way of communicating and helps in expressing our emotions in words. This form of communication is further classified into four types.</p>
                                        <p>Intrapersonal Communication - This form of communication is extremely private and restricted to ourselves. It includes the silent conversations we have with ourselves, wherein we juggle roles between the sender and receiver who are processing.</p><a class="offset-top-24 btn btn-default" href="blog-default-single-left-sidebar.html">Read More</a>
                                      </section>
                                    </article>
                  </div>
                  <div class="offset-top-66">
                                    <!-- Bootstrap Pagination-->
                                    <nav>
                                      <ul class="pagination">
                                        <li class="disabled"><a href="#" aria-label="Previous"><span class="mdi mdi-chevron-double-left" aria-hidden="true"></span></a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#" aria-label="Next"><span class="mdi mdi-chevron-double-right" aria-hidden="true"></span></a></li>
                                      </ul>
                                    </nav>
                  </div>
                </section>
              </div>
            </div>
            <div class="cell-lg-3 cell-lg-push-1 offset-top-66 offset-lg-top-0">
              <!-- Section Blog Modern-->
              <aside class="text-left">
                <!-- Search Form-->
                <h6 class="text-uppercase text-spacing-60">Search</h6>
                <div class="text-subline"></div>
                <div class="offset-top-34">
                                <!-- RD Search Form-->
                                <form class="form-search rd-search" action="search-results.html" method="GET">
                                  <div class="form-group">
                                    <label class="form-label form-search-label form-label-sm" for="blog-sidebar-3-form-search-widget">Search</label>
                                    <input class="form-search-input input-sm form-control input-sm" id="blog-sidebar-3-form-search-widget" type="text" name="s" autocomplete="off">
                                  </div>
                                  <button class="form-search-submit" type="submit"><span class="mdi mdi-magnify"></span></button>
                                </form>
                </div>
                <!-- Flickr Feed-->
                <div class="range offset-top-41">
                  <div class="cell-sm-6 cell-lg-12">
                    <h6 class="text-uppercase text-spacing-60">Flickr Feed</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-41">
                                    <div class="group-xs flickr widget-flickrfeed" data-photo-swipe="gallery" data-flickr-tags="tm58888_landscapes"><a class="flickr-item thumbnail-classic" data-photo-swipe-item="" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="{{ asset('/images/_blank.png') }}" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-photo-swipe-item="" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="{{ asset('/images/_blank.png') }}" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-photo-swipe-item="" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="{{ asset('/images/_blank.png') }}" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-photo-swipe-item="" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="{{ asset('/images/_blank.png') }}" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-photo-swipe-item="" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="{{ asset('/images/_blank.png') }}" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-photo-swipe-item="" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="{{ asset('/images/_blank.png') }}" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-photo-swipe-item="" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="{{ asset('/images/_blank.png') }}" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-photo-swipe-item="" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="{{ asset('/images/_blank.png') }}" alt="" data-image_q="src"></a><a class="flickr-item thumbnail-classic" data-photo-swipe-item="" href="" data-image_c="href" data-size="800x800" data-type="flickr-item"><img width="82" height="82" data-title="alt" src="{{ asset('/images/_blank.png') }}" alt="" data-image_q="src"></a>
                                    </div>
                    </div>
                  </div>
                  <div class="cell-sm-6 offset-top-41 offset-sm-top-0 cell-lg-12 offset-lg-top-41">
                    <!-- Twitter Feed-->
                    <h6 class="text-uppercase text-spacing-60">Twitter Feed</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-30">
                                    <div class="twitter" data-twitter-username="templatemonster" data-twitter-date-hours=" hours ago" data-twitter-date-minutes=" minutes ago">
                                      <div class="twitter-sm" data-twitter-type="tweet">
                                        <div class="twitter-date text-dark small" data-date="text"></div>
                                        <div class="twitter-text" data-tweet="text"></div>
                                        <div class="twitter-name text-bold big" data-screen_name="text"></div>
                                      </div>
                                      <div class="twitter-sm" data-twitter-type="tweet">
                                        <div class="twitter-date text-dark small" data-date="text"></div>
                                        <div class="twitter-text" data-tweet="text"></div>
                                        <div class="twitter-name text-bold big" data-screen_name="text"></div>
                                      </div>
                                    </div>
                    </div>
                  </div>
                </div>
              </aside>
            </div>
            <div class="cell-lg-3 cell-lg-push-2 offset-top-66 offset-lg-top-0">
              <!-- Section Blog Modern-->
              <aside class="text-left">
                <!-- Recent Posts-->
                <div class="range">
                  <div class="cell-sm-6 cell-lg-12">
                    <h6 class="text-uppercase text-spacing-60">Recent Posts</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-34">
                                    <!-- Post Widget-->
                                    <article class="post widget-post text-left"><a href="#">
                                        <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                                          <div class="unit-left"><img class="img-circle" width="46" height="46" src="{{ asset('/images/blog/post-thumb-01-46x46.jpg') }}" alt=""></div>
                                          <div class="unit-body">
                                            <div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right text-picton-blue"></span>
                                              <time class="text-dark" datetime="2016-01-01">05/14/2015</time>
                                            </div>
                                            <div class="post-title">
                                              <h6 class="text-regular">Let’s Change the world</h6>
                                            </div>
                                          </div>
                                        </div></a></article>
                    </div>
                    <div class="offset-top-30">
                                    <!-- Post Widget-->
                                    <article class="post widget-post text-left"><a href="#">
                                        <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                                          <div class="unit-left"><img class="img-circle" width="46" height="46" src="{{ asset('/images/blog/post-thumb-02-46x46.jpg') }}" alt=""></div>
                                          <div class="unit-body">
                                            <div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right text-picton-blue"></span>
                                              <time class="text-dark" datetime="2016-01-01">05/14/2015</time>
                                            </div>
                                            <div class="post-title">
                                              <h6 class="text-regular">The meaning of Web De...</h6>
                                            </div>
                                          </div>
                                        </div></a></article>
                    </div>
                    <div class="offset-top-30">
                                    <!-- Post Widget-->
                                    <article class="post widget-post text-left"><a href="#">
                                        <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                                          <div class="unit-left"><img class="img-circle" width="46" height="46" src="{{ asset('/images/blog/post-thumb-03-46x46.jpg') }}" alt=""></div>
                                          <div class="unit-body">
                                            <div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right text-picton-blue"></span>
                                              <time class="text-dark" datetime="2016-01-01">05/14/2015</time>
                                            </div>
                                            <div class="post-title">
                                              <h6 class="text-regular">Get Started with Templa...</h6>
                                            </div>
                                          </div>
                                        </div></a></article>
                    </div>
                  </div>
                  <div class="cell-sm-6 offset-top-41 offset-sm-top-0 cell-lg-12 offset-lg-top-41">
                    <!-- Recent Posts-->
                    <h6 class="text-uppercase text-spacing-60">Popular Posts</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-34">
                                    <!-- Post Widget-->
                                    <article class="post widget-post text-left"><a href="#">
                                        <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                                          <div class="unit-left"><img class="img-circle" width="46" height="46" src="{{ asset('/images/blog/post-thumb-01-46x46.jpg') }}" alt=""></div>
                                          <div class="unit-body">
                                            <div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right"></span>
                                              <time class="text-dark" datetime="2016-01-01">05/14/2015</time>
                                            </div>
                                            <div class="post-title">
                                              <h6 class="text-regular">Printing and typesetting</h6>
                                            </div>
                                          </div>
                                        </div></a></article>
                    </div>
                    <div class="offset-top-30">
                                    <!-- Post Widget-->
                                    <article class="post widget-post text-left"><a href="#">
                                        <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                                          <div class="unit-left"><img class="img-circle" width="46" height="46" src="{{ asset('/images/blog/post-thumb-02-46x46.jpg') }}" alt=""></div>
                                          <div class="unit-body">
                                            <div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right"></span>
                                              <time class="text-dark" datetime="2016-01-01">05/14/2015</time>
                                            </div>
                                            <div class="post-title">
                                              <h6 class="text-regular">Content Builder for posts</h6>
                                            </div>
                                          </div>
                                        </div></a></article>
                    </div>
                    <div class="offset-top-30">
                                    <!-- Post Widget-->
                                    <article class="post widget-post text-left"><a href="#">
                                        <div class="unit unit-horizontal unit-spacing-xs unit-middle">
                                          <div class="unit-left"><img class="img-circle" width="46" height="46" src="{{ asset('/images/blog/post-thumb-03-46x46.jpg') }}" alt=""></div>
                                          <div class="unit-body">
                                            <div class="post-meta"><span class="icon-xxs mdi mdi-arrow-right"></span>
                                              <time class="text-dark" datetime="2016-01-01">05/14/2015</time>
                                            </div>
                                            <div class="post-title">
                                              <h6 class="text-regular">Meaning of HTML5</h6>
                                            </div>
                                          </div>
                                        </div></a></article>
                    </div>
                  </div>
                </div>
                <div class="range offset-top-41">
                  <div class="cell-xs-6 cell-lg-12">
                    <!-- Category-->
                    <h6 class="text-uppercase text-spacing-60">Category</h6>
                    <div class="text-subline"></div>
                    <ul class="list list-marked offset-top-30">
                      <li><a href="#">Web Design <span class="text-dark">(37)</span></a></li>
                      <li><a href="#">UX <span class="text-dark">(211)</span></a></li>
                      <li><a href="#">Marketing <span class="text-dark">(12)</span></a></li>
                      <li><a href="#">Events <span class="text-dark">(7)</span></a></li>
                      <li><a href="#">News <span class="text-dark">(15)</span></a></li>
                    </ul>
                  </div>
                  <div class="cell-xs-6 cell-lg-12 offset-top-41 offset-xs-top-0 offset-lg-top-41">
                    <!-- Archive-->
                    <h6 class="text-uppercase text-spacing-60">Archive</h6>
                    <div class="text-subline"></div>
                    <ul class="list list-marked offset-top-30">
                      <li><a href="#">January 2016 <span class="text-dark">(17)</span></a></li>
                      <li><a href="#">December 2015 <span class="text-dark">(121)</span></a></li>
                      <li><a href="#">November 2015 <span class="text-dark">(19)</span></a></li>
                      <li><a href="#">October 2015 <span class="text-dark">(9)</span></a></li>
                      <li><a href="#">September 2015 <span class="text-dark">(25)</span></a></li>
                    </ul>
                  </div>
                </div>
                <!-- Tags-->
                <h6 class="offset-top-41 text-uppercase text-spacing-60">Tags</h6>
                <div class="text-subline"></div>
                <div class="offset-top-34">
                                <div class="group-xs"><a class="btn btn-xs btn-default" href="#">Web</a><a class="btn btn-xs btn-default" href="#">UX</a><a class="btn btn-xs btn-default" href="#">Marketing</a><a class="btn btn-xs btn-default" href="#">News</a><a class="btn btn-xs btn-default" href="#">Design</a><a class="btn btn-xs btn-default" href="#">Events</a>
                                </div>
                </div>
              </aside>
            </div>
          </div>
        </div>
      </main>
@endsection
@include('layout.footer')