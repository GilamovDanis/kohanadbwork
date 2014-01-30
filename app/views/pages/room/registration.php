<form action="/room/registration/<?php echo $room->id?>" class="form-horizontal" role="form" method="post">
<fieldset>
<legend>Регистрация в гостинице</legend>
<br />
<?php if (DB::select(DB::expr('COUNT(*) AS count'))->from('clients_rooms')->where('room_id','=',$room->id)->execute()->get('count')>=$room->count) { ?>
<div class="form-group">
				<p class="text-info col-sm-3">
				Выбран Номер <?php echo $room->id?> <br />
				<?php 
				switch ($room->type) {
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
				?>
				Тип комнаты: <?php echo $type; ?> <br />
				<?php 
				switch ($room->status) {
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
				?>
				Статус комнаты: <?php echo $status; ?> <br />
				Вместимость комнаты: <?php echo $room->count; ?> <br />
				</p>
		</div>
<?php } else { ?>

		<div class="form-group">
				<p class="text-info col-sm-3">
				Выбран Номер <?php echo $room->id?> <br />
				<?php 
				switch ($room->type) {
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
				?>
				Тип комнаты: <?php echo $type; ?> <br />
				<?php 
				switch ($room->status) {
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
				?>
				Статус комнаты: <?php echo $status; ?> <br />
				Вместимость комнаты: <?php echo $room->count; ?> <br />
				</p>
		</div>
  
		<div class="form-group">
			<label for="type" class="col-sm-3 control-label">Выберите клиента</label>
				<div class="col-sm-3">
				<select name="client_id" class="form-control">
				<?php 
				$all_client=ORM::factory('Client')->find_all();
				
					foreach ($all_client as $client) {
					?>
					<option value="<?php echo $client->id?>" <?php if (Request::current()->post('client_id')==$client->id) echo 'selected="selected"' ?>><?php echo $client->surname .'  '.$client->name?></option>
					<?php
					}
				?>
				</select>
				</div>
		</div>
		
		<div class="form-group">
			<label for="starttime" class="col-sm-3 control-label">Дата заезда</label>
				<div class="col-sm-2">
				<input type="text" name="starttime" class="form-control" id="starttime" value="<?php echo Request::current()->post('starttime')?HTML::chars(Request::current()->post('starttime')):date('d-m-Y'); ?>" placeholder="">
				</div>
		</div>
		 
		 <div class="form-group">
				<label for="day" class="col-sm-3 control-label">Срок пребывания(дни)</label>
						<div class="col-sm-2">
						<input type="number" name="day" class="form-control" id="day" class="input-mini" value="<?php echo HTML::chars(Request::current()->post('day'))?>">
						</div>
		 </div>
		
		
			
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
				<button type="submit" class="btn btn-primary">Регистрация</button>
				</div>
			</div>
<?php } ?>
	</fieldset>
</form>