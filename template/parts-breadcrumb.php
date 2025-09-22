<?php if ( function_exists( 'bcn_display' ) ) : ?>
<nav aria-label="パンくずリスト">
    <ol class="c-breadcrumb l-container">
        <?php bcn_display(); ?>
    </ol>
</nav>
<?php endif; ?>