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
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-filter-variant icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Shop</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
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
        <!--Section Themes Filter-->
        <section class="section-top-66 section-bottom-34">
          <div class="shell">
            <form class="text-left">
              <h5 class="text-bold">Your filters</h5>
              <div class="range range-xs-center offset-top-0">
                <div class="cell-sm-6 cell-md-4">
                  <div class="form-group">
                    <label class="form-label form-label-outside" for="form-filter-location">Types:</label>
                    <select class="form-control" id="form-filter-location" name="location" data-minimum-results-for-search="Infinity">
                      <option value="1">any</option>
                      <option value="2">HTML5 Website Templates</option>
                      <option value="3">WordPress Themes</option>
                      <option value="4">Joomla Templates</option>
                    </select>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-20 offset-sm-top-0">
                  <div class="form-group">
                    <label class="form-label form-label-outside" for="form-filter-property-status">Category:</label>
                    <select class="form-control" id="form-filter-property-status" name="property-status" data-minimum-results-for-search="Infinity">
                      <option value="1">any</option>
                      <option value="2">Business & Services</option>
                      <option value="3">Fashion & Beauty</option>
                      <option value="4">Real Estate</option>
                      <option value="5">Creative</option>
                      <option value="6">Corporate</option>
                      <option value="7">Specialty Pages</option>
                      <option value="8">Retail</option>
                      <option value="9">Entertainment</option>
                      <option value="10">Personal</option>
                    </select>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-4 offset-top-20 offset-md-top-0">
                  <div class="form-group">
                    <label class="form-label form-label-outside" for="form-filter-property-type">Sort By:</label>
                    <select class="form-control" id="form-filter-property-type" name="property-type" data-minimum-results-for-search="Infinity">
                      <option value="1">Newest items</option>
                      <option value="2">Trending items</option>
                      <option value="3">Best sellers</option>
                      <option value="4">Best rated</option>
                      <option value="5">Price: low to high</option>
                      <option value="6">Price: high to low</option>
                    </select>
                  </div>
                </div>
                <div class="range-spacer offset-top-20 veil reveal-md-flex"></div>
                <div class="cell-sm-6 cell-md-6 offset-top-20 offset-md-top-0">
                  <div class="range">
                    <div class="cell-sm-6">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="form-filter-sorting">Date Range</label>
                        <select class="form-control" id="form-filter-sorting" name="sorting" data-minimum-results-for-search="Infinity">
                          <option value="1">Today (5)</option>
                          <option value="2">Yesterday (4)</option>
                          <option value="2">This Week (4)</option>
                          <option value="2">Last Week (20)</option>
                          <option value="2">This Month (4)</option>
                          <option value="2">Last Month (103)</option>
                          <option value="2">Last 6 Months (709)</option>
                          <option value="2">Last Year (3224)</option>
                        </select>
                      </div>
                    </div>
                    <div class="cell-sm-6 offset-top-20 offset-sm-top-0">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="form-filter-min-bath">Rating:</label>
                        <select class="form-control" id="form-filter-min-bath" name="min-bath" data-minimum-results-for-search="Infinity">
                          <option value="1">Show all</option>
                          <option value="2">1 star and higher</option>
                          <option value="3">2 star and higher</option>
                          <option value="4">3 star and higher</option>
                          <option value="5">4 star and higher</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-3 offset-top-20 offset-md-top-0">
                  <div class="form-group-multiple">
                    <div class="form-group">
                      <label class="form-label form-label-outside" for="form-filter-price-from"><span class="veil reveal-sm-block">Price (USD):</span><span class="veil-sm">Price from (USD):</span></label>
                      <input class="form-control" id="form-filter-price-from" type="text" name="form-filter-price-from" data-constraints="@Required @IsNumeric">
                    </div>
                    <div class="form-group">
                      <label class="form-label form-label-outside" for="form-filter-price-to"> &nbsp;<span class="veil-sm">Price to (USD):</span></label>
                      <input class="form-control" id="form-filter-price-to" type="text" name="form-filter-price-to" data-constraints="@Required @IsNumeric">
                    </div>
                  </div>
                </div>
                <div class="cell-sm-6 cell-md-3 offset-top-20 offset-md-top-0">
                  <div class="range range-xs-bottom">
                    <div class="cell-sm-6">
                      <div class="form-group">
                        <label class="form-label form-label-outside" for="form-filter-min-beds">Sales:</label>
                        <select class="form-control" id="form-filter-min-beds" name="min-beds" data-minimum-results-for-search="Infinity">
                          <option value="1">No sales</option>
                          <option value="2">Low</option>
                          <option value="3">Medium</option>
                          <option value="4">High</option>
                          <option value="5">Top sellers</option>
                        </select>
                      </div>
                    </div>
                    <div class="cell-sm-6">
                      <button class="btn btn-primary btn-block" type="button">search</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </section>
      <!-- Page Content-->
        <section class="page-content section-98 section-sm-124">
          <div class="shell">
          <div class="product product-single">
            <div class="range">
              <div class="cell-sm-8 cell-md-6">
                <div class="product-image"><img class="img-responsive product-image-area" src="/images/shop/product-01-570x760.png" alt="">
                  <ul class="product-thumbnails">
                    <li class="active" data-large-image="/images/shop/product-01-570x760.png"><img class="img-responsive" src="/images/shop/product-01-84x84.png" alt="" width="84" height="84"></li>
                    <li data-large-image="/images/shop/product-01-570x760-2.png"><img class="img-responsive" src="/images/shop/product-01-84x84-2.png" alt="" width="84" height="84"></li>
                    <li data-large-image="/images/shop/product-01-570x760-3.png"><img class="img-responsive" src="/images/shop/product-01-84x84-3.png" alt="" width="84" height="84"></li>
                  </ul>
                </div>
              </div>
              <div class="cell-sm-12 cell-md-6 text-left offset-top-41 offset-md-top-0">
                <!-- Product Brand-->
                <p class="product-brand text-italic text-dark">Armani Brand</p>
                <!-- Product Title-->
                <h1 class="product-title offset-top-0"><a href="shop-single-product-no-sidebar.html">Engineered Rib Cashmere</a></h1>
                <!-- Product Rating-->
                <div class="product-rating offset-top-20"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star-half"></span><span class="mdi mdi-star-outline"></span><span class="product-review-count text-dark">4 customer reviews</span></div>
                          <!-- Classic Accordion-->
                          <div class="responsive-tabs responsive-tabs-classic" data-type="accordion">
                            <ul class="resp-tabs-list tabs-group-default" data-group="tabs-group-default">
                              <li>Description</li>
                              <li>Size &amp; Fit</li>
                              <li>Delivery &amp; Returns</li>
                            </ul>
                            <div class="resp-tabs-container tabs-group-default" data-group="tabs-group-default">
                              <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                              <div>17.25" bust <br> 14" shoulder to shoulder <br> 32.25" shoulder to hem <br>  Measurements taken from size small <br> Model wears size small. Model is 5'9 <br>  This dress fits true to size</div>
                              <div>We deliver our goods worldwide. No matter where you live, your order will be shipped in time and delivered right to your door or to any other location you have stated. The packages are handled with utmost care, so the ordered products will be handed to you safe and sound, just like you expect them to be.</div>
                            </div>
                          </div>
                <div class="product-radio-wrap product-radio-color offset-top-34">
                  <h5 class="product-radio-title" style="min-width: 130px;">Colors</h5>
                  <div class="form-group offset-top-10 offset-xs-top-0">
                    <label class="radio-inline">
                      <input name="input-group-radio-color" value="color-1" type="radio"><span class="product-radio" style="background-color: #1d2f61;"></span>
                    </label>
                    <label class="radio-inline">
                      <input name="input-group-radio-color" value="color-2" type="radio"><span class="product-radio" style="background-color: #9291a0;"></span>
                    </label>
                    <label class="radio-inline">
                      <input name="input-group-radio-color" value="color-3" type="radio"><span class="product-radio" style="background-color: #f3f1f2;"></span>
                    </label>
                  </div>
                </div>
                <div class="product-radio-wrap offset-top-24">
                  <h5 class="product-radio-title" style="min-width: 130px;">Select Size</h5>
                  <div class="form-group offset-top-10 offset-xs-top-0">
                    <label class="radio-inline">
                      <input name="input-group-radio-size" value="size-1" type="radio"><span class="small product-radio">XS</span>
                    </label>
                    <label class="radio-inline">
                      <input name="input-group-radio-size" value="size-2" type="radio"><span class="small product-radio">S</span>
                    </label>
                    <label class="radio-inline">
                      <input name="input-group-radio-size" value="size-3" type="radio"><span class="small product-radio">M</span>
                    </label>
                    <label class="radio-inline">
                      <input name="input-group-radio-size" value="size-4" type="radio"><span class="small product-radio">L</span>
                    </label>
                  </div>
                </div>
                <!-- Product price-->
                <div class="product-price text-bold h1 offset-top-34"><span class="product-price-new">$35.00</span><span class="product-price-old text-dark small">$57.00</span>
                </div>
                <div class="offset-top-34">
                  <div class="form-group product-number">
                    <label class="text-dark">Quantity:</label>
                    <input class="form-control input-sm form-control-impressed" type="number" data-zeros="true" value="1" min="1" max="20">
                  </div>
                  <!-- Product Add To cart--><a class="btn btn-sm btn-primary btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0" href="shop-cart.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                </div>
              </div>
            </div>
            <div class="offset-top-66">
                        <!-- Responsive-tabs-->
                        <div class="responsive-tabs responsive-tabs-boxed" data-type="vertical">
                          <ul class="resp-tabs-list text-center tabs-group-default" data-group="tabs-group-default">
                            <li>Additional Information</li>
                            <li>Video Review</li>
                            <li>Customer Reviews</li>
                            <li>Comments</li>
                          </ul>
                          <div class="resp-tabs-container text-left tabs-group-default" data-group="tabs-group-default">
                            <div>Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</div>
                            <div>
                                        <!-- Media Elements-->
                                                  <div class="embed-responsive embed-responsive-16by9">
                                                    <iframe class="embed-responsive-item" src="//www.youtube.com/embed/NN6zt1sF73w?wmode=transparent"></iframe>
                                                  </div>
                            </div>
                            <div>
                              <h5 class="text-uppercase">4 Customer Reviews</h5>
                              <!-- CUSTOMER REVIEWS-->
                              <ul class="list-unstyled list-reviews offset-sm-top-30">
                                <li>
                                  <ul class="list-inline list-xs-inline">
                                    <li><span class="text-bold text-uppercase big">John Doe</span></li>
                                    <li class="star-raiting"><span class="big"><span class="big"><span class="mdi mdi-star text-warning"></span><span class="mdi mdi-star text-warning"></span><span class="mdi mdi-star text-warning"></span><span class="mdi mdi mdi-star-half text-warning"></span><span class="mdi mdi mdi-star-outline text-warning"></span></span></span></li>
                                  </ul>
                                  <p class="offset-top-10">Eius munere cum no. Alia ridens corpora ea his. Sed etiam ignota eu. Vidisse legendos pro ad, numquam voluptatibus per ut, his quot prompta ad. Ius malis movet ea. Altera dissentiunt ut pro, mundi ignota ad sed.</p>
                                </li>
                                <li class="offset-top-30">
                                  <ul class="list-inline list-xs-inline">
                                    <li><span class="text-bold text-uppercase big">Alex Ross</span></li>
                                    <li class="star-raiting"><span class="big"><span class="big"><span class="mdi mdi-star text-warning"></span><span class="mdi mdi-star text-warning"></span><span class="mdi mdi-star text-warning"></span><span class="mdi mdi-star text-warning"></span><span class="mdi mdi-star text-warning"></span></span></span></li>
                                  </ul>
                                  <p class="offset-top-10">Qui an veri illum incorrupte. Cu has assum laboramus gloriatur, mea ea meis ferri definitionem, quod percipit evertitur ad qui. Altera omittam moderatius id vis, at vix quod bonorum dolorum. Ei pro graecis reformidans, nisl percipitur ullamcorper vis eu.</p>
                                </li>
                                <li class="offset-top-30">
                                  <ul class="list-inline list-xs-inline">
                                    <li><span class="text-bold text-uppercase big">Diana Roe</span></li>
                                    <li class="star-raiting"><span class="big"><span class="big"><span class="mdi mdi-star text-warning"></span><span class="mdi mdi-star text-warning"></span><span class="mdi mdi-star text-warning"></span><span class="mdi mdi mdi-star-outline text-warning"></span><span class="mdi mdi mdi-star-outline text-warning"></span></span></span></li>
                                  </ul>
                                  <p class="offset-top-10">Eius munere cum no. Alia ridens corpora ea his. Sed etiam ignota eu. Vidisse legendos pro ad, numquam voluptatibus per ut, his quot prompta ad. Ius malis movet ea. Altera dissentiunt ut pro, mundi ignota ad sed.</p>
                                </li>
                                <li class="offset-top-30">
                                  <ul class="list-inline list-xs-inline">
                                    <li><span class="text-bold text-uppercase big">Sara Cole</span></li>
                                    <li class="star-raiting"><span class="big"><span class="big"><span class="mdi mdi-star text-warning"></span><span class="mdi mdi-star text-warning"></span><span class="mdi mdi-star text-warning"></span><span class="mdi mdi mdi-star text-warning"></span><span class="mdi mdi mdi-star-half text-warning"></span></span></span></li>
                                  </ul>
                                  <p class="offset-top-10">No sit case indoctum, ad dicta singulis deterruisset vel. Mea ne nusquam corpora percipit, at ponderum rationibus sea, ubique invenire adolescens pri cu. Est maiorum omittantur ei. Et pro nisl insolens tincidunt, nam equidem maiorum tincidunt eu, magna tibique id vim</p>
                                </li>
                              </ul>
                            </div>
                            <div>
                              <h5 class="text-uppercase">Comments</h5>
                              <!-- CUSTOMER REVIEWS-->
                              <ul class="list-unstyled list-reviews offset-sm-top-30">
                                <li>
                                  <div>
                                    <p class="text-bold text-uppercase big">John Doe</p>
                                  </div>
                                  <p class="offset-top-10">Eius munere cum no. Alia ridens corpora ea his. Sed etiam ignota eu. Vidisse legendos pro ad, numquam voluptatibus per ut, his quot prompta ad. Ius malis movet ea. Altera dissentiunt ut pro, mundi ignota ad sed.</p>
                                </li>
                                <li class="offset-top-30">
                                  <div>
                                    <p class="text-bold text-uppercase big">Alex Ross</p>
                                  </div>
                                  <p class="offset-top-10">Qui an veri illum incorrupte. Cu has assum laboramus gloriatur, mea ea meis ferri definitionem, quod percipit evertitur ad qui. Altera omittam moderatius id vis, at vix quod bonorum dolorum. Ei pro graecis reformidans, nisl percipitur ullamcorper vis eu.</p>
                                </li>
                              </ul>
                              <h6 class="offset-top-41 text-uppercase">Leave a comment</h6>
                              <div class="form-group">
                                <label class="form-label form-label-outside" for="comment-message">Message:</label>
                                <textarea class="form-control" id="comment-message" data-constraints="@Required" style="height: 170px;"></textarea>
                              </div>
                              <div class="group-sm text-left offset-top-30">
                                <button class="btn btn-sm btn-primary" type="submit">comment</button>
                              </div>
                            </div>
                          </div>
                        </div>
            </div>
          </div>
          <div class="offset-top-66">
            <h4 class="text-spacing-120 text-left text-uppercase text-bold">Related Products</h4>
            <hr class="bg-gray">
            <div class="range">
              <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-xs-top-0">
                          <!-- Product-->
                          <div class="product product-grid">
                            <!-- Product Image-->
                            <div class="product-image"><img class="img-responsive product-image-area" src="/images/shop/product-02-270x360.png" alt="" width="270" height="360">
                              <!-- Product Thumnails-->
                              <ul class="product-thumbnails">
                                <li class="active"><img class="img-responsive" src="/images/shop/product-02-270x360.png" alt="" width="270" height="360"></li>
                                <li><img class="img-responsive" src="/images/shop/product-02-270x360-2.png" alt="" width="270" height="360"></li>
                                <li><img class="img-responsive" src="/images/shop/product-02-270x360-3.png" alt="" width="270" height="360"></li>
                              </ul>
                              <!-- Product Label--><span class="product-label label-custom label-lg-custom label-rounded-custom label-info">New</span>
                            </div>
                            <!-- Product Title-->
                            <h5 class="product-title offset-top-20"><a href="shop-single-product-no-sidebar.html">Ruched Bandage Miniskirt</a></h5>
                            <!-- Product Brand-->
                            <p class="product-brand text-italic text-dark">Step Brand</p>
                            <!-- Product price-->
                            <div class="product-price text-bold"><span>$59.00</span>
                            </div>
                            <div class="product-block-hover">
                              <!-- Product Add To cart--><a class="btn btn-sm btn-danger btn-icon btn-icon-left product-btn offset-top-20" href="shop-single-product-no-sidebar.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                            </div>
                          </div>
              </div>
              <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-xs-top-0">
                          <!-- Product-->
                          <div class="product product-grid">
                            <!-- Product Image-->
                            <div class="product-image"><img class="img-responsive product-image-area" src="/images/shop/product-03-270x360.png" alt="" width="270" height="360">
                              <!-- Product Thumnails-->
                              <ul class="product-thumbnails">
                                <li class="active"><img class="img-responsive" src="/images/shop/product-03-270x360.png" alt="" width="270" height="360"></li>
                                <li><img class="img-responsive" src="/images/shop/product-03-270x360-2.png" alt="" width="270" height="360"></li>
                                <li><img class="img-responsive" src="/images/shop/product-03-270x360-3.png" alt="" width="270" height="360"></li>
                              </ul>
                              <!-- Product Label-->
                            </div>
                            <!-- Product Title-->
                            <h5 class="product-title offset-top-20"><a href="shop-single-product-no-sidebar.html">Knit Cami Top</a></h5>
                            <!-- Product Brand-->
                            <p class="product-brand text-italic text-dark">Amo Brand</p>
                            <!-- Product price-->
                            <div class="product-price text-bold"><span>$48.00</span>
                            </div>
                            <div class="product-block-hover">
                              <!-- Product Add To cart--><a class="btn btn-sm btn-danger btn-icon btn-icon-left product-btn offset-top-20" href="shop-single-product-no-sidebar.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                            </div>
                          </div>
              </div>
              <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-sm-top-0">
                          <!-- Product-->
                          <div class="product product-grid">
                            <!-- Product Image-->
                            <div class="product-image"><img class="img-responsive product-image-area" src="/images/shop/product-04-270x360.png" alt="" width="270" height="360">
                              <!-- Product Thumnails-->
                              <ul class="product-thumbnails">
                                <li class="active"><img class="img-responsive" src="/images/shop/product-04-270x360.png" alt="" width="270" height="360"></li>
                                <li><img class="img-responsive" src="/images/shop/product-04-270x360-2.png" alt="" width="270" height="360"></li>
                                <li><img class="img-responsive" src="/images/shop/product-04-270x360-3.png" alt="" width="270" height="360"></li>
                              </ul>
                              <!-- Product Label-->
                            </div>
                            <!-- Product Title-->
                            <h5 class="product-title offset-top-20"><a href="shop-single-product-no-sidebar.html">Contrast Back Zip</a></h5>
                            <!-- Product Brand-->
                            <p class="product-brand text-italic text-dark">Polo Brand</p>
                            <!-- Product price-->
                            <div class="product-price text-bold"><span>$14.00</span>
                            </div>
                            <div class="product-block-hover">
                              <!-- Product Add To cart--><a class="btn btn-sm btn-danger btn-icon btn-icon-left product-btn offset-top-20" href="shop-single-product-no-sidebar.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                            </div>
                          </div>
              </div>
              <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-md-top-0">
                          <!-- Product-->
                          <div class="product product-grid">
                            <!-- Product Image-->
                            <div class="product-image"><img class="img-responsive product-image-area" src="/images/shop/product-05-270x360.png" alt="" width="270" height="360">
                              <!-- Product Thumnails-->
                              <ul class="product-thumbnails">
                                <li class="active"><img class="img-responsive" src="/images/shop/product-05-270x360.png" alt="" width="270" height="360"></li>
                                <li><img class="img-responsive" src="/images/shop/product-05-270x360-2.png" alt="" width="270" height="360"></li>
                                <li><img class="img-responsive" src="/images/shop/product-05-270x360-3.png" alt="" width="270" height="360"></li>
                              </ul>
                              <!-- Product Label-->
                            </div>
                            <!-- Product Title-->
                            <h5 class="product-title offset-top-20"><a href="shop-single-product-no-sidebar.html">Collar Leather Jacket</a></h5>
                            <!-- Product Brand-->
                            <p class="product-brand text-italic text-dark">Amo Brand</p>
                            <!-- Product price-->
                            <div class="product-price text-bold"><span>$38.00</span>
                            </div>
                            <div class="product-block-hover">
                              <!-- Product Add To cart--><a class="btn btn-sm btn-danger btn-icon btn-icon-left product-btn offset-top-20" href="shop-single-product-no-sidebar.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
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