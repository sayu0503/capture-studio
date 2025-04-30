<?php get_header(); ?>
<main>

<!-- 下層メインビュー -->
<div class="sub-mv" id="js-mv">
  <div class="sub-mv__inner">
    <div class="sub-mv__image">
      <picture>
        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/faq_mv_sp.jpg" alt="ビーチ" decoding="async" width="375" height="460">
      </picture>
    </div>
    <div class="sub-mv__title">
      <h1 class="sub-mv__section-header">FAQ</h1>
    </div>
  </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb')?>

<!-- 下層FAQ -->
<div class="layout-faq page-faq">
  <div class="page-faq__inner inner">
    <div class="page-faq__content accordion__items">
      <?php
      $faq_list = SCF::get('faq_list');

      // FAQが存在する場合のみ処理
      if (!empty($faq_list)) :
        foreach ($faq_list as $faq) :
          $question = isset($faq['question']) ? esc_html($faq['question']) : '';
          $answer = isset($faq['answer']) ? nl2br(esc_html($faq['answer'])) : '';

          // 質問と答えが両方存在する場合のみ表示
          if ($question && $answer) :
      ?>
          <dl class="accordion__item js-fadeUp">
            <dt class="accordion__header"><?php echo $question; ?></dt>
            <dd class="accordion__content"><?php echo $answer; ?></dd>
          </dl>
      <?php
          endif;
        endforeach;
      endif;
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>