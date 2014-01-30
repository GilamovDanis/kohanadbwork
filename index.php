<?php
/**
 * Pegas CMS (Dbwork)
 * @version  1.0.0
 * 
 * Content Managment System.
 * Based on Kohana Framework 3.3.1 (peregrinus) 
 * 
 * @author Gilamov Danis <ds-92@yandex.ru>
 * @link http://gilamov.ru
 */
 
define('DS',DIRECTORY_SEPARATOR);

/**
 * Папка с файлами приложения 
 */
$application = 'app';

/**
 * Папка с системными файлами (изменять нельзя)
 * Для изменения методов ,используйте наследование в папке (app)
 */
$system = 'system';

/**
 * Папка с модулями
 */
$modules = 'modules';

/**
 * Папка со стронними библиотеками ,плагинами
 */
$libs = 'libs';

/**
 * Папка со загрузками
 */
$uploads = 'uploads';

/**
 * Базовое расширение исполняемых файлов
 */
define('EXT', '.php');

/**
 * Уровень ошибок
 * @link http://www.php.net/manual/errorfunc.configuration#ini.error-reporting
 *
 * Типы уровней: E_ALL | E_STRICT  ||  E_ALL ^ E_NOTICE || E_ALL & ~E_DEPRECATED
 */
//error_reporting(E_ALL | E_STRICT);
error_reporting(E_ALL);

/**
 * Пути к папкам 
 *
 * @link http://kohanaframework.org/guide/using.configuration
 */

define('DOCROOT', realpath(dirname(__FILE__)).DIRECTORY_SEPARATOR);

if (!is_dir($application) AND is_dir(DOCROOT.$application))
	$application = DOCROOT.$application;

if (!is_dir($system) AND is_dir(DOCROOT.$system))
	$system = DOCROOT.$system;
	
if (!is_dir($modules) AND is_dir(DOCROOT.$modules))
	$modules = DOCROOT.$modules;
	
if (!is_dir($libs) AND is_dir(DOCROOT.$libs))
	$libs = DOCROOT.$libs;

if (!is_dir($uploads) AND is_dir(DOCROOT.$uploads))
	$uploads = DOCROOT.$uploads;

// Константы пути
define('APPPATH', realpath($application).DIRECTORY_SEPARATOR);
define('SYSPATH', realpath($system).DIRECTORY_SEPARATOR);
define('MODPATH', realpath($modules).DIRECTORY_SEPARATOR);
define('LIBSPATH', realpath($libs).DIRECTORY_SEPARATOR);
define('UPLOADSPATH', realpath($uploads).DIRECTORY_SEPARATOR);

// Очистка конфигурационных переменных
unset($application, $modules, $system, $libs, $uploads);


/**
 * Константа: Старт отсчета времени
 */
if ( ! defined('KOHANA_START_TIME'))
{
	define('KOHANA_START_TIME', microtime(TRUE));
}

/**
 * Константа: Старт отсчета выделяемой памяти
 */
if ( ! defined('KOHANA_START_MEMORY'))
{
	define('KOHANA_START_MEMORY', memory_get_usage());
}

// Bootstrap the application
require APPPATH.'bootstrap'.EXT;


if (PHP_SAPI == 'cli') // Try and load minion
{
	class_exists('Minion_Task') OR die('Please enable the Minion module for CLI support.');
	set_exception_handler(array('Minion_Exception', 'handler'));

	Minion_Task::factory(Minion_CLI::options())->execute();
}
else
{
	/**
	 * Execute the main request. A source of the URI can be passed, eg: $_SERVER['PATH_INFO'].
	 * If no source is specified, the URI will be automatically detected.
	 */
	echo Request::factory(TRUE, array(), FALSE)
		->execute()
		->send_headers(TRUE)
		->body();
}
