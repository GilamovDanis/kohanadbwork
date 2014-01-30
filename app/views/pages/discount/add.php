<form action="/discount/add/" class="form-horizontal" role="form" method="post">
<fieldset>
<legend>Добавление скидки</legend>
<br />
  
		    <div class="form-group">
			    <label for="name" class="col-sm-3 control-label">Название скидки</label>
				<div class="col-sm-6">
				<input type="text" name="name" class="form-control" id="name" value="<?php echo HTML::chars(Request::current()->post('name'))?>" placeholder="Введите имя">
				</div>
		    </div>
			
			<div class="form-group">
			    <label for="discount" class="col-sm-3 control-label">Процент</label>
				<div class="col-sm-3">
				<input type="text" name="discount" class="form-control" id="discount" value="<?php echo HTML::chars(Request::current()->post('discount'))?>" placeholder="процент от скидки">
				</div>
		    </div>
			
			
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-9">
				<button type="submit" class="btn btn-primary">Добавить</button>
				</div>
			</div>
	</fieldset>
</form>