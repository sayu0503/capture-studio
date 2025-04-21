<?php get_header(); ?>
<main>
      <!-- 下層メインビュー -->
      <div class="sub-mv" id="js-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact_mv_sp.jpg" alt="波打際" decoding="async" width="375" height="460">
            </picture>
          </div>
          <div class="sub-mv__title">
            <h1 class="sub-mv__section-header">Contact</h1>
          </div>
        </div>
      </div>

      <!-- パンくず -->
      <?php get_template_part('parts/breadcrumb')?>
      <!-- 下層サンクスページ -->
      <div class="layout-thanks page-thanks">
        <div class="page-thanks__inner inner">
          <div class="page-thanks__text-block">
            <p class="page-thanks__text-item page-thanks__text-item01">お問い合わせ内容を送信完了しました。
            </p>
            <p class="page-thanks__text-item page-thanks__text-item02">このたびは、お問い合わせ頂き<br class="u-mobile">誠にありがとうございます。<br>
              お送り頂きました内容を確認の上、<br class="u-mobile">3営業日以内に折り返しご連絡させて頂きます。<br>
              また、ご記入頂いたメールアドレスへ、<br class="u-mobile">自動返信の確認メールをお送りしております。
            </p>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>