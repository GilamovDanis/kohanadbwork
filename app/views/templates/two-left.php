<?php echo View::factory('/templates/include/header'); ?>
<?php echo View::factory('/templates/include/topmenu'); ?>
	
	    
		<div class="container">
			<div class="row">
				<?php echo View::factory('/templates/include/error'); ?>
				<?php echo View::factory('/templates/include/message'); ?>
				
				<div class="col-sm-12 col-md-12">
				
						<div class="col-md-4 col-sm-4">
						<?php echo $left_sidebar; ?>
						</div>
						
						<div class="col-md-8 col-sm-8">
						<?php echo $content ?>
						</div>
				</div>
			</div>
		</div>

<?php echo View::factory('/templates/include/footer'); ?>