<?php
/*
Template Name: thanks template
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