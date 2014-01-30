<h3>Найденные клиенты -  <?php echo HTML::anchor('client/search?newsearch=1', ' Новый поиск',array('class'=>'btn btn-info btn-sm')); ?></h3> 

<table class="table table-striped table-condesed table-bordered">
<thead>
                <tr>
				  <?php /*<th></th>*/ ?>
				  <th>ID</th>
				  <th>Фамилия</th>
				  <th>Имя</th>
				  <th>Отчество</th>
				  <th>Статус</th>
				  <th>Описание</th>
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
		<?php echo $message->surname; ?>
		</td>
		
		<td>
		<?php echo $message->name; ?>
		</td>
		
		<td>
		<?php echo $message->patronymic; ?>
		</td>
		
		<td>
		<?php echo DB::select('name')->from('discounts')->where('id','=',$message->type_id)->as_object()->execute()->get('name'); ?>
		</td>
	
		<td>
		<?php echo $message->description; ?>
		</td>
	
		<td>
			<div class="btn-group">
            <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></button>
            <ul class="dropdown-menu pull-right">
			  <li><a href="/room/registration/<?php echo $message->id ?>"><span class="glyphicon glyphicon-info-sign"></span> Регистрация в гостинице</a></li>
              <li><a href="/client/edit/<?php echo $message->id ?>"><span class="glyphicon glyphicon-info-sign"></span> Редактировать инф.о клиенте</a></li>
              <li class="divider"></li>
              <li><a href="/client/delete/<?php echo $message->id ?>" onclick="return confirm('Вы точно хотите удалить данного клиента?')"><span class="glyphicon glyphicon-remove"></span> Удалить</a></li>
            </ul>
          </div>
		</td>
	  
	</tr>
	</tbody>
	<?php } } ?>
</table>
<?php echo $pagination ?> 