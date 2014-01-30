<?php echo View::factory('/templates/include/header'); ?>
<?php echo View::factory('/templates/include/topmenu'); ?>
	
	    
		<div class="container">
			<div class="row">
				<?php echo View::factory('/templates/include/error'); ?>
				<?php echo View::factory('/templates/include/message'); ?>
				
				<div class="col-sm-12 col-md-12">
				<?php echo $content ?>
				</div>
			</div>
		</div>

<?php echo View::factory('/templates/include/footer'); ?>