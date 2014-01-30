<form action="/client/edit/<?php echo $client->id?>" class="form-horizontal" role="form" method="post">
<fieldset>
<legend>Редактирование клиента</legend>
<br />
  
		   <div class="form-group">
			<label for="surname" class="col-sm-3 control-label">Фамилия</label>
				<div class="col-sm-6">
				<input type="text" name="surname" class="form-control" id="surname" value="<?php echo $client->surname?>" placeholder="Введите фамилию">
				</div>
			</div>
			
			<div class="form-group">
			<label for="name" class="col-sm-3 control-label">Имя</label>
				<div class="col-sm-6">
				<input type="text" name="name" class="form-control" id="name" value="<?php echo $client->name?>" placeholder="Введите имя">
				</div>
			</div>
			
			<div class="form-group">
			<label for="patronymic" class="col-sm-3 control-label">Отчество</label>
				<div class="col-sm-6">
				<input type="text" name="patronymic" class="form-control" id="patronymic" value="<?php echo $client->patronymic?>" placeholder="Введите отчество">
				</div>
			</div>
			
			<div class="form-group">
			<label for="type" class="col-sm-3 control-label">Статус клиента</label>
				<div class="col-sm-2">
				<select name="type_id" class="form-control">
				<?php 
				$all_discount=ORM::factory('Discount')->find_all();
				
					foreach ($all_discount as $discount) {
					?>
					<option value="<?php echo $discount->id?>" <?php if ($client->type_id==$discount->id) echo 'selected="selected"' ?>><?php echo $discount->name?></option>
					<?php
					}
				?>
				</select>
				</div>
			</div>
			
			<div class="form-group">
			<label for="description" class="col-sm-3 control-label">Описание</label>
				<div class="col-sm-6">
				<textarea name="description" class="form-control" rows="6" placeholder="Введите описание"><?php echo $client->description?></textarea>
				</div>
			</div>
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
				<button type="submit" class="btn btn-primary">Редактировать</button>
				</div>
			</div>
	</fieldset>
</form>