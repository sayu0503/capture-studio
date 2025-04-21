<?php get_header(); ?>
<main>
      <!-- 下層メインビュー -->
      <div class="sub-mv" id="js-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/other_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/other_mv_sp.jpg" alt="イソギンチャクと魚の群" decoding="async" width="375" height="460">
            </picture>
          </div>
          <div class="sub-mv__title">
            <h1 class="sub-mv__section-header">Site MAP</h1>
          </div>
        </div>
      </div>

      <!-- パンくず -->
      <?php get_template_part('parts/breadcrumb')?>

      <!-- 下層サイトマップ -->
      <div class="layout-sitemap page-sitemap">
        <div class="page-sitemap__inner inner">
          <div class="page-sitemap__nav">
            <nav class="footer__nav">
              <div class="footer-nav">
                <div class="footer-nav__contents footer-nav__contents--layout">
                  <div class="footer-nav__container">
                    <div class="footer-nav__flex">
                      <div class="footer-nav__group">
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="<?php echo esc_url(home_url("/campaign")) ?>">キャンペーン</a>
                          </li>
                          <li class="footer-nav__body">
                            <ul class="footer-nav__lists">
                              <li class="footer-nav__list footer-nav__list--color">
                              <a href="<?php echo esc_url(home_url('/campaign_category/lisence')); ?>">ライセンス講習</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                              <a href="<?php echo esc_url(home_url('/campaign_category/fun-diving')); ?>">ファンダイビング</a>
                              <li class="footer-nav__list footer-nav__list--color">
                              <a href="<?php echo esc_url(home_url('/campaign_category/trial-diving')); ?>">体験ダイビング</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="<?php echo esc_url(home_url("/about-us")) ?>">私たちについて</a>
                          </li>
                        </ul>
                      </div>
                      <div class="footer-nav__group">
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="<?php echo esc_url(home_url("/information")) ?>">ダイビング情報</a>
                          </li>
                          <li class="footer-nav__body">
                            <ul class="footer-nav__lists">
                              <li class="footer-nav__list footer-nav__list--color">
                              <a href="<?php echo esc_url( home_url( '/' ) ); ?>information#tab__content01">ライセンス講習</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                              <a href="<?php echo esc_url( home_url( '/' ) ); ?>information#tab__content02">体験ダイビング</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                              <a href="<?php echo esc_url( home_url( '/' ) ); ?>information#tab__content03">ファンダイビング</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="<?php echo esc_url(home_url("/blog")) ?>">ブログ</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="footer-nav__container">
                    <div class="footer-nav__flex">
                      <div class="footer-nav__group">
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="<?php echo esc_url(home_url("/voice")) ?>">お客様の声</a>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="<?php echo esc_url(home_url("/price")) ?>">料金一覧</a>
                          </li>
                          <li class="footer-nav__body">
                            <ul class="footer-nav__lists">
                              <li class="footer-nav__list footer-nav__list--color">
                              <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#page-price__group01">ライセンス講習</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                              <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#page-price__group02">体験ダイビング</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                              <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#page-price__group03">ファンダイビング</a>
                              </li>
                              <li class="footer-nav__list footer-nav__list--color">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#page-price__group04">スペシャルダイビング</a>
                                </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                      <div class="footer-nav__group">
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="<?php echo esc_url(home_url("/faq")) ?>">よくある質問</a>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="<?php echo esc_url(home_url("/privacypolicy")) ?>">プライバシー<br class="u-mobile">ポリシー</a>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="<?php echo esc_url(home_url("/terms-of-service")) ?>">利用規約</a>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="<?php echo esc_url(home_url("/sitemap")) ?>">サイトマップ</a>
                          </li>
                        </ul>
                        <ul class="footer-nav__wrapper">
                          <li class="footer-nav__title footer-nav__title--color">
                            <a href="<?php echo esc_url(home_url("/contact")) ?>">お問い合わせ</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>

<?php get_footer(); ?>