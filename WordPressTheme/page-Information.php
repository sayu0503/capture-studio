<?php get_header(); ?>
<main>

    <!-- 下層メインビュー -->
    <div class="sub-mv" id="js-mv">
        <div class="sub-mv__inner">
            <div class="sub-mv__image">
                <picture>
                    <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_mv.jpg" media="(min-width: 768px)" width="1440"
                        height="548">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_mv_sp.jpg" alt="黄色い熱帯魚が2匹泳いでいる様子" decoding="async" width="375"
                        height="460">
                </picture>
            </div>
            <div class="sub-mv__title">
                <h1 class="sub-mv__section-header">Information</h1>
            </div>
        </div>
    </div>

    <!-- パンくず -->
    <?php get_template_part('parts/breadcrumb')?>

    <!-- 下層 Information -->
    <section class="layout-information page-information">
        <div class="page-information__inner inner">
            <div class="page-information__tab tab">
                <div class="tab__list">
                    <button class="tab__button tab__button--whale js-tab-button is-active">ライセンス<br class="u-mobile">講習</button>
                    <button class="tab__button tab__button--shark js-tab-button">ファン<br class="u-mobile">ダイビング</button>
                    <button class="tab__button tab__button--small-fish js-tab-button">体験<br class="u-mobile">ダイビング</button>
                </div>
                <div class="tab__contents">
                    <div class="tab__content js-tab-content is-active" id="tab__content01">
                        <div class="tab__text-block">
                            <h2 class="tab__title">ライセンス講習</h2>
                            <p class="tab__text">
                                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
                            </p>
                        </div>
                        <div class="tab__image">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_media_1.jpg" alt="ライセンス" decoding="async" loading="lazy"
                                width="984" height="626">
                        </div>
                    </div>
                    <div class="tab__content js-tab-content" id="tab__content03">
                        <div class="tab__text-block">
                            <h2 class="tab__title">ファンダイビング</h2>
                            <p class="tab__text">
                                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を
                                代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポ
                                イントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海
                                岸」等もご用意！</p>
                        </div>
                        <div class="tab__image">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_media_2.jpg" alt="ライセンス" decoding="async" loading="lazy"
                                width="984" height="626">
                        </div>
                    </div>
                    <div class="tab__content js-tab-content" id="tab__content02">
                        <div class="tab__text-block">
                            <h2 class="tab__title">体験ダイビング</h2>
                            <p class="tab__text">
                                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を
                                代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポ
                                イントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海
                                岸」等もご用意！</p>
                        </div>
                        <div class="tab__image">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_media_3.jpg" alt="体験ダイビング" decoding="async" loading="lazy"
                                width="984" height="626">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>