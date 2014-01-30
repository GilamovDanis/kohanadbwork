<?php 
/**
 * Вывод ошибок 
**/
if (!empty($error)) {
?>
<div class="col-md-12 col-sm-12">
<div class="alert alert-danger">
<?php
	if (is_array($error)) {
		foreach ($error as $errors) {
			if (is_array($errors)) {
				foreach ($errors as $errorss) {
				?>
				<span><?php echo $errorss; ?></span> <br />
				<?php 
				}
			} else { ?>
			<span><?php echo $errors; ?></span> <br />
			<?php  } 
	    }
	}  else { ?>
	<span><?php echo $error; ?></span>
	<?php } ?>
</div>
</div>
<?php
}
?>