<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-26 10:27:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::set() ~ APPPATH\classes\Controller\Api\Ctgu.php [ 18 ] in file:line
2014-11-26 10:27:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:28:28 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL.php:359
2014-11-26 10:28:28 --- DEBUG: #0 D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\WWW\ctguhelp\application\classes\Controller\Api\Ctgu.php(18): Kohana_ORM::factory('user')
#7 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Ctgu->action_list()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#13 {main} in D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL.php:359
2014-11-26 10:28:52 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL.php:359
2014-11-26 10:28:52 --- DEBUG: #0 D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\WWW\ctguhelp\application\classes\Controller\Api\Ctgu.php(18): Kohana_ORM::factory('user')
#7 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Ctgu->action_list()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#13 {main} in D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL.php:359
2014-11-26 10:28:55 --- CRITICAL: Database_Exception [ 1146 ]: Table 'kohana.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL.php:359
2014-11-26 10:28:55 --- DEBUG: #0 D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 D:\WWW\ctguhelp\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 D:\WWW\ctguhelp\application\classes\Controller\Api\Ctgu.php(18): Kohana_ORM::factory('user')
#7 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Ctgu->action_list()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#13 {main} in D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL.php:359
2014-11-26 10:32:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: login_tag ~ MODPATH\ctgu\classes\BaseCtgu.php [ 62 ] in D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php:62
2014-11-26 10:32:07 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 62, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\CtguMain.php(25): BaseCtgu->login()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\CtguMain.php(29): Controller_Api_CtguMain->login()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(69): Controller_Api_CtguMain->before()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php:62
2014-11-26 10:32:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-26 10:32:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:32:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-26 10:32:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:33:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-26 10:33:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:50:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_IF, expecting ',' or ';' ~ MODPATH\ctgu\classes\BaseCtgu.php [ 52 ] in file:line
2014-11-26 10:50:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:53:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-26 10:53:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:55:53 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 29 ] in file:line
2014-11-26 10:55:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:56:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 29 ] in file:line
2014-11-26 10:56:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:56:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-26 10:56:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:56:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-26 10:56:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:56:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-26 10:56:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:57:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 29 ] in file:line
2014-11-26 10:57:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 10:58:56 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\ctgu\classes\HttpClient.php [ 62 ] in file:line
2014-11-26 10:58:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 11:12:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 78 ] in file:line
2014-11-26 11:12:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 11:14:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-26 11:14:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 11:22:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 74 ] in file:line
2014-11-26 11:22:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:32:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 73 ] in file:line
2014-11-26 14:32:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:35:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 29 ] in file:line
2014-11-26 14:35:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:38:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 73 ] in file:line
2014-11-26 14:38:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:41:20 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 72 ] in file:line
2014-11-26 14:41:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 14:41:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: result ~ APPPATH\classes\Controller\Api\CtguMain.php [ 29 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\CtguMain.php:29
2014-11-26 14:41:40 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\CtguMain.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 29, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\CtguMain.php(34): Controller_Api_CtguMain->login()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(69): Controller_Api_CtguMain->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\CtguMain.php:29
2014-11-26 14:52:44 --- CRITICAL: ErrorException [ 4096 ]: Method BaseMessage::__toString() must return a string value ~ APPPATH\classes\Controller\Api\CtguMain.php [ 28 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\CtguMain.php:28
2014-11-26 14:52:44 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\CtguMain.php(28): Kohana_Core::error_handler(4096, 'Method BaseMess...', 'D:\WWW\ctguhelp...', 28, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\CtguMain.php(35): Controller_Api_CtguMain->login()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(69): Controller_Api_CtguMain->before()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\CtguMain.php:28
2014-11-26 15:13:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 79 ] in file:line
2014-11-26 15:13:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 15:37:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH\classes\Controller\Api\CtguMain.php [ 19 ] in file:line
2014-11-26 15:37:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 15:40:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get_login_tag() on a non-object ~ APPPATH\classes\Controller\Api\Ctgu.php [ 11 ] in file:line
2014-11-26 15:40:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 15:44:43 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 31 ] in file:line
2014-11-26 15:44:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 15:56:30 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:56:30 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user(1, 1)
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:56:59 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:56:59 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:01 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:01 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:01 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:01 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:02 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:02 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:32 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:32 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:33 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:33 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:34 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:34 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:34 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:34 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:35 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:35 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:35 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:35 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:35 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:35 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:35 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:35 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:35 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:35 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:36 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:36 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:36 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:36 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:36 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:36 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:37 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 15:57:37 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 16:11:20 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Model\User.php [ 11 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 16:11:20 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(11): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 11, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112240', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:11
2014-11-26 16:13:17 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$useranme ~ APPPATH\classes\Model\User.php [ 12 ] in D:\WWW\ctguhelp\application\classes\Model\User.php:12
2014-11-26 16:13:17 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Model\User.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\WWW\ctguhelp...', 12, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\application\classes\Model\User.php:12
2014-11-26 16:13:40 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-11-26 16:13:40 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\WWW\ctguhelp...', 33, Array)
#1 D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #86, 'username')
#2 D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('username')
#3 D:\WWW\ctguhelp\application\classes\Model\User.php(12): Kohana_Database_Result->offsetGet('username')
#4 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-26 16:13:42 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-11-26 16:13:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\WWW\ctguhelp...', 33, Array)
#1 D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #86, 'username')
#2 D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('username')
#3 D:\WWW\ctguhelp\application\classes\Model\User.php(12): Kohana_Database_Result->offsetGet('username')
#4 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-26 16:13:46 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-11-26 16:13:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\WWW\ctguhelp...', 33, Array)
#1 D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #86, 'username')
#2 D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('username')
#3 D:\WWW\ctguhelp\application\classes\Model\User.php(12): Kohana_Database_Result->offsetGet('username')
#4 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-26 16:13:52 --- CRITICAL: ErrorException [ 2 ]: mysql_data_seek() expects parameter 2 to be long, string given ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 33 ] in file:line
2014-11-26 16:13:52 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mysql_data_seek...', 'D:\WWW\ctguhelp...', 33, Array)
#1 D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\MySQL\Result.php(33): mysql_data_seek(Resource id #86, 'username')
#2 D:\WWW\ctguhelp\modules\database\classes\Kohana\Database\Result.php(240): Kohana_Database_MySQL_Result->seek('username')
#3 D:\WWW\ctguhelp\application\classes\Model\User.php(12): Kohana_Database_Result->offsetGet('username')
#4 D:\WWW\ctguhelp\application\classes\Controller\Home.php(13): Model_User->save_user('2011112243', '1')
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-26 16:22:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 31 ] in file:line
2014-11-26 16:22:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 16:53:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-26 16:53:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-26 16:56:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 13 ] in D:\WWW\ctguhelp\application\views\score_list.php:13
2014-11-26 16:56:28 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 13, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#3 D:\WWW\ctguhelp\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\WWW\ctguhelp\application\views\template.php(10): Kohana_View->__toString()
#5 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#6 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#7 D:\WWW\ctguhelp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\WWW\ctguhelp\application\classes\Controller\Main.php(22): Kohana_Controller_Template->after()
#9 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:13
2014-11-26 16:56:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 13 ] in D:\WWW\ctguhelp\application\views\score_list.php:13
2014-11-26 16:56:40 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 13, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#3 D:\WWW\ctguhelp\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\WWW\ctguhelp\application\views\template.php(10): Kohana_View->__toString()
#5 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#6 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#7 D:\WWW\ctguhelp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\WWW\ctguhelp\application\classes\Controller\Main.php(22): Kohana_Controller_Template->after()
#9 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:13