<?php get_header(); ?>

<main>
    <!-- kv -->
    <div class="c-single-kv-wrapper js-scrollTarget">
        <div class="c-single-kv">
            <div class="c-single-kv-image-wrapper">
                <picture class="c-single-kv-image">
                    <source media="(min-width:768px)"
                        srcset="<?php echo esc_url(get_template_directory_uri().'/img/single/pic-single.jpg' ); ?>" />
                    <img src="<?php echo esc_url(get_template_directory_uri().'/img/single/pic-single-sp.jpg' ); ?>"
                        width="968" height="647" alt="MORISHITAコーポレーションのロゴ" decoding="async" />
                </picture>
            </div>
            <div class="c-single-kv-inner l-container">
                <div class="c-single-kv-text">
                    <div class="c-title-head">
                        <div class="c-title c-title--single">
                            <span
                                class="c-title-en c-title-en--single"><?php echo get_the_category()[0]->slug; ?></span>
                            <p class="c-title-ja c-title-ja--light"><?php echo get_the_category()[0]->name; ?></p>
                        </div>
                        <time class="c-title-date"
                            datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
                    </div>

                    <h1 class="c-single-kv-title"><?php echo esc_html(get_the_title()); ?></h1>
                </div>
            </div>
        </div>

        <!-- parts-breadcrumb -->
        <?php get_template_part('template/parts', 'breadcrumb'); ?>
        <!-- end  parts-breadcrumb-->
        <!-- end kv -->

    </div>

    <!-- single -->
    <div class="single-content-wrapper l-container-s u-ptb">
        <?php
			while ( have_posts() ) :
				the_post();
				?>
        <article class="single-content">
            <?php the_content(); ?>
        </article>
        <?php endwhile; ?>

        <div class="single-link">
            <?php
            $prev = get_previous_post();
            if ( $prev) :
            ?>
            <a href="<?php echo get_permalink( $prev->ID ); ?>"
                class="c-button c-button--gray c-button--reverse">prev<span class="c-button-icon"></span></a>
            <?php else : ?>
            <span class="c-button  c-button--gray c-button--reverse is-disabled">
                prev<span class="c-button-icon"></span>
            </span>
            <?php endif; ?>

            <?php
            $next = get_next_post();
            if ( $next) :
            ?>
            <a href="<?php echo get_permalink( $next->ID ); ?>" class="c-button c-button--gray">next<span
                    class="c-button-icon"></span></a>
            <?php else : ?>
            <span class="c-button c-button--gray is-disabled">
                next<span class="c-button-icon"></span>
            </span>
            <?php endif; ?>
        </div>

    </div>
    <!-- end single -->

</main>

<!-- cta -->
<?php get_template_part('template/section', 'cta'); ?>
<!-- end cta -->

<?php get_footer(); ?>