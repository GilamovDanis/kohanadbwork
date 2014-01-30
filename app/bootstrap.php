<?php defined('SYSPATH') or die('No direct script access.');

require SYSPATH.'classes/Kohana/Core'.EXT;

if (is_file(APPPATH.'classes/Kohana'.EXT)) {
	require APPPATH.'classes/Kohana'.EXT;
} else {
	require SYSPATH.'classes/Kohana'.EXT;
}

/**
 * Enable the Kohana auto-loader.
 *
 * @link http://kohanaframework.org/guide/using.autoloading
 * @link http://www.php.net/manual/function.spl-autoload-register
 */
spl_autoload_register(array('Kohana', 'auto_load'));
spl_autoload_register(array('Kohana', 'auto_load_lowercase'));

/**
 * Enable the Kohana auto-loader for unserialization.
 *
 * @link http://www.php.net/manual/function.spl-autoload-call
 * @link http://www.php.net/manual/var.configuration#unserialize-callback-func
 */
ini_set('unserialize_callback_func', 'spl_autoload_call');

/**
 * Set the mb_substitute_character to "none"
 *
 * @link http://www.php.net/manual/function.mb-substitute-character.php
 */
mb_substitute_character('none');

/**
 * Initialize Kohana, setting the default options.
 *
 * The following options are available:
 *
 * - string   base_url    path, and optionally domain, of your application   NULL
 * - string   index_file  name of your index file, usually "index.php"       index.php
 * - string   charset     internal character set used for input and output   utf-8
 * - string   cache_dir   set the internal cache directory                   APPPATH/cache
 * - integer  cache_life  lifetime, in seconds, of items cached              60
 * - boolean  errors      enable or disable error handling                   TRUE
 * - boolean  profile     enable or disable internal profiling               TRUE
 * - boolean  caching     enable or disable internal caching                 FALSE
 * - boolean  expose      set the X-Powered-By header                        FALSE
 */
Kohana::init(array(
	'base_url'   => '/',
	'index_file' => FALSE,
	'charset'    => 'utf-8',
	'caching'    => FALSE,
	'cache_dir'  => APPPATH.'/cache',
	'cache_life' => 1024,
	'errors'     => TRUE,
	'profiling'   =>TRUE,
	'expose'     => FALSE
));


/**
 * Добавление класса настроек
 */
Kohana::$config->attach(new Config_File);


/**
 * Получение настроек для начальной инициализации
 */
$boostrap=(array)Kohana::$config->load('boostrap');


/**
 * Соль для Cookie
 */
Cookie::$salt = $boostrap['cookiesalt'];

/**
 * Временная зона
 */
date_default_timezone_set($boostrap['timezone']);

/**
 * Locale
 */
setlocale(LC_ALL, 'ru_RU.utf-8');


/**
 * Set the default language
 */
I18n::lang($boostrap['lang']);

if (isset($_SERVER['SERVER_PROTOCOL']))
{
	// Replace the default protocol.
	HTTP::$protocol = $_SERVER['SERVER_PROTOCOL'];
}

/**
 * Настройка уровней показа ошибок
 */
Kohana::$environment = $boostrap['error_level'];


/**
 * Добавление класса логов
 */
Kohana::$log->attach(new Log_File(APPPATH.'logs'));


/**
 * Enable modules. Modules are referenced by a relative or absolute path.
 */
Kohana::modules($boostrap['modules']);

/**
 * Set the routes. Each route must have a minimum of a name, a URI and a set of
 * defaults for the URI.
 */

// Клиент добавление/удаление/просмотр
Route::set('client', 'client(/<action>(/<id>))',array('action'=>'add|delete|edit|search','id' =>'[0-9]+'))
	->defaults(array(
		'controller' => 'client',
		'action' => 'index'
		));
		
// Клиент AJAX просмотр
Route::set('ajax/client', 'ajax/client(/<action>)')
	->defaults(array(
		'controller' => 'ajax_client',
		'action' => 'index'
		));

// Комнаты добавление/удаление/просмотр
Route::set('room', 'room(/<action>(/<id>))',array('action'=>'add|delete|registration|search','id' =>'[0-9]+'))
	->defaults(array(
		'controller' => 'room',
		'action' => 'index'
		));

// Скидки добавление/удаление/просмотр
Route::set('discount', 'discount(/<action>(/<id>))',array('action'=>'add|delete','id' =>'[0-9]+'))
	->defaults(array(
		'controller' => 'discount',
		'action' => 'index'
		));
 
Route::set('default', '(<controller>(/<action>(/<id>)))')
	->defaults(array(
		'controller' => 'Main',
		'action'     => 'index',
	));