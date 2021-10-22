<?php get_header(); ?>
<div class="">
    <main>
        <div class="">
            <div class="container">
                <!-- <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon back-arrow icon-tabler-arrow-back-up" width="56"
                        height="56" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2BB7DA" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <path d="M9 13l-4 -4l4 -4m-4 4h11a4 4 0 0 1 0 8h-1" />
                    </svg>
                </a> -->

            </div>
            <section class="middle-area">
                <div class="container">
                    <div class="row">

                        <div class="p-100 mb-4 text-center">
                            <?php $template_directory = get_template_directory_uri(); ?>
                            <img width="300px" src="<?php echo $template_directory;?>/img/404.svg" />
                            <h1><?php _e('OPS página não encontrada!','wpcurso');  ?></h1>
                            <p><?php _e('A página que você procura não foi encontrada.','wpcurso'); ?> </p>

                        </div>

                    </div>
                </div>
            </section>
    </main>
</div>
<?php get_footer(); ?>