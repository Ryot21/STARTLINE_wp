<!-- BLOG　①全体の一覧ページ -->

<?php
/*
Template Name: blog template
*/
?>

<?php get_header(); ?>

<!-- ここからコンテンツ -->
<div id="container">
  <div id="main">
    <div class="main-inner">
      <section class="l-container">
        <h2 class="archive-ttl main-font">BLOG</h2>
        <p class="single-sub-ttl sub-font">こちらにはお知らせとブログを投稿しています。</p>
        <div class="blog-content">

          <!-- 投稿されているBLOGの全てを表示 -->
          <ul class="cat-lists">
            <li class="cat-list"><a href="/blog/">全て</a></li>
            <!-- 実際に投稿されているカテゴリーを表示する -->
            <?php
            $categories = get_categories();
            foreach( $categories as $category ){
              echo '<li class="cat-list"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> </li> ';
            }
            ?>
          </ul>

          <?php
            $args = array(
            'post_type' => 'post',
            'paged' => $paged,
            'posts_per_page' => '12'
            );
          ?>

          <?php query_posts( $args ); ?>

          <!-- ブログ投稿があった場合のループ文 -->
          <?php if (have_posts()) : ?>
          <ul class="blog-block">

              <?php while (have_posts()) : the_post();?>
                    <?php
                      $author = get_the_author_meta('id');
                      $author_img = get_avatar($author);
                      $imgtag= '/<img.*?src=(["\'])(.+?)\1.*?>/i';
                      if(preg_match($imgtag, $author_img, $imgurl)){
                        $authorimg = $imgurl[2];
                      }
                    ?>
                <?php get_template_part( 'template-parts/list','blog'); ?>
              <?php endwhile; ?>
          </ul>
          <?php else: ?>

          <h1 class="page__title">COMING SOON</h1>

          <?php endif; ?>
          <?php wp_reset_query(); // ループをリセット ?>




          <!-- 工事中 -->
        </div>
      </section>
    </div>
  </div>
</div>

<!-- ここまでコンテンツ -->


<?php get_footer(); ?>