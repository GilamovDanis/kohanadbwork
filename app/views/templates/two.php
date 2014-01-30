<?php echo View::factory('/templates/include/header'); ?>
<?php echo View::factory('/templates/include/topmenu'); ?>
	
	    
		<div class="container">
			<div class="row">
				<?php echo View::factory('/templates/include/error'); ?>
				<?php echo View::factory('/templates/include/message'); ?>
				
				<div class="col-sm-12 col-md-12">
				
						<div class="col-md-6 col-sm-6">
						<?php echo $content ?>
						</div>
						
						<div class="col-md-6 col-sm-6">
						<?php echo $right_sidebar; ?>
						</div>
				</div>
			</div>
		</div>

<?php echo View::factory('/templates/include/footer'); ?>