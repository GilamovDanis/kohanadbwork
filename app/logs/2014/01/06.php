<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-06 18:08:21 --- CRITICAL: View_Exception [ 0 ]: The requested view /pages/rulesreg could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-06 18:08:21 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(137): Kohana_View->set_filename('/pages/rulesreg')
#1 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(30): Kohana_View->__construct('/pages/rulesreg', NULL)
#2 J:\xampp\htdocs\Gromyko\modules\user\views\user\auth\sidebarregistration.php(10): Kohana_View::factory('/pages/rulesreg')
#3 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#4 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#5 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 J:\xampp\htdocs\Gromyko\app\views\templates\two-right.php(17): Kohana_View->__toString()
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(61): include('J:\xampp\htdocs...')
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php(348): Kohana_View::capture('J:\xampp\htdocs...', Array)
#9 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 J:\xampp\htdocs\Gromyko\app\classes\Controller\App\Frontend.php(28): Kohana_Controller_Template->after()
#11 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(87): Controller_App_Frontend->after()
#12 [internal function]: Kohana_Controller->execute()
#13 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Auth))
#14 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#17 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\View.php:137
2014-01-06 18:09:56 --- CRITICAL: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'kohana' ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 108 ] in J:\xampp\htdocs\Gromyko\modules\database\classes\Kohana\Database\MySQL.php:75
2014-01-06 18:09:56 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\modules\database\classes\Kohana\Database\MySQL.php(75): Kohana_Database_MySQL->_select_db('kohana')
#1 J:\xampp\htdocs\Gromyko\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#2 J:\xampp\htdocs\Gromyko\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#8 J:\xampp\htdocs\Gromyko\modules\user\classes\Controller\User\Auth.php(39): Kohana_ORM::factory('User')
#9 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(84): Controller_User_Auth->action_registration()
#10 [internal function]: Kohana_Controller->execute()
#11 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Auth))
#12 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#15 {main} in J:\xampp\htdocs\Gromyko\modules\database\classes\Kohana\Database\MySQL.php:75