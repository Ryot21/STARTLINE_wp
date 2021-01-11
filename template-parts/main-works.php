
            <!-- ▽ ループ開始 ▽ -->
            <li>
              <a href="<?php the_permalink(); ?>" target="_blank">
                <div class="portfolio ll-out-shadow">
                  <?php the_post_thumbnail('full'); ?>
                  <div class="portfolio-ttl">
                    <p class="top-text"><?php the_title(); ?></p>
                    <p class="bottom-text"><?php the_time(get_option('date_format')); ?></p>
                  </div>
                </div>
              </a>
            </li>
            <!-- △ ループ終了 △ -->
