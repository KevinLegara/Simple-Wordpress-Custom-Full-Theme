<?php 

// Template Name: Programs

get_header();

 ?>

<div id="primary" class="content-area content-area-site programsPage">

	<main id="main" class="site-main">

		<div class="container">

			<header class="entry-header">
			<h1 class="entry-title"> Programs </h1>
			</header>

			<?php 
			$programs_tabs = get_field('programs_tabs');
			
			 ?>
			<!-- Nav tabs -->
	            <ul class="nav nav-pills nav-justified nav-programs">
	            	<?php 
	            		$i = 1;
						foreach ($programs_tabs as $list) {
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
	            	foreach ($programs_tabs as $data) {
	            		?>
	            		<div class="tab-pane fade <?php if($n == 1){ echo 'active in'; }else{ echo ''; } ?>" id="menu<?php echo $n; ?>">
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