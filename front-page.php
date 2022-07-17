<?php get_header() ?>

<section id="wrapper">
  <nav data-depth="1" class="breadcrumb hidden-sm-down">
    <div class="container">
      <div class="box-breadcrumb">
        <ol>
          <li>
            <span>Home</span>
          </li>
        </ol>
      </div>
    </div>

    <div class="category-cover hidden-sm-down">
      <img src="<?php echo get_template_directory_uri(); ?>/themes/at_dimita/assets/img/bg-breadcrumb.jpg"
        class="img-fluid" alt="Breadcrumb image" />
    </div>
  </nav>

  <div class="row">
    <div id="content-wrapper" class="col-lg-12 col-xs-12 js-content-wrapper">
      <section id="main">
        <section id="content" class="page-home">
          <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
          <div class="row box-slideshow ApRow has-bg bg-boxed" style="background: no-repeat" data-bg_data=" no-repeat">
            <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn">
              <!-- @file modules\appagebuilder\views\templates\hook\ApSlideShow -->
              <div id="slideshow-form_1875799217242324" class="ApSlideShow">
                <div class="bannercontainer banner-fullwidth" style="padding: 0; margin: 0">
                  <div class="iview iview-group-61c795d292925-3">
                    <!-- SLIDE IMAGE BEGIN -->
                    <div class="slide_config"
                      data-leo_image="<?php echo get_template_directory_uri(); ?>/themes/at_dimita/assets/img/modules/leoslideshow/slide1-h3-novo.jpg"
                      data-leo_pausetime="5000"
                      data-leo_thumbnail="<?php echo get_template_directory_uri(); ?>/themes/at_dimita/assets/img/modules/leoslideshow/slide1-h3-novo.jpg"
                      data-leo_background="image">
                      <div class="tp-caption medium_text_white_24" data-x="240" data-y="228" data-transition="fade">
                        <!-- LAYER TEXT BEGIN -->
                        IPhone
                        <!-- LAYER TEXT END -->

                        <!-- LAYER IMAGE END -->

                        <!-- LAYER VIDEO END -->
                      </div>

                      <div class="tp-caption big_white_48" data-x="240" data-y="280" data-transition="fade">
                        <!-- LAYER TEXT BEGIN -->
                        Quer trocar seu <br />IPhone?
                        <!-- LAYER TEXT END -->

                        <!-- LAYER IMAGE END -->

                        <!-- LAYER VIDEO END -->
                      </div>

                      <div class="tp-caption medium_text_white_20" data-x="240" data-y="400" data-transition="fade">
                        <!-- LAYER TEXT BEGIN -->
                        Nós compramos e pagamos um preço justo!
                        <!-- LAYER TEXT END -->

                        <!-- LAYER IMAGE END -->

                        <!-- LAYER VIDEO END -->
                      </div>

                      <div class="tp-caption btn" data-x="240" data-y="480" data-transition="fade">
                        <!-- LAYER TEXT BEGIN -->
                        Saiba mais
                        <!-- LAYER TEXT END -->

                        <!-- LAYER IMAGE END -->

                        <!-- LAYER VIDEO END -->
                      </div>
                    </div>
                    <!-- SLIDE IMAGE END -->

                    <!-- SLIDE IMAGE BEGIN -->
                    <div class="slide_config"
                      data-leo_image="<?php echo get_template_directory_uri(); ?>/themes/at_dimita/assets/img/modules/leoslideshow/slide3-h3-novo.jpg"
                      data-leo_pausetime="5000"
                      data-leo_thumbnail="<?php echo get_template_directory_uri(); ?>/themes/at_dimita/assets/img/modules/leoslideshow/slide3-h3-novo.jpg"
                      data-leo_background="image">
                      <div class="tp-caption medium_text_white_24" data-x="240" data-y="228" data-transition="fade">
                        <!-- LAYER TEXT BEGIN -->
                        IPhone
                        <!-- LAYER TEXT END -->

                        <!-- LAYER IMAGE END -->

                        <!-- LAYER VIDEO END -->
                      </div>

                      <div class="tp-caption big_white_48" data-x="240" data-y="280" data-transition="fade">
                        <!-- LAYER TEXT BEGIN -->
                        Quer vender seu <br />IPhone?
                        <!-- LAYER TEXT END -->

                        <!-- LAYER IMAGE END -->

                        <!-- LAYER VIDEO END -->
                      </div>

                      <div class="tp-caption medium_text_white_20" data-x="240" data-y="400" data-transition="fade">
                        <!-- LAYER TEXT BEGIN -->
                        Nós compramos, faça um orçamento
                        <!-- LAYER TEXT END -->

                        <!-- LAYER IMAGE END -->

                        <!-- LAYER VIDEO END -->
                      </div>

                      <div class="tp-caption btn" data-x="240" data-y="480" data-transition="fade">
                        <!-- LAYER TEXT BEGIN -->
                        Saiba mais
                        <!-- LAYER TEXT END -->

                        <!-- LAYER IMAGE END -->

                        <!-- LAYER VIDEO END -->
                      </div>
                    </div>
                    <!-- SLIDE IMAGE END -->
                  </div>
                </div>

                <script type="text/javascript">
                ap_list_functions.push(function() {
                  jQuery(".iview-group-61c795d292925-3").iView({
                    // COMMON
                    pauseTime: 9000, // delay
                    startSlide: 0,
                    autoAdvance: 1, // enable timer thá»�i gian auto next slide
                    pauseOnHover: 1,
                    randomStart: 0, // Ramdom slide when start

                    // TIMER
                    timer: "360Bar",
                    timerPosition: "top-right", // Top-right, top left ....
                    timerX: 10,
                    timerY: 10,
                    timerOpacity: 0.5,
                    timerBg: "#000",
                    timerColor: "#EEE",
                    timerDiameter: 30,
                    timerPadding: 4,
                    timerStroke: 3,
                    timerBarStroke: 1,
                    timerBarStrokeColor: "#EEE",
                    timerBarStrokeStyle: "solid",
                    playLabel: "Play",
                    pauseLabel: "Pause",
                    closeLabel: "Close", // Muli language

                    // NAVIGATOR controlNav
                    controlNav: 0, // true : enable navigate - default:'false'
                    keyboardNav: 1, // true : enable keybroad
                    controlNavThumbs: 0, // true show thumbnail, false show number ( bullet )
                    controlNavTooltip: 0, // true : hover to bullet show thumnail
                    tooltipX: 5,
                    tooltipY: -5,
                    controlNavHoverOpacity: 0.6, // opacity navigator

                    // DIRECTION
                    controlNavNextPrev: false, // false dont show direction at navigator
                    directionNav: 1, // true  show direction at image ( in this case : enable direction )
                    directionNavHoverOpacity: 0.6, // direction opacity at image
                    nextLabel: "Next", // Muli language
                    previousLabel: "Previous", // Muli language

                    // ANIMATION
                    fx: "random", // Animation
                    animationSpeed: 500, // time to change slide
                    //		strips: 20,
                    strips: 1, // set value is 1 -> fix animation full background
                    blockCols: 10, // number of columns
                    blockRows: 5, // number of rows

                    captionSpeed: 500, // speed to show caption
                    captionOpacity: 1, // caption opacity
                    captionEasing: "easeInOutSine", // caption transition easing effect, use JQuery Easings effect
                    customWidth: 1920,
                    customHtmlBullet: false,
                    rtl: false,
                    height: 830,
                    timer_show: 1,

                    //onBeforeChange: function(){}, // Triggers before a slide transition
                    //onAfterChange: function(){}, // Triggers after a slide transition
                    //onSlideshowEnd: function(){}, // Triggers after all slides have been shown
                    //onLastSlide: function(){}, // Triggers when last slide is shown
                    //onPause: function(){}, // Triggers when slider has paused
                    //onPlay: function(){} // Triggers when slider has played

                    onAfterLoad: function() {
                      // THUMBNAIL
                      $(
                        ".iview-group-61c795d292925-3 .iview-controlNav a img"
                      ).height(30);
                      //$('.iview-group-61c795d292925-3 .iview-tooltip').height(30);
                      $(
                        ".iview-group-61c795d292925-3 .iview-controlNav a img"
                      ).width(30);
                      //$('.iview-group-61c795d292925-3 .iview-tooltip').width(30);

                      // BULLET
                      $(
                        ".iview-group-61c795d292925-3 .iview-tooltip div.holder div.container div img"
                      ).width(30);
                      $(
                        ".iview-group-61c795d292925-3 .iview-tooltip div.holder div.container div img"
                      ).height(30);

                      // Display timer
                      $(
                        ".iview-group-61c795d292925-3 .iview-timer"
                      ).hide();
                    },
                  });

                  $(".img_disable_drag").bind("dragstart", function() {
                    return false;
                  });

                  // Fix : Slide link, image cant swipe
                  // step 1
                  var link_event = "click";

                  // step 3
                  $(".iview-group-61c795d292925-3 .slide_config").on(
                    "click",
                    function() {
                      if (link_event !== "click") {
                        link_event = "click";
                        return;
                      }

                      if (
                        $(this).data("link") != undefined &&
                        $(this).data("link") != ""
                      ) {
                        window.open(
                          $(this).data("link"),
                          $(this).data("target")
                        );
                      }
                    }
                  );

                  // step 2
                  $(".iview-group-61c795d292925-3 .slide_config").on(
                    "swipe",
                    function() {
                      link_event = "swiped"; // do not click event
                    }
                  );
                });
                </script>
              </div>
            </div>
          </div>
          <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
          <div class="wrapper" style="background: #f5f5f5 no-repeat">
            <div class="container">
              <div class="row no-margin ApRow has-bg bg-fullwidth-container" style="">
                <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                <div
                  class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 box-bg-white banner-wrapper-infor ApColumn">
                  <!-- @file modules\appagebuilder\views\templates\hook\ApTabs -->
                  <script type="text/javascript">
                  ap_list_functions.push(function() {
                    // ACTION USE EFFECT
                    $("#tab_2605763049 .tab-pane").addClass("fade");

                    // ACTION SET ACTIVE
                    $("#tab_2605763049 .nav a:eq(0)").trigger("click");
                  });
                  </script>
                  <div id="tab_2605763049" class="ApTabs tabs-top">
                    <h4 class="title_block">Top produtos</h4>

                    <div class="block_content">
                      <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                          <a href="#tab_8786320948624889" class="nav-link form_43727572851462305" role="tab"
                            data-toggle="tab">
                            <span>Todos os produtos</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#tab_6682488626015560" class="nav-link form_5036762094777601" role="tab"
                            data-toggle="tab">
                            <span>IPhones</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#tab_8528710969805285" class="nav-link form_9322658754034848" role="tab"
                            data-toggle="tab">
                            <span>MacBook</span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a href="#tab_2788706661262784" class="nav-link form_24461552037901645" role="tab"
                            data-toggle="tab">
                            <span>Acessórios</span>
                          </a>
                        </li>
                      </ul>
                      <div class="tab-content">
                        <!-- @file modules\appagebuilder\views\templates\hook\ApTabs -->
                        <div id="tab_8786320948624889" class="tab-pane">
                          <!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
                          <div class="block products_block exclusive appagebuilder ApProductCarousel">
                            <div class="block_content">
                              <!-- @file modules\appagebuilder\views\templates\hook\ProductOwlCarousel -->
                              <div class="owl-row">
                                <div class="timeline-wrapper clearfix prepare" data-item="4" data-xl="4" data-lg="3"
                                  data-md="2" data-sm="2" data-m="1">
                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="carousel-2783512758"
                                  class="owl-carousel owl-theme owl-loading profile-default">
                                  <div class="item first">
                                    <article class="product-miniature js-product-miniature" data-id-product="1"
                                      data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="computer-laptop/1-1-sony-e591-full-color.html#/1-size-s/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../24-home_default/sony-e591-full-color.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/24-large_default/sony-e591-full-color.jpg" />
                                            <span class="product-additional" data-idproduct="1"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -20%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="299"
                                                  class="quantity_product quantity_product_1" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_1" name="minimal_quantity" />
                                                <input type="hidden" value="1"
                                                  class="id_product_attribute id_product_attribute_1"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="1" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_1"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_1"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="1"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="1" data-id-product-attribute="1"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews" itemprop="aggregateRating" itemscope
                                            itemtype="https://schema.org/AggregateRating">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <meta itemprop="worstRating" content="0" />
                                                <meta itemprop="ratingValue" content="5" />
                                                <meta itemprop="bestRating" content="5" />
                                              </div>
                                              <meta itemprop="reviewCount" content="1" />
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="computer-laptop/1-1-sony-e591-full-color.html#/1-size-s/8-color-white">Sony
                                              E591 Full Color</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="19.12">$19.12</span>
                                            </span>

                                            <span class="regular-price">$23.90</span>
                                            <span class="discount-percentage">-20%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="2"
                                      data-id-product-attribute="9" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="camera-photo/2-9-charging-cradle.html#/1-size-s"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid"
                                              src="/assets/images/iphone/Selo_EXCELENTE-900x900.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/30-large_default/charging-cradle.jpg" />
                                            <span class="product-additional" data-idproduct="2"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -20%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="1199"
                                                  class="quantity_product quantity_product_2" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_2" name="minimal_quantity" />
                                                <input type="hidden" value="9"
                                                  class="id_product_attribute id_product_attribute_2"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="2" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_2"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_2"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="2"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="2" data-id-product-attribute="9"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="camera-photo/2-9-charging-cradle.html#/1-size-s">Charging
                                              Cradle</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="28.72">$28.72</span>
                                            </span>

                                            <span class="regular-price">$35.90</span>
                                            <span class="discount-percentage">-20%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="3"
                                      data-id-product-attribute="13" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid"
                                              src="../35-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/35-large_default/the-best-is-yet-to-come-framed-poster.jpg" />
                                            <span class="product-additional" data-idproduct="3"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -5%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="899"
                                                  class="quantity_product quantity_product_3" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_3" name="minimal_quantity" />
                                                <input type="hidden" value="13"
                                                  class="id_product_attribute id_product_attribute_3"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="3" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_3"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_3"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="3"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="3" data-id-product-attribute="13"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="technologies/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm">The
                                              best is yet to
                                              come&#039; Framed poster</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="27.55">$27.55</span>
                                            </span>

                                            <span class="regular-price">$29.00</span>
                                            <span class="discount-percentage">-5%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="4"
                                      data-id-product-attribute="16" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/4-16-bluetooth-speaker-gk1.html#/19-dimension-40x60cm"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../41-home_default/bluetooth-speaker-gk1.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/41-large_default/bluetooth-speaker-gk1.jpg" />
                                            <span class="product-additional" data-idproduct="4"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -10%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="898"
                                                  class="quantity_product quantity_product_4" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_4" name="minimal_quantity" />
                                                <input type="hidden" value="16"
                                                  class="id_product_attribute id_product_attribute_4"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="4" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_4"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_4"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="4"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="4" data-id-product-attribute="16"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="technologies/4-16-bluetooth-speaker-gk1.html#/19-dimension-40x60cm">Bluetooth
                                              Speaker GK1</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="26.1">$26.10</span>
                                            </span>

                                            <span class="regular-price">$29.00</span>
                                            <span class="discount-percentage">-10%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="5"
                                      data-id-product-attribute="19" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/5-19-camera-logiti-s-l8910.html#/19-dimension-40x60cm"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../47-home_default/camera-logiti-s-l8910.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/47-large_default/camera-logiti-s-l8910.jpg" />
                                            <span class="product-additional" data-idproduct="5"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -15%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_5" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_5" name="minimal_quantity" />
                                                <input type="hidden" value="19"
                                                  class="id_product_attribute id_product_attribute_5"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="5" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_5"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_5"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="5"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="5" data-id-product-attribute="19"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="technologies/5-19-camera-logiti-s-l8910.html#/19-dimension-40x60cm">Camera
                                              Logiti-S L8910</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="24.65">$24.65</span>
                                            </span>

                                            <span class="regular-price">$29.00</span>
                                            <span class="discount-percentage">-15%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="6"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/6-macbook-air-2018.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../54-home_default/macbook-air-2018.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/54-large_default/macbook-air-2018.jpg" />
                                            <span class="product-additional" data-idproduct="6"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -20%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_6" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_6" name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_6"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="6" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_6"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_6"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="6"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="6" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/6-macbook-air-2018.html">Macbook air 2018</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="9.52">$9.52</span>
                                            </span>

                                            <span class="regular-price">$11.90</span>
                                            <span class="discount-percentage">-20%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="7"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/7-mug-the-adventure-begins.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../59-home_default/mug-the-adventure-begins.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/59-large_default/mug-the-adventure-begins.jpg" />
                                            <span class="product-additional" data-idproduct="7"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -5%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_7" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_7" name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_7"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="7" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_7"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_7"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="7"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="7" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/7-mug-the-adventure-begins.html">Mug The adventure
                                              begins</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="11.31">$11.31</span>
                                            </span>

                                            <span class="regular-price">$11.90</span>
                                            <span class="discount-percentage">-5%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            White Ceramic Mug. 325ml
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="8"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/8-sony-srs-speaker.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../65-home_default/sony-srs-speaker.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/65-large_default/sony-srs-speaker.jpg" />
                                            <span class="product-additional" data-idproduct="8"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -10%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="299"
                                                  class="quantity_product quantity_product_8" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_8" name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_8"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="8" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_8"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_8"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="8"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="8" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/8-sony-srs-speaker.html">Sony SRS Speaker</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="10.71">$10.71</span>
                                            </span>

                                            <span class="regular-price">$11.90</span>
                                            <span class="discount-percentage">-10%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="9"
                                      data-id-product-attribute="22" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/9-22-sony-hdr-pj440-white.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../72-home_default/sony-hdr-pj440-white.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/72-large_default/sony-hdr-pj440-white.jpg" />
                                            <span class="product-additional" data-idproduct="9"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_9" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_9" name="minimal_quantity" />
                                                <input type="hidden" value="22"
                                                  class="id_product_attribute id_product_attribute_9"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="9" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_9"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_9"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="9"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="9" data-id-product-attribute="22"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/9-22-sony-hdr-pj440-white.html#/8-color-white">Sony
                                              HDR-PJ440 White</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="10"
                                      data-id-product-attribute="24" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/10-24-quick-charge-30.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../77-home_default/quick-charge-30.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/77-large_default/quick-charge-30.jpg" />
                                            <span class="product-additional" data-idproduct="10"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_10"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_10"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="24"
                                                  class="id_product_attribute id_product_attribute_10"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="10" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_10"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_10"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="10" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="10" data-id-product-attribute="24"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/10-24-quick-charge-30.html#/8-color-white">Quick
                                              Charge 3.0</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="11"
                                      data-id-product-attribute="26" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/11-26-smartwatch-a10.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../83-home_default/smartwatch-a10.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/83-large_default/smartwatch-a10.jpg" />
                                            <span class="product-additional" data-idproduct="11"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_11"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_11"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="26"
                                                  class="id_product_attribute id_product_attribute_11"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="11" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_11"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_11"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="11" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="11" data-id-product-attribute="26"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/11-26-smartwatch-a10.html#/8-color-white">Smartwatch
                                              A10</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="12"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/12-mouse-logiti-s.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../90-home_default/mouse-logiti-s.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/90-large_default/mouse-logiti-s.jpg" />
                                            <span class="product-additional" data-idproduct="12"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_12"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_12"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_12"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="12" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_12"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_12"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="12" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="12" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="technologies/12-mouse-logiti-s.html">Mouse Logiti-S</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="9">$9.00</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="13"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/13-iphone-xs-max-256gb.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../96-home_default/iphone-xs-max-256gb.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/96-large_default/iphone-xs-max-256gb.jpg" />
                                            <span class="product-additional" data-idproduct="13"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_13"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_13"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_13"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="13" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_13"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_13"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="13" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="13" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="technologies/13-iphone-xs-max-256gb.html">iphone xs max 256gb</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="9">$9.00</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="14"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/14-camera-white-2020.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../102-home_default/camera-white-2020.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/102-large_default/camera-white-2020.jpg" />
                                            <span class="product-additional" data-idproduct="14"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_14"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_14"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_14"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="14" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_14"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_14"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="14" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="14" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="technologies/14-camera-white-2020.html">Camera White 2020</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="9">$9.00</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="15"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="headphones/15-headphone-s102.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../108-home_default/headphone-s102.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/108-large_default/headphone-s102.jpg" />
                                            <span class="product-additional" data-idproduct="15"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                            <li class="product-flag pack">
                                              Pack
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="100"
                                                  class="quantity_product quantity_product_15"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_15"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_15"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="15" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_15"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_15"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="15" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="15" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="headphones/15-headphone-s102.html">Headphone s102</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="35">$35.00</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="16"
                                      data-id-product-attribute="28" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="headphones/16-28-smart-watch-suntek-a6.html#/22-paper_type-ruled"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../114-home_default/smart-watch-suntek-a6.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/114-large_default/smart-watch-suntek-a6.jpg" />
                                            <span class="product-additional" data-idproduct="16"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_16"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_16"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="28"
                                                  class="id_product_attribute id_product_attribute_16"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="16" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_16"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_16"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="16" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="16" data-id-product-attribute="28"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="headphones/16-28-smart-watch-suntek-a6.html#/22-paper_type-ruled">Smart
                                              Watch Suntek A6</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="12.9">$12.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="17"
                                      data-id-product-attribute="32" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="headphones/17-32-speaker-samsung-e42.html#/22-paper_type-ruled"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../120-home_default/speaker-samsung-e42.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/120-large_default/speaker-samsung-e42.jpg" />
                                            <span class="product-additional" data-idproduct="17"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_17"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_17"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="32"
                                                  class="id_product_attribute id_product_attribute_17"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="17" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_17"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_17"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="17" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="17" data-id-product-attribute="32"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="headphones/17-32-speaker-samsung-e42.html#/22-paper_type-ruled">Speaker
                                              Samsung E42</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="12.9">$12.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="18"
                                      data-id-product-attribute="36" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="headphones/18-36-bluetooth-hismart.html#/22-paper_type-ruled"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../126-home_default/bluetooth-hismart.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/126-large_default/bluetooth-hismart.jpg" />
                                            <span class="product-additional" data-idproduct="18"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="299"
                                                  class="quantity_product quantity_product_18"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_18"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="36"
                                                  class="id_product_attribute id_product_attribute_18"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="18" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_18"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_18"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="18" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="18" data-id-product-attribute="36"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="headphones/18-36-bluetooth-hismart.html#/22-paper_type-ruled">Bluetooth
                                              Hismart</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="12.9">$12.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="19"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/19-speaker-suntek-a6.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../132-home_default/speaker-suntek-a6.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/132-large_default/speaker-suntek-a6.jpg" />
                                            <span class="product-additional" data-idproduct="19"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_19"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_19"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_19"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="19" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_19"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_19 disabled"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="19" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="19" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/19-speaker-suntek-a6.html">Speaker Suntek A6</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="13.9">$13.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                              <script type="text/javascript">
                              ap_list_functions.push(function() {
                                if (
                                  $("#carousel-2783512758").parents(
                                    ".tab-pane"
                                  ).length
                                ) {
                                  if (
                                    !$("#carousel-2783512758")
                                    .parents(".tab-pane")
                                    .hasClass("active")
                                  ) {
                                    var width_owl_active_tab = $(
                                        "#carousel-2783512758"
                                      )
                                      .parents(".tab-pane")
                                      .siblings(".active")
                                      .find(".owl-carousel")
                                      .width();
                                    $("#carousel-2783512758").width(
                                      width_owl_active_tab
                                    );
                                  }
                                }
                                $("#carousel-2783512758").imagesLoaded(
                                  function() {
                                    $(
                                      "#carousel-2783512758"
                                    ).owlCarousel({
                                      items: 4,
                                      itemsDesktop: [1200, 3],
                                      itemsDesktopSmall: [992, 2],
                                      itemsTablet: [768, 2],
                                      itemsMobile: [576, 1],
                                      itemsCustom: false,
                                      singleItem: false, // true : show only 1 item
                                      itemsScaleUp: false,
                                      slideSpeed: 200, //  change speed when drag and drop a item
                                      paginationSpeed: 800, // change speed when go next page
                                      autoPlay: false, // time to show each item
                                      stopOnHover: false,
                                      navigation: false,
                                      navigationText: [
                                        "&lsaquo;",
                                        "&rsaquo;",
                                      ],
                                      scrollPerPage: false,
                                      pagination: false, // show bullist
                                      paginationNumbers: false, // show number
                                      responsive: true,
                                      responsiveRefreshRate: 0,
                                      lazyLoad: false,
                                      lazyFollow: false, // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                                      lazyEffect: "fade",
                                      autoHeight: false,
                                      mouseDrag: true,
                                      touchDrag: true,
                                      addClassActive: true,
                                      direction: false,
                                      afterInit: OwlLoaded,
                                      afterAction: SetOwlCarouselFirstLast,
                                    });
                                  }
                                );
                              });

                              function OwlLoaded(el) {
                                el.removeClass("owl-loading")
                                  .addClass("owl-loaded")
                                  .parents(".owl-row")
                                  .addClass("hide-loading");
                                if (
                                  $(el).parents(".tab-pane").length &&
                                  !$(el)
                                  .parents(".tab-pane")
                                  .hasClass("active")
                                )
                                  el.width("100%");
                              }
                              </script>
                            </div>
                          </div>
                        </div>
                        <!-- @file modules\appagebuilder\views\templates\hook\ApTabs -->
                        <div id="tab_6682488626015560" class="tab-pane">
                          <!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
                          <div class="block products_block exclusive appagebuilder ApProductCarousel">
                            <div class="block_content">
                              <!-- @file modules\appagebuilder\views\templates\hook\ProductOwlCarousel -->
                              <div class="owl-row">
                                <div class="timeline-wrapper clearfix prepare" data-item="4" data-xl="4" data-lg="3"
                                  data-md="2" data-sm="2" data-m="1">
                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="carousel-2331240070"
                                  class="owl-carousel owl-theme owl-loading profile-default">
                                  <div class="item first">
                                    <article class="product-miniature js-product-miniature" data-id-product="1"
                                      data-id-product-attribute="1" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="computer-laptop/1-1-sony-e591-full-color.html#/1-size-s/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../24-home_default/sony-e591-full-color.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/24-large_default/sony-e591-full-color.jpg" />
                                            <span class="product-additional" data-idproduct="1"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -20%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="299"
                                                  class="quantity_product quantity_product_1" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_1" name="minimal_quantity" />
                                                <input type="hidden" value="1"
                                                  class="id_product_attribute id_product_attribute_1"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="1" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_1"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_1"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="1"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="1" data-id-product-attribute="1"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews" itemprop="aggregateRating" itemscope
                                            itemtype="https://schema.org/AggregateRating">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <div class="star star_on"></div>
                                                <meta itemprop="worstRating" content="0" />
                                                <meta itemprop="ratingValue" content="5" />
                                                <meta itemprop="bestRating" content="5" />
                                              </div>
                                              <meta itemprop="reviewCount" content="1" />
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="computer-laptop/1-1-sony-e591-full-color.html#/1-size-s/8-color-white">Sony
                                              E591 Full Color</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="19.12">$19.12</span>
                                            </span>

                                            <span class="regular-price">$23.90</span>
                                            <span class="discount-percentage">-20%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="2"
                                      data-id-product-attribute="9" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="camera-photo/2-9-charging-cradle.html#/1-size-s"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../30-home_default/charging-cradle.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/30-large_default/charging-cradle.jpg" />
                                            <span class="product-additional" data-idproduct="2"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -20%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="1199"
                                                  class="quantity_product quantity_product_2" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_2" name="minimal_quantity" />
                                                <input type="hidden" value="9"
                                                  class="id_product_attribute id_product_attribute_2"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="2" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_2"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_2"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="2"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="2" data-id-product-attribute="9"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="camera-photo/2-9-charging-cradle.html#/1-size-s">Charging
                                              Cradle</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="28.72">$28.72</span>
                                            </span>

                                            <span class="regular-price">$35.90</span>
                                            <span class="discount-percentage">-20%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="3"
                                      data-id-product-attribute="13" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid"
                                              src="../35-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/35-large_default/the-best-is-yet-to-come-framed-poster.jpg" />
                                            <span class="product-additional" data-idproduct="3"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -5%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="899"
                                                  class="quantity_product quantity_product_3" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_3" name="minimal_quantity" />
                                                <input type="hidden" value="13"
                                                  class="id_product_attribute id_product_attribute_3"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="3" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_3"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_3"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="3"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="3" data-id-product-attribute="13"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="technologies/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm">The
                                              best is yet to
                                              come&#039; Framed poster</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="27.55">$27.55</span>
                                            </span>

                                            <span class="regular-price">$29.00</span>
                                            <span class="discount-percentage">-5%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="4"
                                      data-id-product-attribute="16" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/4-16-bluetooth-speaker-gk1.html#/19-dimension-40x60cm"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../41-home_default/bluetooth-speaker-gk1.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/41-large_default/bluetooth-speaker-gk1.jpg" />
                                            <span class="product-additional" data-idproduct="4"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -10%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="898"
                                                  class="quantity_product quantity_product_4" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_4" name="minimal_quantity" />
                                                <input type="hidden" value="16"
                                                  class="id_product_attribute id_product_attribute_4"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="4" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_4"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_4"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="4"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="4" data-id-product-attribute="16"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="technologies/4-16-bluetooth-speaker-gk1.html#/19-dimension-40x60cm">Bluetooth
                                              Speaker GK1</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="26.1">$26.10</span>
                                            </span>

                                            <span class="regular-price">$29.00</span>
                                            <span class="discount-percentage">-10%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="5"
                                      data-id-product-attribute="19" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/5-19-camera-logiti-s-l8910.html#/19-dimension-40x60cm"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../47-home_default/camera-logiti-s-l8910.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/47-large_default/camera-logiti-s-l8910.jpg" />
                                            <span class="product-additional" data-idproduct="5"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -15%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_5" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_5" name="minimal_quantity" />
                                                <input type="hidden" value="19"
                                                  class="id_product_attribute id_product_attribute_5"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="5" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_5"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_5"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="5"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="5" data-id-product-attribute="19"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="technologies/5-19-camera-logiti-s-l8910.html#/19-dimension-40x60cm">Camera
                                              Logiti-S L8910</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="24.65">$24.65</span>
                                            </span>

                                            <span class="regular-price">$29.00</span>
                                            <span class="discount-percentage">-15%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="6"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/6-macbook-air-2018.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../54-home_default/macbook-air-2018.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/54-large_default/macbook-air-2018.jpg" />
                                            <span class="product-additional" data-idproduct="6"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -20%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_6" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_6" name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_6"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="6" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_6"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_6"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="6"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="6" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/6-macbook-air-2018.html">Macbook air 2018</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="9.52">$9.52</span>
                                            </span>

                                            <span class="regular-price">$11.90</span>
                                            <span class="discount-percentage">-20%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="7"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/7-mug-the-adventure-begins.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../59-home_default/mug-the-adventure-begins.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/59-large_default/mug-the-adventure-begins.jpg" />
                                            <span class="product-additional" data-idproduct="7"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -5%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_7" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_7" name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_7"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="7" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_7"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_7"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="7"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="7" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/7-mug-the-adventure-begins.html">Mug The adventure
                                              begins</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="11.31">$11.31</span>
                                            </span>

                                            <span class="regular-price">$11.90</span>
                                            <span class="discount-percentage">-5%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            White Ceramic Mug. 325ml
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="8"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/8-sony-srs-speaker.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../65-home_default/sony-srs-speaker.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/65-large_default/sony-srs-speaker.jpg" />
                                            <span class="product-additional" data-idproduct="8"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -10%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="299"
                                                  class="quantity_product quantity_product_8" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_8" name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_8"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="8" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_8"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_8"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="8"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="8" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/8-sony-srs-speaker.html">Sony SRS Speaker</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="10.71">$10.71</span>
                                            </span>

                                            <span class="regular-price">$11.90</span>
                                            <span class="discount-percentage">-10%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="9"
                                      data-id-product-attribute="22" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/9-22-sony-hdr-pj440-white.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../72-home_default/sony-hdr-pj440-white.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/72-large_default/sony-hdr-pj440-white.jpg" />
                                            <span class="product-additional" data-idproduct="9"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_9" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_9" name="minimal_quantity" />
                                                <input type="hidden" value="22"
                                                  class="id_product_attribute id_product_attribute_9"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="9" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_9"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_9"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="9"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="9" data-id-product-attribute="22"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/9-22-sony-hdr-pj440-white.html#/8-color-white">Sony
                                              HDR-PJ440 White</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="10"
                                      data-id-product-attribute="24" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/10-24-quick-charge-30.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../77-home_default/quick-charge-30.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/77-large_default/quick-charge-30.jpg" />
                                            <span class="product-additional" data-idproduct="10"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_10"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_10"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="24"
                                                  class="id_product_attribute id_product_attribute_10"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="10" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_10"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_10"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="10" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="10" data-id-product-attribute="24"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/10-24-quick-charge-30.html#/8-color-white">Quick
                                              Charge 3.0</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="11"
                                      data-id-product-attribute="26" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/11-26-smartwatch-a10.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../83-home_default/smartwatch-a10.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/83-large_default/smartwatch-a10.jpg" />
                                            <span class="product-additional" data-idproduct="11"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_11"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_11"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="26"
                                                  class="id_product_attribute id_product_attribute_11"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="11" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_11"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_11"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="11" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="11" data-id-product-attribute="26"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/11-26-smartwatch-a10.html#/8-color-white">Smartwatch
                                              A10</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="12"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/12-mouse-logiti-s.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../90-home_default/mouse-logiti-s.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/90-large_default/mouse-logiti-s.jpg" />
                                            <span class="product-additional" data-idproduct="12"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_12"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_12"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_12"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="12" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_12"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_12"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="12" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="12" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="technologies/12-mouse-logiti-s.html">Mouse Logiti-S</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="9">$9.00</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                              <script type="text/javascript">
                              ap_list_functions.push(function() {
                                if (
                                  $("#carousel-2331240070").parents(
                                    ".tab-pane"
                                  ).length
                                ) {
                                  if (
                                    !$("#carousel-2331240070")
                                    .parents(".tab-pane")
                                    .hasClass("active")
                                  ) {
                                    var width_owl_active_tab = $(
                                        "#carousel-2331240070"
                                      )
                                      .parents(".tab-pane")
                                      .siblings(".active")
                                      .find(".owl-carousel")
                                      .width();
                                    $("#carousel-2331240070").width(
                                      width_owl_active_tab
                                    );
                                  }
                                }
                                $("#carousel-2331240070").imagesLoaded(
                                  function() {
                                    $(
                                      "#carousel-2331240070"
                                    ).owlCarousel({
                                      items: 4,
                                      itemsDesktop: [1200, 3],
                                      itemsDesktopSmall: [992, 2],
                                      itemsTablet: [768, 2],
                                      itemsMobile: [576, 1],
                                      itemsCustom: false,
                                      singleItem: false, // true : show only 1 item
                                      itemsScaleUp: false,
                                      slideSpeed: 200, //  change speed when drag and drop a item
                                      paginationSpeed: 800, // change speed when go next page
                                      autoPlay: false, // time to show each item
                                      stopOnHover: false,
                                      navigation: false,
                                      navigationText: [
                                        "&lsaquo;",
                                        "&rsaquo;",
                                      ],
                                      scrollPerPage: false,
                                      pagination: false, // show bullist
                                      paginationNumbers: false, // show number
                                      responsive: true,
                                      responsiveRefreshRate: 0,
                                      lazyLoad: false,
                                      lazyFollow: false, // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                                      lazyEffect: "fade",
                                      autoHeight: false,
                                      mouseDrag: true,
                                      touchDrag: true,
                                      addClassActive: true,
                                      direction: false,
                                      afterInit: OwlLoaded,
                                      afterAction: SetOwlCarouselFirstLast,
                                    });
                                  }
                                );
                              });

                              function OwlLoaded(el) {
                                el.removeClass("owl-loading")
                                  .addClass("owl-loaded")
                                  .parents(".owl-row")
                                  .addClass("hide-loading");
                                if (
                                  $(el).parents(".tab-pane").length &&
                                  !$(el)
                                  .parents(".tab-pane")
                                  .hasClass("active")
                                )
                                  el.width("100%");
                              }
                              </script>
                            </div>
                          </div>
                        </div>
                        <!-- @file modules\appagebuilder\views\templates\hook\ApTabs -->
                        <div id="tab_8528710969805285" class="tab-pane">
                          <!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
                          <div class="block products_block exclusive appagebuilder ApProductCarousel">
                            <div class="block_content">
                              <!-- @file modules\appagebuilder\views\templates\hook\ProductOwlCarousel -->
                              <div class="owl-row">
                                <div class="timeline-wrapper clearfix prepare" data-item="4" data-xl="4" data-lg="3"
                                  data-md="2" data-sm="2" data-m="1">
                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="carousel-2347820875"
                                  class="owl-carousel owl-theme owl-loading profile-default">
                                  <div class="item first">
                                    <article class="product-miniature js-product-miniature" data-id-product="2"
                                      data-id-product-attribute="9" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="camera-photo/2-9-charging-cradle.html#/1-size-s"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../30-home_default/charging-cradle.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/30-large_default/charging-cradle.jpg" />
                                            <span class="product-additional" data-idproduct="2"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -20%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="1199"
                                                  class="quantity_product quantity_product_2" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_2" name="minimal_quantity" />
                                                <input type="hidden" value="9"
                                                  class="id_product_attribute id_product_attribute_2"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="2" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_2"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_2"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="2"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="2" data-id-product-attribute="9"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="camera-photo/2-9-charging-cradle.html#/1-size-s">Charging
                                              Cradle</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="28.72">$28.72</span>
                                            </span>

                                            <span class="regular-price">$35.90</span>
                                            <span class="discount-percentage">-20%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="3"
                                      data-id-product-attribute="13" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid"
                                              src="../35-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/35-large_default/the-best-is-yet-to-come-framed-poster.jpg" />
                                            <span class="product-additional" data-idproduct="3"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -5%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="899"
                                                  class="quantity_product quantity_product_3" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_3" name="minimal_quantity" />
                                                <input type="hidden" value="13"
                                                  class="id_product_attribute id_product_attribute_3"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="3" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_3"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_3"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="3"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="3" data-id-product-attribute="13"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="technologies/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm">The
                                              best is yet to
                                              come&#039; Framed poster</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="27.55">$27.55</span>
                                            </span>

                                            <span class="regular-price">$29.00</span>
                                            <span class="discount-percentage">-5%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="4"
                                      data-id-product-attribute="16" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/4-16-bluetooth-speaker-gk1.html#/19-dimension-40x60cm"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../41-home_default/bluetooth-speaker-gk1.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/41-large_default/bluetooth-speaker-gk1.jpg" />
                                            <span class="product-additional" data-idproduct="4"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -10%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="898"
                                                  class="quantity_product quantity_product_4" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_4" name="minimal_quantity" />
                                                <input type="hidden" value="16"
                                                  class="id_product_attribute id_product_attribute_4"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="4" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_4"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_4"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="4"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="4" data-id-product-attribute="16"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="technologies/4-16-bluetooth-speaker-gk1.html#/19-dimension-40x60cm">Bluetooth
                                              Speaker GK1</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="26.1">$26.10</span>
                                            </span>

                                            <span class="regular-price">$29.00</span>
                                            <span class="discount-percentage">-10%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="5"
                                      data-id-product-attribute="19" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/5-19-camera-logiti-s-l8910.html#/19-dimension-40x60cm"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../47-home_default/camera-logiti-s-l8910.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/47-large_default/camera-logiti-s-l8910.jpg" />
                                            <span class="product-additional" data-idproduct="5"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -15%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_5" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_5" name="minimal_quantity" />
                                                <input type="hidden" value="19"
                                                  class="id_product_attribute id_product_attribute_5"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="5" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_5"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_5"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="5"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="5" data-id-product-attribute="19"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="technologies/5-19-camera-logiti-s-l8910.html#/19-dimension-40x60cm">Camera
                                              Logiti-S L8910</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="24.65">$24.65</span>
                                            </span>

                                            <span class="regular-price">$29.00</span>
                                            <span class="discount-percentage">-15%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="8"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/8-sony-srs-speaker.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../65-home_default/sony-srs-speaker.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/65-large_default/sony-srs-speaker.jpg" />
                                            <span class="product-additional" data-idproduct="8"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -10%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="299"
                                                  class="quantity_product quantity_product_8" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_8" name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_8"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="8" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_8"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_8"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="8"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="8" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/8-sony-srs-speaker.html">Sony SRS Speaker</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="10.71">$10.71</span>
                                            </span>

                                            <span class="regular-price">$11.90</span>
                                            <span class="discount-percentage">-10%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="9"
                                      data-id-product-attribute="22" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/9-22-sony-hdr-pj440-white.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../72-home_default/sony-hdr-pj440-white.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/72-large_default/sony-hdr-pj440-white.jpg" />
                                            <span class="product-additional" data-idproduct="9"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_9" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_9" name="minimal_quantity" />
                                                <input type="hidden" value="22"
                                                  class="id_product_attribute id_product_attribute_9"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="9" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_9"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_9"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="9"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="9" data-id-product-attribute="22"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/9-22-sony-hdr-pj440-white.html#/8-color-white">Sony
                                              HDR-PJ440 White</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="10"
                                      data-id-product-attribute="24" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/10-24-quick-charge-30.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../77-home_default/quick-charge-30.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/77-large_default/quick-charge-30.jpg" />
                                            <span class="product-additional" data-idproduct="10"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_10"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_10"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="24"
                                                  class="id_product_attribute id_product_attribute_10"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="10" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_10"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_10"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="10" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="10" data-id-product-attribute="24"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/10-24-quick-charge-30.html#/8-color-white">Quick
                                              Charge 3.0</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="11"
                                      data-id-product-attribute="26" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/11-26-smartwatch-a10.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../83-home_default/smartwatch-a10.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/83-large_default/smartwatch-a10.jpg" />
                                            <span class="product-additional" data-idproduct="11"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_11"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_11"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="26"
                                                  class="id_product_attribute id_product_attribute_11"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="11" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_11"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_11"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="11" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="11" data-id-product-attribute="26"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/11-26-smartwatch-a10.html#/8-color-white">Smartwatch
                                              A10</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="12"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/12-mouse-logiti-s.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../90-home_default/mouse-logiti-s.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/90-large_default/mouse-logiti-s.jpg" />
                                            <span class="product-additional" data-idproduct="12"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_12"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_12"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_12"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="12" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_12"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_12"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="12" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="12" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="technologies/12-mouse-logiti-s.html">Mouse Logiti-S</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="9">$9.00</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="13"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/13-iphone-xs-max-256gb.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../96-home_default/iphone-xs-max-256gb.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/96-large_default/iphone-xs-max-256gb.jpg" />
                                            <span class="product-additional" data-idproduct="13"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_13"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_13"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_13"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="13" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_13"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_13"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="13" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="13" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="technologies/13-iphone-xs-max-256gb.html">iphone xs max 256gb</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="9">$9.00</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="14"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/14-camera-white-2020.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../102-home_default/camera-white-2020.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/102-large_default/camera-white-2020.jpg" />
                                            <span class="product-additional" data-idproduct="14"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_14"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_14"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_14"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="14" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_14"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_14"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="14" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="14" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="technologies/14-camera-white-2020.html">Camera White 2020</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="9">$9.00</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="15"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="headphones/15-headphone-s102.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../108-home_default/headphone-s102.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/108-large_default/headphone-s102.jpg" />
                                            <span class="product-additional" data-idproduct="15"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                            <li class="product-flag pack">
                                              Pack
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="100"
                                                  class="quantity_product quantity_product_15"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_15"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_15"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="15" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_15"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_15"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="15" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="15" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="headphones/15-headphone-s102.html">Headphone s102</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="35">$35.00</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                              <script type="text/javascript">
                              ap_list_functions.push(function() {
                                if (
                                  $("#carousel-2347820875").parents(
                                    ".tab-pane"
                                  ).length
                                ) {
                                  if (
                                    !$("#carousel-2347820875")
                                    .parents(".tab-pane")
                                    .hasClass("active")
                                  ) {
                                    var width_owl_active_tab = $(
                                        "#carousel-2347820875"
                                      )
                                      .parents(".tab-pane")
                                      .siblings(".active")
                                      .find(".owl-carousel")
                                      .width();
                                    $("#carousel-2347820875").width(
                                      width_owl_active_tab
                                    );
                                  }
                                }
                                $("#carousel-2347820875").imagesLoaded(
                                  function() {
                                    $(
                                      "#carousel-2347820875"
                                    ).owlCarousel({
                                      items: 4,
                                      itemsDesktop: [1200, 3],
                                      itemsDesktopSmall: [992, 2],
                                      itemsTablet: [768, 2],
                                      itemsMobile: [576, 1],
                                      itemsCustom: false,
                                      singleItem: false, // true : show only 1 item
                                      itemsScaleUp: false,
                                      slideSpeed: 200, //  change speed when drag and drop a item
                                      paginationSpeed: 800, // change speed when go next page
                                      autoPlay: false, // time to show each item
                                      stopOnHover: false,
                                      navigation: false,
                                      navigationText: [
                                        "&lsaquo;",
                                        "&rsaquo;",
                                      ],
                                      scrollPerPage: false,
                                      pagination: false, // show bullist
                                      paginationNumbers: false, // show number
                                      responsive: true,
                                      responsiveRefreshRate: 0,
                                      lazyLoad: false,
                                      lazyFollow: false, // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                                      lazyEffect: "fade",
                                      autoHeight: false,
                                      mouseDrag: true,
                                      touchDrag: true,
                                      addClassActive: true,
                                      direction: false,
                                      afterInit: OwlLoaded,
                                      afterAction: SetOwlCarouselFirstLast,
                                    });
                                  }
                                );
                              });

                              function OwlLoaded(el) {
                                el.removeClass("owl-loading")
                                  .addClass("owl-loaded")
                                  .parents(".owl-row")
                                  .addClass("hide-loading");
                                if (
                                  $(el).parents(".tab-pane").length &&
                                  !$(el)
                                  .parents(".tab-pane")
                                  .hasClass("active")
                                )
                                  el.width("100%");
                              }
                              </script>
                            </div>
                          </div>
                        </div>
                        <!-- @file modules\appagebuilder\views\templates\hook\ApTabs -->
                        <div id="tab_2788706661262784" class="tab-pane">
                          <!-- @file modules\appagebuilder\views\templates\hook\ApProductCarousel -->
                          <div class="block products_block exclusive appagebuilder ApProductCarousel">
                            <div class="block_content">
                              <!-- @file modules\appagebuilder\views\templates\hook\ProductOwlCarousel -->
                              <div class="owl-row">
                                <div class="timeline-wrapper clearfix prepare" data-item="4" data-xl="4" data-lg="3"
                                  data-md="3" data-sm="2" data-m="1">
                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>

                                  <div class="timeline-parent">
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                    <div class="timeline-item">
                                      <div class="animated-background">
                                        <div class="background-masker content-top"></div>
                                        <div class="background-masker content-second-line"></div>
                                        <div class="background-masker content-third-line"></div>
                                        <div class="background-masker content-fourth-line"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="carousel-2707325605"
                                  class="owl-carousel owl-theme owl-loading profile-default">
                                  <div class="item first">
                                    <article class="product-miniature js-product-miniature" data-id-product="2"
                                      data-id-product-attribute="9" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="camera-photo/2-9-charging-cradle.html#/1-size-s"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../30-home_default/charging-cradle.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/30-large_default/charging-cradle.jpg" />
                                            <span class="product-additional" data-idproduct="2"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -20%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="1199"
                                                  class="quantity_product quantity_product_2" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_2" name="minimal_quantity" />
                                                <input type="hidden" value="9"
                                                  class="id_product_attribute id_product_attribute_2"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="2" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_2"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_2"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="2"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="2" data-id-product-attribute="9"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="camera-photo/2-9-charging-cradle.html#/1-size-s">Charging
                                              Cradle</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="28.72">$28.72</span>
                                            </span>

                                            <span class="regular-price">$35.90</span>
                                            <span class="discount-percentage">-20%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="3"
                                      data-id-product-attribute="13" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid"
                                              src="../35-home_default/the-best-is-yet-to-come-framed-poster.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/35-large_default/the-best-is-yet-to-come-framed-poster.jpg" />
                                            <span class="product-additional" data-idproduct="3"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -5%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="899"
                                                  class="quantity_product quantity_product_3" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_3" name="minimal_quantity" />
                                                <input type="hidden" value="13"
                                                  class="id_product_attribute id_product_attribute_3"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="3" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_3"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_3"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="3"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="3" data-id-product-attribute="13"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="technologies/3-13-the-best-is-yet-to-come-framed-poster.html#/19-dimension-40x60cm">The
                                              best is yet to
                                              come&#039; Framed poster</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="27.55">$27.55</span>
                                            </span>

                                            <span class="regular-price">$29.00</span>
                                            <span class="discount-percentage">-5%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="5"
                                      data-id-product-attribute="19" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/5-19-camera-logiti-s-l8910.html#/19-dimension-40x60cm"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../47-home_default/camera-logiti-s-l8910.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/47-large_default/camera-logiti-s-l8910.jpg" />
                                            <span class="product-additional" data-idproduct="5"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -15%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_5" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_5" name="minimal_quantity" />
                                                <input type="hidden" value="19"
                                                  class="id_product_attribute id_product_attribute_5"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="5" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_5"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_5"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="5"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="5" data-id-product-attribute="19"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a
                                              href="technologies/5-19-camera-logiti-s-l8910.html#/19-dimension-40x60cm">Camera
                                              Logiti-S L8910</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="24.65">$24.65</span>
                                            </span>

                                            <span class="regular-price">$29.00</span>
                                            <span class="discount-percentage">-15%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="6"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/6-macbook-air-2018.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../54-home_default/macbook-air-2018.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/54-large_default/macbook-air-2018.jpg" />
                                            <span class="product-additional" data-idproduct="6"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -20%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_6" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_6" name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_6"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="6" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_6"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_6"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="6"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="6" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/6-macbook-air-2018.html">Macbook air 2018</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="9.52">$9.52</span>
                                            </span>

                                            <span class="regular-price">$11.90</span>
                                            <span class="discount-percentage">-20%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="7"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/7-mug-the-adventure-begins.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../59-home_default/mug-the-adventure-begins.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/59-large_default/mug-the-adventure-begins.jpg" />
                                            <span class="product-additional" data-idproduct="7"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -5%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_7" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_7" name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_7"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="7" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_7"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_7"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="7"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="7" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/7-mug-the-adventure-begins.html">Mug The adventure
                                              begins</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="11.31">$11.31</span>
                                            </span>

                                            <span class="regular-price">$11.90</span>
                                            <span class="discount-percentage">-5%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            White Ceramic Mug. 325ml
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="8"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/8-sony-srs-speaker.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../65-home_default/sony-srs-speaker.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/65-large_default/sony-srs-speaker.jpg" />
                                            <span class="product-additional" data-idproduct="8"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag discount">
                                              -10%
                                            </li>
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="299"
                                                  class="quantity_product quantity_product_8" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_8" name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_8"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="8" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_8"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_8"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="8"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="8" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/8-sony-srs-speaker.html">Sony SRS Speaker</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping has_discount">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="10.71">$10.71</span>
                                            </span>

                                            <span class="regular-price">$11.90</span>
                                            <span class="discount-percentage">-10%</span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="9"
                                      data-id-product-attribute="22" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/9-22-sony-hdr-pj440-white.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../72-home_default/sony-hdr-pj440-white.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/72-large_default/sony-hdr-pj440-white.jpg" />
                                            <span class="product-additional" data-idproduct="9"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_9" name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_9" name="minimal_quantity" />
                                                <input type="hidden" value="22"
                                                  class="id_product_attribute id_product_attribute_9"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="9" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_9"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_9"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#" data-id-product="9"
                                                title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="9" data-id-product-attribute="22"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/9-22-sony-hdr-pj440-white.html#/8-color-white">Sony
                                              HDR-PJ440 White</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="10"
                                      data-id-product-attribute="24" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/10-24-quick-charge-30.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../77-home_default/quick-charge-30.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/77-large_default/quick-charge-30.jpg" />
                                            <span class="product-additional" data-idproduct="10"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_10"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_10"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="24"
                                                  class="id_product_attribute id_product_attribute_10"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="10" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_10"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_10"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="10" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="10" data-id-product-attribute="24"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/10-24-quick-charge-30.html#/8-color-white">Quick
                                              Charge 3.0</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="11"
                                      data-id-product-attribute="26" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/11-26-smartwatch-a10.html#/8-color-white"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../83-home_default/smartwatch-a10.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/83-large_default/smartwatch-a10.jpg" />
                                            <span class="product-additional" data-idproduct="11"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_11"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_11"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="26"
                                                  class="id_product_attribute id_product_attribute_11"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="11" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_11"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_11"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="11" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="11" data-id-product-attribute="26"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/11-26-smartwatch-a10.html#/8-color-white">Smartwatch
                                              A10</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="18.9">$18.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="14"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="technologies/14-camera-white-2020.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../102-home_default/camera-white-2020.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/102-large_default/camera-white-2020.jpg" />
                                            <span class="product-additional" data-idproduct="14"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_14"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_14"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_14"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="14" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_14"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_14"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="14" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="14" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="technologies/14-camera-white-2020.html">Camera White 2020</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="9">$9.00</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="15"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="headphones/15-headphone-s102.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../108-home_default/headphone-s102.jpg" alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/108-large_default/headphone-s102.jpg" />
                                            <span class="product-additional" data-idproduct="15"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                            <li class="product-flag pack">
                                              Pack
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="100"
                                                  class="quantity_product quantity_product_15"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_15"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_15"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="15" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_15"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_15"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="15" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="15" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="headphones/15-headphone-s102.html">Headphone s102</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="35">$35.00</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="16"
                                      data-id-product-attribute="28" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="headphones/16-28-smart-watch-suntek-a6.html#/22-paper_type-ruled"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../114-home_default/smart-watch-suntek-a6.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/114-large_default/smart-watch-suntek-a6.jpg" />
                                            <span class="product-additional" data-idproduct="16"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_16"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_16"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="28"
                                                  class="id_product_attribute id_product_attribute_16"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="16" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_16"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_16"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="16" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="16" data-id-product-attribute="28"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="headphones/16-28-smart-watch-suntek-a6.html#/22-paper_type-ruled">Smart
                                              Watch Suntek A6</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="12.9">$12.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="17"
                                      data-id-product-attribute="32" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="headphones/17-32-speaker-samsung-e42.html#/22-paper_type-ruled"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../120-home_default/speaker-samsung-e42.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/120-large_default/speaker-samsung-e42.jpg" />
                                            <span class="product-additional" data-idproduct="17"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_17"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_17"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="32"
                                                  class="id_product_attribute id_product_attribute_17"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="17" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_17"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_17"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="17" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="17" data-id-product-attribute="32"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="headphones/17-32-speaker-samsung-e42.html#/22-paper_type-ruled">Speaker
                                              Samsung E42</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="12.9">$12.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                    <article class="product-miniature js-product-miniature" data-id-product="18"
                                      data-id-product-attribute="36" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="headphones/18-36-bluetooth-hismart.html#/22-paper_type-ruled"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../126-home_default/bluetooth-hismart.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/126-large_default/bluetooth-hismart.jpg" />
                                            <span class="product-additional" data-idproduct="18"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="299"
                                                  class="quantity_product quantity_product_18"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_18"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="36"
                                                  class="id_product_attribute id_product_attribute_18"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="18" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_18"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_18"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="18" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="18" data-id-product-attribute="36"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="headphones/18-36-bluetooth-hismart.html#/22-paper_type-ruled">Bluetooth
                                              Hismart</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="12.9">$12.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                  <div class="item">
                                    <article class="product-miniature js-product-miniature" data-id-product="19"
                                      data-id-product-attribute="0" itemscope itemtype="http://schema.org/Product">
                                      <div class="thumbnail-container">
                                        <div class="product-image">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <a href="home-accessories/19-speaker-suntek-a6.html"
                                            class="thumbnail product-thumbnail">
                                            <img class="img-fluid" src="../132-home_default/speaker-suntek-a6.jpg"
                                              alt=""
                                              data-full-size-image-url="https://rubiktheme.com/demo/at_dimita_demo/132-large_default/speaker-suntek-a6.jpg" />
                                            <span class="product-additional" data-idproduct="19"></span>
                                          </a>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <ul class="product-flags">
                                            <li class="product-flag new">
                                              New product
                                            </li>
                                          </ul>

                                          <div class="functional-buttons clearfix">
                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="button-container cart">
                                              <form action="https://rubiktheme.com/demo/at_dimita_demo/en/cart"
                                                method="post">
                                                <input type="hidden" name="token"
                                                  value="eea65250656b3ff1e7f979b1248d0132" />
                                                <input type="hidden" value="300"
                                                  class="quantity_product quantity_product_19"
                                                  name="quantity_product" />
                                                <input type="hidden" value="1"
                                                  class="minimal_quantity minimal_quantity_19"
                                                  name="minimal_quantity" />
                                                <input type="hidden" value="0"
                                                  class="id_product_attribute id_product_attribute_19"
                                                  name="id_product_attribute" />
                                                <input type="hidden" value="19" class="id_product" name="id_product" />
                                                <input type="hidden" name="id_customization" value=""
                                                  class="product_customization_id" />

                                                <input type="hidden"
                                                  class="input-group form-control qty qty_product qty_product_19"
                                                  name="qty" value="1" data-min="1" />
                                                <button
                                                  class="btn btn-primary btn-product add-to-cart leo-bt-cart leo-bt-cart_19 disabled"
                                                  data-button-action="add-to-cart" type="submit">
                                                  <span class="leo-loading cssload-speeding-wheel"></span>
                                                  <span class="leo-bt-cart-content">
                                                    <i class="icon_cart_alt"></i>
                                                    <span class="btn-title">Add to cart</span>
                                                  </span>
                                                </button>
                                              </form>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="compare">
                                              <a class="leo-compare-button btn-product btn" href="#"
                                                data-id-product="19" title="Add to Compare">
                                                <span class="leo-compare-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-compare-bt-content">
                                                  <i class="pe-7s-repeat"></i>
                                                  <span class="btn-title">Add to compare</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="wishlist">
                                              <a class="leo-wishlist-button btn-product btn" href="#"
                                                data-id-wishlist="" data-id-product="19" data-id-product-attribute="0"
                                                title="Add to Wishlist">
                                                <span class="leo-wishlist-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-wishlist-bt-content">
                                                  <i class="pe-7s-like"></i>
                                                  <span class="btn-title">Add to wishlist</span>
                                                </span>
                                              </a>
                                            </div>

                                            <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                            <div class="quickview no-variants hidden-sm-down">
                                              <a href="#" class="quick-view btn-product btn"
                                                data-link-action="quickview">
                                                <span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
                                                <span class="leo-quickview-bt-content">
                                                  <i class="pe-7s-search"></i>
                                                  <span class="btn-title">Quick view</span>
                                                </span>
                                              </a>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="product-meta">
                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->
                                          <div class="leo-list-product-reviews">
                                            <div class="leo-list-product-reviews-wraper">
                                              <div class="star_content clearfix">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                              </div>
                                            </div>
                                          </div>

                                          <!-- @file modules\appagebuilder\views\templates\front\products\file_tpl -->

                                          <h3 class="h3 product-title" itemprop="name">
                                            <a href="home-accessories/19-speaker-suntek-a6.html">Speaker Suntek A6</a>
                                          </h3>

                                          <!-- @file modulesappagebuilderviewstemplatesfrontproductsfile_tpl -->

                                          <div class="product-price-and-shipping">
                                            <span class="price" itemprop="offers" itemscope
                                              itemtype="http://schema.org/Offer">
                                              <span itemprop="priceCurrency" content="USD"></span><span itemprop="price"
                                                content="13.9">$13.90</span>
                                            </span>
                                          </div>

                                          <div class="product-description-short" itemprop="description">
                                            Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit,
                                            sed do eiusmod tempor
                                            incididunt ut labore et dolore
                                            magna aliqua. Ut enim ad
                                            minim...
                                          </div>
                                        </div>
                                      </div>
                                    </article>
                                  </div>
                                </div>
                              </div>
                              <script type="text/javascript">
                              ap_list_functions.push(function() {
                                if (
                                  $("#carousel-2707325605").parents(
                                    ".tab-pane"
                                  ).length
                                ) {
                                  if (
                                    !$("#carousel-2707325605")
                                    .parents(".tab-pane")
                                    .hasClass("active")
                                  ) {
                                    var width_owl_active_tab = $(
                                        "#carousel-2707325605"
                                      )
                                      .parents(".tab-pane")
                                      .siblings(".active")
                                      .find(".owl-carousel")
                                      .width();
                                    $("#carousel-2707325605").width(
                                      width_owl_active_tab
                                    );
                                  }
                                }
                                $("#carousel-2707325605").imagesLoaded(
                                  function() {
                                    $(
                                      "#carousel-2707325605"
                                    ).owlCarousel({
                                      items: 4,
                                      itemsDesktop: [1200, 3],
                                      itemsDesktopSmall: [992, 3],
                                      itemsTablet: [768, 2],
                                      itemsMobile: [576, 1],
                                      itemsCustom: false,
                                      singleItem: false, // true : show only 1 item
                                      itemsScaleUp: false,
                                      slideSpeed: 200, //  change speed when drag and drop a item
                                      paginationSpeed: 800, // change speed when go next page
                                      autoPlay: false, // time to show each item
                                      stopOnHover: false,
                                      navigation: false,
                                      navigationText: [
                                        "&lsaquo;",
                                        "&rsaquo;",
                                      ],
                                      scrollPerPage: false,
                                      pagination: false, // show bullist
                                      paginationNumbers: false, // show number
                                      responsive: true,
                                      responsiveRefreshRate: 0,
                                      lazyLoad: false,
                                      lazyFollow: false, // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                                      lazyEffect: "fade",
                                      autoHeight: false,
                                      mouseDrag: true,
                                      touchDrag: true,
                                      addClassActive: true,
                                      direction: false,
                                      afterInit: OwlLoaded,
                                      afterAction: SetOwlCarouselFirstLast,
                                    });
                                  }
                                );
                              });

                              function OwlLoaded(el) {
                                el.removeClass("owl-loading")
                                  .addClass("owl-loaded")
                                  .parents(".owl-row")
                                  .addClass("hide-loading");
                                if (
                                  $(el).parents(".tab-pane").length &&
                                  !$(el)
                                  .parents(".tab-pane")
                                  .hasClass("active")
                                )
                                  el.width("100%");
                              }
                              </script>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>

          <script>
          ap_list_functions.push(function() {
            $.stellar({
              horizontalScrolling: false
            });
          });
          </script>


          <!--Seção Nossos produtos -->
          <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
          <div class="wrapper" style="
                    background: url(<?php echo get_template_directory_uri(); ?>/themes/at_dimita/assets/img/modules/appagebuilder/images/image-category.jpg)
                      fixed no-repeat center center;
                    background-size: cover;
                  ">
            <div class="container">
              <div class="row no-margin ApRow has-bg bg-fullwidth-container"
                style="padding-top: 190px; padding-bottom: 190px">
                <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn">
                  <!-- @file modules\appagebuilder\views\templates\hook\ApBlockCarousel -->
                  <div class="block block_carousel exclusive appagebuilder gr-category ApBlockCarousel">
                    <div class="block_content">
                      <!-- @file modules\appagebuilder\views\templates\hook\ApBlockOwlCarouselItem -->
                      <h4 class="title_block">Nossos Produtos</h4>
                      <div class="owl-row">
                        <div class="timeline-wrapper clearfix prepare" data-item="4" data-xl="4" data-lg="3" data-md="2"
                          data-sm="2" data-m="1">
                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">
                                <div class="background-masker content-top"></div>
                                <div class="background-masker content-second-line"></div>
                                <div class="background-masker content-third-line"></div>
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>

                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">
                                <div class="background-masker content-top"></div>
                                <div class="background-masker content-second-line"></div>
                                <div class="background-masker content-third-line"></div>
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>

                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">
                                <div class="background-masker content-top"></div>
                                <div class="background-masker content-second-line"></div>
                                <div class="background-masker content-third-line"></div>
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>


                        </div>
                        <div id="carousel-3112878518" class="owl-carousel owl-theme owl-loading">

                          <div class="item">
                            <div class="block-carousel-container">
                              <div class="left-block">
                                <div class="block-carousel-image-container image">
                                  <div class="ap-more-info" data-id="7"></div>
                                  <a title="Audio &amp; Home" href="#">
                                    <div class="item-image">
                                      <img class="img-fluid lazyOwl" src="#"
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone/iphone-pronta.png"
                                        alt="Audio &amp; Home" />
                                    </div>
                                    <div class="title">IPhone</div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="item">
                            <div class="block-carousel-container">
                              <div class="left-block">
                                <div class="block-carousel-image-container image">
                                  <div class="ap-more-info" data-id="6"></div>
                                  <a title="Home &amp; Garden" href="#">
                                    <div class="item-image">
                                      <img class="img-fluid lazyOwl" src="#"
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone/macbook-pronta.png"
                                        alt="Home &amp; Garden" />
                                    </div>
                                    <div class="title">MacBook</div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="item">
                            <div class="block-carousel-container">
                              <div class="left-block">
                                <div class="block-carousel-image-container image">
                                  <div class="ap-more-info" data-id="5"></div>
                                  <a title="SmartPhone &amp; Ipad" href="#">
                                    <div class="item-image">
                                      <img class="img-fluid lazyOwl" src="#"
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone/apple-watch_pronta.png"
                                        alt="SmartPhone &amp; Ipad" />
                                    </div>
                                    <div class="title">
                                      Apple Watch
                                    </div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="item">
                            <div class="block-carousel-container">
                              <div class="left-block">
                                <div class="block-carousel-image-container image">
                                  <div class="ap-more-info" data-id="4"></div>
                                  <a title="Technologies" href="#">
                                    <div class="item-image">
                                      <img class="img-fluid lazyOwl" src="#"
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone/airpods-pronta.png"
                                        alt="Technologies" />
                                    </div>
                                    <div class="title">Acessórios</div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="item">
                            <div class="block-carousel-container">
                              <div class="left-block">
                                <div class="block-carousel-image-container image">
                                  <div class="ap-more-info" data-id="3"></div>
                                  <a title="Video &amp; Game" href="#">
                                    <div class="item-image">
                                      <img class="img-fluid lazyOwl" src="#"
                                        data-src="<?php echo get_template_directory_uri(); ?>/assets/images/iphone/ipad-pronta.png"
                                        alt="Video &amp; Game" />
                                    </div>
                                    <div class="title">IPad</div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>


                        </div>
                      </div>
                      <script type="text/javascript">
                      ap_list_functions.push(function() {
                        $("#carousel-3112878518").imagesLoaded(
                          function() {
                            $("#carousel-3112878518").owlCarousel({
                              items: 4,
                              itemsDesktop: [1200, 3],
                              itemsDesktopSmall: [992, 2],
                              itemsTablet: [768, 2],
                              itemsMobile: [576, 1],
                              itemsCustom: false,
                              singleItem: false, // true : show only 1 item
                              itemsScaleUp: false,
                              slideSpeed: 200, //  change speed when drag and drop a item
                              paginationSpeed: 800, // change speed when go next page
                              autoPlay: true, // time to show each item
                              stopOnHover: true,
                              navigation: false,
                              navigationText: ["&lsaquo;", "&rsaquo;"],
                              scrollPerPage: false,
                              pagination: false, // show bullist
                              paginationNumbers: false, // show number
                              responsive: true,
                              lazyLoad: true,
                              lazyFollow: false, // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                              lazyEffect: "fade",
                              autoHeight: false,
                              mouseDrag: true,
                              touchDrag: true,
                              addClassActive: true,
                              direction: false,
                              afterInit: OwlLoaded,
                              afterAction: SetOwlCarouselFirstLast,
                            });
                          }
                        );
                      });

                      function OwlLoaded(el) {
                        el.removeClass("owl-loading")
                          .addClass("owl-loaded")
                          .parents(".owl-row")
                          .addClass("hide-loading");
                      }
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
          ap_list_functions.push(function() {
            $.stellar({
              horizontalScrolling: false
            });
          });
          </script>

          <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
          <div class="wrapper" style="background: #f5f5f5 no-repeat">
            <div class="container">
              <div class="row no-margin ApRow has-bg bg-fullwidth-container" style="">
                <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                <div
                  class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 box-bg-white banner-wrapper-infor ApColumn">
                  <!-- @file modules\appagebuilder\views\templates\hook\ApTabs -->
                  <script type="text/javascript">
                  ap_list_functions.push(function() {
                    // ACTION USE EFFECT
                    $("#tab_2247719904 .tab-pane").addClass("fade");

                    // ACTION SET ACTIVE
                    $("#tab_2247719904 .nav a:eq(0)").trigger("click");
                  });
                  </script>


                  <!--Seção descontos especiais-->
                  <!-- @file modules\appagebuilder\views\templates\hook\ApImage -->
                  <div id="image-form_18815447917164215" class="block style-2 ApImage">
                    <a href="#">
                      <img
                        src="<?php echo get_template_directory_uri(); ?>/themes/at_dimita/assets/img/modules/appagebuilder/images/banner2-7.jpg"
                        class="" title="" alt="" style="width: 100%; height: auto" loading="lazy" />
                    </a>
                    <div class="image_description">
                      <div class="content">
                        <h3 class="title-banner">
                          Descontos especiais
                        </h3>
                        <p>
                          <a href="#" class="btn btn-border-white" title="">Saiba mais</a>
                        </p>
                      </div>
                    </div>
                  </div>
                  <!-- @file modules\appagebuilder\views\templates\hook\ApGenCode -->

                  <div class="box-policys">
                    <div class="box-policy">
                      <div class="policy-icon">
                        <img class="img-fluid"
                          src="https://rubiktheme.com/demo/at_dimita_demo/themes/at_dimita/assets/img/like.svg"
                          alt="" />
                      </div>
                      <div class="policy-info">
                        <h3 class="title-policy">Satisfação garantida</h3>
                        <div class="desc-policy"></div>
                      </div>
                    </div>
                    <div class="box-policy">
                      <div class="policy-icon">
                        <img class="img-fluid"
                          src="https://rubiktheme.com/demo/at_dimita_demo/themes/at_dimita/assets/img/money.svg"
                          alt="" />
                      </div>
                      <div class="policy-info">
                        <h3 class="title-policy">Pagamento seguro</h3>
                        <div class="desc-policy"></div>
                      </div>
                    </div>
                    <div class="box-policy">
                      <div class="policy-icon">
                        <img class="img-fluid"
                          src="https://rubiktheme.com/demo/at_dimita_demo/themes/at_dimita/assets/img/plane.svg"
                          alt="" />
                      </div>
                      <div class="policy-info">
                        <h3 class="title-policy">Entrega em todo Brasil</h3>
                        <div class="desc-policy"></div>
                      </div>
                    </div>
                    <div class="box-policy">
                      <div class="policy-icon">
                        <img class="img-fluid"
                          src="https://rubiktheme.com/demo/at_dimita_demo/themes/at_dimita/assets/img/piggy-bank.svg"
                          alt="" />
                      </div>
                      <div class="policy-info">
                        <h3 class="title-policy">Compramos seu IPhone e pagamos á vista</h3>
                        <div class="desc-policy"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
          ap_list_functions.push(function() {
            $.stellar({
              horizontalScrolling: false
            });
          });
          </script>

          <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
          <div class="wrapper" style="
                    background: url(<?php echo get_template_directory_uri(); ?>/themes/at_dimita/assets/img/modules/appagebuilder/images/image-category.jpg)
                      fixed no-repeat center center;
                    background-size: cover;
                  ">
            <div class="container">
              <div class="row ApRow has-bg bg-fullwidth-container" style="padding-top: 190px; padding-bottom: 110px">
                <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 ApColumn">
                  <!-- @file modules\appagebuilder\views\templates\hook\ApBlockCarousel -->
                  <div class="block block_carousel exclusive appagebuilder box-testimonial style-0 ApBlockCarousel">
                    <div class="block_content">
                      <!-- @file modules\appagebuilder\views\templates\hook\ApBlockOwlCarouselItem -->
                      <h4 class="title_block">O que dizem nossos clientes</h4>
                      <div class="owl-row">
                        <div class="timeline-wrapper clearfix prepare" data-item="3" data-xl="3" data-lg="3" data-md="2"
                          data-sm="2" data-m="1">

                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">
                                <div class="background-masker content-top"></div>
                                <div class="background-masker content-second-line"></div>
                                <div class="background-masker content-third-line"></div>
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>

                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">
                                <div class="background-masker content-top"></div>
                                <div class="background-masker content-second-line"></div>
                                <div class="background-masker content-third-line"></div>
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>

                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">
                                <div class="background-masker content-top"></div>
                                <div class="background-masker content-second-line"></div>
                                <div class="background-masker content-third-line"></div>
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div id="carousel-3032461049" class="owl-carousel owl-theme owl-loading">
                          <div class="item">
                            <div class="block-carousel-container">
                              <div class="left-block">
                                <div class="block-carousel-image-container image">
                                  <div class="ap-more-info" data-id="4"></div>

                                  <div class="item-image">
                                    <img class="img-fluid"
                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar/woman-removebg.png" />
                                  </div>
                                  <div class="title">Bianca <br> <span>Itajaí - SC</span></div>
                                  <div class="descript">
                                    <div class="testimonial-desc">
                                      <p>
                                        Ótimo vendedor! Mercadoria de primeira qualidade. Cumpre o que promete
                                      </p>
                                    </div>
                                    <div class="rating">
                                      <div class="rating-5 rating-content"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="item">
                            <div class="block-carousel-container">
                              <div class="left-block">
                                <div class="block-carousel-image-container image">
                                  <div class="ap-more-info" data-id="3"></div>

                                  <div class="item-image">
                                    <img class="img-fluid"
                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar/man-removebg.png"
                                      alt="Giancarlo" />
                                  </div>
                                  <div class="title">Jhony Xavier
                                    <br> <span>Blumenau - SC</span>
                                  </div>
                                  <div class="descript">
                                    <div class="testimonial-desc">
                                      <p>
                                        Atendimento é excelente, a qualidade é ótima, o ambiente é bom, e o atendente
                                        tem muita experiência para tirar dúvidas.
                                      </p>
                                    </div>
                                    <div class="rating">
                                      <div class="rating-5 rating-content"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="item">
                            <div class="block-carousel-container">
                              <div class="left-block">
                                <div class="block-carousel-image-container image">
                                  <div class="ap-more-info" data-id="2"></div>

                                  <div class="item-image">
                                    <img class="img-fluid"
                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar/woman-removebg.png"
                                      alt="katiane" />
                                  </div>
                                  <div class="title">Katiane Cristina Ramos <br> <span>Ilhota - SC</span></div>
                                  <div class="descript">
                                    <div class="testimonial-desc">
                                      <p>
                                        Vendi meu iPhone 6 para o pentalobe, valeu muito apena, ótimos profissionais e
                                        muito confiáveis.
                                      </p>
                                    </div>
                                    <div class="rating">
                                      <div class="rating-4 rating-content"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="item">
                            <div class="block-carousel-container">
                              <div class="left-block">
                                <div class="block-carousel-image-container image">
                                  <div class="ap-more-info" data-id="1"></div>

                                  <div class="item-image">
                                    <img class="img-fluid"
                                      src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar/woman-removebg.png"
                                      alt="Dayane" />
                                  </div>
                                  <div class="title">Dayani Amorim <br> <span>Blumenau - SC</span></div>
                                  <div class="descript">
                                    <div class="testimonial-desc">
                                      <p>
                                        Melhor atendimento e de confiança, esperei pra comprar com ele. Recomendo
                                      </p>
                                    </div>
                                    <div class="rating">
                                      <div class="rating-3 rating-content"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <script type="text/javascript">
                      ap_list_functions.push(function() {
                        $("#carousel-3032461049").imagesLoaded(
                          function() {
                            $("#carousel-3032461049").owlCarousel({
                              items: 3,
                              itemsDesktop: [1200, 3],
                              itemsDesktopSmall: [992, 2],
                              itemsTablet: [768, 2],
                              itemsMobile: [576, 1],
                              itemsCustom: false,
                              singleItem: false, // true : show only 1 item
                              itemsScaleUp: false,
                              slideSpeed: 200, //  change speed when drag and drop a item
                              paginationSpeed: 800, // change speed when go next page
                              autoPlay: false, // time to show each item
                              stopOnHover: false,
                              navigation: false,
                              navigationText: ["&lsaquo;", "&rsaquo;"],
                              scrollPerPage: false,
                              pagination: false, // show bullist
                              paginationNumbers: false, // show number
                              responsive: true,
                              lazyLoad: false,
                              lazyFollow: false, // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                              lazyEffect: "fade",
                              autoHeight: false,
                              mouseDrag: true,
                              touchDrag: true,
                              addClassActive: true,
                              direction: false,
                              afterInit: OwlLoaded,
                              afterAction: SetOwlCarouselFirstLast,
                            });
                          }
                        );
                      });

                      function OwlLoaded(el) {
                        el.removeClass("owl-loading")
                          .addClass("owl-loaded")
                          .parents(".owl-row")
                          .addClass("hide-loading");
                      }
                      </script>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <script>
          ap_list_functions.push(function() {
            $.stellar({
              horizontalScrolling: false
            });
          });
          </script>

          <!-- @file modules\appagebuilder\views\templates\hook\ApRow -->
          <div class="wrapper" style="background: #f5f5f5 no-repeat">
            <div class="container">
              <div class="row no-margin ApRow has-bg bg-fullwidth-container" style="">
                <!-- @file modules\appagebuilder\views\templates\hook\ApColumn -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 box-bg-white ApColumn">
                  <!-- @file modules\appagebuilder\views\templates\hook\ApBlog -->

                  <div id="blog-form_20945741681305982" class="block latest-blogs exclusive appagebuilder ApBlog">
                    <h4 class="title_block">Blog</h4>

                    <div class="block_content">
                      <!-- @file modules\appagebuilder\views\templates\hook\BlogOwlCarousel -->
                      <div class="owl-row">
                        <div class="timeline-wrapper clearfix prepare" data-item="3" data-xl="3" data-lg="3" data-md="2"
                          data-sm="2" data-m="1">
                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">
                                <div class="background-masker content-top"></div>
                                <div class="background-masker content-second-line"></div>
                                <div class="background-masker content-third-line"></div>
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>

                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">
                                <div class="background-masker content-top"></div>
                                <div class="background-masker content-second-line"></div>
                                <div class="background-masker content-third-line"></div>
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>

                          <div class="timeline-parent">
                            <div class="timeline-item">
                              <div class="animated-background">
                                <div class="background-masker content-top"></div>
                                <div class="background-masker content-second-line"></div>
                                <div class="background-masker content-third-line"></div>
                                <div class="background-masker content-fourth-line"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="carousel-2370618698" class="owl-carousel owl-theme owl-loading">
                          <div class="item">
                            <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                            <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                              <div class="left-block">
                                <div class="blog-image-container">
                                  <a class="blog_img_link" href="blog/lorem-ipsum-dolor-sit-amet-enim-b7.html"
                                    title="Lorem Ipsum Dolor Sit Amet Enim" itemprop="url">
                                    <img class="img-fluid"
                                      src="<?php echo get_template_directory_uri(); ?>/img/leoblog/b/1/7/1500_960/b-b-blog-1.jpg"
                                      alt="Lorem Ipsum Dolor Sit Amet Enim" title="Lorem Ipsum Dolor Sit Amet Enim"
                                      width="1500" height="960" itemprop="image" />
                                  </a>
                                  <div class="meta-info">
                                    <span class="author">
                                      <i class="fa fa-user-o"></i><span>Demo Demo</span>
                                    </span>

                                    <span class="created">
                                      <time class="date" datetime="2020">
                                        <i class="fa fa-calendar-o"></i>
                                        <span>
                                          23
                                          <!-- month-->
                                          July
                                          <!-- day of month -->
                                          2020
                                          <!-- year -->
                                        </span>
                                      </time>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="right-block">
                                <div class="blog-meta">
                                  <h5 class="blog-title" itemprop="name">
                                    <a href="blog/lorem-ipsum-dolor-sit-amet-enim-b7.html"
                                      title="Lorem Ipsum Dolor Sit Amet Enim">Lorem Ipsum Dolor Sit Amet Enim</a>
                                  </h5>

                                  <p class="blog-desc" itemprop="description">
                                    Suspendisse posuere, diam in bibendum
                                    lobortis, turpis ipsum aliquam risus,
                                    sit amet dictum...
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                            <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                              <div class="left-block">
                                <div class="blog-image-container">
                                  <a class="blog_img_link" href="blog/gazen-suma-poma-nua-b6.html"
                                    title="Gazen Suma Poma Nua" itemprop="url">
                                    <img class="img-fluid"
                                      src="<?php echo get_template_directory_uri(); ?>/img/leoblog/b/1/6/1500_960/b-b-blog-8.jpg"
                                      alt="Gazen Suma Poma Nua" title="Gazen Suma Poma Nua" width="1500" height="960"
                                      itemprop="image" />
                                  </a>
                                  <div class="meta-info">
                                    <span class="author">
                                      <i class="fa fa-user-o"></i><span>Demo Demo</span>
                                    </span>

                                    <span class="created">
                                      <time class="date" datetime="2020">
                                        <i class="fa fa-calendar-o"></i>
                                        <span>
                                          23
                                          <!-- month-->
                                          July
                                          <!-- day of month -->
                                          2020
                                          <!-- year -->
                                        </span>
                                      </time>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="right-block">
                                <div class="blog-meta">
                                  <h5 class="blog-title" itemprop="name">
                                    <a href="blog/gazen-suma-poma-nua-b6.html" title="Gazen Suma Poma Nua">Gazen Suma
                                      Poma Nua</a>
                                  </h5>

                                  <p class="blog-desc" itemprop="description">
                                    Suspendisse posuere, diam in bibendum
                                    lobortis, turpis ipsum aliquam risus,
                                    sit amet dictum...
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                            <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                              <div class="left-block">
                                <div class="blog-image-container">
                                  <a class="blog_img_link" href="blog/classics-from-yesterday-b5.html"
                                    title="Classics From Yesterday" itemprop="url">
                                    <img class="img-fluid"
                                      src="<?php echo get_template_directory_uri(); ?>/img/leoblog/b/1/5/1500_960/b-b-blog-2.jpg"
                                      alt="Classics From Yesterday" title="Classics From Yesterday" width="1500"
                                      height="960" itemprop="image" />
                                  </a>
                                  <div class="meta-info">
                                    <span class="author">
                                      <i class="fa fa-user-o"></i><span>Demo Demo</span>
                                    </span>

                                    <span class="created">
                                      <time class="date" datetime="2020">
                                        <i class="fa fa-calendar-o"></i>
                                        <span>
                                          23
                                          <!-- month-->
                                          July
                                          <!-- day of month -->
                                          2020
                                          <!-- year -->
                                        </span>
                                      </time>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="right-block">
                                <div class="blog-meta">
                                  <h5 class="blog-title" itemprop="name">
                                    <a href="blog/classics-from-yesterday-b5.html"
                                      title="Classics From Yesterday">Classics From Yesterday</a>
                                  </h5>

                                  <p class="blog-desc" itemprop="description">
                                    Suspendisse posuere, diam in bibendum
                                    lobortis, turpis ipsum aliquam risus,
                                    sit amet dictum...
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                            <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                              <div class="left-block">
                                <div class="blog-image-container">
                                  <a class="blog_img_link"
                                    href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b4.html"
                                    title="Nullam ullamcorper nisl quis ornare molestie" itemprop="url">
                                    <img class="img-fluid" src="../img/leoblog/b/1/4/1500_960/b-blog-7.jpg"
                                      alt="Nullam ullamcorper nisl quis ornare molestie"
                                      title="Nullam ullamcorper nisl quis ornare molestie" width="1500" height="960"
                                      itemprop="image" />
                                  </a>
                                  <div class="meta-info">
                                    <span class="author">
                                      <i class="fa fa-user-o"></i><span>Demo Demo</span>
                                    </span>

                                    <span class="created">
                                      <time class="date" datetime="2020">
                                        <i class="fa fa-calendar-o"></i>
                                        <span>
                                          23
                                          <!-- month-->
                                          July
                                          <!-- day of month -->
                                          2020
                                          <!-- year -->
                                        </span>
                                      </time>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="right-block">
                                <div class="blog-meta">
                                  <h5 class="blog-title" itemprop="name">
                                    <a href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b4.html"
                                      title="Nullam ullamcorper nisl quis ornare molestie">Nullam ullamcorper nisl quis
                                      ornare
                                      molestie</a>
                                  </h5>

                                  <p class="blog-desc" itemprop="description">
                                    Suspendisse posuere, diam in bibendum
                                    lobortis, turpis ipsum aliquam risus,
                                    sit amet dictum...
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                            <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                              <div class="left-block">
                                <div class="blog-image-container">
                                  <a class="blog_img_link"
                                    href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b3.html"
                                    title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" itemprop="url">
                                    <img class="img-fluid" src="../img/leoblog/b/1/3/1500_960/b-blog-6.jpg"
                                      alt="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus"
                                      title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" width="1500"
                                      height="960" itemprop="image" />
                                  </a>
                                  <div class="meta-info">
                                    <span class="author">
                                      <i class="fa fa-user-o"></i><span>Demo Demo</span>
                                    </span>

                                    <span class="created">
                                      <time class="date" datetime="2020">
                                        <i class="fa fa-calendar-o"></i>
                                        <span>
                                          23
                                          <!-- month-->
                                          July
                                          <!-- day of month -->
                                          2020
                                          <!-- year -->
                                        </span>
                                      </time>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="right-block">
                                <div class="blog-meta">
                                  <h5 class="blog-title" itemprop="name">
                                    <a href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b3.html"
                                      title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus">Turpis at
                                      eleifend leo mi elit
                                      Aenean porta ac sed faucibus</a>
                                  </h5>

                                  <p class="blog-desc" itemprop="description">
                                    Turpis at eleifend leo mi elit Aenean
                                    porta ac sed faucibus. Nunc urna Morbi
                                    fringilla vitae orci...
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                            <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                              <div class="left-block">
                                <div class="blog-image-container">
                                  <a class="blog_img_link"
                                    href="blog/morbi-condimentum-molestie-nam-enim-odio-sodales-b2.html"
                                    title="Morbi condimentum molestie Nam enim odio sodales" itemprop="url">
                                    <img class="img-fluid" src="../img/leoblog/b/1/2/1500_960/b-blog-5.jpg"
                                      alt="Morbi condimentum molestie Nam enim odio sodales"
                                      title="Morbi condimentum molestie Nam enim odio sodales" width="1500" height="960"
                                      itemprop="image" />
                                  </a>
                                  <div class="meta-info">
                                    <span class="author">
                                      <i class="fa fa-user-o"></i><span>Demo Demo</span>
                                    </span>

                                    <span class="created">
                                      <time class="date" datetime="2020">
                                        <i class="fa fa-calendar-o"></i>
                                        <span>
                                          23
                                          <!-- month-->
                                          July
                                          <!-- day of month -->
                                          2020
                                          <!-- year -->
                                        </span>
                                      </time>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="right-block">
                                <div class="blog-meta">
                                  <h5 class="blog-title" itemprop="name">
                                    <a href="blog/morbi-condimentum-molestie-nam-enim-odio-sodales-b2.html"
                                      title="Morbi condimentum molestie Nam enim odio sodales">Morbi condimentum
                                      molestie Nam enim
                                      odio sodales</a>
                                  </h5>

                                  <p class="blog-desc" itemprop="description">
                                    Sed mauris Pellentesque elit Aliquam
                                    at lacus interdum nascetur elit ipsum.
                                    Enim ipsum hendrerit...
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="item">
                            <!-- @file modules\appagebuilder\views\templates\hook\BlogItem -->
                            <div class="blog-container" itemscope itemtype="https://schema.org/Blog">
                              <div class="left-block">
                                <div class="blog-image-container">
                                  <a class="blog_img_link"
                                    href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b1.html"
                                    title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" itemprop="url">
                                    <img class="img-fluid" src="../img/leoblog/b/1/1/1500_960/b-blog-4.jpg"
                                      alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum"
                                      title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" width="1500"
                                      height="960" itemprop="image" />
                                  </a>
                                  <div class="meta-info">
                                    <span class="author">
                                      <i class="fa fa-user-o"></i><span>Demo Demo</span>
                                    </span>

                                    <span class="created">
                                      <time class="date" datetime="2020">
                                        <i class="fa fa-calendar-o"></i>
                                        <span>
                                          23
                                          <!-- month-->
                                          July
                                          <!-- day of month -->
                                          2020
                                          <!-- year -->
                                        </span>
                                      </time>
                                    </span>
                                  </div>
                                </div>
                              </div>
                              <div class="right-block">
                                <div class="blog-meta">
                                  <h5 class="blog-title" itemprop="name">
                                    <a href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b1.html"
                                      title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum">Urna pretium
                                      elit mauris cursus
                                      Curabitur at elit Vestibulum</a>
                                  </h5>

                                  <p class="blog-desc" itemprop="description">
                                    Mi vitae magnis Fusce laoreet nibh
                                    felis porttitor laoreet Vestibulum
                                    faucibus. At Nulla id...
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <script type="text/javascript">
                      ap_list_functions.push(function() {
                        $("#carousel-2370618698").imagesLoaded(
                          function() {
                            $("#carousel-2370618698").owlCarousel({
                              items: 3,
                              itemsDesktop: [1200, 3],
                              itemsDesktopSmall: [992, 2],
                              itemsTablet: [768, 2],
                              itemsMobile: [576, 1],
                              itemsCustom: false,
                              singleItem: false, // true : show only 1 item
                              itemsScaleUp: false,
                              slideSpeed: 200, //  change speed when drag and drop a item
                              paginationSpeed: 800, // change speed when go next page
                              autoPlay: false, // time to show each item
                              stopOnHover: false,
                              navigation: false,
                              navigationText: ["&lsaquo;", "&rsaquo;"],
                              scrollPerPage: false,
                              pagination: false, // show bullist
                              paginationNumbers: false, // show number
                              responsive: true,
                              lazyLoad: false,
                              lazyFollow: false, // true : go to page 7th and load all images page 1...7. false : go to page 7th and load only images of page 7th
                              lazyEffect: "fade",
                              autoHeight: false,
                              mouseDrag: true,
                              touchDrag: true,
                              addClassActive: true,
                              direction: false,
                              afterInit: OwlLoaded,
                              afterAction: SetOwlCarouselFirstLast,
                            });
                          }
                        );
                      });

                      function OwlLoaded(el) {
                        el.removeClass("owl-loading")
                          .addClass("owl-loaded")
                          .parents(".owl-row")
                          .addClass("hide-loading");
                      }
                      </script>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <script>
          ap_list_functions.push(function() {
            $.stellar({
              horizontalScrolling: false
            });
          });
          </script>
        </section>

        <footer class="page-footer">
          <!-- Footer content -->
        </footer>
      </section>
    </div>
  </div>
</section>

<?php get_footer() ?>