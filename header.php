<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="keywords" content="ポートフォリオ, Ryota Maeda, 前田龍汰, web制作">
  <meta content="<?php bloginfo('description'); ?>">
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

  <!-- js/先に使いたい機能を上に持ってくる、defer=読み込み順を確定させる -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/swiper-bundle.min.css">
  <script src="<?php echo get_template_directory_uri(); ?>/js/swiper-bundle.min.js"></script>
  <!-- 外部読み込み -->
  <?php 
    wp_enqueue_script('jquery');
    wp_enqueue_script('main-script', get_template_directory_uri().'/js/script.js');
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
            <img src="<?php echo get_template_directory_uri(); ?>/images/icon/Portfolio_1@3x.png" alt="STARTLINE" />
            <span class="header-logo-icon-name">STARTLINE</span>
          </a>
        </h1>
        <!-- PC・TB　メニュー -->
        <div class="header-nav">
          <nav class="globalnavi">
            <ul class="gnavi-list">

                <li class="l-nav l-nav_about">
                  <a href="/about/">
                    <p>About me</p>
                    <p class="header_nav_bottom">私について</p>
                  </a>
                </li>

                <li class="l-nav l-nav_work">
                  <a href="/works/">
                    <p>Work</p>
                    <p class="header_nav_bottom">制作物</p>
                  </a>
                </li>

                <li class="l-nav l-nav_blog">
                  <a href="/blog/">
                    <p>Blog</p>
                    <p class="header_nav_bottom">ブログ</p>
                  </a>
                </li>

                <li class="l-nav l-nav_contact">
                  <a href="/contact/">
                    <p>Contact</p>
                    <p class="header_nav_bottom">お問い合わせ</p>
                  </a>
                </li>

            </ul>
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