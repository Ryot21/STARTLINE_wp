<?php get_header(); ?>


<!-- ここからコンテンツ -->
<div id="container">
  <div id="main">
    <div class="main-inner">
      <section class="l-container">
        <h2 class="single-ttl main-font">OG</h2>
        <div class="blog-content">

<!-- 工事中 -->
        
			      <?php if (have_posts()) : ?>
              <?php while (have_posts() ) : the_post(); ?>
                <section id="blog-<?php the_ID(); ?>" <?php post_class('blog-box'); ?>>
                  <h3 class="blog-title"><?php the_title(); ?>  <?php the_categry(); ?></h3>
                  <time class="blog-day" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                  <!-- 960×640-->
                  <?php if (has_post_thumnail() ): ?>
                    <?php the_post_thumnail('array(960,640)'); ?>
                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/blog/2020/1126/20201126.jpg" class="blog-img" alt="" />
                  <?php endif; ?>

                  <p class="blog-text">
                    <?php the_content(); ?>
                  </p>

                  <div class="post-links">
                  <div class="post-link post-link_prev">
                    <?php previous_post_link('<i class="fasfa-chevron-left"></i>%link'); ?>
                  </div>
                  <div class="post-link post-link_next">
                    <?php next_post_link('%link<i class="fasfa-chevron-right"></i>'); ?>

                    <a href="#"><i class="fasfa-chevron-right"></i>次の記事</a>
                  </div>

                  </div>
                </section>
              <?php endwhile; ?>
            <?php endif; ?>
<!-- 工事中 -->

        </div>
      </section>

    </div>
    <!-- Profile -->
  </div>
</div>

<!-- ここまでコンテンツ -->



<?php get_footer(); ?>