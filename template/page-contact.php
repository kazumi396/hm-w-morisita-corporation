<div class="contact l-container-s">
    <p class="contact-message">ご質問やご相談があれば、以下フォームよりお問い合わせください。</p>
    <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
    <?php endwhile; ?>
    <?php endif; ?>
</div>