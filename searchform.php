<?php
/**
 * Template for displaying search forms in Twenty Sixteen
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label>
        <input type="search" class="search-field shadow-sm mb-4"
            placeholder="<?php echo esc_attr_x( 'Pesquisar &hellip;', 'placeholder', 'twentysixteen' ); ?>"
            value="<?php echo get_search_query(); ?>" name="s" />
    </label>
    <button type="submit" class="search-submit" id="search-btn">
        <span class="screen-reader-text">
            <?php echo _x( '', 'submit button', 'twentysixteen' ); ?>
        </span>
        <!-- <img src="https://unico.io/unicopeople/blog/wp-content/themes/theme-bio/img/icon-search.svg" alt=""> -->

        <?php $template_directory = get_template_directory_uri(); ?>
        <img width="" src="<?php echo $template_directory;?>/img/icon-search.svg" />

    </button>
</form>