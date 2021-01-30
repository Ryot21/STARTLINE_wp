<?php get_header(); ?>


<div id="container">
  <main id="main">
    <div class="main-inner">
      <div class="l-container">
        <div class="blog-content">
		
<!-- 工事中 -->
        
			<?php if(have_posts()): while(have_posts()): the_post(); ?>
			<?php

					$acf_mainpic = get_field('メイン画像');
					$acf_mainpic = wp_get_attachment_image_src($acf_mainpic, 'full');
					
					$acf_img01 = get_field('写真フィールド1');
					$acf_img_url01 = wp_get_attachment_image_src($acf_img01, 'full');

					$acf_img02 = get_field('写真フィールド2');
					$acf_img_url02 = wp_get_attachment_image_src($acf_img02, 'full');

					$acf_img03 = get_field('写真フィールド3');
					$acf_img_url03 = wp_get_attachment_image_src($acf_img03, 'full');

			?>
					<!-- タイトル・制作日・メイン画像 -->
						<header class="work-header">
							<h1 class="work-title"><?php the_title(); ?></h1>
							<p class="work-header__date">制作日：<?php the_time('Y.m.d'); ?></p>
							<div class="work-mainpic">
								<img src="<?php echo $acf_mainpic[0]; ?>" class="work-img" alt="">
							</div>
						</header>
						

						<!-- 概要 -->
						<p class="work-subtitle"><span>DESCRIPTION</span></p>
						<p class="work-subtext"><?php echo get_field('概要'); ?></p>
						
						<!-- サイトTYPE -->
						<p class="work-subtitle"><span>サイトTYPE</span></p>
						<p class="work-subtext"><?php echo get_field('TYPE'); ?></p>

						<!-- URL -->
						<p class="work-subtitle"><span>URL</span></p>
						<p class="work-subtext"><a href="<?php echo get_field('URL'); ?>"><?php echo get_field('URL'); ?></a></p>

						<!-- 全体画像 -->
						<ul class="works-pic__list">
							<!-- 一枚目 -->
							<li><img src="<?php echo $acf_img_url01[0]; ?>" class="work-img" alt=""></li>

							<!-- 二枚目 -->
							<?php if($acf_img_url02): ?>
							<li><img src="<?php echo $acf_img_url02[0]; ?>" class="work-img" alt=""></li>
							<?php endif; ?>

							<!-- 三枚目 -->
							<?php if($acf_img_url03): ?>
							<li><img src="<?php echo $acf_img_url03[0]; ?>" class="work-img" alt=""></li>
							<?php endif; ?>

						</ul>
					
					<!-- ブログ詳細・コンテンツ部 -->
					<p class="blog-text"><?php the_content(); ?></p>
                </section>
              <?php endwhile; ?>
            <?php endif; ?>
<!-- 工事中 -->
        </div>
	  </div>
    </div>
  </main>
</div>


<?php get_footer(); ?>