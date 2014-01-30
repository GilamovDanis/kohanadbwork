<?php defined('SYSPATH') OR die('No direct access allowed.');

/**
 * Настройки для базовой инициализации(по умолчанию)
 */
return array
(
	/**
	* Соль для Cookie
	*/
	'cookiesalt' => '421341kd;sakda;dasdadkadas',
        
     /**
     * Временная зона 
     */
     'timezone'  => 'Europe/Moscow',
        
     /**
     * Язык
     */
     'lang'  => 'ru-ru',
        
      /**
      * Уровень ошибок (Production|development)
      */
      'error_level' => Kohana::DEVELOPMENT,
	
	/**
	 * Подключаемые Модули
	 */
	'modules' => array(	
		/**
		* System modules
		*/
		'cache'      => MODPATH.'cache',         // Caching with multiple backends
		'database'   => MODPATH.'database',      // Database access
		'orm'        => MODPATH.'orm',           // Object Relationship Mapping
		'htmlpurifier' => MODPATH.'htmlpurifier',// HtmlPurifier
		'pagination' => MODPATH.'pagination',    // Pagination
		
		/**
		* APP modules
		*/
		),
);
