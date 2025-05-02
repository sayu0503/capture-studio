<?php get_header(); ?>
<main>

    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact_mv_sp.jpg" alt="緑の中カメラを持つ手" decoding="async" width="375" height="460">
          </picture>
        </div>
        <div class="sub-mv__title">
          <h1 class="sub-mv__section-header">Contact</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb')?>

    <!-- 下層Contact -->
    <div class="layout-page-contact page-contact">
      <div class="page-contact__inner inner">
        <div class="page-contact__content">
        <?php echo do_shortcode('[contact-form-7 id="1461ede" title="お問い合わせ"]'); ?>
        </div>
      </div>
    </div>
  </main>

<?php get_footer(); ?>