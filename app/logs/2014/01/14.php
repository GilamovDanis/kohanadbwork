<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-14 17:11:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'where clause' [ SELECT COUNT(*) AS count FROM `rooms` WHERE `user_id` IS NULL ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php:251
2014-01-14 17:11:46 --- DEBUG: #0 J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 J:\xampp\htdocs\Kursa4\app\classes\Controller\App\Frontend.php(21): Kohana_Database_Query->execute()
#2 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Controller.php(69): Controller_App_Frontend->before()
#3 [internal function]: Kohana_Controller->execute()
#4 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#5 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 J:\xampp\htdocs\Kursa4\index.php(122): Kohana_Request->execute()
#8 {main} in J:\xampp\htdocs\Kursa4\modules\database\classes\Kohana\Database\Query.php:251
2014-01-14 19:20:00 --- CRITICAL: View_Exception [ 0 ]: The requested view client/add could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php:137
2014-01-14 19:20:00 --- DEBUG: #0 J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php(137): Kohana_View->set_filename('client/add')
#1 J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php(30): Kohana_View->__construct('client/add', NULL)
#2 J:\xampp\htdocs\Kursa4\app\classes\Controller\Clients.php(51): Kohana_View::factory('client/add')
#3 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Controller.php(84): Controller_Clients->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#6 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\xampp\htdocs\Kursa4\index.php(122): Kohana_Request->execute()
#9 {main} in J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php:137
2014-01-14 19:20:07 --- CRITICAL: View_Exception [ 0 ]: The requested view clients/add could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php:137
2014-01-14 19:20:07 --- DEBUG: #0 J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php(137): Kohana_View->set_filename('clients/add')
#1 J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php(30): Kohana_View->__construct('clients/add', NULL)
#2 J:\xampp\htdocs\Kursa4\app\classes\Controller\Clients.php(51): Kohana_View::factory('clients/add')
#3 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Controller.php(84): Controller_Clients->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Clients))
#6 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\xampp\htdocs\Kursa4\index.php(122): Kohana_Request->execute()
#9 {main} in J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php:137
2014-01-14 19:24:26 --- CRITICAL: View_Exception [ 0 ]: The requested view pages/clients/add could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php:137
2014-01-14 19:24:26 --- DEBUG: #0 J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php(137): Kohana_View->set_filename('pages/clients/a...')
#1 J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php(30): Kohana_View->__construct('pages/clients/a...', NULL)
#2 J:\xampp\htdocs\Kursa4\app\classes\Controller\Client.php(51): Kohana_View::factory('pages/clients/a...')
#3 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Controller.php(84): Controller_Client->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Client))
#6 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 J:\xampp\htdocs\Kursa4\index.php(122): Kohana_Request->execute()
#9 {main} in J:\xampp\htdocs\Kursa4\system\classes\Kohana\View.php:137
2014-01-14 19:28:41 --- CRITICAL: Kohana_Exception [ 0 ]: The surname property does not exist in the Model_Client class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in J:\xampp\htdocs\Kursa4\modules\orm\classes\Kohana\ORM.php:702
2014-01-14 19:28:41 --- DEBUG: #0 J:\xampp\htdocs\Kursa4\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('surname', 'Gilamov')
#1 J:\xampp\htdocs\Kursa4\modules\orm\classes\Kohana\ORM.php(804): Kohana_ORM->__set('surname', 'Gilamov')
#2 J:\xampp\htdocs\Kursa4\app\classes\Model\Client.php(23): Kohana_ORM->values(Array, Array)
#3 J:\xampp\htdocs\Kursa4\app\classes\Controller\Client.php(43): Model_Client->create_client(Array, Array)
#4 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Controller.php(84): Controller_Client->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Client))
#7 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 J:\xampp\htdocs\Kursa4\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 J:\xampp\htdocs\Kursa4\index.php(122): Kohana_Request->execute()
#10 {main} in J:\xampp\htdocs\Kursa4\modules\orm\classes\Kohana\ORM.php:702