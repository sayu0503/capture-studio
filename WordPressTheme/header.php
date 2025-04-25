<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <meta name="robots" content="noindex" />
  <?php wp_head();?>
</head>

<body id="top" <?php body_class(); ?>>
  <header class="top-header header" id="js-header">
    <div class="header__inner">
    <?php
    // 三項演算子を使用して、タグを選択
    $tag = (is_front_page() || is_home()) ? 'h1' : 'div';
    ?>

    <<?= $tag; ?> class="header__title">
      <a href="<?= esc_url(home_url('/')); ?>" class="header__logo-link">
        <img src="<?= get_theme_file_uri(); ?>/assets/images/common/logo.png" decoding="async" alt="CodeUpsのロゴ" width="133" height="50">
      </a>
    </<?= $tag; ?>>
      <button type="button" class="header__drawer hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__pc-nav pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/campaign")) ?>" class="pc-nav__link">
              Campaign
              <p class="pc-nav__subtitle">キャンペーン</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="pc-nav__link">
              About us
              <p class="pc-nav__subtitle">私たちについて</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/information")) ?>" class="pc-nav__link">
              Information
              <p class="pc-nav__subtitle">コース紹介</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/blog")) ?>" class="pc-nav__link">
              Blog
              <p class="pc-nav__subtitle">ブログ</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/voice")) ?>" class="pc-nav__link">
              Voice
              <p class="pc-nav__subtitle">お客様の声</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/price")) ?>" class="pc-nav__link">
              Price
              <p class="pc-nav__subtitle">料金一覧</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/faq")) ?>" class="pc-nav__link">
              FAQ
              <p class="pc-nav__subtitle">よくある質問</p>
            </a>
          </li>
          <li class="pc-nav__item">
            <a href="<?php echo esc_url(home_url("/contact")) ?>" class="pc-nav__link">
              Contact
              <p class="pc-nav__subtitle">お問い合わせ</p>
            </a>
          </li>
        </ul>
      </nav>
      <nav class="header__sp-nav sp-nav js-sp-nav">
        <div class="sp-nav__inner">
          <div class="sp-nav__wrap">
            <div class="sp-nav__contents">
              <div class="sp-nav__container">
                <div class="sp-nav__flex">
                  <div class="sp-nav__group">
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/campaign")) ?>">キャンペーン</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/about-us")) ?>">私たちについて</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/information")) ?>">コース紹介</a>
                      </li>
                    </ul>
                  </div>
                  <div class="sp-nav__group">
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/blog")) ?>">ブログ</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/voice")) ?>">お客様の声</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/price")) ?>">料金一覧</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="sp-nav__container">
                <div class="sp-nav__flex">
                  <div class="sp-nav__group">
                  <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/faq")) ?>">よくある質問</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/privacypolicy")) ?>">プライバシー<br class="u-mobile">ポリシー</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/terms-of-service")) ?>">利用規約</a>
                      </li>
                    </ul>
                  </div>
                  <div class="sp-nav__group">
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/sitemap")) ?>">サイトマップ</a>
                      </li>
                    </ul>
                    <ul class="sp-nav__wrapper">
                      <li class="sp-nav__title">
                        <a href="<?php echo esc_url(home_url("/contact")) ?>">お問い合わせ</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
