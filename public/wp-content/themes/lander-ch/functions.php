<?php 
/**
* The functions file for Lander child theme
*/

	    /**
		 * Enqueue scripts
		 *
		 * @param string $handle Script name
		 * @param string $src Script url
		 * @param array $deps (optional) Array of script names on which this script depends
		 * @param string|bool $ver (optional) Script version (used for cache busting), set to null to disable
		 * @param bool $in_footer (optional) Whether to enqueue the script before </head> or before </body>
		 */
		function lander_scripts() {
			if (is_front_page()){

				wp_enqueue_style( 'lander-style', get_stylesheet_directory_uri().'/lander-style.css');
				wp_enqueue_script( 'lander-script', get_stylesheet_directory_uri().'/js/landerscripts.js', array('jquery'), 20150714);
			}
		}
	
		add_action( 'wp_enqueue_scripts', 'lander_scripts' );

		
		add_image_size( 'testimonial-mug', 253, 253, true ); //now when an image is uploaded, wordpress will crop it to 253x253 -but if image is smaller, it wont be expanded to fit 253x253

		function exclude_testimonials($query){
			//if query is not the category testimonials and query is the main query
			if (!$query->is_category('testimonials') && $query->is_main_query()){
				$query->set('cat','-4'); //want to exclude category with ID=4 (ID of testimonials category)

			}
		}
		//when we make a query to wordpress database, the pre_get_posts hook is called before the query is actually sent off
		//when that happens, the exclude_testimonials function is called
		add_action('pre_get_posts','exclude_testimonials');

			


 ?>