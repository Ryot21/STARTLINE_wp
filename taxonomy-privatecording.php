<?php get_header(); ?>

<!-- ここからコンテンツ -->


	<div id="container">
		<main id="main">
			<div class="main-inner">
			<article class="l-container">
				<h2 class="archive-ttl main-font">PRIVATE WORKS</h2>
				<p class="single-sub-ttl sub-font">こちらには非公開制作実績をご紹介いたします。</p>
				<div class="work-box">


				<ul class="cat-lists">
					<!-- 投稿されているWORKSの全てを表示 -->
					<li class="cat-list"><a href="/privateworks/">全て</a></li>

					<!-- 実際に投稿されているカテゴリーを表示する -->
					<?php
						// ↓↓ get_terms()内にはtaxonomyを入れる
						$terms = get_terms('privatecording');
						// ↓↓　現在クエリされているオブジェクトの ID を取得します。
						$term_id = get_queried_object_id();

						foreach($terms as $term) {

							// 現在地ページにcssクラス付与
							if($term_id === $term->term_id) {
								$current = 'current';
							}else {
								$current = '';
							}
							echo '<li class="cat-list"><a href="'.get_term_link($term).'" class="'.$current.'">'.$term->name.'</a></li>';
						
						}
					?>

				</ul>
					<ul>
		
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




<?php get_footer(); ?>