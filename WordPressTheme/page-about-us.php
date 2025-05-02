
<?php get_header(); ?>
<!-- モーダルはセクションの外に！ -->
<div class="modal js-modal">

    <div class="modal__img"><button class="modal__close js-modal-close" aria-label="モーダルを閉じる">×</button>
        <img src="" alt="拡大写真" class="modal__img js-modal-img">
    </div>
</div>
<main>
    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_mv-sp.jpg" alt="黄色い熱帯魚が2匹泳いでいる様子" decoding="async" width="375"
              height="460">
          </picture>
        </div>
        <div class="sub-mv__title">
          <h1 class="sub-mv__section-header">About us</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb')?>

<!-- 下層About us -->
<div class="layout-about page-about js-fadeUp">
    <div class="page-about__inner inner">
        <div class="about__body about__body--offset">
            <div class="about__image-container about__image-container--layout">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_2.jpg" media="(min-width: 768px)" width="1760"
                        height="1162">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_2-sp.jpg" alt="黄色い二匹の魚が泳いでいる様子" decoding="async" loading="lazy"
                        width="562" height="372">
                </picture>
            </div>
            <div class="about__image-container-sub u-desktop">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_1-sp.jpg" media="(min-width: 768px)" width="1212"
                        height="800">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_1.jpg" alt="瓦屋根の上のシーサー" decoding="async" loading="lazy"
                        width="194" height="388">
                </picture>
            </div>
            <div class="about__text-group">
                <p class="about__title about__title--absolute">We Snap<br>Moments</p>
                <div class="about__group">
                    <p class="about__text about__text--layout">こカメラを初めて手にする方も、もっと上手になりたい方も。私たちの写真教室は、一人ひとりのペースや目的に合わせて、丁寧にサポートします。<br>
              「こんな風に撮ってみたかった！」<br>
               そんな気持ちを一緒にカタチにしていきましょう。
                    </p>
            </div>
        </div>
    </div>
</div>

<!-- Gallery -->
<?php
$gallery_images = SCF::get('gallery_images');

// 有効な画像があるかチェック
$valid_images = [];

if (is_array($gallery_images) && !empty($gallery_images)) {
    foreach ($gallery_images as $image_data) {
        $image_id = !empty($image_data['image']) ? (int)$image_data['image'] : 0;
        $alt_text = !empty($image_data['alt']) ? esc_attr($image_data['alt']) : '';

        // 画像IDが存在する場合のみ追加
        if ($image_id) {
            $image_url = wp_get_attachment_image_url($image_id, 'full');
            if ($image_url) {
                $valid_images[] = ['url' => $image_url, 'alt' => $alt_text];
            }
        }
    }
}

// 写真が1枚以上ある場合のみセクションを表示
if (!empty($valid_images)) : ?>
<section class="layout-gallery gallery">
    <div class="gallery__inner inner">
        <div class="section-header">
            <p class="section-header__title section-header__title--line-height">Gallery</p>
            <h2 class="section-header__subtitle section-header__subtitle--layout">受講後に撮影された写真をご紹介</h2>
        </div>

        <div class="gallery__contents">
            <?php foreach ($valid_images as $image) : ?>
                <div class="gallery__image js-modal-open js-fadeUp">
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo $image['alt']; ?>" decoding="async" loading="lazy">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>




<?php get_footer(); ?>