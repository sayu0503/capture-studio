
    <aside class="sidebar">
                    <div class="sidebar__items">
                        <div class="sidebar__item">
                            <h2 class="sidebar__title">人気記事</h2>
                            <div class="sidebar__article">
                            <?php
        if (is_single()) {
            setPostViews(get_the_ID());
        }

        $args = array(
            'posts_per_page' => 3,
            'orderby'        => 'meta_value_num',
            'meta_key'       => 'post_views_count',
        );

        $popular_query = new WP_Query($args);

        if ($popular_query->have_posts()) :
            while ($popular_query->have_posts()) : $popular_query->the_post();
        ?>
                <a href="<?php the_permalink(); ?>" class="sidebar__article-item">
                    <div class="sidebar__article-image">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('medium', array('loading' => 'lazy')); ?>
                        <?php else : ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.jpg" alt="No Image">
                        <?php endif; ?>
                    </div>
                    <div class="sidebar__article-textbox">
                        <time class="sidebar__article-data" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                            <?php echo get_the_date('Y.m/d'); ?>
                        </time>
                        <h3 class="sidebar__article-text"><?php the_title(); ?></h3>
                    </div>
                </a>
        <?php
            endwhile;
        endif;
        wp_reset_postdata();
        ?>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h2 class="sidebar__title">口コミ</h2>
                            <div class="sidebar__review">
                            <?php
                            $review_query = new WP_Query(array(
                                'post_type'      => 'voice',
                                'posts_per_page' => 1,
                                'orderby'        => 'date',
                                'order'          => 'DESC',
                            ));

                            if ($review_query->have_posts()) :
                                while ($review_query->have_posts()) : $review_query->the_post();
                            ?>
                                                    <div class="sidebar__review-image">
                                                    <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', array('loading' => 'lazy')); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.jpg" alt="No Image">
                                        <?php endif; ?>
                                                    </div>
                                                    <div class="sidebar__review-textbox">
                                                        <div class="sidebar__review-age"><?php the_field('age'); ?> (<?php the_field('gender'); ?>)</div>
                                                        <h3 class="sidebar__review-text"><?php the_title(); ?></h3>
                                                    </div>
                                                    <div class="sidebar__btn">
                                                        <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="button slide"><span>View more</span></a>
                                                    </div>
                                                    <?php
                                endwhile;
                            else :
                            ?>
                                <p>現在、口コミはありません。</p>
                            <?php
                            endif;
                            wp_reset_postdata();
                            ?>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <h2 class="sidebar__title">キャンペーン</h2>
                            <div class="sidebar__campaign-contents">
                            <div class="sidebar__campaign-cards">
                        <?php
                        $campaign_query = new WP_Query(array(
                            'post_type'      => 'campaign',
                            'posts_per_page' => 2,
                        ));

                        if ($campaign_query->have_posts()) :
                            while ($campaign_query->have_posts()) : $campaign_query->the_post();
                        ?>
                    <div class="sidebar__campaign-cards-item">
                        <div class="sidebar__campaign-card">
                                            <figure class="sidebar__campaign-card__img">
                                            <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('medium', array('loading' => 'lazy')); ?>
                                <?php else : ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/no-image.jpg" alt="No Image">
                                <?php endif; ?>
                                            </figure>
                                            <div class="sidebar__campaign-card__body">
                                                <div class="sidebar__campaign-card__title"><?php the_title(); ?></div>
                                                <div class="sidebar__campaign-card__wrap">
                                                    <div class="sidebar__campaign-card__text">全部コミコミ(お一人様)</div>
                                                    <div class="sidebar__campaign-card__price">
                                                        <p class="sidebar__campaign-card__first-price"><?php the_field('first_price'); ?></p>
                                                        <p class="sidebar__campaign-card__second-price"><?php the_field('second_price'); ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                endwhile;
                            else :
                            ?>
                                <p>現在、キャンペーン情報はありません。</p>
                            <?php
                            endif;
                            wp_reset_postdata();
                            ?>
                                </div>
                            </div>
                            <div class="sidebar__btn">
                                <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="button slide"><span>View more</span></a>
                            </div>
                        </div>
                        <div class="sidebar__item">
                            <div class="sidebar__title">アーカイブ</div>
                            <div class="sidebar__archive">
                                <div class="sidebar__archive-group">
                                <?php
                                        $archives = array();

                                        $posts = get_posts(array(
                                            'posts_per_page' => -1,
                                            'orderby'        => 'date',
                                            'order'          => 'DESC'
                                        ));


                                        foreach ($posts as $post) {
                                            setup_postdata($post);
                                            $year  = get_the_date('Y');
                                            $month = get_the_date('n');


                                            if (!isset($archives[$year])) {
                                                $archives[$year] = array();
                                            }


                                            if (!in_array($month, $archives[$year])) {
                                                $archives[$year][] = $month;
                                            }
                                        }
                                        wp_reset_postdata();
                                        ?>

                                        <div class="sidebar__archive">
                                        <?php $first = true;?>
                                            <?php foreach ($archives as $year => $months) : ?>
                                                <h3 class="sidebar__archive-calendar js-accordion-title <?php echo $first ? 'is-open' : ''; ?>">
                                                    <?php echo esc_html($year); ?>
                                                </h3>
                                                <ul class="sidebar__archive-months" <?php echo $first ? 'style="display: block;"' : ''; ?>>
                                                    <?php foreach ($months as $month) : ?>
                                                        <li class="sidebar__archive-month">
                                                            <a href="<?php echo esc_url(get_month_link($year, $month)); ?>" class="sidebar__archive-link">
                                                                <?php echo esc_html($month) . '月'; ?>
                                                            </a>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <?php $first = false;?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </aside>
