<?php get_header(); ?>


<div id="container">
  <main id="main">
    <div class="main-inner">
      <section class="l-container">
        <!-- <h2 class="single-ttl main-font">BLOG</h2> -->　
        <div class="blog-content">
		
<!-- 工事中 -->
        
			<?php if(have_posts()): while(have_posts()): the_post(); ?>

					<!-- ブログ詳細・タイトル部 -->
					<header class="work-header">
						<p class="work-header__date"><?php the_time('Y.m.d'); ?></p>
						<h1 class="work-title"><?php the_title(); ?></h1>
						<div class="work-mainpic"><img src="<?php echo $acf_mainpic[0]; ?>" alt=""></div>

					</header>
					
					<!-- ブログ詳細・コンテンツ部 -->
					<p class="blog-text"><?php the_content(); ?></p>
                </section>
              <?php endwhile; ?>
            <?php endif; ?>
<!-- 工事中 -->
        </div>
      </section>
    </div>
  </main>
</div>


<?php get_footer(); ?>