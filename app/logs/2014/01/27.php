<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-27 13:14:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: clients_count ~ APPPATH\classes\Controller\App\Frontend.php [ 28 ] in J:\xampp\htdocs\Kursa4\app\classes\Controller\App\Frontend.php:28
2014-01-27 13:14:42 --- DEBUG: #0 J:\xampp\htdocs\Kursa4\app\classes\Controller\App\Frontend.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'J:\xampp\htdocs...', 28, Array)
#1 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#2 [internal function]: Kohana_Controller->execute()
#3 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#4 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 J:\xampp\htdocs\Kursa4\index.php(123): Kohana_Request->execute()
#7 {main} in J:\xampp\htdocs\Kursa4\app\classes\Controller\App\Frontend.php:28