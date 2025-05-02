<?php get_header(); ?>
<main>

    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_mv_sp.jpg" alt="カメラや虫眼鏡が置かれている" decoding="async" width="375"
              height="460">
          </picture>
        </div>
        <div class="sub-mv__title">
          <h1 class="sub-mv__section-header">Price</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb')?>

    <!-- 下層Price -->
    <section class="layout-price page-price">
  <div class="page-price__inner inner">
    <div class="page-price__contents">

      <!-- カメラ体験 -->
              <?php
        $camera_data = SCF::get('camera_group');

        if (!empty($camera_data)) :
            $has_data = false;
            foreach ($camera_data as $item) {
                if (!empty($item['camera_course']) && !empty($item['camera_price'])) {
                    $has_data = true;
                    break;
                }
            }
            if ($has_data) :
        ?>
        <div class="page-price__group" id="page-price__group01">
            <h2 class="page-price__title">
                <?= esc_html(SCF::get('camera_title')) ?: 'カメラ体験'; ?>
            </h2>
            <div class="page-price__items">
                <?php foreach ($camera_data as $item) : ?>
                    <?php if (!empty($item['camera_course']) && !empty($item['camera_price'])) : ?>
                        <div class="page-price__item">
                            <span class="page-price__list">
                                <?= nl2br(esc_html($item['camera_course'])); ?>
                            </span>
                            <span class="page-price__price">
                                ¥<?= number_format((int)$item['camera_price']); ?>
                            </span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
            endif; // $has_dataチェック終了
        endif; // データ存在チェック終了
        ?>

      <?php
      // 【ステップアップ】のデータ取得
      $stepUp_data = SCF::get('stepUp_group');

      // 表示判定フラグ
      $has_stepUp = false;

      // コースと料金が両方揃っているデータが1件でもあるかチェック
      if (!empty($stepUp_data)) {
          foreach ($stepUp_data as $item) {
              if (!empty($item['stepUp_course']) && !empty($item['stepUp_price'])) {
                  $has_stepUp = true;
                  break;  // 1件でも見つかれば表示するためループを抜ける
              }
          }
      }

      // データが存在する場合のみ表示
      if ($has_stepUp) :
      ?>
      <!-- セクション2：ステップアップ -->
      <div class="page-price__group" id="page-price__group02">
          <h2 class="page-price__title">
              <?= esc_html(SCF::get('stepUp_title')) ?: 'ステップアップ'; ?>
          </h2>
          <div class="page-price__items">
              <?php foreach ($stepUp_data as $item) : ?>
                  <?php if (!empty($item['stepUp_course']) && !empty($item['stepUp_price'])) : ?>
                      <div class="page-price__item">
                          <span class="page-price__list">
                              <?= nl2br(esc_html($item['stepUp_course'])); ?>
                          </span>
                          <span class="page-price__price">
                              ¥<?= number_format((int)$item['stepUp_price']); ?>
                          </span>
                      </div>
                  <?php endif; ?>
              <?php endforeach; ?>
          </div>
      </div>
      <?php
      endif; // 表示終了
      ?>

        <?php
        // 【ファンダイビング】のデータ取得
        $portrait_data = SCF::get('portrait_group');

        // 表示判定フラグ
        $has_portrait = false;

        // コースと料金が両方揃っているデータが1件でもあるかチェック
        if (!empty($portrait_data)) {
            foreach ($portrait_data as $item) {
                if (!empty($item['portrait_course']) && !empty($item['portrait_price'])) {
                    $has_portrait = true;
                    break;  // 1件でも見つかれば表示するためループを抜ける
                }
            }
        }

        // データが存在する場合のみ表示
        if ($has_portrait) :
        ?>
        <!-- セクション3：ポートレート -->
        <div class="page-price__group" id="page-price__group03">
            <h2 class="page-price__title">
                <?= esc_html(SCF::get('portrait_title')) ?: 'ポートレート'; ?>
            </h2>
            <div class="page-price__items">
                <?php foreach ($portrait_data as $item) : ?>
                    <?php if (!empty($item['portrait_course']) && !empty($item['portrait_price'])) : ?>
                        <div class="page-price__item">
                            <span class="page-price__list">
                                <?= nl2br(esc_html($item['portrait_course'])); ?>
                            </span>
                            <span class="page-price__price">
                                ¥<?= number_format((int)$item['portrait_price']); ?>
                            </span>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
        <?php
        endif; // 表示終了
        ?>
    </div>
  </div>
</section>


<?php get_footer(); ?>