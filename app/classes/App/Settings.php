<?php defined('SYSPATH') or die('No direct script access.'); 
 
/**
* Общий вход для всех настроек приложения
*/
class App_Settings {
	
		// Массив с настройками
		protected static $_data = array();
		
	    protected static $_instance = NULL;

		
		public static function instance()
		{
			if(Settings::$_instance == NULL) {
				Settings::$_instance = new self();
			}
				
			return Settings::$_instance;
		}
		
		public function __construct()
		{
			if (Settings::base_config() == NULL) {
				throw new App_Exception('Not read Settings  config');
			}
		}
		
		public static function base_config()
		{
			if (Settings::$_data == NULL) {
			Settings::$_data = (array)Kohana::$config->load('settings');
			} 
		
		return Settings::$_data;
		}
		
		public static function set($key, $val){
			if (!empty(Settings::$_data[$key])) {
			Settings::$_data[$key] .= $val;
			} else {
			Settings::$_data[$key] = $val;
			}

			return TRUE;
		} 
		
		public static function get($str)
		{
			if (isset(Settings::$_data[$str]))
				return Settings::$_data[$str];
			
			return NULL;
		}
		
		public function get_all()
		{
			return (array)Settings::$_data;
		}

}