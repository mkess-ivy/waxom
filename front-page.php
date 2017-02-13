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
	<?php 
		// Section 2 - Services
		$service1_icon = get_field('service1_icon');
		$service1_title = get_field('service1_title');
		$service1_text = get_field('service1_text');
		$service2_icon = get_field('service2_icon');
		$service2_title = get_field('service2_title');
		$service2_text = get_field('service2_text');
		$service3_icon = get_field('service3_icon');
		$service3_title = get_field('service3_title');
		$service3_text = get_field('service3_text');
		$service4_icon = get_field('service4_icon');
		$service4_title = get_field('service4_title');
		$service4_text = get_field('service4_text');
		// Section 3 - Welcome
		$section3_title = get_field('section3_title');
		$section3_text = get_field('section3_text');
		$section3_img = get_field('section3_img');
		// Section 4 - CTA
		$cta_title = get_field('cta_title');
		$cta_text = get_field('cta_text');
		$cta_btn_text = get_field('cta_btn_text');
		// Section 5 - Latest Posts
		$waxom_latest_title = get_field('waxom_latest_title');
		$waxom_latest_text = get_field('waxom_latest_text');
		// Section 6 - Video
		$waxom_video_icon = get_field('waxom_video_icon');
		$waxom_video_title = get_field('waxom_video_title');
		$waxom_video_text = get_field('waxom_video_text');
		$waxom_video_duration = get_field('waxom_video_duration');
		// Section 7 - Mobile Devices
		$waxom_device_img = get_field('waxom_device_img');
		$waxom_device_title = get_field('waxom_device_title');
		$waxom_device_text = get_field('waxom_device_text');
		$waxom_device_bullet1_text = get_field('waxom_device_bullet1_text');
		$waxom_device_bullet2_text = get_field('waxom_device_bullet2_text');
		$waxom_device_bullet3_text = get_field('waxom_device_bullet3_text');
		$waxom_device_bullet4_text = get_field('waxom_device_bullet4_text');
		// Section 8 - Facts
		$waxom_facts1_img = get_field('waxom_facts1_img');
		$waxom_facts1_number = get_field('waxom_facts1_number');
		$waxom_facts1_title = get_field('waxom_facts1_title');
		$waxom_facts2_img = get_field('waxom_facts2_img');
		$waxom_facts2_number = get_field('waxom_facts2_number');
		$waxom_facts2_title = get_field('waxom_facts2_title');
		$waxom_facts3_img = get_field('waxom_facts3_img');
		$waxom_facts3_number = get_field('waxom_facts3_number');
		$waxom_facts3_title = get_field('waxom_facts3_title');
		$waxom_facts4_img = get_field('waxom_facts4_img');
		$waxom_facts4_number = get_field('waxom_facts4_number');
		$waxom_facts4_title = get_field('waxom_facts4_title');
		$waxom_facts5_img = get_field('waxom_facts5_img');
		$waxom_facts5_number = get_field('waxom_facts5_number');
		$waxom_facts5_title = get_field('waxom_facts5_title');
		// Section 10 - Clients & Partners
		$client1_img = get_field('client1_img');
		$client2_img = get_field('client2_img');
		$client3_img = get_field('client3_img');
		$client4_img = get_field('client4_img');
	?>
		<main id="main" class="site-main" role="main">
			<!-- Section 2 - Services -->
		    <div class="inner clearfix">
		        <div class="services col3">
		            <div class="icon">
		            	<img class="icon-img" src="<?php echo $service1_icon['url']; ?>" />
		            </div>
		            <h3><?php echo $service1_title ?></h3>
		            <p><?php echo $service1_text ?></p>
		            <span class="border">&nbsp;</span>
		        </div>
		        <div class="services col3">
		            <div class="icon"><img class="icon-img" src="<?php echo $service2_icon['url']; ?>" /></div>
		            <h3><?php echo $service2_title ?></h3>
		            <p><?php echo $service2_text ?></p>
		            <span class="border">&nbsp;</span>
		        </div>
		        <div class="services col3">
		            <div class="icon"><img class="icon-img" src="<?php echo $service3_icon['url']; ?>" /></div>
		            <h3><?php echo $service3_title ?></h3>
		            <p><?php echo $service3_text ?></p>
		            <span class="border">&nbsp;</span>
		        </div>
		        <div class="services col3">
		            <div class="icon"><img class="icon-img" src="<?php echo $service4_icon['url']; ?>" /></div>
		            <h3><?php echo $service4_title ?></h3>
		            <p><?php echo $service4_text ?></p>
		            <span class="border">&nbsp;</span>
		        </div>
		    </div>

		    <!-- Section 3 - Welcome -->
		    <div class="full section-bg-primary">
		        <div class="inner spacer-30">
		            <h3 class="section-header"><?php echo $section3_title ?></h3>
		            <p class="paragraph"><?php echo $section3_text ?></p>
		            <img src="<?php echo $section3_img['url']; ?>" />
		        </div>
		    </div>
		    <!-- Section 4 - CTA -->
		    <div class="banner full clearfix">
		        <div class="inner">
		            <div class="left-element">
		                <h3 class="banner-heading"><?php echo $cta_title ?></h3>
		                <p><?php echo $cta_text ?></p>
		            </div>
		            <div class="right-element banner-cta">
		                <a class="btn"><?php echo $cta_btn_text ?></a>
		            </div>
		        </div>
		    </div> <!-- .Banner -->
		    <!-- Section 5 - Latest Posts -->
		    <!-- Custom Post Type Here -->
		    <div class="inner spacer-100">
		        <h3 class="section-header"><?php echo $waxom_latest_title ?></h3>
		        <p class="paragraph projects-text"><?php echo $waxom_latest_text ?></p>
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
		    </div>
		    <!-- Section 6 - Video -->
		    <div class="hero video-hero full">
		        <div class="icon"><img class="icon-img" src="<?php echo $waxom_video_icon['url']; ?>" /></div>
		        <h4><?php echo $waxom_video_title ?></h4>
		        <p class="paragraph video-paragraph"><?php echo $waxom_video_text ?></p>
		        <span class="video-time"><?php echo $waxom_video_duration ?></span>
		    </div>
		    <!-- Section 7 - Mobile Devices -->
		    <div class="inner devices clearfix">
		        <div class="col4 mobile-device-img">
		            <img src="<?php echo $waxom_device_img['url']; ?>" width="200" />
		        </div>
		        <div class="col8 mobile-device-text">
		            <h3 class="section-header"><?php echo $waxom_device_title ?></h3>
		            <p class="paragraph excellent-paragraph"><?php echo $waxom_device_text ?></p>
		            <ul class="another-list mobile-devices-list">
		                <li><?php echo $waxom_device_bullet1_text ?></li>
		                <li><?php echo $waxom_device_bullet2_text ?></li>
		                <li><?php echo $waxom_device_bullet3_text ?></li>
		                <li><?php echo $waxom_device_bullet4_text ?></li>
		            </ul>
		        </div>
		    </div>
		    <!-- Section 8 - Facts -->
		    <div class="banner full clearfix">
		        <ul class="another-list rtb-list">
		            <li>
		                <div class="icon"><img class="icon-img" src="<?php echo $waxom_facts1_img['url']; ?>" /></div>
		                <div class="number"><?php echo $waxom_facts1_number ?></div>
		                <p><?php echo $waxom_facts1_title ?></p>
		            </li>
		            <li>
		                <div class="icon"><img class="icon-img" src="<?php echo $waxom_facts2_img['url']; ?>" /></div>
		                <div class="number"><?php echo $waxom_facts2_number ?></div>
		                <p><?php echo $waxom_facts2_title ?></p>
		            </li>
		            <li>
		                <div class="icon"><img class="icon-img" src="<?php echo $waxom_facts3_img['url']; ?>" /></div>
		                <div class="number"><?php echo $waxom_facts3_number ?></div>
		                <p><?php echo $waxom_facts3_title ?></p>
		            </li>
		            <li>
		                <div class="icon"><img class="icon-img" src="<?php echo $waxom_facts4_img['url']; ?>" /></div>
		                <div class="number"><?php echo $waxom_facts4_number ?></div>
		                <p><?php echo $waxom_facts4_title ?></p>
		            </li>
		            <li>
		                <div class="icon"><img class="icon-img" src="<?php echo $waxom_facts5_img['url']; ?>" /></div>
		                <div class="number"><?php echo $waxom_facts5_number ?></div>
		                <p><?php echo $waxom_facts5_title ?></p>
		            </li>
		        </ul>
		    </div>
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
		            <li><a href="#"><img class="partner-img" src="<?php echo $client1_img['url']; ?>" alt="" /></a></li>
		            <li><a href="#"><img class="partner-img" src="<?php echo get_template_directory_uri(); ?>/img/partner-2.png" alt="" /></a></li>
		            <li><a href="#"><img class="partner-img" src="<?php echo get_template_directory_uri(); ?>/img/partner-3.png" alt="" /></a></li>
		            <li><a href="#"><img class="partner-img" src="<?php echo get_template_directory_uri(); ?>/img/partner-4.png" alt="" /></a></li>
		        </ul>
		    </div><!-- #Clients -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
