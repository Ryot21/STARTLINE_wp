
<?php get_header(); ?>
  
  
  
  <!-- TOP イメージ -->
<div id="container">
  <div id="main-visual">
      <div class="SP">
        <img src="<?php echo get_template_directory_uri(); ?>/images/my_desktop.jpg" class="main-img" alt="スタートラインのTOP写真" />
      </div>
      <div class="PC">
        <img src="<?php echo get_template_directory_uri(); ?>/images/my_desktop.jpg" class="main-img" alt="スタートラインのTOP写真" />
      </div>
  </div>
  <!-- SNS -->
  <!-- <div id="sns" class="l-sns">
    <ul class="social">
      <li class="instagram icon"><a class="social-btn" href="#"><img src="/images/icon/instagram.svg" alt="インスタグラム"></a></li>
      <li class="facebook icon"><a class="social-btn" href="#"><img src="/images/icon/facebook.svg" alt="フェイスブック"></a></li>
      <li class="twitter icon"><a class="social-btn" href="#"><img src="/images/icon/twitter.svg" alt="ツイッター"></a></li>
    </ul>
  </div> -->

  <!-- ここからコンテンツ -->
  <main id="main">
    <div class="main-inner">
    <!-- Serviceエリア -->
      <section id="service" class="l-container">
          <h2 class="top-page-ttl main-font">SERVICE</h2>
          <!-- デザイン -->
          <section class="work-design l-out-shadow">
            <h3 class="work-design-ttl">
              <p class="lg-ttl">DESIGN</p>
              <p class="sm-ttl">デザイン</p>
            </h3>
            <div class="work-design-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icon/mouse@3x.png" alt="マウスロゴ" />
            </div>
            <div class="work-design-des">
              <p>クライアントとのヒアリングを基に、デザインを作成いたします。様々な人が訪れることを想定して、ユーザーに分かりやすいデザインを心がけています。
              </p>
            </div>
          </section>
          <!-- コーディング -->
          <section class="work-coding l-out-shadow">
            <h3 class="work-coding-ttl">
              <p class="lg-ttl">CODING</p>
              <p class="sm-ttl">コーディング</p>
            </h3>
            <div class="work-coding-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/images/icon/Enter@3x.png" class="main-img" alt="エンターキーロゴ" />
            </div> 
            <div class="work-coding-des">
              <p>デザインの意図や構造を理解してコーディングをすることで、ユーザーに負担の少ないサイト構築を行います。対応スキル：HTML,CSS,Javascript</p>
            </div>
          </section>
      </section>
  <!-- Workエリア -->
      <section id="work" class="l-container">
          <h2 class="top-page-ttl main-font">WORKS</h2>

          <ul>
            <?php
              $args = array(
              'post_type' => array('works'),
              'paged' => $paged,
              'posts_per_page' => '6'
              );
            ?>
            <?php query_posts( $args ); ?>
            <?php if(have_posts()):while(have_posts()):the_post(); ?>

            
                  <?php get_template_part('template-parts/main','works'); ?>

          
            <?php endwhile; ?>
            <?php else : // 記事がない場合 ?>

              <li>まだ投稿がありません。</li>

            <?php endif; wp_reset_postdata(); ?>

          </ul>

      </section>
      <div class="btn-container">
        <a href="/works/" class="btn-product">WORKS一覧 ></a>
      </div>
  <!-- Blogエリア -->
      <section id="blog" class="l-container">
        <h2 class="top-page-ttl main-font">BLOG</h2>


          <?php get_template_part('template-parts/main','slider'); ?>


      </section>
    </div>
  </main>
</div>
  <!-- ここまでコンテンツ -->


<?php get_footer(); ?>