<article post-id="<?php the_ID(); ?>">
    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" class="card-img-top">
        </a>
    <?php else : ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <img src="<?php echo get_bloginfo('stylesheet_directory') . '/dist/img/sem-imagem.jpg' ?>" class="card-img-top">
        </a>
    <?php endif; ?>
    <div>
        <h2>
            <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>">Continue Lendo →</a>
    </div>
    <div>
        Postado em <?php echo get_the_date(''); ?> por
        <?php the_author_posts_link(); ?>
    </div>
</article>