<?php
/*
Template Name: works template
*/
?>

<?php get_header(); ?>

<!-- ここからコンテンツ -->

<body class="work">
	<div id="container">
		<main id="main">
			<div class="main-inner">
			<article class="l-container">
				<h2 class="single-ttl main-font">Works</h2>
				<div class="work-box">
					<ul>
							<?php
									$args = array(
									'post_type' => array('works'),
									'paged' => $paged,
									'posts_per_page' => '12'
									);
								
							?>
							<?php query_posts( $args ); ?>
							<?php if(have_posts()):while(have_posts()):the_post(); ?>

							<?php
								$acf_mainpic = get_field('メイン画像');
								$acf_mainpic = wp_get_attachment_image_src($acf_mainpic, 'full');
								$acf_title = get_field('タイトル');

							?>
						<li class="work-list">
							<a href="<?php the_permalink(); ?>" target="_blank">
								<div class="portfolio_lineup ll-out-shadow">

									<img src="<?php echo $acf_mainpic[0]; ?>" alt="">
									<div class="portfolio_lineup-ttl">
										<p class="top-text"><?php the_field( 'タイトル' ); ?></p>
										<p class="bottom-text">制作日：<?php the_time(get_option('date_format')); ?></p>
									</div>
								
								</div>
							</a>
						</li>
						<?php endwhile; ?>
						<?php endif; ?>
						



					</ul>
				</div>
			</article>
			</div>
			<!-- Profile -->
		</main>
	</div>
<!-- ここまでコンテンツ -->

<?php wp_pagenavi();//必ずループリセットよりも上部に記述すること！ ?>
<?php wp_reset_query(); // ループをリセット ?>

</body>



<?php get_footer(); ?>