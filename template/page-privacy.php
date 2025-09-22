<!-- privacy -->
<div class="privacy-wrapper l-container-s u-ptb">
        <?php
			while ( have_posts() ) :
				the_post();
				?>
        <article class="privacy-content">
                <?php the_content(); ?>
        </article>
        <?php endwhile; ?>

</div>
<!-- end privacy -->