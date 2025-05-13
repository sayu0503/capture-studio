<?php get_header(); ?>
<main>
      <!-- 下層メインビュー -->
      <div class="sub-mv" id="js-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/other_mv.jpg" media="(min-width: 768px)" width="1440" height="548">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/other_mv_sp.jpg" alt="夕日と海辺のカメラ" decoding="async" width="375"
                height="460">
            </picture>
          </div>
          <div class="sub-mv__title">
            <h1 class="sub-mv__section-header">Terms of Service</h1>
          </div>
        </div>
      </div>

      <!-- パンくず -->
      <?php get_template_part('parts/breadcrumb')?>


      <!-- 下層利用規約-->
      <div class="layout-terms page-terms">
        <div class="page-terms__inner inner">
          <div class="page-terms__content">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 class="page-terms__heading"><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>

<?php get_footer(); ?>