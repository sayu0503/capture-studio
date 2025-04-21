<!-- Contact -->
<?php if (!is_page(array('contact', 'thanks')) && !is_404()) : ?>
  <section class="<?php echo is_front_page() ? 'top-contact contact' : 'layout-contact contact'; ?>">
      <div class="contact__inner inner">
        <div class="contact__contents">
          <div class="contact__info">
            <div class="contact__info-inner">
              <div class="contact__info-title">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-green.svg" alt="CodeUps" decoding="async" loading="lazy"
                  width="400" height="150">
              </div>
              <div class="contact__info-container">
                <div class="contact__info-text-group">
                  <p class="contact__info-text">沖縄県那覇市1-1</p>
                  <p class="contact__info-text">TEL:0120-000-0000</p>
                  <p class="contact__info-text">営業時間:8:30-19:00</p>
                  <p class="contact__info-text">定休日:毎週火曜日</p>
                </div>
                <div class="contact__info-map">
                  <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3579.1927241401213!2d127.69486729999998!3d26.22292675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34e5696278d6553b%3A0xcb44277c653ed00b!2z44CSOTAwLTAwMDYg5rKW57iE55yM6YKj6KaH5biC44GK44KC44KN44G-44Gh77yR5LiB55uu77yR!5e0!3m2!1sja!2sjp!4v1718518289231!5m2!1sja!2sjp"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
              </div>
            </div>
          </div>
          <div class="contact__column">
            <div class="contact__column-section-header">
              <p class="contact__column-section-header-title">Contact</p>
              <h2 class="contact__column-section-header-subtitle">お問い合わせ</h2>
            </div>
            <div class="contact__column-text">ご予約・お問い合わせはコチラ</div>
            <div class="contact__column-btn">
              <a href="<?php echo esc_url(home_url("/contact")) ?>" class="button slide"><span>Contact us</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>
  </main>
  <!--フッター-->
  <footer class="<?php
    if (is_404()) {
        echo 'page-404-footer footer';
    } elseif (is_page('contact')) {
        echo 'contact-footer footer';
    } elseif (is_page('thanks')) {
        echo 'thanks-footer footer';
    } else {
        echo 'top-footer footer';
    }
?>">

    <div class="fooer__inner inner">
      <div class="footer__wrapper">
        <div class="footer__container">
          <a href="<?php echo esc_url(home_url("/")) ?>" class="footer__logo-link">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-logo.svg" alt="CodeUps" decoding="async" loading="lazy">
          </a>
          <div class="footer__icon-list">
            <a href="https://www.facebook.com/?locale=ja_JP" class="footer__icon-item" target="_blank">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.svg" alt="facebookのロゴ" decoding="async" loading="lazy">
            </a>
            <a href="https://www.instagram.com/" class="footer__icon-item" target="_blank">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.svg" alt="instagramのロゴ" decoding="async" loading="lazy">
            </a>
          </div>
        </div>
        <nav class="footer__nav">
          <div class="footer-nav">
            <div class="footer-nav__contents">
              <div class="footer-nav__container">
                <div class="footer-nav__flex">
                  <div class="footer-nav__group">
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/campaign")) ?>">キャンペーン</a>
                      </li>
                      <li class="footer-nav__body">
                        <ul class="footer-nav__lists">
                          <li class="footer-nav__list">
                          <a href="<?php echo esc_url(home_url('/campaign_category/lisence')); ?>">ライセンス講習</a>
                          </li>
                          <li class="footer-nav__list">
                          <a href="<?php echo esc_url(home_url('/campaign_category/fun-diving')); ?>">ファンダイビング</a>
                          </li>
                          <li class="footer-nav__list">
                          <a href="<?php echo esc_url(home_url('/campaign_category/trial-diving')); ?>">体験ダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/about-us")) ?>">私たちについて</a>
                      </li>
                    </ul>
                  </div>
                  <div class="footer-nav__group">
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/information")) ?>">ダイビング情報</a>
                      </li>
                      <li class="footer-nav__body">
                        <ul class="footer-nav__lists">
                          <li class="footer-nav__list">
                          <a href="<?php echo esc_url( home_url( '/' ) ); ?>information#tab__content01">ライセンス講習</a>
                          </li>
                          <li class="footer-nav__list">
                          <a href="<?php echo esc_url( home_url( '/' ) ); ?>information#tab__content02">体験ダイビング</a>
                          </li>
                          <li class="footer-nav__list">
                          <a href="<?php echo esc_url( home_url( '/' ) ); ?>information#tab__content03">ファンダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
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
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/voice")) ?>">お客様の声</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                      <a href="<?php echo esc_url(home_url("/price")) ?>">料金一覧</a>
                      </li>
                      <li class="footer-nav__body">
                        <ul class="footer-nav__lists">
                          <li class="footer-nav__list">
                          <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#page-price__group01">ライセンス講習</a>
                          </li>
                          <li class="footer-nav__list">
                          <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#page-price__group02">体験ダイビング</a>
                          </li>
                          <li class="footer-nav__list">
                          <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#page-price__group03">ファンダイビング</a>
                          </li>
                          <li class="footer-nav__list">
                          <a href="<?php echo esc_url( home_url( '/' ) ); ?>price#page-price__group04">スペシャルダイビング</a>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </div>
                  <div class="footer-nav__group">
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/faq")) ?>">よくある質問</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/privacypolicy")) ?>">プライバシー<br class="u-mobile">ポリシー</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/terms-of-service")) ?>">利用規約</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/sitemap")) ?>">サイトマップ</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
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
    <div class="footer__copyright">
      <small>Copyright © 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
    </div>
  </footer>
  <a href="#top" class="page-top-button js-page-top" aria-label="ページトップに移動する"></a>
  <?php wp_footer(); ?>
</body>

</html>