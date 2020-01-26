<?php
function ge_enqueue() {

$uri=get_theme_file_uri();

	wp_register_style(ge_style,$uri. '/assets/css/base.css' );
	wp_register_style(ge_skeleton,$uri. '/assets/css/skeleton.css' );
	wp_register_style(ge_fontawesome,$uri. '/assets/css/font-awesome.css' );
	/*wp_register_style(ge_layout,$uri. '/assets/css/layouts.css' );*/
	wp_register_style(ge_retina,$uri. '/assets/css/retina.css' );
	wp_register_style(ge_owlcarousel,$uri. '/assets/css/owl.carousel.css' );
	wp_register_style(ge_owltransitions,$uri. '/assets/css/owl.transitions.css' );
	wp_register_style(ge_colors,$uri. '/assets/css/colors/color.css' );
	wp_register_style(ge_fontgoogle,'https://fonts.googleapis.com/css?family=Inconsolata:400,700&amp;subset=latin,latin-ext' );


	wp_register_script(ge_modernizr,$uri. '/assets/js/modernizr.custom.js' );
	wp_register_script(ge_retinajs,$uri. '/assets/js/retina-1.1.0.min.js',[],false,true );
	wp_register_script(ge_menujs,$uri. '/assets/js/menu.js',[],false,true );
	wp_register_script(ge_velocity,$uri. '/assets/js/velocity.min.js',[],false,true );
	wp_register_script(ge_velocityui,$uri. '/assets/js/velocity.ui.min.js',[],false,true );
	wp_register_script(ge_jquerytipper,$uri. '/assets/js/jquery.fs.tipper.min.js',[],false,true );
	wp_register_script(ge_owlcarousel,$uri. '/assets/js/owl.carousel.min.js',[],false,true );
	wp_register_script(ge_homescroll,$uri. '/assets/js/home-scroll.js',[],false,true );
	wp_register_script(ge_customhome,$uri. '/assets/js/custom-home.js',[],false,true );
	wp_register_script(ge_royal,$uri. '/assets/js/royal_preloader.min.js',[],false,true );



	wp_enqueue_style('ge_fontgoogle');
	wp_enqueue_style('ge_style');
	wp_enqueue_style('ge_skeleton');
	wp_enqueue_style('ge_layout');
	wp_enqueue_style('ge_fontawesome');
	wp_enqueue_style('ge_retina');
	wp_enqueue_style('ge_owlcarousel');
	wp_enqueue_style('ge_owltransitions');
	wp_enqueue_script('ge_modernizr');

	wp_enqueue_script('jquery');
	wp_enqueue_style('ge_colors');
	wp_enqueue_script('ge_retinajs');
	wp_enqueue_script('ge_retinajs');
	wp_enqueue_script('ge_menujs');
	wp_enqueue_script('ge_velocity');
	wp_enqueue_script('ge_velocityui');
	wp_enqueue_script('ge_jquerytipper');
	wp_enqueue_script('ge_owlcarousel');
	wp_enqueue_script('ge_homescroll');
	wp_enqueue_script('ge_customhome');
	wp_enqueue_script('ge_royal');
















}