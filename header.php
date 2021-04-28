<?php
  if(!is_home()):
    if(get_post_type() === 'privateworks')://Basic認証を設定するページを指定
      $userArray = array(
        "Ryota"/* ユーザー名 */ => "20210423"/* pass */
      );
      basic_auth($userArray);
    endif;
  endif;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="keywords" content="ポートフォリオ, Ryota Maeda, 前田龍汰, web制作">
  <!-- ディスクリプション -->
  <?php
      if(is_home()) {
        $description = get_bloginfo('description');
      } else if(is_archive('works')) {//制作実績
        $description = 'STARTLINEの制作実績一覧ページです。';
      } else if(is_singular('works')) {
        $postsummary = get_field('acf_works_description');
        $postsummary = str_replace("\n", "", $postsummary);
        $postsummary = mb_substr($postsummary, 0, 50). "…";
        $description = $postsummary . ' | STARTLINE';
      } else if(is_single()) {
        $postsummary = strip_tags($post->post_content);
        $textsearch = array('\n','<br>','<br />');
        $postsummary = str_replace($textsearch, '', $postsummary);
        $postsummary = mb_substr($postsummary, 0, 50). '…';
        $description = $postsummary . ' | STARTLINE';
      } else if(is_category()) {//ブログ
        $description = 'STARTLINEのブログ一覧ページです。私たちの日常を公開します。';
      } else if(is_page('contact')) {//お問い合わせ
        $description = 'STARTLINEのお問い合わせページです。お問い合わせの方はフォームよりご連絡ください。';
      }  else if(is_page('about')) {//About meについて
        $description = 'STARTLINEのAboutページです。前田龍汰のポートフォリオを紹介しています。';
      }
  ?>
  <meta name="description" content="<?php echo $description; ?>">
  <!-- // ディスクリプション -->

  <!-- タイトル -->
  <?php if( is_home()): ?>
      <title><?php bloginfo('name'); ?></title>
  <?php else: ?>
      <title><?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <?php endif; ?>
  <!-- // タイトル -->
  <!-- ogp -->
  <?php
      if(is_home()) {
        $ogtype = 'website';
      } else {
        $ogtype = 'article';
      }
  ?>
  <meta property="og:type" content="<?php echo $ogtype; ?>">
  <meta property="og:url" content="<?php echo("http://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]); ?>">
  <meta property="og:description" content="<?php echo $description; ?>">
  <meta property="og:image" content="<?php bloginfo('template_url'); ?>/images/common/ogimage.png">
  <meta property="og:title" content="<?php wp_title(' | ', true, 'right'); ?><?php bloginfo('name'); ?>">
  <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
  <!-- /ogp -->

  <!-- css -->
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/aos.css">




  <!-- js/先に使いたい機能を上に持ってくる、defer=読み込み順を確定させる -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/swiper-bundle.min.css">
  <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
  <!-- 外部読み込み -->
  <?php 
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
    wp_head();
  ?>

</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  
  <div class="l-wrapper">
    <header id="header" class="l-header">
      <div class="header-top">
        <!-- サイトアイコン　右側 -->
        <h1 class="header-logo">
          <a class="header-logo-icon" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon/startline_favicon_iphone@3x.png" alt="STARTLINE" />
            <span class="header-logo-icon-name">STARTLINE</span>
          </a>
        </h1>
        <!-- PC・TB　メニュー -->
        <div class="header-nav">
          <nav class="globalnavi">
            <!-- ul -->
            <?php $args = array(
              'menu' => 'global-navigation', //管理画面で作成したメニュー名
              'menu_class' => 'gnavi-list', //メニューを構成する<ul>タグのクラス名
              'container' => 'false', //<ul>タグを囲っている<div>タグについて
              );
              wp_nav_menu($args);
            ?>
            <?php if (is_user_logged_in()) { ?>
              <ul class="gnavi-list">
                <li class="l-nav l-nav_private-works">
                  <a href="<?php echo esc_url( home_url( '/' ) ); ?>privateworks/">
                    PRIVATE WORKS<br>
                    <p class="header_nav_bottom">非公開実績</p>
                  </a>
                </li>
              </ul>
            <?php } ?>
          </nav>
        </div>
        <!--ハンバーガーメニュー -->
        <div id="js-menuToggle" class="gnav-btn">
          <div class="gnav-btn__container">
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/hamburger/h_menu1@3x.png" alt="ハンバーガーメニュー" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/hamburger/h_menu2@3x.png" alt="ハンバーガーメニュー" />
            <img src="<?php echo get_template_directory_uri(); ?>/images/common/hamburger/h_menu3@3x.png" alt="ハンバーガーメニュー" />
            <p>MENU</p>
          </div>
        </div>
        <!-- ハンバーガーメニュー / モバイルメニュー -->
        <nav class="mobile-menu">
          <h2 class="mobile-menu__ttl">menu</h2>
          <ul class="mobile-menu__main">
              <li class="mobile-menu__item">
                  <a class="mobile-menu__link" href="/about/">
                      <span class="en-title">ABOUT</span>
                      <span class="ja-title">私について</span>
                  </a>
              </li>
              <li class="mobile-menu__item">
                  <a class="mobile-menu__link" href="/works/">
                      <span class="en-title">WORKS</span>
                      <span class="ja-title">制作物</span>
                  </a>
              </li>
              <!-- ログインしていないと確認できないようにする。 -->
              <?php if (is_user_logged_in()) { ?>

              <li class="mobile-menu__item">
                <a class="mobile-menu__link" href="<?php echo esc_url( home_url( '/' ) ); ?>privateworks/">
                      <span class="en-title">PRIVATE WORKS</span>
                      <span class="ja-title">非公開実績</span>
                </a>
              </li>

              <?php } ?>

              <li class="mobile-menu__item">
                  <a class="mobile-menu__link" href="/blog/">
                      <span class="en-title">BLOG</span>
                      <span class="ja-title">ブログ</span>
                  </a>
              </li>
              <li class="mobile-menu__item">
                <a class="mobile-menu__link" href="/contact/">
                    <span class="en-title">CONTACT</span>
                    <span class="ja-title">お問い合わせ</span>
                </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>
  </div>