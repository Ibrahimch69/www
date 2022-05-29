<?php
/**
 * The template for displaying 404 pages (not found)
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
?>
<section class="section-space error-page bg-default" id="content">
	<div class="spice-container<?php echo esc_html(olivewp_container_width_page_layout());?> justify-content-center">
		<div class="spice-row">
		   	<div class="spice-col-1">
			    <div class="text-center justify-content-center error_404">
			    	<div class="pattern_404">
			    		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="230px" height="208px">
							<path fill-rule="evenodd"  fill="rgb(255,111,97)" d="M210.000,208.000 L20.000,208.000 C8.954,208.000 -0.000,199.046 -0.000,188.000 L-0.000,20.000 C-0.000,8.954 8.954,-0.000 20.000,-0.000 L210.000,-0.000 C221.046,-0.000 230.000,8.954 230.000,20.000 L230.000,188.000 C230.000,199.046 221.046,208.000 210.000,208.000 ZM224.000,25.000 C224.000,13.954 215.046,5.000 204.000,5.000 L26.000,5.000 C14.954,5.000 6.000,13.954 6.000,25.000 L6.000,36.000 L224.000,36.000 L224.000,25.000 ZM224.000,42.000 L6.000,42.000 L6.000,182.000 C6.000,193.046 14.954,202.000 26.000,202.000 L204.000,202.000 C215.046,202.000 224.000,193.046 224.000,182.000 L224.000,42.000 ZM152.120,140.249 C150.949,141.420 149.049,141.420 147.878,140.249 L144.342,136.713 L140.807,140.249 C139.635,141.420 137.736,141.420 136.564,140.249 C135.393,139.077 135.393,137.178 136.564,136.006 L140.100,132.470 L136.564,128.935 C135.393,127.763 135.393,125.864 136.564,124.692 C137.736,123.521 139.635,123.521 140.807,124.692 L144.342,128.228 L147.878,124.692 C149.049,123.521 150.949,123.521 152.120,124.692 C153.292,125.864 153.292,127.763 152.120,128.935 L148.585,132.470 L152.120,136.006 C153.292,137.178 153.292,139.077 152.120,140.249 ZM93.120,140.249 C91.949,141.420 90.049,141.420 88.878,140.249 L85.342,136.713 L81.807,140.249 C80.635,141.420 78.736,141.420 77.564,140.249 C76.393,139.077 76.393,137.178 77.564,136.006 L81.100,132.470 L77.564,128.935 C76.393,127.763 76.393,125.864 77.564,124.692 C78.736,123.521 80.635,123.521 81.807,124.692 L85.342,128.228 L88.878,124.692 C90.049,123.521 91.949,123.521 93.120,124.692 C94.292,125.864 94.292,127.763 93.120,128.935 L89.585,132.470 L93.120,136.006 C94.292,137.178 94.292,139.077 93.120,140.249 ZM91.761,154.398 L137.861,154.398 C140.027,154.398 141.111,155.481 141.111,157.648 L141.111,169.698 C141.111,173.564 140.144,176.548 138.211,178.648 C136.277,180.748 133.577,181.798 130.111,181.798 C126.644,181.798 123.936,180.748 121.986,178.648 C120.036,176.548 119.061,173.564 119.061,169.698 L119.061,160.798 L91.761,160.798 C89.561,160.798 88.461,159.731 88.461,157.598 C88.461,155.464 89.561,154.398 91.761,154.398 ZM124.111,168.698 C124.111,173.298 126.111,175.598 130.111,175.598 C134.077,175.598 136.061,173.298 136.061,168.698 L136.061,160.798 L124.111,160.798 L124.111,168.698 ZM27.000,15.000 C30.314,15.000 33.000,17.686 33.000,21.000 C33.000,24.314 30.314,27.000 27.000,27.000 C23.686,27.000 21.000,24.314 21.000,21.000 C21.000,17.686 23.686,15.000 27.000,15.000 ZM51.000,15.000 C54.314,15.000 57.000,17.686 57.000,21.000 C57.000,24.314 54.314,27.000 51.000,27.000 C47.686,27.000 45.000,24.314 45.000,21.000 C45.000,17.686 47.686,15.000 51.000,15.000 ZM75.000,15.000 C78.314,15.000 81.000,17.686 81.000,21.000 C81.000,24.314 78.314,27.000 75.000,27.000 C71.686,27.000 69.000,24.314 69.000,21.000 C69.000,17.686 71.686,15.000 75.000,15.000 Z"/>
						</svg>
			    	</div>
			     	<h2 class="title"><?php esc_html_e('404','olivewp');?></h2>
			        <h2 class="contact-title"><?php esc_html_e('Error! Page Not Found','olivewp'); ?> </h2>		
			    </div>		 
			</div>
		</div>
    </div>
</section>
<?php
get_footer();