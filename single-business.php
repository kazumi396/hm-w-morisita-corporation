<?php get_header(); ?>

<main>

    <div class="c-single-kv-wrapper js-scrollTarget">
        <div class="c-single-kv">
            <picture class="c-single-kv-image">
                <?php if ( has_post_thumbnail()) : ?>
                <?php the_post_thumbnail(); ?>
                <?php else: ?>
                <img src='https://placehold.jp/800x600.png' width='800' height='600' alt='画像がありません' decoding='async' />
                <?php endif; ?>
            </picture>
            <div class="c-single-kv-inner l-container">
                <div class="c-single-kv-text">
                    <div class="c-title-head">
                        <div class="c-title c-title--single">
                            <span class="c-title-en c-title-en--single">business</span>
                            <p class="c-title-ja c-title-ja--light">事業紹介</p>
                        </div>
                    </div>

                    <h1 class="c-single-kv-title"><?php echo esc_html( get_the_title() );?></h1>
                </div>
            </div>
        </div>

        <!-- parts-breadcrumb -->
        <?php get_template_part('template/parts', 'breadcrumb'); ?>
        <!-- end  parts-breadcrumb-->
    </div>

    <?php
    // 現在表示している投稿のスラッグ取得
    $slug = get_post_field( 'post_name', get_the_ID() );

    if ( $slug === 'design' ) {
        get_template_part( 'template/page', 'business-design' );
    } elseif ( $slug === 'custom' ) {
        get_template_part( 'template/page', 'business-custom' );
    } elseif ( $slug === 'quality' ) {
        get_template_part( 'template/page', 'business-quality' );
    } else {
        the_content();
    }
    ?>

</main>

<!-- section-cta -->
<?php get_template_part('template/section', 'cta'); ?>
<!-- end section-cta -->

<?php get_footer(); ?>