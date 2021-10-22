<div class="text-center card shadow" <?php post_class(); ?>>

    <div class="top-img">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( array( 200, 200 ), ['class' => 'rounded shadow']  ); ?>
        </a>
    </div>

    <h5 class="mt-4">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h5>

    <div class="meta-info">
        <!-- <p>Published in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p> -->
        <p><?php the_tags( 'Tags: ', ', ' ); ?></p>
    </div>
    <div class="p-2">
        <?php the_excerpt(); ?>
    </div>

</div>