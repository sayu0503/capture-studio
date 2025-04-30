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
            <div class="page-information__tab tab js-fadeUp">
                <div class="tab__list">
                    <button class="tab__button tab__button--camera js-tab-button is-active">カメラ体験</button>
                    <button class="tab__button tab__button--camera js-tab-button">ステップアップ</button>
                    <button class="tab__button tab__button--camera js-tab-button">ポートレート</button>
                </div>
                <div class="tab__contents js-fadeUp">
                    <div class="tab__content js-tab-content is-active" id="tab__content01">
                        <div class="tab__text-block">
                            <h2 class="tab__title">カメラ体験</h2>
                            <p class="tab__text">
                            カメラ初心者向けの体験コースです。電源の入れ方や構え方、ピントの合わせ方など、カメラの基本操作から丁寧にレクチャーします。オートモードや撮影シーンに合わせた設定の使い分けを学びながら、実際に撮影も行います。写真を撮る楽しさを実感できる、はじめの一歩にぴったりの内容です。
                            </p>
                        </div>
                        <div class="tab__image">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_media_1.jpg" alt="新緑の中カメラを持って立つ女性" decoding="async" loading="lazy"
                                width="984" height="626">
                        </div>
                    </div>
                    <div class="tab__content js-tab-content" id="tab__content03">
                        <div class="tab__text-block">
                            <h2 class="tab__title">ステップアップ</h2>
                            <p class="tab__text">
                            カメラの基本を習得した方を対象に、ワンランク上の撮影テクニックを学ぶ講座です。露出・絞り・シャッタースピード・ISO感度の関係を理解し、自分の意図を写真に反映できるようになることが目標です。実践を交えながら、構図や光の使い方もしっかり身につけていきます。</p>
                        </div>
                        <div class="tab__image">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_media_2.jpg" alt="菜の花畑で写真を構える女性" decoding="async" loading="lazy"
                                width="984" height="626">
                        </div>
                    </div>
                    <div class="tab__content js-tab-content" id="tab__content02">
                        <div class="tab__text-block">
                            <h2 class="tab__title">ポートレート</h2>
                            <p class="tab__text">
                            ポートレート撮影の基礎を学べる入門講座です。光の読み方やモデルとの距離感、背景の活かし方など、人物を魅力的に撮るための基本テクニックを実践を通して学びます。カメラ初心者でも安心して参加でき、自然な表情の引き出し方もレクチャーします。</p>
                        </div>
                        <div class="tab__image">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information_media_3.jpg" alt="太陽に照らせれた女性の横顔" decoding="async" loading="lazy"
                                width="984" height="626">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>