<?php 

// Template Name: Home

get_header();

 ?>

<div class="banner">

	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<?php $banner_section = get_field('banner_section'); ?>	
	  <!-- Indicators -->
	  
	  <ol class="carousel-indicators">
	  	<?php 
		  $indiActive = 0;
		  foreach ($banner_section as $carIndicators) {
		  	?>
		  	 <li data-target="#myCarousel" data-slide-to="<?php echo $indiActive; ?>" class="<?php if ($indiActive == 0) { echo "active"; }else{ echo ""; } ?>"></li>
		  	<?php
		  	$indiActive++;
		  }
		   ?>
	  </ol>

	  <!-- Wrapper for slides -->

	  <div class="carousel-inner">

	  	<?php 
		  $active_banner = 1;
		  foreach ($banner_section as $bannerRow) {
		  	
		  	?>
 			<div class="item <?php if ($active_banner == 1) { echo "active"; }else{ echo ""; } ?>">
		      <img src="<?php echo $bannerRow['banner_image']; ?>" alt="Los Angeles">
		      <div class="bannerSlogan">
		      	<div class="bannerText">
		      		<p class="bannerTitle"><?php echo $bannerRow['banner_label_title']; ?></p>
		      		<p class="bannerDesc"><?php echo $bannerRow['banner_description']; ?> </p>
		      	</div>
		      </div>
		    </div>
		  	<?php
		  	$active_banner++;
		  }
		  ?>

	  </div>



	  <!-- Left and right controls -->

	  <a class="left carousel-control" href="#myCarousel" data-slide="prev">

	    <span class="glyphicon glyphicon-chevron-left"></span>

	    <span class="sr-only">Previous</span>

	  </a>

	  <a class="right carousel-control" href="#myCarousel" data-slide="next">

	    <span class="glyphicon glyphicon-chevron-right"></span>

	    <span class="sr-only">Next</span>

	  </a>

	</div>

</div>

<div id="primary" class="content-area">

	<main id="main" class="site-main">

	<div class="midSection">

		<div class="container">

			<div class="col-md-6 midImg">

				<img src="<?php echo get_field('middle_image'); ?>" class="img-responsive">

			</div>

			<div class="col-md-6 midWelcome">

				<p class="midTitle"><?php echo get_field('middle_title'); ?></p>

				<hr class="hrUnderTitle">

				<p class="midDesc"><?php echo get_field('middle_description'); ?> </p>

			</div>

		</div>

	</div>

	<div class="missionVision">

		<div class="container">

			<div class="col-md-6 missViss mSecVision">

				<p class="mvTitle"><i class="fa fa-check-square-o"></i> <?php echo get_field('vision_title'); ?> </p>

				<p class="mvDesc"><?php echo get_field('vision_description'); ?></p>

			</div>

			<div class="col-md-6 missViss mSecMission">

				<p class="mvTitle"><i class="fa fa-check-square-o"></i>  <?php echo get_field('mission_title'); ?></p>

				<p class="mvDesc"> <?php echo get_field('mission_description'); ?></p>

			</div>

		</div>

	</div>

	<div class="middleBoxes">

		<div class="container">

			<div class="col-md-6">

				<div class="getBox">

					<div class="getTitle">

						<p><?php echo get_field('box_title_1'); ?></p>

					</div>

					<div class="getOffers blueColor">

						<div class="col-md-2 getBulb">

							<i class="fa fa-lightbulb-o fa-3x"></i>

						</div>

						<div class="col-md-10 getDesc">

							<p><?php echo get_field('box_description_1'); ?></p>

						</div>

					</div>

					<div class="getOffers darkBlueColor">

						<div class="col-md-2 getBulb">

							<i class="fa fa-lightbulb-o fa-3x"></i>

						</div>

						<div class="col-md-10 getDesc">

							<p><?php echo get_field('box_description_2'); ?> </p>

						</div>

					</div>

					<div class="getOffers blueColor">

						<div class="col-md-2 getBulb">

							<i class="fa fa-lightbulb-o fa-3x"></i>

						</div>

						<div class="col-md-10 getDesc">

							<p><?php echo get_field('box_description_3'); ?> </p>

						</div>

					</div>

					<div class="getReadMore">

						<p><a target="_blank" href="<?php echo get_field('box_button_url'); ?>"><i class="fa fa-angle-double-right "></i> <?php echo get_field('box_button_label'); ?></a></p>

					</div>

				</div>

			</div>

			<div class="col-md-6">

				<div class="getFeatured">

					<div class="getTitleF">

						<p><?php echo get_field('box_title_2'); ?></p>

					</div>

					<div class="getFeatContent" style="background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(<?php echo get_field('box_image'); ?>) no-repeat center;">

						<a target="_blank" href="<?php echo get_field('box_image_url'); ?>"><img src="<?php echo get_field('box_image'); ?>" class="img-responsive"></a>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="buttomPartners">

		<div class="container">

			<div class="buttomPartnerTitle">

				<p><?php echo get_field('buttom_partner_title'); ?></p>

				<hr class="hrUnderTitleWhite">

			</div>
			<div class="partnersContainer">
				<?php 
				$buttom_partners_list = get_field('buttom_partners_list');
				foreach ($buttom_partners_list as $partnerRow) {
					?>
					<div class="col-md-4 buttomList">
						<a href="<?php echo $partnerRow['buttom_partner_list_url']; ?>">
							<i class="fa fa-angle-double-right "></i> <?php echo $partnerRow['buttom_partner_list_title']; ?> 
						</a>
					</div>
					<?php
				} ?>
			</div>
		</div>

	</div>

	<div class="bottomCompany">

		<div class="col-md-6 botCompDesc">

			<p><?php echo get_field('buttom_description'); ?></p>

		</div>

		<div class="col-md-6 botCompLogo">

			<p><img src="<?php echo get_field('buttom_logo'); ?>" class="img-responsive"></p>

		</div>

	</div>

	<div class="homeContactForm">

		<div class="container">

			<p class="homeCFtitle">Get In Touch</p>

			<?php

			if ( have_posts() ) :



				/* Start the Loop */

				while ( have_posts() ) : the_post();



					/*

					 * Include the Post-Format-specific template for the content.

					 * If you want to override this in a child theme, then include a file

					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.

					 */

					get_template_part( 'template-parts/content', get_post_format() );



				endwhile;



				the_posts_navigation();



			else :



				get_template_part( 'template-parts/content', 'none' );



			endif; ?>

		</div>

	</div>

	</main><!-- #main -->

</div><!-- #primary -->

<?php

get_footer();

?>