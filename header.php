<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="./favicon.png">
    <meta name="DESCRIPTION" content="Fique por dentro do que acontece na DP Content">
    <!-- Primary Meta Tags -->
    <title>Frequência RH - Somos especialistas em RH. </title>
    <meta name="title" content="Frequência RH - Somos especialistas em RH. ">
    <meta name="description"
        content="Uma empresa especiliazada em RH, iremos ajudar sua empresa a contratar os melhores profissionais!">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://frequenciarh.com.br/">
    <meta property="og:title" content="Frequência RH - Somos especialistas em RH. ">
    <meta property="og:description"
        content="Uma empresa especiliazada em RH, iremos ajudar sua empresa a contratar os melhores profissionais!">
    <meta property="og:image" content="https://frequenciarh.com.br/wp-content/themes/dpc/img/share.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://frequenciarh.com.br/">
    <meta property="twitter:title" content="Frequência RH - Somos especialistas em RH. ">
    <meta property="twitter:description"
        content="Uma empresa especiliazada em RH, iremos ajudar sua empresa a contratar os melhores profissionais!">
    <meta property="twitter:image" content="https://frequenciarh.com.br/wp-content/themes/dpc/img/share.jpg">
    <meta name="google-site-verification" content="oO-WekDcaRgK1mD6UqSZjz_lIo6Ig628JvzzQL9C1ww" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GMHVWKE3NS"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-GMHVWKE3NS');
    </script>
    <?php wp_head() ?>
</head>


<body <?php body_class(); ?>>
    <header class="container-fluid default-header" id="s-home">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark">
                <a href="<?php echo esc_url( home_url( '#' ) ); ?>" class="navbar-brand logo" width="50px">
                    <?php 
                        $pc_custom_logo = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src(  $pc_custom_logo, 'full');

                        if(has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="logotipo">';
                        }else{
                            echo '<h5 class="m-0" >' . get_bloginfo('name') . '</h5>';
                        }   
                    ?>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu"
                    aria-controls="menu" aria-expanded="false" aria-label="Menu Colapso">
                    <div class="icon">
                        <div class="hamburguer"></div>
                    </div>
                </button>
                <?php
                    wp_nav_menu( array(
                        'theme_location'    => 'primary',
                        'depth'             => 2,
                        'container'         => 'div',
                        'container_class'   => 'collapse navbar-collapse',
                        'container_id'      => 'menu',
                        'menu_class'        => 'navbar-nav mx-auto text-md-center',
                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'            => new WP_Bootstrap_Navwalker(),
                    ) );
                ?>
                <div class="float-md-right " id="search">
                    <form role="search" method="get" class="search-form"
                        action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <label>
                            <input type="search" class="search-field shadow-sm"
                                placeholder="<?php echo esc_attr_x( 'Pesquisar &hellip;', 'placeholder', 'twentysixteen' ); ?>"
                                value="<?php echo get_search_query(); ?>" name="s" />
                        </label>
                        <button type="submit" class="search-submit" id="search-btn">
                            <span class="screen-reader-text">
                                <?php echo _x( '', 'submit button', 'twentysixteen' ); ?>
                            </span>
                            <?php $template_directory = get_template_directory_uri(); ?>
                            <img width="" src="<?php echo $template_directory;?>/img/icon-search.svg" />
                        </button>
                    </form>
                </div>
                <!-- 
                <div id="menu" class="collapse navbar-collapse">
                    <ul class="navbar-nav mx-auto text-md-center">
                        <li class="mr-3 ml-3">
                            <a href="#" class="nav-link">Home</a>
                        </li>
                        <li class="mr-3 ml-3">
                            <a href="#s-about" class="nav-link">Sobre</a>
                        </li>

                        <li class="mr-3 ml-3">
                            <a href="#s-blog" class="nav-link">Blog</a>
                        </li>
                    </ul>
                    <div class="btn-invite text-center">
                        <a href="" target="blank" class="nav-link">Login</a>
                    </div>
                </div> -->
            </nav>
        </div>
    </header>