<?php get_header(); ?>
<main>

    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price_mv_sp.jpg" alt="海から顔を出すダイバー" decoding="async" width="375"
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

      <!-- ライセンス講習 -->
              <?php
        $license_data = SCF::get('license_group');

        if (!empty($license_data)) :
            $has_data = false;
            foreach ($license_data as $item) {
                if (!empty($item['license_course']) && !empty($item['license_price'])) {
                    $has_data = true;
                    break;
                }
            }
            if ($has_data) :
        ?>
        <div class="page-price__group" id="page-price__group01">
            <h2 class="page-price__title">
                <?= esc_html(SCF::get('license_title')) ?: 'ライセンス講習'; ?>
            </h2>
            <div class="page-price__items">
                <?php foreach ($license_data as $item) : ?>
                    <?php if (!empty($item['license_course']) && !empty($item['license_price'])) : ?>
                        <div class="page-price__item">
                            <span class="page-price__list">
                                <?= nl2br(esc_html($item['license_course'])); ?>
                            </span>
                            <span class="page-price__price">
                                ¥<?= number_format((int)$item['license_price']); ?>
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
      // 【体験ダイビング】のデータ取得
      $experience_data = SCF::get('experience_group');

      // 表示判定フラグ
      $has_experience = false;

      // コースと料金が両方揃っているデータが1件でもあるかチェック
      if (!empty($experience_data)) {
          foreach ($experience_data as $item) {
              if (!empty($item['experience_course']) && !empty($item['experience_price'])) {
                  $has_experience = true;
                  break;  // 1件でも見つかれば表示するためループを抜ける
              }
          }
      }

      // データが存在する場合のみ表示
      if ($has_experience) :
      ?>
      <!-- セクション2：体験ダイビング -->
      <div class="page-price__group" id="page-price__group02">
          <h2 class="page-price__title">
              <?= esc_html(SCF::get('experience_title')) ?: '体験ダイビング'; ?>
          </h2>
          <div class="page-price__items">
              <?php foreach ($experience_data as $item) : ?>
                  <?php if (!empty($item['experience_course']) && !empty($item['experience_price'])) : ?>
                      <div class="page-price__item">
                          <span class="page-price__list">
                              <?= nl2br(esc_html($item['experience_course'])); ?>
                          </span>
                          <span class="page-price__price">
                              ¥<?= number_format((int)$item['experience_price']); ?>
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
        $fundiving_data = SCF::get('fundiving_group'); 

        // 表示判定フラグ
        $has_fundiving = false; 

        // コースと料金が両方揃っているデータが1件でもあるかチェック
        if (!empty($fundiving_data)) {
            foreach ($fundiving_data as $item) {
                if (!empty($item['fundiving_course']) && !empty($item['fundiving_price'])) {
                    $has_fundiving = true;
                    break;  // 1件でも見つかれば表示するためループを抜ける
                }
            }
        }

        // データが存在する場合のみ表示
        if ($has_fundiving) :
        ?>
        <!-- セクション3：ファンダイビング -->
        <div class="page-price__group" id="page-price__group03">
            <h2 class="page-price__title">
                <?= esc_html(SCF::get('fundiving_title')) ?: 'ファンダイビング'; ?>
            </h2>
            <div class="page-price__items">
                <?php foreach ($fundiving_data as $item) : ?>
                    <?php if (!empty($item['fundiving_course']) && !empty($item['fundiving_price'])) : ?>
                        <div class="page-price__item">
                            <span class="page-price__list">
                                <?= nl2br(esc_html($item['fundiving_course'])); ?>
                            </span>
                            <span class="page-price__price">
                                ¥<?= number_format((int)$item['fundiving_price']); ?>
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
            // 【スペシャルダイビング】のデータ取得
            $specialdiving_data = SCF::get('specialdiving_group'); 

            // 表示判定フラグ
            $has_specialdiving = false; 

            // コースと料金が両方揃っているデータが1件でもあるかチェック
            if (!empty($specialdiving_data)) {
                foreach ($specialdiving_data as $item) {
                    if (!empty($item['specialdiving_course']) && !empty($item['specialdiving_price'])) {
                        $has_specialdiving = true;
                        break;  // 1件でも見つかれば表示するためループを抜ける
                    }
                }
            }

            // データが存在する場合のみ表示
            if ($has_specialdiving) :
            ?>
            <!-- セクション4：スペシャルダイビング -->
            <div class="page-price__group" id="page-price__group04">
                <h2 class="page-price__title">
                    <?= esc_html(SCF::get('specialdiving_title')) ?: 'スペシャルダイビング'; ?>
                </h2>
                <div class="page-price__items">
                    <?php foreach ($specialdiving_data as $item) : ?>
                        <?php if (!empty($item['specialdiving_course']) && !empty($item['specialdiving_price'])) : ?>
                            <div class="page-price__item">
                                <span class="page-price__list">
                                    <?= nl2br(esc_html($item['specialdiving_course'])); ?>
                                </span>
                                <span class="page-price__price">
                                    ¥<?= number_format((int)$item['specialdiving_price']); ?>
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