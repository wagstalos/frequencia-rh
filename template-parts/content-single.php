<?php get_header(); ?>
<article class="mt-5">

    <div class="row ">
        <div class="offset-md-1 col-md-7 p-4">
            <p class="mb-4">Por <?php the_author_posts_link();  ?></p>
            <?php the_content();?>
        </div>
        <?php get_sidebar( 'home' ); ?>

    </div>
    <!-- <div class="badge text-dark"> <?php the_tags( 'Tags: ', ' '  ); ?> </div> -->

</article>