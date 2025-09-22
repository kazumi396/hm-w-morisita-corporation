<?php get_header(); ?>

<main>
    <div class="js-scrollTarget">
        <div class="c-sub-kv">
            <div class="c-kv-inner l-container">
                <div class="c-title">
                    <span class="c-title-en">access</span>
                    <h1 class="c-title-ja">アクセス</h1>
                </div>
            </div>
        </div>

        <!-- parts-breadcrumb -->
        <?php get_template_part('template/parts', 'breadcrumb'); ?>
        <!-- end  parts-breadcrumb-->
    </div>

    <div class="l-container-s">
        <div class="u-ptb">
            <div class="access-list">
                <?php
                $wp_query = new WP_Query();
                $my_posts = array(
                    'post_type'      => 'access',
                    'posts_per_page' => -1,
                    'orderby'        => 'date',   // 日付順で並び替え
                    'order'          => 'ASC',
                );

                $wp_query->query($my_posts);
                if ($wp_query->have_posts()) : while ($wp_query->have_posts()) : $wp_query->the_post();
                        $obj = get_post_type_object($post->post_type); //投稿タイプ情報を取得
                ?>
                <section class="access-item">
                    <div class="access-item-info">
                        <div class="access-item-meta">
                            <h2 class="access-item-name"><?php echo esc_html( get_the_title() );?></h2>
                            <p class="access-item-address"><?php echo esc_html( get_field('address') ?: '住所未設定' ); ?>
                            </p>
                        </div>
                        <div>
                            <a href="<?php echo esc_url( get_field('button_url') ); ?>"
                                class="c-button access-item-link" target="_blank" rel="noopener noreferrer">google
                                map<span class="c-button-icon"></span></a>
                        </div>
                    </div>
                    <div class="access-map">
                        <?php
                            $iframe = get_field('map_iframe');
                            if ( $iframe ) {
                                echo $iframe; // functions.php の iframe 許可が効きます
                            }
                            ?> </div>
                </section>

                <?php endwhile;
                wp_reset_postdata(); ?>
                <?php else : ?>
                <p>投稿がありません。</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>

<!-- section-cta -->
<?php get_template_part('template/section', 'cta'); ?>
<!-- end section-cta -->

<?php get_footer(); ?>