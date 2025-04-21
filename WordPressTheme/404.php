<?php get_header(); ?>
<main>
      <!-- 下層メインビュー -->
      <div class="sub-mv" id="js-mv">
        <div class="sub-mv__inner">
          <div class="sub-mv__image sub-mv__image--height">
          </div>
        </div>
      </div>
      <!-- パンくず -->
      <?php get_template_part('parts/breadcrumb')?>

      <!-- 下層404-->
      <div class="layout-404 page-404">
        <div class="page-404__inner inner">
          <div class="page-404__container">
            <h1 class="page-404__heading">404</h1>
            <p class="page-404__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
            <div class="page-404__button">
              <a href="<?php echo esc_url(home_url('/'))?>" class="button slide button--design"><span>Page TOP</span></a>
            </div>
          </div>
        </div>
      </div>
    </main>

<?php get_footer(); ?>