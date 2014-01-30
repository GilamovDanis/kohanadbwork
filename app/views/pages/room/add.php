<form action="/room/add/" class="form-horizontal" role="form" method="post">
<fieldset>
<legend>Добавление комнаты</legend>
<br />
  
		    <div class="form-group">
			<label for="type" class="col-sm-3 control-label">Тип комнаты</label>
				<div class="col-sm-3">
				<select name="type" class="form-control">
				<?php 
				$rooms_type=array('lux'=>'Люкс','halflux'=>'Полулюкс','default'=>'Обычный');
				
					foreach ($rooms_type as $key=>$value) {
					?>
					<option value="<?php echo $key?>" <?php if (Request::current()->post('type')==$key) echo 'selected="selected"' ?>><?php echo $value?></option>
					<?php
					}
				?>
				</select>
				</div>
			</div>
			
			<div class="form-group">
				<label for="price" class="col-sm-3 control-label">Цена комнаты (руб в день)</label>
						<div class="col-sm-2">
						<input type="number" name="price" class="form-control" id="price" class="input-mini" value="<?php echo HTML::chars(Request::current()->post('price'))?>">
						</div>
			</div>
			
			<div class="form-group">
			<label for="status" class="col-sm-3 control-label">Статус комнаты</label>
				<div class="col-sm-3">
				<select name="status" class="form-control">
				<?php 
				$rooms_status=array('free'=>'Свободна','close'=>'Занята','reserv'=>'Бронь');
				
					foreach ($rooms_status as $key=>$value) {
					?>
					<option value="<?php echo $key?>" <?php if (Request::current()->post('type')==$key) echo 'selected="selected"' ?>><?php echo $value?></option>
					<?php
					}
				?>
				</select>
				</div>
			</div>
			
			<div class="form-group">
				<label for="count" class="col-sm-3 control-label">Вместимость</label>
						<div class="col-sm-2">
						<input type="number" name="count" class="form-control" id="count" class="input-mini" value="<?php echo HTML::chars(Request::current()->post('count'))?>">
						</div>
			</div>
			
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
				<button type="submit" class="btn btn-primary">Добавление</button>
				</div>
			</div>
	</fieldset>
</form>