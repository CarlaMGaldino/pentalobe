<?php get_header(); ?>

<div class="container" id="">
  <div class="row">
    <div id="content-wrapper" class="col-lg-12 col-xs-12 js-content-wrapper">
      <section id="main">
        <header class="page-header">
          <h1>
            <?php echo get_the_title(); ?>
          </h1>
        </header>
        <section id="content" class="page-content page-cms page-cms-3">
          <?php the_content(); ?>
        </section>
      </section>
    </div>
  </div>
</div>

<?php get_footer(); ?>