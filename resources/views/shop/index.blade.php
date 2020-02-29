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
        <section id="gridArea" class="page-content section-98 section-sm-124">
          <div class="shell">
          <!-- Shop Grid View-->
                    <div class="toolbar-shop">
                      <div class="toolbar-shop-sorter"><a class="toolbar-shop-icon active" onclick="showGrid();"><span class="icon-xxs mdi mdi-view-module"></span></a><a class="toolbar-shop-icon" onclick="showList();"><span class="icon-xxs mdi mdi-view-list"></span></a></div>
                      <div class="toolbar-shop-pager"><span class="toolbar-shop-current text-mantis">1-6 of 15</span>
                        <div class="form-group">
                          <label>Show:</label>
                          <select class="form-control select-filter toolbar-shop-pager-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity">
                            <option>6</option>
                            <option>12</option>
                            <option>18</option>
                            <option>24</option>
                          </select>
                        </div>
                      </div>
                    </div>
          <div class="range">
            <div class="cell-xs-6 cell-sm-4 cell-md-3">
                        <!-- Product-->
                        <div class="product product-grid">
                          <!-- Product Image-->
                          <div class="product-image"><a href="/shop/product_detail"><img class="img-responsive product-image-area" src="images/shop/product-01-270x360.png" alt=""></a>
                            <!-- Product Thumnails-->
                            <ul class="product-thumbnails">
                              <li class="active"><img class="img-responsive" src="images/shop/product-01-270x360.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-01-270x360-2.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-01-270x360-3.png" alt=""></li>
                            </ul>
                            <!-- Product Label--><span class="product-label label-custom label-lg-custom label-rounded-custom label-danger">Sale</span>
                          </div>
                          <!-- Product Title-->
                          <h5 class="product-title offset-top-20"><a href="shop-single-product-no-sidebar.html">Engineered Rib Cashmere</a></h5>
                          <!-- Product Brand-->
                          <p class="product-brand text-italic text-dark">Armani Brand</p>
                          <!-- Product price-->
                          <div class="product-price text-bold"><span class="product-price-old text-dark">$57.00</span><span class="product-price-new">$35.00</span>
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
                          <div class="product-image"><img class="img-responsive product-image-area" src="images/shop/product-02-270x360.png" alt="">
                            <!-- Product Thumnails-->
                            <ul class="product-thumbnails">
                              <li class="active"><img class="img-responsive" src="images/shop/product-02-270x360.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-02-270x360-2.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-02-270x360-3.png" alt=""></li>
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
            <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-sm-top-0">
                        <!-- Product-->
                        <div class="product product-grid">
                          <!-- Product Image-->
                          <div class="product-image"><img class="img-responsive product-image-area" src="images/shop/product-03-270x360.png" alt="">
                            <!-- Product Thumnails-->
                            <ul class="product-thumbnails">
                              <li class="active"><img class="img-responsive" src="images/shop/product-03-270x360.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-03-270x360-2.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-03-270x360-3.png" alt=""></li>
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
            <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-md-top-0">
                        <!-- Product-->
                        <div class="product product-grid">
                          <!-- Product Image-->
                          <div class="product-image"><img class="img-responsive product-image-area" src="images/shop/product-04-270x360.png" alt="">
                            <!-- Product Thumnails-->
                            <ul class="product-thumbnails">
                              <li class="active"><img class="img-responsive" src="images/shop/product-04-270x360.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-04-270x360-2.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-04-270x360-3.png" alt=""></li>
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
            <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-md-top-50">
                        <!-- Product-->
                        <div class="product product-grid">
                          <!-- Product Image-->
                          <div class="product-image"><img class="img-responsive product-image-area" src="images/shop/product-05-270x360.png" alt="">
                            <!-- Product Thumnails-->
                            <ul class="product-thumbnails">
                              <li class="active"><img class="img-responsive" src="images/shop/product-05-270x360.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-05-270x360-2.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-05-270x360-3.png" alt=""></li>
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
            <div class="cell-xs-6 cell-sm-4 cell-md-3 offset-top-41 offset-md-top-50">
                        <!-- Product-->
                        <div class="product product-grid">
                          <!-- Product Image-->
                          <div class="product-image"><img class="img-responsive product-image-area" src="images/shop/product-06-270x360.png" alt="">
                            <!-- Product Thumnails-->
                            <ul class="product-thumbnails">
                              <li class="active"><img class="img-responsive" src="images/shop/product-06-270x360.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-06-270x360-2.png" alt=""></li>
                              <li><img class="img-responsive" src="images/shop/product-06-270x360-3.png" alt=""></li>
                            </ul>
                            <!-- Product Label-->
                          </div>
                          <!-- Product Title-->
                          <h5 class="product-title offset-top-20"><a href="shop-single-product-no-sidebar.html">Knit Skater Skirt</a></h5>
                          <!-- Product Brand-->
                          <p class="product-brand text-italic text-dark">Step Brand</p>
                          <!-- Product price-->
                          <div class="product-price text-bold"><span>$68.00</span>
                          </div>
                          <div class="product-block-hover">
                            <!-- Product Add To cart--><a class="btn btn-sm btn-danger btn-icon btn-icon-left product-btn offset-top-20" href="shop-single-product-no-sidebar.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                          </div>
                        </div>
            </div>
          </div>
          <div class="offset-top-66">
            <!-- Bootstrap Pagination-->
            <nav>
              <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#" aria-label="Previous"><span class="mdi mdi-chevron-double-left" aria-hidden="true"></span></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#" aria-label="Next"><span class="mdi mdi-chevron-double-right" aria-hidden="true"></span></a></li>
              </ul>
            </nav>
          </div>
          </div>
        </section>
        <section id="listArea" class="page-content section-98 section-sm-124">
          <div class="shell">
          <!-- Shop Grid View-->
                    <div class="toolbar-shop">
                      <div class="toolbar-shop-sorter"><a class="toolbar-shop-icon" onclick="showGrid()"><span class="icon-xxs mdi mdi-view-module"></span></a><a class="toolbar-shop-icon active" onclick="showList();"><span class="icon-xxs mdi mdi-view-list"></span></a></div>
                      <div class="toolbar-shop-pager"><span class="toolbar-shop-current text-mantis">1-6 of 15</span>
                        <div class="form-group">
                          <label>Show:</label>
                          <select class="form-control select-filter toolbar-shop-pager-select" data-placeholder="Select an option" data-minimum-results-for-search="Infinity">
                            <option>6</option>
                            <option>12</option>
                            <option>18</option>
                            <option>24</option>
                          </select>
                        </div>
                      </div>
                    </div>
          <div class="offset-top-41">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images/shop/product-01-270x360.png" alt="">
                          <!-- Product Thumnails-->
                          <ul class="product-thumbnails">
                            <li class="active"><img class="img-responsive" src="images/shop/product-01-270x360.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-01-270x360-2.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-01-270x360-3.png" alt=""></li>
                          </ul>
                          <!-- Product Label--><span class="product-label label-custom label-lg-custom label-rounded-custom label-danger">Sale</span>
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Armani Brand</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-single-product-no-sidebar.html">Engineered Rib Cashmere</a></h2>
                              <!-- Product Rating-->
                              <div class="product-rating offset-top-20"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star-half"></span><span class="mdi mdi-star-outline"></span><span class="product-review-count text-dark">4 customer reviews</span></div>
                              <p class="product-desc">Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</p><a class="text-bold text-picton-blue veil reveal-lg-inline-block" href="shop-single-product-no-sidebar.html">Learn More</a>
                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span class="product-price-new">$35.00</span><span class="product-price-old text-dark small">$57.00</span>
                              </div>
                              <div class="form-group product-number">
                                <label class="text-dark">Quantity:</label>
                                <input class="form-control input-sm form-control-impressed" type="number" data-zeros="true" value="1" min="1" max="20">
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-single-product-no-sidebar.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images/shop/product-02-270x360.png" alt="">
                          <!-- Product Thumnails-->
                          <ul class="product-thumbnails">
                            <li class="active"><img class="img-responsive" src="images/shop/product-02-270x360.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-02-270x360-2.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-02-270x360-3.png" alt=""></li>
                          </ul>
                          <!-- Product Label--><span class="product-label label-custom label-lg-custom label-rounded-custom label-info">New</span>
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Step Brand</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-single-product-no-sidebar.html">Ruched Bandage Miniskirt</a></h2>
                              <!-- Product Rating-->
                              <div class="product-rating offset-top-20"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star-half"></span><span class="mdi mdi-star-outline"></span><span class="product-review-count text-dark">4 customer reviews</span></div>
                              <p class="product-desc">Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</p><a class="text-bold text-picton-blue veil reveal-lg-inline-block" href="shop-single-product-no-sidebar.html">Learn More</a>
                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>$59.00</span>
                              </div>
                              <div class="form-group product-number">
                                <label class="text-dark">Quantity:</label>
                                <input class="form-control input-sm form-control-impressed" type="number" data-zeros="true" value="1" min="1" max="20">
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-single-product-no-sidebar.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images/shop/product-03-270x360.png" alt="">
                          <!-- Product Thumnails-->
                          <ul class="product-thumbnails">
                            <li class="active"><img class="img-responsive" src="images/shop/product-03-270x360.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-03-270x360-2.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-03-270x360-3.png" alt=""></li>
                          </ul>
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Amo Brand</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-single-product-no-sidebar.html">Knit Cami Top</a></h2>
                              <!-- Product Rating-->
                              <div class="product-rating offset-top-20"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star-half"></span><span class="mdi mdi-star-outline"></span><span class="product-review-count text-dark">4 customer reviews</span></div>
                              <p class="product-desc">Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</p><a class="text-bold text-picton-blue veil reveal-lg-inline-block" href="shop-single-product-no-sidebar.html">Learn More</a>
                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>$48.00</span>
                              </div>
                              <div class="form-group product-number">
                                <label class="text-dark">Quantity:</label>
                                <input class="form-control input-sm form-control-impressed" type="number" data-zeros="true" value="1" min="1" max="20">
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-single-product-no-sidebar.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images/shop/product-04-270x360.png" alt="">
                          <!-- Product Thumnails-->
                          <ul class="product-thumbnails">
                            <li class="active"><img class="img-responsive" src="images/shop/product-04-270x360.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-04-270x360-2.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-04-270x360-3.png" alt=""></li>
                          </ul>
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Polo Brand</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-single-product-no-sidebar.html">Contrast Back Zip</a></h2>
                              <!-- Product Rating-->
                              <div class="product-rating offset-top-20"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star-half"></span><span class="mdi mdi-star-outline"></span><span class="product-review-count text-dark">4 customer reviews</span></div>
                              <p class="product-desc">Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</p><a class="text-bold text-picton-blue veil reveal-lg-inline-block" href="shop-single-product-no-sidebar.html">Learn More</a>
                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>$14.00</span>
                              </div>
                              <div class="form-group product-number">
                                <label class="text-dark">Quantity:</label>
                                <input class="form-control input-sm form-control-impressed" type="number" data-zeros="true" value="1" min="1" max="20">
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-single-product-no-sidebar.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images/shop/product-05-270x360.png" alt="">
                          <!-- Product Thumnails-->
                          <ul class="product-thumbnails">
                            <li class="active"><img class="img-responsive" src="images/shop/product-05-270x360.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-05-270x360-2.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-05-270x360-3.png" alt=""></li>
                          </ul>
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Amo Brand</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-single-product-no-sidebar.html">Collar Leather Jacket</a></h2>
                              <!-- Product Rating-->
                              <div class="product-rating offset-top-20"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star-half"></span><span class="mdi mdi-star-outline"></span><span class="product-review-count text-dark">4 customer reviews</span></div>
                              <p class="product-desc">Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</p><a class="text-bold text-picton-blue veil reveal-lg-inline-block" href="shop-single-product-no-sidebar.html">Learn More</a>
                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>$38.00</span>
                              </div>
                              <div class="form-group product-number">
                                <label class="text-dark">Quantity:</label>
                                <input class="form-control input-sm form-control-impressed" type="number" data-zeros="true" value="1" min="1" max="20">
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-single-product-no-sidebar.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
                      <!-- Product-->
                      <div class="product product-list product-list-wide unit unit-sm-horizontal unit-xs-top">
                        <!-- Product Image-->
                        <div class="product-image unit-left"><img class="img-responsive product-image-area" src="images/shop/product-06-270x360.png" alt="">
                          <!-- Product Thumnails-->
                          <ul class="product-thumbnails">
                            <li class="active"><img class="img-responsive" src="images/shop/product-06-270x360.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-06-270x360-2.png" alt=""></li>
                            <li><img class="img-responsive" src="images/shop/product-06-270x360-3.png" alt=""></li>
                          </ul>
                          <!-- Product Label-->
                        </div>
                        <div class="unit-body text-left">
                          <div class="unit unit-lg-horizontal unit-lg-top">
                            <div class="unit-body">
                              <!-- Product Brand-->
                              <p class="product-brand text-italic text-dark">Step Brand</p>
                              <!-- Product Title-->
                              <h2 class="product-title offset-top-0"><a href="shop-single-product-no-sidebar.html">Knit Skater Skirt</a></h2>
                              <!-- Product Rating-->
                              <div class="product-rating offset-top-20"><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star"></span><span class="mdi mdi-star-half"></span><span class="mdi mdi-star-outline"></span><span class="product-review-count text-dark">4 customer reviews</span></div>
                              <p class="product-desc">Fashion has always been so temporary and uncertain. You can’t keep up with it. This social phenomenon is very whimsical, thus we as the consumers always try to stay in touch with all the latest fashion tendencies.</p><a class="text-bold text-picton-blue veil reveal-lg-inline-block" href="shop-single-product-no-sidebar.html">Learn More</a>
                            </div>
                            <div class="unit-right product-list-right">
                              <!-- Product price-->
                              <div class="product-price text-bold h5 offset-top-14"><span>$68.00</span>
                              </div>
                              <div class="form-group product-number">
                                <label class="text-dark">Quantity:</label>
                                <input class="form-control input-sm form-control-impressed" type="number" data-zeros="true" value="1" min="1" max="20">
                              </div>
                              <!-- Product Add To cart--><a class="btn btn-sm btn-picton-blue btn-icon btn-icon-left product-btn offset-top-20 offset-xs-top-0 offset-lg-top-20 reveal-lg-block" href="shop-single-product-no-sidebar.html"><span class="icon mdi mdi-cart-outline"></span>Add to Cart</a>
                            </div>
                          </div>
                        </div>
                      </div>
          </div>
          <div class="offset-top-66">
            <!-- Bootstrap Pagination-->
            <nav>
              <ul class="pagination pagination-sm">
                <li class="disabled"><a href="#" aria-label="Previous"><span class="mdi mdi-chevron-double-left" aria-hidden="true"></span></a></li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#" aria-label="Next"><span class="mdi mdi-chevron-double-right" aria-hidden="true"></span></a></li>
              </ul>
            </nav>
          </div>
          </div>
        </section>
      </main>

      <script>
        window.onload = function() {
          document.getElementById("listArea").style.display ="none";
        }
        function showList() {
          document.getElementById("gridArea").style.display = "none";
          document.getElementById("listArea").style.display = "block";
        }
        function showGrid() {
          document.getElementById("listArea").style.display = "none";
          document.getElementById("gridArea").style.display = "block";
        }
      </script>
@endsection
@include('layout.footer')