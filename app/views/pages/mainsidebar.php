<div class="panel panel-default">
  <div class="panel-heading">Меню:</div>
  <div class="panel-body">
	<ul class="list-group">
	<a href="/client/add" class="list-group-item">Регистрация клиента</a>
	<a href="/room/registration" class="list-group-item">Регистрация в гостинице</a>
	<li class="list-group-item">- Отчеты -</li>
	<a href="/room/" class="list-group-item">Список комнат <span class="badge"><?php echo $rooms_count ?></span></a>
	<a href="/client/" class="list-group-item">Список клиентов <span class="badge"><?php echo $clients_count ?></span></a>
	<a href="/discount/" class="list-group-item">Список скидок <span class="badge"><?php echo $discounts_count ?></span></a>
	</ul>
  </div>
</div>