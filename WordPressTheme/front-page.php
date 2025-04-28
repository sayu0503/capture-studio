<?php get_header(); ?>


  <main>
    <!-- メインビュー -->
   <div class="mv" id="js-mv">
    <div class="mv__inner">
        <div class="swiper js-mv-swiper">
            <div class="swiper-wrapper">

                <?php
                // PCとSPの画像フィールドを取得
                $pc_images = get_field('fv_pc');
                $sp_images = get_field('fv_sp');

                // 画像が存在する場合のみ表示
                if ($pc_images && $sp_images) :
                    for ($i = 1; $i <= 4; $i++) :
                        $pc_image = $pc_images["fv_pc{$i}"];
                        $sp_image = $sp_images["fv_sp{$i}"];

                        // PCとSPの画像URLを取得
                        $pc_url = $pc_image ? wp_get_attachment_image_src($pc_image['ID'], 'full')[0] : '';
                        $sp_url = $sp_image ? wp_get_attachment_image_src($sp_image['ID'], 'full')[0] : '';
                        ?>

                        <div class="swiper-slide">
                            <picture>
                                <?php if ($pc_url): ?>
                                    <source srcset="<?= esc_url($pc_url); ?>" media="(min-width: 768px)" width="2880" height="1536">
                                <?php endif; ?>
                                <?php if ($sp_url): ?>
                                    <img src="<?= esc_url($sp_url); ?>" alt="<?= esc_attr($pc_image['alt'] ?: '画像'); ?>" decoding="async" width="750" height="1334">
                                <?php endif; ?>
                            </picture>
                        </div>

                    <?php
                    endfor;
                endif;
                ?>
            </div>

            <div class="mv__title-wrap">
                <p class="mv__title">capture</p>
                <p class="mv__subtitle">Moments that matter</p>
            </div>
        </div>
    </div>
</div>


    <!-- Campaign -->
    <section class="top-campaign campaign">
  <div class="campaign__inner inner">
    <div class="campaign__section-header">
      <div class="section-header">
        <p class="section-header__title">Campaign</p>
        <h2 class="section-header__subtitle">キャンペーン</h2>
      </div>
    </div>
    <div class="campaign__container">
      <div class="swiper js-campaign-swiper">
        <div class="swiper-wrapper">
          <?php
          $args = array(
            'post_type'      => 'campaign',
            'posts_per_page' => 4,
          );
          $campaign_query = new WP_Query($args);
          ?>

          <?php if ($campaign_query->have_posts()): ?>
            <?php while ($campaign_query->have_posts()): $campaign_query->the_post(); ?>
              <div class="swiper-slide campaign__slide">
                <div class="campaign-card">
                  <figure class="campaign-card__img">
                    <?php if (has_post_thumbnail()): ?>
                      <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>" decoding="async" loading="lazy">
                    <?php else: ?>
                      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="No Image" decoding="async" loading="lazy">
                    <?php endif; ?>
                  </figure>
                  <div class="campaign-card__body">
                    <div class="campaign-card__category">
                      <?php
                      // カスタムタクソノミー 'campaign_category' からカテゴリー名を取得
                      $terms = get_the_terms(get_the_ID(), 'campaign_category');
                      $term_name = !empty($terms) && !is_wp_error($terms) ? $terms[0]->name : '未分類';
                      ?>
                      <div class="campaign-card__label"><?php echo esc_html($term_name); ?></div>
                    </div>
                    <div class="campaign-card__title"><?php the_title(); ?></div>
                    <div class="campaign-card__wrap">
                      <div class="campaign-card__text">全部コミコミ(お一人様)</div>
                      <?php
                            // グループフィールド「campaign_price」を取得
                            $campaign_price = get_field('campaign_price');

                            if ($campaign_price) {
                                // 通常価格と割引価格を取得
                                $first_price = $campaign_price['first_price'] ?? '';    // 通常価格
                                $second_price = $campaign_price['second_price'] ?? '';  // 割引価格

                                // 割引価格がある場合
                                if (!empty($second_price)) {
                                    ?>
                                    <div class="campaign-card__price">
                                        <?php if (!empty($first_price)) { ?>
                                            <!-- 通常価格と割引価格を表示 -->
                                            <p class="campaign-card__first-price"><?php echo esc_html($first_price); ?></p>
                                            <p class="campaign-card__second-price campaign-card__second-price--layout"><?php echo esc_html($second_price); ?></p>
                                        <?php } else { ?>
                                            <!-- 割引価格のみ表示 -->
                                            <p class="campaign-card__second-price"><?php echo esc_html($second_price); ?></p>
                                        <?php } ?>
                                    </div>
                                    <?php
                                }
                            }
                            ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
          <?php else: ?>
            <p>現在キャンペーンはありません。</p>
          <?php endif; ?>
        </div>
      </div>
      <div class="campaign__button-group">
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
    <div class="campaign__btn">
      <a href="<?php echo esc_url(get_post_type_archive_link('campaign')); ?>" class="button slide"><span>View more</span></a>
    </div>
  </div>
</section>


    <!--About us-->
    <section class="top-about about">
      <div class="about__inner inner">
        <div class="about__section-header">
          <div class="section-header">
            <p class="section-header__title">About&nbsp;us</p>
            <h2 class="section-header__subtitle">私たちについて</h2>
          </div>
        </div>
        <div class="about__body">
          <div class="about__image-container">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_2.jpg" media="(min-width: 768px)" width="1760" height="1162">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_2-sp.jpg" alt="写真を取り合う生徒たち" decoding="async" loading="lazy">
            </picture>
          </div>
          <div class="about__image-container-sub">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_1.jpg" media="(min-width: 768px)" width="1212" height="800">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/about_img_1-sp.jpg" alt="カメラで画像を確認する女性" decoding="async" loading="lazy" width="194" height="388">
            </picture>
          </div>
          <div class="about__text-group">
            <p class="about__title">We Snap<br>Moments</p>
            <div class="about__group">
              <p class="about__text">カメラを初めて手にする方も、もっと上手になりたい方も。私たちの写真教室は、一人ひとりのペースや目的に合わせて、丁寧にサポートします。<br>
              「こんな風に撮ってみたかった！」<br>
               そんな気持ちを一緒にカタチにしていきましょう。
            </p>
              <div class="about__btn">
                <a href="<?php echo esc_url(home_url("/about-us")) ?>" class="button slide"><span>View&nbsp;more</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--information-->
    <section class="top-information information">
      <div class="information__inner inner">
        <div class="information__section-header">
          <div class="section-header">
            <p class="section-header__title">Information</p>
            <h2 class="section-header__subtitle">コース紹介</h2>
          </div>
        </div>
        <div class="information__contents">
          <div class="information__image colorbox">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_img_1.jpg" alt="黄色い熱帯魚が泳いでいる様子" decoding="async" loading="lazy"
              width="1080" height="712">
          </div>
          <div class="information__body">
            <div class="information__title">カメラ体験</div>
            <p class="information__text">はじめての方でも安心して参加できるカメラ体験講座。<br>
                構図のコツや自然光の活かし方など、撮る楽しさをわかりやすく学べます。<br>
                シャッターを切るたび、いつもの景色が新しく見えてくる──<br>
                そんな感動を、一緒に体験してみませんか？
             </p>
            <div class="information__btn">
              <a href="<?php echo esc_url(home_url("/information")) ?>" class="button slide"><span>View&nbsp;more</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--Blog-->
    <section class="top-blog blog">
  <div class="blog__inner inner">
    <div class="blog__section-header">
      <div class="section-header">
        <p class="section-header__title section-header__title--white">Blog</p>
        <h2 class="section-header__subtitle section-header__subtitle--white">ブログ</h2>
      </div>
    </div>
    <div class="blog__contents">
      <div class="blog-cards">
        <?php
        $args = array(
          'posts_per_page' => 3,
        );
        $blog_query = new WP_Query($args);
        ?>

        <?php if ($blog_query->have_posts()): ?>
          <?php while ($blog_query->have_posts()): $blog_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
              <figure class="blog-card__img">
                <?php if (has_post_thumbnail()): ?>
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>" decoding="async" loading="lazy">
                <?php else: ?>
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="No Image" decoding="async" loading="lazy">
                <?php endif; ?>
              </figure>
              <div class="blog-card__body">
                <time datetime="<?php the_time('c'); ?>" class="blog-card__date"><?php the_time('Y.m.d'); ?></time>
                <h3 class="blog-card__title"><?php the_title(); ?></h3>
                <p class="blog-card__text"><?php echo wp_trim_words(get_the_excerpt(), 90, '...'); ?></p>
              </div>
            </a>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>現在、ブログ記事はありません。</p>
        <?php endif; ?>
      </div>
    </div>
    <div class="blog__btn">
      <a href="<?php echo esc_url(get_permalink(get_option('page_for_posts'))); ?>" class="button slide"><span>View&nbsp;more</span></a>
    </div>
  </div>
</section>


    <!--Voice-->
    <section class="top-voice voice">
    <div class="voice__image_1">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/speakswallow.png" alt="話す燕のアイコン" decoding="async" loading="lazy" width="272" height="218">
    </div>
    <div class="voice__image_2">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/swingswallow.png" alt="飛び回る燕のアイコン" decoding="async" loading="lazy" width="187" height="197">
    </div>
  <div class="voice__inner inner">
    <div class="voice__section-header">
      <div class="section-header">
        <p class="section-header__title">Voice</p>
        <h2 class="section-header__subtitle">お客様の声</h2>
      </div>
    </div>

    <div class="voice__contents">
      <div class="voice-cards">
        <?php
        $args = array(
          'post_type'      => 'voice',
          'posts_per_page' => 2,
        );
        $voice_query = new WP_Query($args);
        ?>

        <?php if ($voice_query->have_posts()): ?>
          <?php while ($voice_query->have_posts()): $voice_query->the_post(); ?>
            <div class="voice-cards__item voice-card">
              <div class="voice-card__body">
                <div class="voice-card__container">
                  <div class="voice-card__wrap">
                    <div class="voice-card__group">
                      <div class="voice-card__info"><?php the_field('age'); ?> (<?php the_field('gender'); ?>)</div>
                      <div class="voice-card__category">
                        <?php
                        $terms = get_the_terms(get_the_ID(), 'voice_category');
                        $term_name = !empty($terms) && !is_wp_error($terms) ? $terms[0]->name : '未分類';
                        ?>
                        <div class="voice-card__label"><?php echo esc_html($term_name); ?></div>
                      </div>
                    </div>
                    <h3 class="voice-card__title"><?php the_title(); ?></h3>
                  </div>
                  <div class="voice-card__image">
                    <div class="voice-card__img colorbox">
                      <?php if (has_post_thumbnail()): ?>
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" alt="<?php the_title_attribute(); ?>" decoding="async" loading="lazy">
                      <?php else: ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="No Image" decoding="async" loading="lazy">
                      <?php endif; ?>
                    </div>
                  </div>
                </div>
                <p class="voice-card__text"><?php echo wp_trim_words(get_the_content(), 200, '...'); ?></p>
              </div>
            </div>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php else: ?>
          <p>現在、お客様の声はありません。</p>
        <?php endif; ?>
      </div>
    </div>
    <div class="voice__btn">
      <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="button slide"><span>View more</span></a>
    </div>
  </div>
</section>


    <!--Price-->
    <section class="top-price price">
      <div class="price__inner inner">
        <div class="price__section-header">
          <div class="section-header">
            <p class="section-header__title">Price</p>
            <h2 class="section-header__subtitle">料金一覧</h2>
          </div>
        </div>

        <div class="price__contents">
        <div class="price__content">

        <?php
        // 下層ページIDを指定
        $sub_page_id = 11;

        // セクション情報
        $sections = [
            'license'       => ['group' => 'license_group', 'title' => 'ライセンス講習', 'course' => 'license_course', 'price' => 'license_price'],
            'experience'    => ['group' => 'experience_group', 'title' => '体験ダイビング', 'course' => 'experience_course', 'price' => 'experience_price'],
            'fundiving'     => ['group' => 'fundiving_group', 'title' => 'ファンダイビング', 'course' => 'fundiving_course', 'price' => 'fundiving_price'],
            'specialdiving' => ['group' => 'specialdiving_group', 'title' => 'スペシャルダイビング', 'course' => 'specialdiving_course', 'price' => 'specialdiving_price']
        ];

        $section_count = 0;

        foreach ($sections as $key => $section) :
            $data = SCF::get($section['group'], $sub_page_id);

            if (!empty($data)) :
                $has_data = false;

                // 表示するデータがあるか判定
                foreach ($data as $item) {
                    if (!empty($item[$section['course']]) && !empty($item[$section['price']])) {
                        $has_data = true;
                        break;
                    }
                }

                if ($has_data) :
                    $section_count++;  // セクションカウント
        ?>
                    <dl class="price__list <?= $section_count > 1 ? 'price__list--secondary' : ''; ?>">
                        <dt class="price__term">
                            <?= esc_html(SCF::get($section['group'] . '_title', $sub_page_id)) ?: $section['title']; ?>
                        </dt>

                        <?php foreach ($data as $item) : ?>
                            <?php if (!empty($item[$section['course']]) && !empty($item[$section['price']])) : ?>
                                <dd class="price__wrap">
                                    <p class="price__description">
                                        <?= nl2br(esc_html($item[$section['course']])); ?>
                                    </p>
                                    <p class="price__description">
                                        ¥<?= number_format((int)$item[$section['price']]); ?>
                                    </p>
                                </dd>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </dl>
        <?php
                endif;
            endif;
        endforeach;
        ?>

        </div>
    <div class="price__image colorbox">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_img_1.jpg" media="(min-width: 768px)">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_img_2.jpg" alt="花の写真" decoding="async" loading="lazy"
                width="1492" height="984">
            </picture>
          </div>
        </div>
          </div>
        </div>
        <div class="price__btn">
          <a href="<?php echo esc_url(home_url("/price")) ?>" class="button slide"><span>View&nbsp;more</span></a>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>