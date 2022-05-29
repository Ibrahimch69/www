<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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
if((get_post_meta(get_option('page_for_posts', true),'olivewp_site_layout', true )=='olivewp_site_layout_stretched') || (get_theme_mod('blog_sidebar_layout','right')=='stretched')) 
    {
        $olivewp_page_class='stretched';   
    }
else 
    {
        $olivewp_page_class='';
    }
$olivewp_page_sidebar = get_post_meta(get_option('page_for_posts', true),'olivewp_page_sidebar', true );
if($olivewp_page_sidebar =='') { $olivewp_page_sidebar = 'sidebar-1';} ?>
<section class="page-section-space blog bg-default <?php echo esc_attr($olivewp_page_class);?>" id="content">
    <div class="spice-container<?php echo esc_html(olivewp_container_width_post_layout());?>">
        <div class="spice-row">
            <?php
            if(get_theme_mod('bredcrumb_position','page_header')=='content_area'):
                echo '<div class="spice-col-1">';
                do_action('olivewp_breadcrumbs_page_title_hook');
                echo '</div>';
            endif;
                    
            if(get_post_meta(get_option('page_for_posts', true),'olivewp_site_layout', true )=='')
            {
                if(get_theme_mod('blog_sidebar_layout','right')=='left'):
                    echo '<div class="spice-col-4"><div class="sidebar"><div class="left-sidebar">';
                        dynamic_sidebar($olivewp_page_sidebar); 
                    echo '</div></div></div>';
                    endif;
                if(get_theme_mod('blog_sidebar_layout','right')=='right'|| get_theme_mod('blog_sidebar_layout','right')=='left'):        
                    echo '<div class="spice-col-2">';
                else:
                    echo '<div class="spice-col-1">';   
                endif;
            }
            else if(get_post_meta(get_option('page_for_posts', true),'olivewp_site_layout', true ) == 'olivewp_site_layout_left')
            {
                echo '<div class="spice-col-4"><div class="sidebar"><div class="left-sidebar">';
                    dynamic_sidebar($olivewp_page_sidebar); 
                echo '</div></div></div>';
                echo '<div class="spice-col-2">';
            }
            else if(get_post_meta(get_option('page_for_posts', true),'olivewp_site_layout', true ) == 'olivewp_site_layout_right')
            {
                echo '<div class="spice-col-2">';
            }
            else if(get_post_meta(get_option('page_for_posts', true),'olivewp_site_layout', true ) =='olivewp_site_layout_without_sidebar')
            {
                echo '<div class="spice-col-1">'; 
            }
            else
            {
                echo '<div class="spice-col-1">';
            }
            if (have_posts()): 
                while (have_posts()): the_post();

                    if(! function_exists( 'olivewp_plus_activate' ) ) {
                        get_template_part( 'template-parts/content');
                    }
                    else {
                        include(OLIVEWP_PLUGIN_DIR.'/inc/template-parts/content.php' );
                    }
                endwhile;
            else:
                get_template_part('template-parts/content', 'none');
            endif;

            // pagination
            if ( ! function_exists( 'olivewp_plus_activate' ) ) {
                do_action('olivewp_page_navigation');
            }
            else {
                do_action('olivewp_plus_page_navigation');
            }
            ?>
        </div>
        <!-- Sidebar -->   
        <?php if(((get_theme_mod('blog_sidebar_layout','right')=='right') && get_post_meta(get_option('page_for_posts', true),'olivewp_site_layout', true )=='') || get_post_meta(get_option('page_for_posts', true),'olivewp_site_layout', true )=='olivewp_site_layout_right'):
            echo '<div class="spice-col-4"><div class="sidebar"><div class="right-sidebar">';
                dynamic_sidebar($olivewp_page_sidebar); 
            echo '</div></div></div>';
        endif;?>
    </div>
</section>  
<?php
get_footer();