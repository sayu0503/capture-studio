<!-- Contact -->
<?php if (!is_page(array('contact', 'thanks')) && !is_404()) : ?>
  <section class="<?php echo is_front_page() ? 'top-contact contact' : 'layout-contact contact'; ?>">
      <div class="contact__inner inner">
        <div class="contact__contents">
          <div class="contact__info">
            <div class="contact__info-inner">
              <div class="contact__info-title">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-blue.jpg" alt="capture-studio" decoding="async" loading="lazy"
                  width="400" height="60">
              </div>
              <div class="contact__info-container">
                <div class="contact__info-text-group">
                  <p class="contact__info-text">秋田県秋田市1-1</p>
                  <p class="contact__info-text">TEL:0120-000-0000</p>
                  <p class="contact__info-text">営業時間:8:30-19:00</p>
                  <p class="contact__info-text">定休日:毎週火曜日</p>
                </div>
                <div class="contact__info-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3068.82719284839!2d140.09794875063886!3d39.721066124592824!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5f8fc2c5045d4ce9%3A0xb209b42e5c765ec!2z44CSMDEwLTA5NTEg56eL55Sw55yM56eL55Sw5biC5bGx546L77yR5LiB55uu!5e0!3m2!1sja!2sjp!4v1745327062760!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.png" alt="CaptureStudio" decoding="async" loading="lazy">
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
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/about-us")) ?>">私たちについて</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/information")) ?>">コース紹介</a>
                      </li>
                    </ul>
                  </div>
                  <div class="footer-nav__group">
                  <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/blog")) ?>">ブログ</a>
                      </li>
                    </ul>
                  <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                        <a href="<?php echo esc_url(home_url("/voice")) ?>">お客様の声</a>
                      </li>
                    </ul>
                    <ul class="footer-nav__wrapper">
                      <li class="footer-nav__title">
                      <a href="<?php echo esc_url(home_url("/price")) ?>">料金一覧</a>
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
                  </div>
                  <div class="footer-nav__group">
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
      <small>Copyright © 2025 Capture Studio. All rights reserved.</small>
    </div>
  </footer>
  <a href="#top" class="page-top-button js-page-top" aria-label="ページトップに移動する"></a>
  <?php wp_footer(); ?>
</body>

</html>