<li class="blog-list__block">
    <div class="blog-list__pic">
      <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail('catthumb'); ?>
      <?php else: ?>
      <img src="<?php bloginfo('template_url'); ?>/images/common/no_image_yoko.jpg" alt="画像がありません">
      <?php endif; ?>
    </div>
    <div class="blog-list__txt">
      <p class="blog-list__date"><?php the_time('Y.m.d'); ?></p>
      <h2 class="blog-list__title js-mask-text"><?php the_title(); ?></h2>
      <div class="blog-list__desc PC">
			<?php
				if( has_excerpt() ){
					the_excerpt();
					echo '<a href="';
					the_permalink();
					echo '">【 続きを読む 】</a>';
				} else {
					the_excerpt();
				}
			?>
	  </div>
	  <div class="blog-list__desc SP">
	  		<?php
				if( has_excerpt() ){
					echo '<a href="';
					the_permalink();
					echo '">【 続きを読む 】</a>';
				}
			?>	
	  </div>
    </div>
</li>