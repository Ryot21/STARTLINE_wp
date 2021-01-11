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
        <h2 class="single-ttl main-font">BLOG</h2>
        <?php get_template_part('template-parts/breadcrumb'); ?>
        <div class="blog-content">
          <!-- 工事中 -->  
          <!-- 投稿されているカテゴリー表示 -->
          <!-- <ul class="blog-lists">
            <?php
            $categories = get_categories();
            foreach( $categories as $category ){
              echo '<li class="blog-list"><a href="' . get_category_link( $category->term_id ) . '">' . $category->name . '</a> </li> ';
            }
            ?>
          </ul> -->

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