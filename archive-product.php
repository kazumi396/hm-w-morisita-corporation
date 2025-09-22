<?php get_header(); ?>

<main>
    <div class="js-scrollTarget">
        <div class="c-sub-kv">
            <div class="c-kv-inner l-container">
                <div class="c-title">
                    <span class="c-title-en">product</span>
                    <h1 class="c-title-ja">製品紹介</h1>
                </div>
            </div>
        </div>

        <!-- parts-breadcrumb -->
        <?php get_template_part('template/parts', 'breadcrumb'); ?>
        <!-- end  parts-breadcrumb-->
    </div>

    <div class="l-container">
        <div class="u-ptb">
            <ul class="product-list">
                <?php
                    $wp_query = new WP_Query();
                    $my_posts = array(
                        'post_type'      => 'product',
                        'posts_per_page' => -1,
                        'orderby'        => 'date',   // 日付順で並び替え
                        'order'          => 'ASC',
                    );

                    $wp_query->query($my_posts);
                    if ($wp_query->have_posts()) :
                    ?>

                <?php while ($wp_query->have_posts()) : $wp_query->the_post();
                        $obj = get_post_type_object($post->post_type); //投稿タイプ情報を取得
                ?>
                <li class="c-product-item">
                    <a href="<?php echo esc_url( get_the_permalink() );?>">
                        <div class="c-product-item-wrapper">
                            <?php echo get_the_post_thumbnail( get_the_ID(), 'full', array(
                                'width'    => 1000,
                                'height'   => 683,
                                'alt'      => '',
                                'decoding' => 'async'
                            ) ); ?>
                        </div>
                        <div class="c-product-item-info">
                            <span
                                class="c-product-item-tag"><?php echo get_the_terms(get_the_ID(), 'industry')[0]->name;?></span>
                            <h2 class="c-product-item-name"><?php echo esc_html( get_the_title() );?></h2>
                        </div>
                    </a>
                </li>

                <?php endwhile;
                wp_reset_postdata(); ?>
                <?php else : ?>
                <p>投稿がありません。</p>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</main>

<!-- section-cta -->
<?php get_template_part('template/section', 'cta'); ?>
<!-- end section-cta -->

<?php get_footer(); ?>