<article class="c-table-row--news">
    <a class="c-news-item-link" href="<?php the_permalink(); ?>">
        <time datetime="<?php the_time( 'Y-m-d' ); ?>"
            class="c-table-header c-table-header--news"><?php the_time( get_option( 'date_format' ) ); ?></time>
        <h2 class="c-table-data"><?php echo esc_html(get_the_title()); ?></h2>
    </a>
</article>