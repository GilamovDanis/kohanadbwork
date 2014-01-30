<?php defined('SYSPATH') or die('No direct access allowed.');

/**
 * Базовый контроллер для пользовательской части
 */
abstract class Controller_App_Frontend extends Controller_Template {
	
	public $auto_render	= TRUE;
	public $template	= 'templates/two-small-left';
	public $user 		= NULL;


		public function before()
		{
		parent::before();
		
		Settings::instance();
		
		// Левый сайдбар по умолчанию
		Settings::set('left_sidebar',View::factory('pages/mainsidebar'));
		
		// Счетчики
		$clients_count = DB::select(DB::expr('COUNT(*) AS count'))->from('clients')->execute()->get('count');
		$rooms_count = DB::select(DB::expr('COUNT(*) AS count'))->from('rooms')->execute()->get('count');
		$discounts_count = DB::select(DB::expr('COUNT(*) AS count'))->from('discounts')->execute()->get('count');
		
		Settings::set('clients_count',$clients_count);
		Settings::set('rooms_count',$rooms_count);
		Settings::set('discounts_count',$discounts_count);
		}
		
		public function after()
		{
		View::set_global(Settings::instance()->get_all());
				
		parent::after();	
		}
}