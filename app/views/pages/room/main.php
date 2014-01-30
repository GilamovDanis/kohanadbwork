<h3>Все комнаты  -  <?php echo HTML::anchor('room/add', ' Добавить комнату',array('class'=>'btn btn-default btn-sm')); ?> &nbsp; <?php echo HTML::anchor('room/search/?newsearch=1', ' Поиск комнаты',array('class'=>'btn btn-default btn-sm')); ?></h3> 

<table class="table table-striped table-condesed table-bordered">
<thead>
                <tr>
				  <?php /*<th></th>*/ ?>
				  <th>ID</th>
				  <th>Тип комнаты</th>
				  <th>Цена в день</th>
				  <th>Статус комнаты</th>
				  <th>Вместимость</th>
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
		<?php 
		switch ($message->type) {
				case 'lux':
				$type='Люкс';
				break;
				
				case 'halflux':
				$type='Полулюкс';
				break;
				
				case 'default':
				$type='Обычная';
				break;
	   }
	   
	   echo $type;
	   ?>
	   </td>
		
		<td>
		<?php echo $message->price; ?>
		</td>
		
		<td>
		<?php 
		switch ($message->status) {
				case 'free':
				$status='Свободная';
				break;
				
				case 'close':
				$status='Занята';
				break;
				
				case 'reserv':
				$status='Бронь';
				break;
	   }
	   
	   echo $status;
	   ?>
	   </td>
	   
	   <td>
		<?php echo $message->count; ?>
	   </td>
	
		<td>
			<div class="btn-group">
            <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></button>
            <ul class="dropdown-menu pull-right">
              <?php if ($message->status=='free' || $message->status=='reserv') { ?><li><a href="/room/registration/<?php echo $message->id ?>"><span class="glyphicon glyphicon-cog"></span> Поселить в комнате клиентов</a></li> <?php } ?>
			  <li><a href="/room/edit/<?php echo $message->id ?>"><span class="glyphicon glyphicon-info-sign"></span> Редактировать инф.о комнате</a></li>
              <li class="divider"></li>
              <li><a href="/room/delete/<?php echo $message->id ?>" onclick="return confirm('Вы точно хотите удалить данную комнату?')"><span class="glyphicon glyphicon-remove"></span> Удалить</a></li>
            </ul>
          </div>
		</td>
	  
	</tr>
	</tbody>
	<?php } } ?>
</table>
<?php echo $pagination ?> 