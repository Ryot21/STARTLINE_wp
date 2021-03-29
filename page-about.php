<?php
/*
Template Name: about template
*/
?>

<?php get_header(); ?>

<!-- ここからコンテンツ -->
<div id="container">
  <main id="main">
    <div class="main-inner">
      <section class="l-container">
        <h2 class="single-ttl main-font">About</h2>

        <p class="single-ttl-text">2013年3月大学卒業。<br>7年間印刷会社にて勤務。<br>2020年2月テックキャンプで学習開始。<br>2020年9月から2021年3月まで東京都内のweb制作会社に勤務後、<br>2021年4月より株式会社webitchに勤務</p>
        <div class="about-box">

          <img src="<?php echo get_template_directory_uri(); ?>/images/about/IMG_1578_350.jpg" class="about-box_img" alt="前田龍汰" />
          <div class="about-box_content">
            <dl class="dl-table">
              <dt>名前</dt>
              <dd>前田龍汰</dd>
              <dt>生年月日</dt>
              <dd>1991年2月 (30歳)</dd>
              <dt>所在地 / 出身地</dt>
              <dd>埼玉県狭山市</dd>
              <dt>趣味</dt>
              <dd>テニス / NBA観賞</dd>
              <dt>事業内容</dt>
              <dd>HTML・CSS・wordpress / WEB制作</dd>
              <dt>お問い合わせ</dt>
              <dd>お問い合わせフォームからご連絡下さいますようよろしくお願いします。</dd>
            </dl>
          </div>
        </div>
      </section>
    </div>
    <!-- Profile -->
  </main>
</div>

<!-- ここまでコンテンツ -->


<?php get_footer(); ?>