<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-08 15:31:14 --- CRITICAL: Kohana_Exception [ 0 ]: The persona property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php:603
2014-01-08 15:31:14 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('persona')
#1 J:\xampp\htdocs\Gromyko\modules\user\views\user\main.php(1): Kohana_ORM->__get('persona')
#2 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#3 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 J:\xampp\htdocs\Gromyko\app\views\templates\one.php(11): Kohana_View->__toString()
#6 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#10 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#11 [internal function]: Kohana_Controller->execute()
#12 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#13 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#16 {main} in J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php:603