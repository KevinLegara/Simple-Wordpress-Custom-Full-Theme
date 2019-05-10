<?php 

// Template Name: Events

get_header();

 ?>

<div id="primary" class="content-area content-area-site">

	<main id="main" class="site-main">

		<div class="container">

			<header class="entry-header">
			<h1 class="entry-title"> Events </h1>
			</header>
			<?php 
			$events_tab = get_field('events_tab');
			 ?>
			 <!-- Nav tabs -->
	            <ul class="nav nav-pills nav-justified nav-events">
	            	<?php 
	            		$i = 1;
						foreach ($events_tab as $list) {
							?>
							<li class="<?php if($i == 1){ echo 'active'; }else{ echo ''; } ?>">
								<a href="#menu<?php echo $i; ?>" data-toggle="tab" aria-expanded="<?php if($i == 1){ echo 'true'; }else{ echo 'false'; } ?>"> <?php echo $list['tab_title']; ?></a>
			                </li>
							<?php
						$i++;	
						}

	            	 ?>
	            </ul>
			 	 <!-- Tab panes -->
	            <div class="tab-content">
	            	<?php 
	            	$n = 1;
	            	foreach ($events_tab as $data) {
	            		?>
	            		<div class="tab-pane fade <?php if($n == 1){ echo 'active in'; }else{ echo ''; } ?>" id="menu<?php echo $n; ?>">
	            			
	                    	<?php 
	                    	$carouselNums = 1;
	                    	foreach ($data['add_event_here'] as $eventDatas) {
	                    		?>
	                    		<div class="events">

                    				<p class="eventTitle">
		                    			<i class="fa fa-chevron-circle-right"></i>&nbsp;
		                    			<?php echo $eventDatas['events_title']; ?>
		                    			<hr class="hrUnderTitleBlue"></hr>
		                    		</p>
		                    		<p class="eventContent"><?php echo $eventDatas['events_content']; ?></p>
		                    			<div class="col-md-12 eventBanner">
		                    				<div id="myCarousel<?php echo $n.$carouselNums; ?>" class="carousel slide" data-ride="carousel">
											  <!-- Wrapper for slides -->
											  <div class="carousel-inner">
											  <?php 
											  	$y = 1; 
											  	foreach ($eventDatas['add_slider_image_here'] as $dataSlide) {
											  		?>
											  		<div class="item <?php if ($y == 1) { echo 'active'; } else { echo ''; } ?>">
												      <img src="<?php echo $dataSlide['slider_image']; ?>" alt="Los Angeles">
												    </div>
											  		<?php
											  		$y++;
											  	}
											   ?>
											  </div>
											  <!-- Left and right controls -->
											  <a class="left carousel-control" href="#myCarousel<?php echo $n.$carouselNums; ?>" data-slide="prev">
											    <span class="glyphicon glyphicon-chevron-left"></span>
											    <span class="sr-only">Previous</span>
											  </a>
											  <a class="right carousel-control" href="#myCarousel<?php echo $n.$carouselNums; ?>" data-slide="next">
											    <span class="glyphicon glyphicon-chevron-right"></span>
											    <span class="sr-only">Next</span>
											  </a>
											</div>
										</div>
	                    		</div>
	                    		<?php
	                    		$carouselNums++;
	                    		} 
	                    	?>
		                    <p><?php echo $data['tab_content']; ?></p>
		                   
		                </div>

	            		<?php
	            	$n++;
	            	}
	            	 ?>
	            </div>

		</div>

	</main><!-- #main -->

</div><!-- #primary -->

<?php

get_footer();

?>