<?php get_header(); ?>

<body class="royal_loader" data-hijacking="on" data-animation="scaleDown"<?php body_class( 'giorgos' )?>>	
	<!-- Primary Page Layout
	================================================== -->

		
	<!-- Nav and Logo
	================================================== -->

		<header class="cd-header">
		
			<div class="container">		
				<div class="twelve columns">	
					<div class="logo-wrap">
						<img src="images/logo.png" alt="">
					</div>
					<a class="cd-primary-nav-trigger" href="#0">
						<span class="cd-menu-text"></span><span class="cd-menu-icon"></span>
					</a>
				</div>	
			</div>		
				
		</header>

		<nav>
			<div class="cd-primary-nav">
				<?php 
				if(has_nav_menu('primary')){
					wp_nav_menu([
						'theme_location' => 'primary',
						'containter'=> false,
						'fallback_cb'=> false,
						'depth'=> 0

					]);

				}

				?>
				
				<div class="social-nav">
					<ul class="list-social-nav">
						<li class="icon-soc-nav tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf099;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="github"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf09b;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="google +"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf0d5;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="YouTube"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf16a;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="Vimeo"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf194;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="Tumblr"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf174;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf230;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="Skype"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf17e;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="soundcloud"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf1be;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="pinterest"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf231;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="linkedin"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf08c;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="lastfm"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf202;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="dropbox"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf16b;</a>
						</li>
						<li class="icon-soc-nav tipped" data-title="behance"  data-tipper-options='{"direction":"top","follow":"true"}'>
							<a href="#">&#xf1b4;</a>
						</li>
					</ul>	
				</div>
								
			</div>
		</nav>

<main class="cd-main-content">
	
	<section class="cd-section visible">
		<div>		
			<div class="hero-top">							
				<div class="container">	
					<div class="twelve columns">
					
						<div id="owl-text-home" class="owl-carousel owl-theme">
	 
							<div class="item"><h2>Great Strategy</h2></div>
							<div class="item"><h2>Amazing Team</h2></div>
							<div class="item"><h2>Great Experience</h2></div>
						 
						</div>
						
						<p>build great brands</p>
						<div class="social-top">
							<ul class="list-social">
								<li class="icon-soc tipped" data-title="twitter"  data-tipper-options='{"direction":"top","follow":"true"}'>
									<a href="#">&#xf099;</a>
								</li>
								<li class="icon-soc tipped" data-title="facebook"  data-tipper-options='{"direction":"top","follow":"true"}'>
									<a href="#">&#xf09a;</a>
								</li>
								<li class="icon-soc tipped" data-title="github"  data-tipper-options='{"direction":"top","follow":"true"}'>
									<a href="#">&#xf09b;</a>
								</li>
								<li class="icon-soc tipped" data-title="google +"  data-tipper-options='{"direction":"top","follow":"true"}'>
									<a href="#">&#xf0d5;</a>
								</li>
							</ul>	
						</div>	
					</div>	
				</div>		
			</div>
		</div>
	</section>

	<section class="cd-section">
		<div>		
			<div class="hero-top">							
				<div class="container">	
					<div class="twelve columns">
						<h2>Portfolio</h2>	
						 <p><span>Digital solutions inspire</span></p>
						 <a href="work.html"><div class="button button--moema button--text-thick button--text-upper button--size-s">discover</div></a>
					</div>	
				</div>		
			</div>
		</div>
	</section>

	<section class="cd-section">
		<div>	
			<div class="hero-top">							
				<div class="container">	
					<div class="twelve columns">
						<h2>About Us</h2>	
						 <p><span>INSPIRED BY PURPOSE</span></p>
						 <a href="about.html"><div class="button button--moema button--text-thick button--text-upper button--size-s">find out more</div></a>
					</div>	
				</div>		
			</div>
		</div>
	</section>

	<section class="cd-section">
		<div>
			<div class="hero-top">							
				<div class="container">	
					<div class="twelve columns">
						<h2>blog</h2>	
						 <p><span>latest news</span></p>
						 <a href="blog.html"><div class="button button--moema button--text-thick button--text-upper button--size-s">read articles</div></a>
					</div>	
				</div>		
			</div>
		</div>
	</section>

	<section class="cd-section">
		<div>
			<div class="hero-top">							
				<div class="container">	
					<div class="twelve columns">
						<h2>contact</h2>	
						 <p><span>get in touch</span></p>
						 <a href="contact.html"><div class="button button--moema button--text-thick button--text-upper button--size-s">find us</div></a>
					</div>	
				</div>		
			</div>
		</div>
	</section>

	<nav>
		<ul class="cd-vertical-nav">
			<li><a href="#0" class="cd-prev inactive">Next</a></li>
			<li><a href="#0" class="cd-next">Prev</a></li>
		</ul>
	</nav> <!-- .cd-vertical-nav -->
		
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>