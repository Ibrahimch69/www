<?php
/**
 * The template for displaying archive pages
 *
 * @package OliveWP Theme
 */

get_header();
if ( ! function_exists( 'olivewp_plus_activate' ) ) {
        do_action( 'olivewp_breadcrumbs_hook' );
}
else {
    do_action( 'olivewp_plus_breadcrumbs_hook' );
}
$olivewp_page_sidebar=get_post_meta(get_option('page_for_posts', true),'olivewp_page_sidebar', true );
if($olivewp_page_sidebar =='') { $olivewp_page_sidebar = 'sidebar-1'; } ?>
<section class="page-section-space blog bg-default" id="content">
    <div class="spice-container<?php echo esc_html(olivewp_container_width_post_layout());?>">
        <div class="spice-row">
            <?php
            if(get_theme_mod('bredcrumb_position','page_header')=='content_area'):
                echo '<div class="spice-col-1">';
                do_action('olivewp_breadcrumbs_page_title_hook');
                echo '</div>';
            endif;

            if(get_theme_mod('blog_sidebar_layout','right')=='left'): 
                echo '<div class="spice-col-4"><div class="sidebar"><div class="left-sidebar">';
                    dynamic_sidebar($olivewp_page_sidebar); 
                    echo '</div></div></div>';
                 endif;
            if(get_theme_mod('blog_sidebar_layout','right')=='right' || get_theme_mod('blog_sidebar_layout','right')=='left'):        
                echo '<div class="spice-col-2">';
            else:
                echo '<div class="spice-col-1">';   
            endif;

            if (have_posts()): 
                while (have_posts()): the_post();
                    
                    if(! function_exists( 'olivewp_plus_activate' ) ) {
                        get_template_part( 'template-parts/content');
                    }
                    else {
                        include(OLIVEWP_PLUGIN_DIR.'/inc/template-parts/content.php');
                    }
                endwhile;
            else:
                get_template_part('template-parts/content', 'none');
            endif;

            // pagination
            do_action('olivewp_page_navigation');
            ?>		
            </div>	
            <?php if(get_theme_mod('blog_sidebar_layout','right')=='right'):
                echo '<div class="spice-col-4"><div class="sidebar"><div class="right-sidebar">';
                    dynamic_sidebar($olivewp_page_sidebar);
                echo '</div></div></div>';
            endif;?>
        </div>
    </div>
</section> 

<?php
get_footer();