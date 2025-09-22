<?php get_header(); ?>

<main>
    <!-- kv-page -->
    <?php get_template_part('template/kv', 'page'); ?>
    <!-- end kv-page -->

    <?php
    if ( is_page('company') ) {
        get_template_part('template/page', 'company'); // 会社概要
    } elseif ( is_page('message') ) {
        get_template_part('template/page', 'message'); // メッセージ
    } elseif ( is_page('privacy') ) {
        get_template_part('template/page', 'privacy'); // プライバシーポリシー
    } elseif ( is_page('contact') ) {
        get_template_part('template/page', 'contact'); // お問い合わせ
    } else {
        // それ以外のページの処理
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    }
    ?>

</main>

<!-- section-cta -->
<?php if ( ! is_page( 'contact' )) :; ?>
<?php get_template_part('template/section', 'cta'); ?>
<? endif; ?>
<!-- end section-cta -->

<?php get_footer(); ?>