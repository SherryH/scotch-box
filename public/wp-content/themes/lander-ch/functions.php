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
			}
		}
	
		add_action( 'wp_enqueue_scripts', 'lander_scripts' );
			


 ?>