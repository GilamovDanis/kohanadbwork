<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-16 12:54:55 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kursa4.client' doesn't exist [ SELECT * FROM `Client` WHERE (`name` LIKE '' OR `type_id` = '2' OR `surname` LIKE 'Gi%') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php:251
2014-01-16 12:54:55 --- DEBUG: #0 J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 J:\xampp\htdocs\Kursa4\app\classes\Controller\Client.php(146): Kohana_Database_Query->execute()
#2 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Controller.php(84): Controller_Client->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Client))
#5 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\xampp\htdocs\Kursa4\index.php(122): Kohana_Request->execute()
#8 {main} in J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php:251
2014-01-16 20:15:44 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=< '4')' at line 1 [ SELECT * FROM `rooms` WHERE (`type` = 'lux' AND `status` = 'free' OR `count` =< '4') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php:251
2014-01-16 20:15:44 --- DEBUG: #0 J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 J:\xampp\htdocs\Kursa4\app\classes\Controller\Room.php(180): Kohana_Database_Query->execute()
#2 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Controller.php(84): Controller_Room->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Room))
#5 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\xampp\htdocs\Kursa4\index.php(122): Kohana_Request->execute()
#8 {main} in J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php:251
2014-01-16 20:15:54 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=< '4')' at line 1 [ SELECT * FROM `rooms` WHERE (`type` = 'lux' OR `status` = 'free' OR `count` =< '4') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php:251
2014-01-16 20:15:54 --- DEBUG: #0 J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 J:\xampp\htdocs\Kursa4\app\classes\Controller\Room.php(180): Kohana_Database_Query->execute()
#2 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Controller.php(84): Controller_Room->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Room))
#5 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\xampp\htdocs\Kursa4\index.php(122): Kohana_Request->execute()
#8 {main} in J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php:251
2014-01-16 20:17:15 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '=< '4')' at line 1 [ SELECT * FROM `rooms` WHERE (`type` = 'lux' OR `status` = 'free' OR `count` =< '4') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php:251
2014-01-16 20:17:15 --- DEBUG: #0 J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 J:\xampp\htdocs\Kursa4\app\classes\Controller\Room.php(180): Kohana_Database_Query->execute()
#2 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Controller.php(84): Controller_Room->action_search()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Room))
#5 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\xampp\htdocs\Kursa4\index.php(122): Kohana_Request->execute()
#8 {main} in J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php:251
2014-01-16 20:29:46 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/room/registartion could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php:137
2014-01-16 20:29:46 --- DEBUG: #0 J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/room/regi...')
#1 J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/room/regi...', NULL)
#2 J:\xampp\htdocs\Kursa4\app\classes\Controller\Room.php(61): Kohana_View::factory('pages/room/regi...')
#3 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Controller.php(84): Controller_Room->action_registration()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Room))
#6 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\xampp\htdocs\Kursa4\index.php(122): Kohana_Request->execute()
#9 {main} in J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php:137