<?php
/**
 * Template Name: Frontpage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package waxom
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<!-- Services -->
		    <div class="inner clearfix">
		        <div class="services col3">
		            <div class="icon"><img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/icon-pencil.png" /></div>
		            <h3>Web &amp; App Design</h3>
		            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
		            <span class="border">&nbsp;</span>
		        </div>
		        <div class="services col3">
		            <div class="icon"><img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/icon-development.png" /></div>
		            <h3>Development</h3>
		            <p>Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
		            <span class="border">&nbsp;</span>
		        </div>
		        <div class="services col3">
		            <div class="icon"><img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/icon-customization.png" /></div>
		            <h3>Customization</h3>
		            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
		            <span class="border">&nbsp;</span>
		        </div>
		        <div class="services col3">
		            <div class="icon"><img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/icon-marketing.png" /></div>
		            <h3>Marketing</h3>
		            <p>Lorem ipsum dolor sit amet, adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet.</p>
		            <span class="border">&nbsp;</span>
		        </div>
		    </div> <!-- #Services -->

		    <!-- Realization of Ideas -->
		    <div class="full section-bg-primary">
		        <div class="inner spacer-30">
		            <h3 class="section-header">Waxom is Realization of your Ideas.</h3>
		            <p class="paragraph">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
		            <img src="<?php echo get_template_directory_uri(); ?>/img/browsers.png" />
		        </div>
		    </div><!-- .container inner -->
		    <!-- Banner -->
		    <div class="banner full clearfix">
		        <div class="inner">
		            <div class="left-element">
		                <h3 class="banner-heading">Waxom Multipurpose Wordpress&nbsp;Theme</h3>
		                <p>Don't forget to rate the template. Thanks so much!</p>
		            </div>
		            <div class="right-element banner-cta">
		                <a class="btn">Purchase Now</a>
		            </div>
		        </div>
		    </div> <!-- .Banner -->
		    <!-- Our Latest Projects -->
		    <div class="inner spacer-100">
		        <h3 class="section-header">Our Latest Projects.</h3>
		        <p class="paragraph projects-text">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
		        <!-- Skipping navigation -->
		        <div class="projects clearfix">
		            <div class="col4">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/project-1.png" />
		                <div class="projects-text-wrapper">
		                    <div class="arrow-up"></div>
		                    <h4>Claritas Etiam Processus</h4>
		                    <p>Photography, Nature</p>
		                </div>
		            </div>
		            <div class="col4 active">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/project-2.png" />
		                <div class="projects-text-wrapper">
		                    <div class="arrow-up"></div>
		                    <h4>Quam Nutamus Farum</h4>
		                    <p>Graphic Design, Mock-Up</p>
		                </div>
		            </div>
		            <div class="col4">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/project-3.png" />
		                <div class="projects-text-wrapper">
		                    <div class="arrow-up"></div>
		                    <h4>Usus Legentis Videntur</h4>
		                    <p>Photography, Holiday</p>
		                </div>
		            </div>
		            <div class="col4">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/project-4.png" />
		                <div class="projects-text-wrapper">
		                    <div class="arrow-up"></div>
		                    <h4>Claritas Etiam Processus</h4>
		                    <p>Photography, Nature</p>
		                </div>
		            </div>
		            <div class="col4">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/project-5.png" />
		                <div class="projects-text-wrapper">
		                    <div class="arrow-up"></div>
		                    <h4>Quam Nutamus Farum</h4>
		                    <p>Graphic Design, Mock-Up</p>
		                </div>
		            </div>
		            <div class="col4">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/project-6.png" />
		                <div class="projects-text-wrapper">
		                    <div class="arrow-up"></div>
		                    <h4>Usus Legentis Videntur</h4>
		                    <p>Photography, Holiday</p>
		                </div>
		            </div>
		        </div>
		        <div class="btn btn-centered btn-centered2"><a href="#">Load More</a></div>
		    </div><!-- #Our Latest Projects -->
		    <!-- Video Hero -->
		    <div class="hero video-hero full">
		        <div class="icon"><img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/icon-play-video.png" /></div>
		        <h4>Waxom Video Presentation</h4>
		        <p class="paragraph video-paragraph">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
		        <span class="video-time">03:29</span>
		    </div><!-- Video Hero -->
		    <!-- Extra 1_Excellent for Mobile Devices -->
		    <div class="inner devices clearfix">
		        <div class="col4 mobile-device-img">
		            <img src="<?php echo get_template_directory_uri(); ?>/img/iphone-hand.png" width="200" />
		        </div>
		        <div class="col8 mobile-device-text">
		            <h3 class="section-header">Excellent for Mobile Devices</h3>
		            <p class="paragraph excellent-paragraph">Qisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius claritas. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
		            <ul class="another-list mobile-devices-list">
		                <li>Nam liber tempor cum soluta nobis eleifend option;</li>
		                <li>Option congue nihil imperdiet doming id quod mazim placerat facer;</li>
		                <li>Eodem modo typi, qui nunc nobis videntur parum futurum;</li>
		                <li>Investigationes demonstraverunt lectores</li>
		            </ul>
		        </div>
		    </div><!-- !Excellent Mobile Devices -->
		    <!-- Banner -->
		    <div class="banner full clearfix">
		        <ul class="another-list rtb-list">
		            <li>
		                <div class="icon"><img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/icon-clients.png" /></div>
		                <div class="number">3587</div>
		                <p>satisfied clients</p>
		            </li>
		            <li>
		                <div class="icon"><img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/icon-coffee.png" /></div>
		                <div class="number">207</div>
		                <p>cups of coffee</p>
		            </li>
		            <li>
		                <div class="icon"><img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/icon-posts.png" /></div>
		                <div class="number">2500</div>
		                <p>blog posts</p>
		            </li>
		            <li>
		                <div class="icon"><img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/icon-heart.png" /></div>
		                <div class="number">873</div>
		                <p>likes</p>
		            </li>
		            <li>
		                <div class="icon"><img class="icon-img" src="<?php echo get_template_directory_uri(); ?>/img/icon-something.png" /></div>
		                <div class="number">900</div>
		                <p>we launched</p>
		            </li>
		        </ul>
		    </div> <!-- .Banner -->
		    <!-- Recent Posts -->
		    <div class="recent inner spacer-100 clearfix">
		        <h3 class="section-header">Recent Posts.</h3>
		        <p class="paragraph">Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
		        <div class="posts-module">
		            <div class="col4 posts-container">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/post-1.png" />
		                <div class="date"></div>
		                <div class="posts-title">Lorem ipsum dolor sit amet</div>
		                <p>Nam liber tempor cum soluta nobis eleifend option;</p>
		                <div class="btn btn-centered btn-centered2"><a href="#">Read More</a></div>
		            </div>
		            <div class="col4 posts-container">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/post-2.png" />
		                <div class="date"></div>
		                <div class="posts-title">Lorem ipsum dolor sit amet</div>
		                <p>Nam liber tempor cum soluta nobis eleifend option;</p>
		                <div class="btn btn-centered btn-centered2"><a href="#">Read More</a></div>
		            </div>
		            <div class="col4 posts-container">
		                <img src="<?php echo get_template_directory_uri(); ?>/img/post-3.png" />
		                <div class="date"></div>
		                <div class="posts-title">Lorem ipsum dolor sit amet</div>
		                <p>Nam liber tempor cum soluta nobis eleifend option;</p>
		                <div class="btn btn-centered btn-centered2"><a href="#">Read More</a></div>
		            </div>
		        </div>
		    </div><!-- #Recent Posts -->
		    <!-- Clients -->
		    <div class="hero client-hero full">
		        <ul class="another-list partner-list">
		            <li><a href="#"><img class="partner-img" src="<?php echo get_template_directory_uri(); ?>/img/partner-1.png" alt="" /></a></li>
		            <li><a href="#"><img class="partner-img" src="<?php echo get_template_directory_uri(); ?>/img/partner-2.png" alt="" /></a></li>
		            <li><a href="#"><img class="partner-img" src="<?php echo get_template_directory_uri(); ?>/img/partner-3.png" alt="" /></a></li>
		            <li><a href="#"><img class="partner-img" src="<?php echo get_template_directory_uri(); ?>/img/partner-4.png" alt="" /></a></li>
		        </ul>
		    </div><!-- #Clients -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
