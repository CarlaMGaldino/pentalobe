<?php 
  get_header();
?>

<?php 
  $post_id =  get_the_ID();
  $author_id = get_post_field ('post_author', $post_id);
  $author_name = ucfirst(get_the_author_meta( 'nickname' , $author_id )); 
  $author_post = ucfirst(get_the_author());
  $comments_number = get_comments_number();
  $post_date_full = get_the_date( 'j F, Y' );
  $post_date_day = get_the_date( 'j' );
  $post_date_month = ucfirst(get_the_date( 'F' ));
  $post_date_year = get_the_date( 'Y' );
  $title_post = get_the_title();
  $post_url = get_the_permalink();
  $thumbnail_url = get_the_post_thumbnail_url();
  $thumbnail_id = get_post_meta( $post->ID, '_thumbnail_id', true );
  $img_alt = get_post_meta ( $thumbnail_id, '_wp_attachment_image_alt', true );

  if(! $img_alt){
      $img_alt = get_the_title();
  }
?>
<section id="wrapper">

  <nav data-depth="4" class="breadcrumb hidden-sm-down">
    <div class="container">
      <div class="box-breadcrumb">
        <ol>


          <li>
            <a href="../index.html"><span>Home</span></a>
          </li>


          <li>
            <a href="../blog.html"><span>Blog</span></a>
          </li>


          <li>
            <a href="category-1-c2.html"><span>Category 1</span></a>
          </li>


          <li>
            <span><?php echo $title_post; ?></span>
          </li>


        </ol>
      </div>
    </div>

    <div class="category-cover hidden-sm-down">
      <img src="../../themes/at_dimita/assets/img/bg-breadcrumb.jpg" class="img-fluid" alt="Breadcrumb image">
    </div>
  </nav>


  <div class="container" id="">

    <div class="row">



      <div id="content-wrapper" class="js-content-wrapper right-column col-xs-12 col-sm-12 col-md-8 col-lg-9">


        <section id="main">

          <div id="blogpage">
            <article class="blog-detail">
              <h1 class="blog-title"><?php echo $title_post; ?></h1>
              <div class="blog-meta">
                <span class="blog-author">
                  <i class="fa fa-user-o" aria-hidden="true"></i>
                  <span>Por: </span>
                  <a href="../blog8f9e.html?author=Demo+Demo" title="<?php echo $author_name; ?>"><?php echo $author_name; ?></a>
                </span>

                <!-- <span class="blog-cat">
                  <i class="fa fa-refresh" aria-hidden="true"></i>
                  <span>In: </span>
                  <a href="category-1-c2.html" title="Category 1">Category 1</a>
                </span> -->

                <span class="blog-created">
                  <i class="fa fa-calendar-o" aria-hidden="true"></i>
                  <time class="date" datetime="<?php echo $post_date_year; ?>">
                    <?php echo $post_date_day;?> de <?php echo $post_date_month; ?> de <?php echo $post_date_year; ?>
                  </time>
                </span>

                <span class="blog-ctncomment">
                  <i class="fa fa-comment-o" aria-hidden="true"></i>
                  <span>Commentário(s):</span>
                  <?php echo $comments_number; ?>
                </span>
                <!-- <span class="blog-hit">
                  <i class="fa fa-heart-o" aria-hidden="true"></i>
                  <span>Hit:</span>
                  971
                </span> -->
              </div>

              <div class="blog-image">
                <img src="<?php echo $thumbnail_url; ?>" title="<?php echo $title_post; ?>" class="img-fluid" />
              </div>

              <div class="blog-description">
                <?php the_content(); ?>
              </div>




              <div class="social-share">
                <div class="social-wrap">
                  <div class="social-heading"> <b>Compartilhe</b> </div>

                  <!-- Google +1 Button -->
                  <div class="itemGooglePlusOneButton">
                    <g:plusone annotation="inline" width="120"></g:plusone>
                    <script type="text/javascript">
                    (function() {
                      window.___gcfg = {
                        lang: 'en'
                      }; // Define button default language here
                      var po = document.createElement('script');
                      po.type = 'text/javascript';
                      po.async = true;
                      po.src = '../../../../../apis.google.com/js/plusone.js';
                      var s = document.getElementsByTagName('script')[0];
                      s.parentNode.insertBefore(po, s);
                    })();
                    </script>
                  </div>

                  <!-- Twitter Button -->
                  <div class="itemTwitterButton">
                    <a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">
                      Twitter
                    </a>
                    <script type="text/javascript" src="../../../../../platform.twitter.com/widgets.js"></script>
                  </div>


                  <!-- Facebook Button -->
                  <div class="itemFacebookButton">
                    <div id="fb-root"></div>
                    <script type="text/javascript">
                    (function(d, s, id) {
                      var js, fjs = d.getElementsByTagName(s)[0];
                      if (d.getElementById(id)) return;
                      js = d.createElement(s);
                      js.id = id;
                      js.src = "../../../../../connect.facebook.net/en_US/all.js#xfbml=1";
                      fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                    </script>
                    <div class="fb-like" data-send="false" data-width="200" data-show-faces="true"></div>
                  </div>

                </div>




              </div>
              <div class="blog-tags">
                <span>Tags:</span>

                <?php
                  $posttags = get_the_tags();
                  if ($posttags) {
                    foreach($posttags as $tag) { ?>

                <a href="<?php echo esc_attr( get_tag_link( $tag->term_id ) ); ?>" title="theme"><span><?php echo $tag->name; ?></span></a>

                <?php 
                    }
                  }
                ?>

              </div>

              <div class="extra-blogs row">
              </div>

              <div class="blog-comment-block clearfix">

                <div id="blog-localengine">
                  <h3>Comments</h3>

                  <p class="alert alert-success">No comment at this time!</p>


                  <h3 class="title-comment">Leave your comment</h3>
                  <form class="form-horizontal clearfix" method="post" id="comment-form" action="https://rubiktheme.com/demo/at_dimita_demo/en/blog/lorem-ipsum-dolor-sit-amet-enim-b7.html" onsubmit="return false;">
                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="control-label" for="inputFullName">Full Name</label>
                      </div>
                      <div class="col-lg-9">
                        <input type="text" name="user" placeholder="Enter your full name" id="inputFullName" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="control-label" for="inputEmail">Email</label>
                      </div>
                      <div class="col-lg-9">
                        <input type="text" name="email" placeholder="Enter your email" id="inputEmail" class="form-control">
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="control-label" for="inputComment">Comment</label>
                      </div>
                      <div class="col-lg-9">
                        <textarea type="text" name="comment" rows="6" placeholder="Enter your comment" id="inputComment" class="form-control"></textarea>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-lg-3">
                        <label class="control-label" for="inputEmail">Captcha</label>
                      </div>
                      <div class="col-lg-8 col-md-8 ipts-captcha">
                        <img src="lorem-ipsum-dolor-sit-amet-enim-b780b3.jpg?captchaimage=1" class="comment-capcha-image" align="left" />
                        <input class="form-control" type="text" name="captcha" value="" size="10" />
                      </div>
                    </div>

                    <input type="hidden" name="id_leoblog_blog" value="7">
                    <div class="form-group row">
                      <div class="col-lg-9 col-lg-offset-3">
                        <button class="btn btn-secondary btn-outline" name="submitcomment" type="submit">
                          <span class="btn-submit-comment">Submit</span>
                          <span class="leoblog-cssload-container cssload-speeding-wheel"></span>
                        </button>
                      </div>

                    </div>
                  </form>
                </div>

            </article>
          </div>

          <div class="hidden-xl-down hidden-xl-up datetime-translate">
            Sunday
            Monday
            Tuesday
            Wednesday
            Thursday
            Friday
            Saturday

            January
            February
            March
            April
            May
            June
            July
            August
            September
            October
            November
            December

          </div>



      </div>



      <div id="right-column" class="sidebar col-xs-12 col-sm-12 col-md-4 col-lg-3">


        <div class="block-categories block block-highlighted">
          <h4 class="title_block"><a href="../9-technologies.html">Technologies</a></h4>
          <div class="block_content">
            <ul class="category-top-menu">
              <li>
              </li>
            </ul>
          </div>
        </div>
        <!-- Block categories module -->
        <div id="categories_blog_menu" class="block blog-menu hidden-sm-down">
          <h4 class="title_block">Blog Categories</h4>
          <div class="block_content">
            <ul class="level1 tree dhtml ">
              <li id="list_2" class=" "><a href="category-1-c2.html" title="Category 1"><span>Category 1</span></a>
                <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#sub_2">
                  <i class="material-icons add">add</i>
                  <i class="material-icons remove">remove</i>
                </div>
                <ul id="sub_2" class="level2 collapse ">
                  <li id="list_3" class=" "><a href="sub-category-1-c3.html" title="Sub Category 1"><span>Sub Category 1</span></a> </li>
                  <li id="list_4" class=" "><a href="sub-category-2-c4.html" title="Sub Category 2"><span>Sub Category 2</span></a> </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <!-- /Block categories module -->

        <section id="blogRecentBlog" class="block leo-block-sidebar hidden-sm-down">
          <h4 class='title_block'><a href="#">Recent Articles</a></h4>
          <div class="block_content products-block">
            <ul class="lists">
              <li class="list-item clearfix first_item">
                <div class="blog-image">
                  <a class="products-block-image" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" href="urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b1.html">
                    <img alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" src="../../img/leoblog/b/1/1/1500_960/b-blog-4.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" href="urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b1.html">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
              <li class="list-item clearfix">
                <div class="blog-image">
                  <a class="products-block-image" title="Morbi condimentum molestie Nam enim odio sodales" href="morbi-condimentum-molestie-nam-enim-odio-sodales-b2.html">
                    <img alt="Morbi condimentum molestie Nam enim odio sodales" src="../../img/leoblog/b/1/2/1500_960/b-blog-5.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Morbi condimentum molestie Nam enim odio sodales" href="morbi-condimentum-molestie-nam-enim-odio-sodales-b2.html">Morbi condimentum molestie Nam enim odio sodales</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
              <li class="list-item clearfix">
                <div class="blog-image">
                  <a class="products-block-image" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" href="turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b3.html">
                    <img alt="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" src="../../img/leoblog/b/1/3/1500_960/b-blog-6.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" href="turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b3.html">Turpis at eleifend leo mi elit Aenean porta ac sed faucibus</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
              <li class="list-item clearfix">
                <div class="blog-image">
                  <a class="products-block-image" title="Nullam ullamcorper nisl quis ornare molestie" href="nullam-ullamcorper-nisl-quis-ornare-molestie-b4.html">
                    <img alt="Nullam ullamcorper nisl quis ornare molestie" src="../../img/leoblog/b/1/4/1500_960/b-blog-7.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Nullam ullamcorper nisl quis ornare molestie" href="nullam-ullamcorper-nisl-quis-ornare-molestie-b4.html">Nullam ullamcorper nisl quis ornare molestie</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
              <li class="list-item clearfix">
                <div class="blog-image">
                  <a class="products-block-image" title="Classics From Yesterday" href="classics-from-yesterday-b5.html">
                    <img alt="Classics From Yesterday" src="../../img/leoblog/b/1/5/1500_960/b-b-blog-2.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Classics From Yesterday" href="classics-from-yesterday-b5.html">Classics From Yesterday</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
              <li class="list-item clearfix last_item">
                <div class="blog-image">
                  <a class="products-block-image" title="Gazen Suma Poma Nua" href="gazen-suma-poma-nua-b6.html">
                    <img alt="Gazen Suma Poma Nua" src="../../img/leoblog/b/1/6/1500_960/b-b-blog-8.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Gazen Suma Poma Nua" href="gazen-suma-poma-nua-b6.html">Gazen Suma Poma Nua</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
            </ul>
          </div>
        </section>

        <section id="tags_blog_block_left" class="block leo-blog-tags hidden-sm-down">
          <h4 class='title_block'><a href="#">Tags Post</a></h4>
          <div class="block_content clearfix">
            <a href="../blog166d.html?tag=leotheme">leotheme</a>
            <a href="../blog5cce.html?tag=prestashop">prestashop</a>
            <a href="../blogb063.html?tag=theme">theme</a>
            <a href="../blogdba8.html?tag=magento">magento</a>
            <a href="../blog4a11.html?tag=opencart">opencart</a>
            <a href="../blogfa1b.html?tag=template">template</a>
          </div>
        </section>

      </div>

    </div>
  </div>

</section>
<?php
  get_footer();
?>