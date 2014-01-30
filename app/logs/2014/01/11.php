<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-11 16:47:01 --- CRITICAL: ReflectionException [ 0 ]: Function tel() does not exist ~ SYSPATH\classes\Kohana\Validation.php [ 396 ] in J:\xampp\htdocs\Gromyko\system\classes\Kohana\Validation.php:396
2014-01-11 16:47:01 --- DEBUG: #0 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Validation.php(396): ReflectionFunction->__construct('tel')
#1 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(1266): Kohana_Validation->check()
#2 J:\xampp\htdocs\Gromyko\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(Object(Validation))
#3 J:\xampp\htdocs\Gromyko\modules\user\classes\Model\User.php(138): Kohana_ORM->update(Object(Validation))
#4 J:\xampp\htdocs\Gromyko\modules\user\classes\Controller\User.php(50): Model_User->update_user(Array, Array)
#5 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Controller.php(84): Controller_User->action_edit()
#6 [internal function]: Kohana_Controller->execute()
#7 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 J:\xampp\htdocs\Gromyko\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 J:\xampp\htdocs\Gromyko\index.php(122): Kohana_Request->execute()
#11 {main} in J:\xampp\htdocs\Gromyko\system\classes\Kohana\Validation.php:396