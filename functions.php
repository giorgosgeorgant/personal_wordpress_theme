<?php
	  echo __FILE__;
	 

//include
include(get_theme_file_path('/assets/enqueue.php'));
include(get_theme_file_path('/assets/navigation.php'));
include(get_theme_file_path('/assets/widgets.php'));



//hooks
add_action('wp_enqueue_scripts','ge_enqueue');
add_action('after_setup_theme','ge_navigation');
add_action('widgets_init','ge_widgets');