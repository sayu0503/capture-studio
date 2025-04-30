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
                <h1 class="sub-mv__section-header">Blog</h1>
            </div>
        </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb')?>

    <!-- 下層 Blog -->
    <section class="layout-blog page-blog">
        <div class="page-blog__inner inner">
            <div class="page-blog__contents">
                <div class="page-blog__wrapper">
                    <div class="blog-cards blog-cards--layout">
                    <?php if ( have_posts() ) : ?>
                       <?php while ( have_posts() ) : the_post(); ?>
                       <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card js-fadeUp">
                            <figure class="blog-card__img">
                            <?php if ( has_post_thumbnail() ) : ?>
                                    <img src="<?php echo get_the_post_thumbnail_url( null, 'full' ); ?>" alt="<?php the_title_attribute(); ?>のアイキャッチ画像">
                                <?php else : ?>
                                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/noimage.jpg" alt="noimage">
                                <?php endif; ?>
                            </figure>
                            <div class="blog-card__body">
                                <time datetime="<?php the_time('c'); ?>" class="blog-card__date"><?php the_time('Y.m.d'); ?>
                                </time>
                                <h3 class="blog-card__title"><?php the_title(); ?></h3>
                                <?php echo wp_trim_words( get_the_excerpt(), 90, '...' ); ?>
                            </div>
                        </a>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p>投稿が見つかりませんでした。</p>
                    <?php endif; ?>
                    </div>
                    <!-- ページナビ -->
                    <div class="page-blog__pagenavi pagenavi">
                    <?php wp_pagenavi(); ?>
                    </div>
                </div>

                <!-- サイドバー -->
                 <div class="page-blog__sidebar">
                     <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>