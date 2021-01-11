<?php
/*
Template Name: contact template
*/
?>

<?php get_header(); ?>

<!-- ここからコンテンツ -->

<div id="container">
  <div id="main">
    <div class="main-inner">
      <article class="l-content">
        <h2 class="single-ttl main-font">CONTACT</h2>

        <div id="contact" class="l-contact">
          <div class="form__block">
            <div class="form__block_text">
              <p>制作の依頼・ご相談などお気軽にお問い合わせくださいませ。</p>
              <p>下記フォームよりわかる範囲でご記入ください。必須の項目は必ずご記入お願いします。</p>
            </div>
            <!-- 下記PHP文が無いと表示されない！ -->
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>


          </div>
        </div>
      </article>
    </div>
  </div>
</div>
<!-- ここまでコンテンツ -->


<?php get_footer(); ?>