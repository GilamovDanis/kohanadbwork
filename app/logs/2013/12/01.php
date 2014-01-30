<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-01 01:10:46 --- CRITICAL: Kohana_Exception [ 0 ]: Config group must be a string ~ SYSPATH\classes\Kohana\Config.php [ 103 ] in J:\xampp\htdocs\PegasCMS\app\classes\App\Theme.php:42
2013-12-01 01:10:46 --- DEBUG: #0 J:\xampp\htdocs\PegasCMS\app\classes\App\Theme.php(42): Kohana_Config->load(true)
#1 J:\xampp\htdocs\PegasCMS\app\classes\App\Theme.php(29): App_Theme->__construct(NULL)
#2 J:\xampp\htdocs\PegasCMS\app\classes\Controller\App\Frontend.php(16): App_Theme::instance()
#3 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\xampp\htdocs\PegasCMS\index.php(130): Kohana_Request->execute()
#9 {main} in J:\xampp\htdocs\PegasCMS\app\classes\App\Theme.php:42
2013-12-01 01:11:33 --- CRITICAL: Kohana_Exception [ 0 ]: Directory DOCROOT\themes\web\ must be writable ~ APPPATH\classes\App\Theme.php [ 98 ] in J:\xampp\htdocs\PegasCMS\app\classes\App\Theme.php:92
2013-12-01 01:11:33 --- DEBUG: #0 J:\xampp\htdocs\PegasCMS\app\classes\App\Theme.php(92): App_Theme->_add_theme('J:\xampp\htdocs...')
#1 J:\xampp\htdocs\PegasCMS\app\classes\App\Theme.php(69): App_Theme->set_theme('web')
#2 J:\xampp\htdocs\PegasCMS\app\classes\Controller\App\Frontend.php(17): App_Theme->init()
#3 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\xampp\htdocs\PegasCMS\index.php(130): Kohana_Request->execute()
#9 {main} in J:\xampp\htdocs\PegasCMS\app\classes\App\Theme.php:92
2013-12-01 01:11:52 --- CRITICAL: View_Exception [ 0 ]: The requested view default could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\PegasCMS\system\classes\Kohana\View.php:137
2013-12-01 01:11:52 --- DEBUG: #0 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default')
#1 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('default', NULL)
#2 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('default')
#3 J:\xampp\htdocs\PegasCMS\app\classes\Controller\App\Frontend.php(21): Kohana_Controller_Template->before()
#4 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\PegasCMS\index.php(130): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\PegasCMS\system\classes\Kohana\View.php:137
2013-12-01 01:15:29 --- CRITICAL: View_Exception [ 0 ]: The requested view inc/breadcrumb could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\PegasCMS\system\classes\Kohana\View.php:137
2013-12-01 01:15:29 --- DEBUG: #0 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\View.php(137): Kohana_View->set_filename('inc/breadcrumb')
#1 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\View.php(30): Kohana_View->__construct('inc/breadcrumb', NULL)
#2 J:\xampp\htdocs\PegasCMS\themes\web\views\layouts\default.php(18): Kohana_View::factory('inc/breadcrumb')
#3 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#4 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#5 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#6 J:\xampp\htdocs\PegasCMS\app\classes\Controller\App\Frontend.php(33): Kohana_Controller_Template->after()
#7 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#8 [internal function]: Kohana_Controller->execute()
#9 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 J:\xampp\htdocs\PegasCMS\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 J:\xampp\htdocs\PegasCMS\index.php(130): Kohana_Request->execute()
#13 {main} in J:\xampp\htdocs\PegasCMS\system\classes\Kohana\View.php:137