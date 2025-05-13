<?php get_header(); ?>
<main>
    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
      <div class="sub-mv__inner">
        <div class="sub-mv__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/voice_mv_sp.jpg" alt="オレンジ色の手帳の上に乗ったカメラ" decoding="async" width="375"
              height="460">
          </picture>
        </div>
        <div class="sub-mv__title">
          <h1 class="sub-mv__section-header">Voice</h1>
        </div>
      </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb')?>

    <!-- 下層ボイス -->
    <section class="layout-voice page-voice">
      <div class="page-voice__inner inner">
        <div class="page-voice__category category">
          <div class="category__items">
           
          <?php
    // 「ALL」タブ（カスタム投稿タイプのアーカイブページ）
    $all_class = is_post_type_archive('voice') ? 'is-active' : '';
    ?>
    <a href="<?php echo esc_url(get_post_type_archive_link('voice')); ?>" class="category__item <?php echo esc_attr($all_class); ?>">
        <p class="category__item-text">ALL</p>
    </a>

    <?php
    // タクソノミー "campaign_category" のターム一覧を取得
    $terms = get_terms([
        'taxonomy'   => 'voice_category', // タクソノミーのスラッグ
        'hide_empty' => true, // 投稿がないタームは非表示
        'orderby'    => 'name', // 名前順で並び替え
        'order'      => 'ASC', // 昇順
    ]);

    // タームごとのタブリンクを生成
    if (!empty($terms) && !is_wp_error($terms)) :
        foreach ($terms as $term) :
            // タームのアーカイブページURLを取得
            $term_link = get_term_link($term);

            // 現在のタームページなら "is-active" クラスを追加
            $term_class = (is_tax('voice_category', $term->term_id)) ? 'is-active' : '';
            ?>
            <a href="<?php echo esc_url($term_link); ?>" class="category__item <?php echo esc_attr($term_class); ?>">
                <p class="category__item-text"><?php echo esc_html($term->name); ?></p>
            </a>
        <?php endforeach;
    endif; ?>
          </div>
        </div>
        <div class="page-voice__contents">
          <div class="voice-cards voice-cards--layout">
          <?php if ( have_posts() ) : ?>
           <?php while ( have_posts() ) : the_post(); ?>
           <div class="page-voice-cards__item voice-card">
              <div class="voice-card__body">
                <div class="voice-card__container">
                  <div class="voice-card__wrap">
                    <div class="voice-card__group">
                      <div class="voice-card__info"><?php the_field('age'); ?> (<?php the_field('gender'); ?>)</div>
                      <div class="voice-card__category">
                      <?php
                            // カスタムタクソノミー "genre" のタームを取得
                            $terms = get_the_terms(get_the_ID(), 'voice_category'); // スラッグを正しく設定

                            // タクソノミーが設定されていれば、最初のターム名を取得
                            $term_name = !empty($terms) && !is_wp_error($terms) ? $terms[0]->name : '未分類';
                            ?>
                        <div class="voice-card__label"><?php echo esc_html($term_name); ?></div>
                      </div>
                    </div>
                    <h3 class="voice-card__title"><?php the_title(); ?></h3>
                  </div>
                  <div class="voice-card__image">
                    <div class="voice-card__img colorbox">
                    <?php if ( has_post_thumbnail() ) : ?>
                            <img src="<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                        <?php else : ?>
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                        <?php endif; ?>
                    </div>
                  </div>
                </div>
                <p class="voice-card__text"><?php echo wp_trim_words(get_the_content(), 200, '...'); ?></p>
              </div>
            </div>
                <?php endwhile; ?>
            <?php else : ?>
                <p>投稿が見つかりませんでした。</p>
            <?php endif; ?>
          </div>
        </div>

        <!-- ページナビ -->
        <div class="page-voice__pagenavi pagenavi">
        <?php wp_pagenavi(); ?>
        </div>
      </div>
    </section>


<?php get_footer(); ?>