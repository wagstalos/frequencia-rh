<?php get_header(); ?>

<div class="container">

    <div class="text-center mt-100">
        <?php the_post_thumbnail(array( 300,300 ), ['class' => 'rounded shadow']); ?>
        <h2 class="mt-40"><?php the_title(); ?> </h2>
        <p>Publicado em <?php echo get_the_date(); ?>

        <div class="badge badge-dpc mt-2"> <?php the_tags( '', ' '  ); ?> </div>
    </div>
</div>

<div class="container">
    <?php 
				while( have_posts() ): the_post();

					get_template_part( 'template-parts/content', 'single' );

					if( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile;

				?>
</div>


<?php get_footer(); ?>