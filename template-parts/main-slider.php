<?php
            $args = array(
            'post_type' => 'post',
            'paged' => $paged,
            'posts_per_page' => '3'
            );
          ?>
          <?php query_posts( $args ); ?>
        
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post();?>
                    <?php
                      $author = get_the_author_meta('id');
                      $author_img = get_avatar($author);
                      $imgtag= '/<img.*?src=(["\'])(.+?)\1.*?>/i';
                      if(preg_match($imgtag, $author_img, $imgurl)){
                        $authorimg = $imgurl[2];
                      }
                    ?>

                        <div class="swiper-slide img-size">
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('catthumb'); ?>
                                <?php else: ?>
                                    <img src="<?php bloginfo('template_url'); ?>/images/common/no_image_yoko.jpg" alt="画像がありません">
                                <?php endif; ?>
                                <p class="sm-ttl"><?php the_time('Y.m.d'); ?></p>
                            </a>
                        </div>
                        
                    <?php endwhile; ?>
                    <?php endif; ?>

                    <?php wp_reset_query(); // ループをリセット ?>


            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

<!-- 
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide img-size">
                    <a href="/blog/#blog-4/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/2020/1126/20201126.jpg" alt="家族写真" />
                        <p class="sm-ttl">2020.11.25</p>
                    </a>
                </div>
                <div class="swiper-slide img-size">
                    <a href="/blog/#blog-3/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/2020/0726/20200726_kinegawaonsen14.jpg" alt="温泉旅行" />
                        <p class="sm-ttl">2020.7.25</p>
                    </a>
                </div>
                <div class="swiper-slide img-size">
                    <a href="/blog/#blog-2/">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/blog/2020/0717/20200717.jpg" alt="レオパ" />
                        <p class="sm-ttl">2020.7.19</p>
                    </a>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div> -->


