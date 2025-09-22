<div class="js-scrollTarget">
    <div class="c-sub-kv">
        <div class="c-kv-inner l-container">
            <div class="c-title">
                <span class="c-title-en"><?php echo esc_html(get_post(get_the_ID())->post_name); ?></span>
                <h1 class="c-title-ja"><?php echo esc_html(get_the_title()); ?></h1>
            </div>
        </div>
    </div>

    <!-- parts-breadcrumb -->
    <?php get_template_part('template/parts', 'breadcrumb'); ?>
    <!-- end  parts-breadcrumb-->
</div>