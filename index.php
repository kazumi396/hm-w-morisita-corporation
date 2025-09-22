<?php get_header(); ?>

<main>

    <div class="js-scrollTarget">
        <div class="c-sub-kv">
            <div class="c-kv-inner l-container">
                <div class="c-title">
                    <span class="c-title-en">news</span>
                    <?php if ( is_home()) : ?>
                    <h1 class="c-title-ja">お知らせ</h1>
                    <?php else : ?>
                    <p class="c-title-ja">お知らせ</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <!-- parts-breadcrumb -->
        <?php get_template_part('template/parts', 'breadcrumb'); ?>
        <!-- end  parts-breadcrumb-->
    </div>

    <div class="news l-container u-ptb">

        <!-- section-sidebar -->
        <?php get_template_part('template/section', 'sidebar'); ?>
        <!-- end section-sidebar -->

        <!-- archive -->
        <?php if (have_posts()): ?>

        <?php if ( $archive_title = get_the_archive_title() ) : ?>
        <?php if ( is_year() || is_month() || is_day() || is_paged() ) : ?>
        <h1 class="u-visually-hidden"><?php echo esc_html( $archive_title ); ?></h1>
        <?php endif; ?>
        <?php endif; ?>

        <div class="news-list">
            <div class="c-table-wrap c-table-wrap--news">
                <div class="c-table">
                    <?php while (have_posts()): the_post();
                        get_template_part('template/parts', 'archiveposts');
                    endwhile;
                    ?>
                </div>
            </div>
            <?php get_template_part( 'template/parts','pagination' ); ?>
        </div>


        <?php else: ?>
        <p>記事はありません</p>
        <?php endif; ?>
        <!-- end archive -->

    </div>

</main>

<!-- section-cta -->
<?php get_template_part('template/section', 'cta'); ?>
<!-- end section-cta -->

<?php get_footer(); ?>