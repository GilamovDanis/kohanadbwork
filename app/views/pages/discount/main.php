<h3>Все скидки -  <?php echo HTML::anchor('discount/add', ' Добавить скидку',array('class'=>'btn btn-default btn-sm')); ?></h3> 

<table class="table table-striped table-condesed table-bordered">
<thead>
                <tr>
				  <?php /*<th></th>*/ ?>
				  <th>ID</th>
				  <th>Название скидки</th>
				  <th>Процент скидки</th>
				  <th>Действие</th>
                </tr>
</thead>
	<?php  if (!$messages->count()) { ?>
	<tbody>
	<tr>
	<td>Нет сообщений</td>
	</tr>
	</tbody>
	<?php } else {
	
	foreach ($messages as $message) { 
	?>
	<tbody>
	<tr>
		<td>
		<?php echo $message->id ?>
		</td>
		
		<td>
		<?php echo $message->name; ?>
		</td>
		
		<td>
		<?php echo $message->discount; ?>
		</td>
		
		<td>
			<div class="btn-group">
            <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></button>
            <ul class="dropdown-menu pull-right">
              <li><a href="/discount/delete/<?php echo $message->id ?>" onclick="return confirm('Вы точно хотите удалить данную скидку?')"><span class="glyphicon glyphicon-remove"></span> Удалить</a></li>
            </ul>
          </div>
		</td>
		
	</tr>
	</tbody>
	<?php } } ?>
</table>
<?php echo $pagination ?> 