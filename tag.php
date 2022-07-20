<?php get_header(); ?>

<?php 
  $current_tag = single_tag_title( "", false ); 
?>

<section id="wrapper">
  <nav data-depth="2" class="breadcrumb hidden-sm-down">
    <div class="container">
      <div class="box-breadcrumb">
        <ol>
          <li>
            <a href="<?php echo esc_url(home_url('/')); ?>">Home</span></a>
          </li>
          <li>
            <span>Blog Pentalobe</span>
          </li>
        </ol>
      </div>
    </div>
    <div class=" category-cover hidden-sm-down">
      <img src="../themes/at_dimita/assets/img/bg-breadcrumb.jpg" class="img-fluid" alt="Breadcrumb image">
    </div>
  </nav>
  <div class="container" id="">
    <div class="row">
      <div id="content-wrapper" class="js-content-wrapper right-column col-xs-12 col-sm-12 col-md-8 col-lg-9">
        <section id="main">
          <div id="blog-listing" class="blogs-container box">
            <h1 class="section-title blog-lastest-title">Busca por <?php echo $current_tag; ?></h1>
            <div class="inner">
              <div class="leading-blog">
                <div class="row">
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                  <?php 
                    $author_post = ucfirst(get_the_author());
                    $comments_number = get_comments_number();
                    $post_date_day = get_the_date( 'j' );
                    $post_date_month = get_the_date( 'F' );
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

                  <div class="col-md-6 col-sm-12 col-xs-12 col-sp-12">
                    <article class="blog-item">
                      <div class="blog-image-container">
                        <div class="left-block">
                          <div class="blog-image">
                            <img src="<?php echo $thumbnail_url; ?>" title="<?php echo $img_alt; ?>" alt="<?php echo $img_alt; ?>" class="img-fluid" />
                          </div>
                        </div>
                        <div class="right-block">
                          <h4 class="title">
                            <a href="<?php echo $post_url; ?>" title="Lorem Ipsum Dolor Sit Amet Enim"><?php echo $title_post; ?></a>
                          </h4>
                          <div class="blog-meta">
                            <span class="author">
                              <i class="fa fa-user-o" aria-hidden="true"></i>
                              <a href="blog8f9e.html?author=Demo+Demo" title="Demo Demo"><?php echo $author_post; ?></a>
                            </span>
                            <!-- <span class="cat">
                              <i class="fa fa-refresh" aria-hidden="true"></i>
                              <a href="blog/category-1-c2.html" title="Category 1"> Category 1</a>
                            </span>
                            <span class="hits">
                              <i class="fa fa-heart-o" aria-hidden="true"></i>
                              <span> 970</span>
                            </span> -->
                            <span class="nbcomment">
                              <i class="fa fa-comment-o" aria-hidden="true"></i>
                              <span><?php echo $comments_number; ?> Comentário(s)</span>
                            </span>
                          </div>
                          <div class="blog-info">
                            <div class="blog-desc">
                              <?php the_content() ?>
                            </div>
                          </div>
                          <div class="blog-bottom">
                            <span class="created">
                              <time class="date" datetime="<?php echo $post_date_year; ?>">
                                <span class="left-date">
                                  <span class="day">
                                    <?php echo $post_date_day ?>
                                  </span>
                                </span>
                                <span class="right-date">
                                  <span class="month">
                                    <?php echo $post_date_month ?>
                                  </span>
                                  <span class="year">
                                    <?php echo $post_date_year; ?>
                                  </span>
                                </span>
                              </time>
                            </span>
                            <a href="<?php echo $post_url; ?>" title="Lorem Ipsum Dolor Sit Amet Enim" class="more btn btn-primary">Leia Mais</a>
                          </div>
                        </div>
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
                    </article>

                  </div>

                  <?php endwhile; else: ?>
                  <p><?php echo 'Desculpe, não encontramos nada aqui :('; ?></p>
                  <?php endif; ?>

                </div>
              </div>

              <div class="top-pagination-content clearfix bottom-line">
                <nav class="pagination row">
                  <div class="col-xs-12 col-md-6 col-lg-4 text-md-left text-xs-center showing">
                    Showing 1 - 6 of 7 items
                  </div>
                  <div id="pagination" class="col-xs-12 col-md-6 col-lg-8">
                    <ul class="page-list clearfix text-md-right text-xs-center">
                      <li id="pagination_previous">
                        <a class="previous disabled" rel="prev" href="#">
                          <i class="fa fa-angle-left"></i>
                          <span>Previous</span>
                        </a>
                      </li>
                      <li class="current">
                        <a href="blog.html" class="disabled">
                          1
                        </a>
                      </li>
                      <li>
                        <a href="blog905b.html?p=2">
                          2
                        </a>
                      </li>
                      <li id="pagination_next">
                        <a class="next" rel="next" href="blog905b.html?p=2">
                          <span>Next</span>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </section>
      </div>
      <div id="right-column" class="sidebar col-xs-12 col-sm-12 col-md-4 col-lg-3">
        <div class="block-categories block block-highlighted">
          <h4 class="title_block"><a href="9-technologies.html">Technologies</a></h4>
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
              <li id="list_2" class=" "><a href="blog/category-1-c2.html" title="Category 1"><span>Category 1</span></a>
                <div class="navbar-toggler collapse-icons" data-toggle="collapse" data-target="#sub_2">
                  <i class="material-icons add">add</i>
                  <i class="material-icons remove">remove</i>
                </div>
                <ul id="sub_2" class="level2 collapse ">
                  <li id="list_3" class=" "><a href="blog/sub-category-1-c3.html" title="Sub Category 1"><span>Sub Category 1</span></a> </li>
                  <li id="list_4" class=" "><a href="blog/sub-category-2-c4.html" title="Sub Category 2"><span>Sub Category 2</span></a> </li>
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
                  <a class="products-block-image" title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b1.html">
                    <img alt="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" src="<?php the_post_thumbnail_url(); ?>/img/leoblog/b/1/1/1500_960/b-blog-4.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Urna pretium elit mauris cursus Curabitur at elit Vestibulum" href="blog/urna-pretium-elit-mauris-cursus-curabitur-at-elit-vestibulum-b1.html">Urna pretium elit mauris cursus Curabitur at elit Vestibulum</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
              <li class="list-item clearfix">
                <div class="blog-image">
                  <a class="products-block-image" title="Morbi condimentum molestie Nam enim odio sodales" href="blog/morbi-condimentum-molestie-nam-enim-odio-sodales-b2.html">
                    <img alt="Morbi condimentum molestie Nam enim odio sodales" src="<?php the_post_thumbnail_url(); ?>/img/leoblog/b/1/2/1500_960/b-blog-5.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Morbi condimentum molestie Nam enim odio sodales" href="blog/morbi-condimentum-molestie-nam-enim-odio-sodales-b2.html">Morbi condimentum molestie Nam enim odio sodales</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
              <li class="list-item clearfix">
                <div class="blog-image">
                  <a class="products-block-image" title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b3.html">
                    <img alt="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" src="<?php the_post_thumbnail_url(); ?>/img/leoblog/b/1/3/1500_960/b-blog-6.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Turpis at eleifend leo mi elit Aenean porta ac sed faucibus" href="blog/turpis-at-eleifend-leo-mi-elit-aenean-porta-ac-sed-faucibus-b3.html">Turpis at eleifend leo mi elit Aenean porta ac sed faucibus</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
              <li class="list-item clearfix">
                <div class="blog-image">
                  <a class="products-block-image" title="Nullam ullamcorper nisl quis ornare molestie" href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b4.html">
                    <img alt="Nullam ullamcorper nisl quis ornare molestie" src="<?php the_post_thumbnail_url(); ?>/img/leoblog/b/1/4/1500_960/b-blog-7.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Nullam ullamcorper nisl quis ornare molestie" href="blog/nullam-ullamcorper-nisl-quis-ornare-molestie-b4.html">Nullam ullamcorper nisl quis ornare molestie</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
              <li class="list-item clearfix">
                <div class="blog-image">
                  <a class="products-block-image" title="Classics From Yesterday" href="blog/classics-from-yesterday-b5.html">
                    <img alt="Classics From Yesterday" src="<?php the_post_thumbnail_url(); ?>/img/leoblog/b/1/5/1500_960/b-b-blog-2.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Classics From Yesterday" href="blog/classics-from-yesterday-b5.html">Classics From Yesterday</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
              <li class="list-item clearfix last_item">
                <div class="blog-image">
                  <a class="products-block-image" title="Gazen Suma Poma Nua" href="blog/gazen-suma-poma-nua-b6.html">
                    <img alt="Gazen Suma Poma Nua" src="<?php the_post_thumbnail_url(); ?>/img/leoblog/b/1/6/1500_960/b-b-blog-8.jpg" class="img-fluid">
                  </a>
                </div>
                <div class="blog-content">
                  <h3 class="post-name"><a title="Gazen Suma Poma Nua" href="blog/gazen-suma-poma-nua-b6.html">Gazen Suma Poma Nua</a></h3>
                  <span class="info">Jul 23, 2020</span>
                </div>
              </li>
            </ul>
          </div>
        </section>
        <section id="tags_blog_block_left" class="block leo-blog-tags hidden-sm-down">
          <h4 class='title_block'><a href="#">Tags Post</a></h4>
          <div class="block_content clearfix">



            <a href="blog166d.html?tag=leotheme">leotheme</a>
            <a href="blog5cce.html?tag=prestashop">prestashop</a>
            <a href="blogb063.html?tag=theme">theme</a>
            <a href="blogdba8.html?tag=magento">magento</a>
            <a href="blog4a11.html?tag=opencart">opencart</a>
            <a href="blogfa1b.html?tag=template">template</a>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>