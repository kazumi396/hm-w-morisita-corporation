<?php get_header(); ?>

<main>
    <div class="js-scrollTarget">
        <div class="c-sub-kv">
            <div class="c-kv-inner l-container">
                <div class="c-title c-title--error">
                    <h1 class="c-title-ja c-title-ja--404">お探しのページが見つかりません。</h1>
                </div>
            </div>
        </div>

        <!-- parts-breadcrumb -->
        <?php get_template_part('template/parts', 'breadcrumb'); ?>
        <!-- end  parts-breadcrumb-->
    </div>

    <div class="l-container-s u-ptb">
        <div class="error">
            <p class="error-text">
                <span>申し訳ございません。お探しのページは見つかりませんでした。</span>
                <span>入力したアドレスが間違っているか、ページが移動・削除された可能性があります。</span>
            </p>
            <a href="<?php echo esc_url( home_url() ); ?>" class="error-button">トップページへ</a>
        </div>
    </div>
</main>

<?php get_footer(); ?>