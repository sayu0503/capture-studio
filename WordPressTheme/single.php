<?php get_header(); ?>
<main>
    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
        <div class="sub-mv__inner">
            <div class="sub-mv__image">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog_mv_sp.jpg" alt="ネモフィラ畑" decoding="async" width="375" height="460">
                </picture>
            </div>
            <div class="sub-mv__title">
                <div class="sub-mv__section-header">Blog</div>
            </div>
        </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb')?>

    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>

            <!-- 下層 Blog -->
            <section class="layout-blog page-blog">
                <div class="page-blog__inner inner">
                    <div class="page-blog__contents">
                        <div class="page-blog__wrapper">
                            <div class="single-blog">
                                <time datetime="<?php the_time('c'); ?>" class="single-blog__date"><?php the_time('Y.m.d'); ?></time>
                                <h1 class="single-blog__title"><?php the_title(); ?></h1>
                                <div class="single-blog__image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php echo get_the_post_thumbnail_url(null, 'full'); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                                    <?php else : ?>
                                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                                    <?php endif; ?>
                                </div>
                                <div class="single-blog__container">
                                    <?php the_content(); ?>
                                </div>

                                <!-- ページナビ -->
                                <div class="single-blog__pagenavi pagenavi">
                                <?php
                                    $prev = get_previous_post();
                                    if ( ! empty( $prev ) ) {
                                    $prev_url = esc_url( get_permalink( $prev->ID ) );
                                    }

                                    $next = get_next_post();
                                    if ( ! empty( $next ) ) {
                                    $next_url = esc_url( get_permalink( $next->ID ) );
                                    }
                                ?>
                                <div class="wp-pagenavi wp-pagenavi--gap">
                                <?php if ( ! empty( $prev ) ) : ?>
                                    <div class="previouspostslink">
                                        <a href="<?php echo $prev_url; ?>"></a>
                                    </div>
                                <?php endif; ?>
                                    <?php if ( ! empty( $next ) ) : ?>
                                        <div class="nextpostslink">
                                    <a href="<?php echo $next_url; ?>"></a>
                                    </div>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- サイドバー -->
                        <div class="page-blog__sidebar">
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </section>

        <?php endwhile; ?>
    <?php else : ?>
        <p>投稿が見つかりませんでした。</p>
    <?php endif; ?>
    <?php get_footer(); ?>