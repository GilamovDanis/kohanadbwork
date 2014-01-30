<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Базовый контроллер для AJAX запросов
 */
abstract class Controller_App_Ajax extends Controller {

	public function before()
	{
		// Только для AJAX запросов
		/*
		if(!$this->request->is_ajax()) {
			throw HTTP_Exception::factory(500,'Not access');
		}*/
	
	return parent::before();
	}

}