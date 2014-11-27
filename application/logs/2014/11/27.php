<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-27 16:53:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-27 16:53:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 16:54:09 --- CRITICAL: View_Exception [ 0 ]: The requested view navber could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\WWW\ctguhelp\system\classes\Kohana\View.php:137
2014-11-27 16:54:09 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\View.php(137): Kohana_View->set_filename('navber')
#1 D:\WWW\ctguhelp\system\classes\Kohana\View.php(30): Kohana_View->__construct('navber', NULL)
#2 D:\WWW\ctguhelp\application\views\score_list.php(2): Kohana_View::factory('navber')
#3 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#4 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#5 D:\WWW\ctguhelp\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 D:\WWW\ctguhelp\application\views\template.php(10): Kohana_View->__toString()
#7 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#8 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#9 D:\WWW\ctguhelp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 D:\WWW\ctguhelp\application\classes\Controller\Main.php(22): Kohana_Controller_Template->after()
#11 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#12 [internal function]: Kohana_Controller->execute()
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#14 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#17 {main} in D:\WWW\ctguhelp\system\classes\Kohana\View.php:137
2014-11-27 16:55:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH\views\navbar.php [ 3 ] in D:\WWW\ctguhelp\application\views\navbar.php:3
2014-11-27 16:55:15 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\navbar.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 3, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#3 D:\WWW\ctguhelp\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\WWW\ctguhelp\application\views\score_list.php(2): Kohana_View->__toString()
#5 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#6 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#7 D:\WWW\ctguhelp\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 D:\WWW\ctguhelp\application\views\template.php(10): Kohana_View->__toString()
#9 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#10 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#11 D:\WWW\ctguhelp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#12 D:\WWW\ctguhelp\application\classes\Controller\Main.php(22): Kohana_Controller_Template->after()
#13 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#14 [internal function]: Kohana_Controller->execute()
#15 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#16 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#18 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#19 {main} in D:\WWW\ctguhelp\application\views\navbar.php:3
2014-11-27 17:07:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 35 ] in file:line
2014-11-27 17:07:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 17:07:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 35 ] in file:line
2014-11-27 17:07:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 17:07:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 35 ] in file:line
2014-11-27 17:07:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 17:07:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 35 ] in file:line
2014-11-27 17:07:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 17:07:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-27 17:07:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 17:17:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-27 17:17:20 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#3 D:\WWW\ctguhelp\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\WWW\ctguhelp\application\views\template.php(12): Kohana_View->__toString()
#5 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#6 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#7 D:\WWW\ctguhelp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\WWW\ctguhelp\application\classes\Controller\Main.php(29): Kohana_Controller_Template->after()
#9 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-27 17:21:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-27 17:21:11 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#3 D:\WWW\ctguhelp\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\WWW\ctguhelp\application\views\template.php(12): Kohana_View->__toString()
#5 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#6 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#7 D:\WWW\ctguhelp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\WWW\ctguhelp\application\classes\Controller\Main.php(29): Kohana_Controller_Template->after()
#9 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-27 17:27:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 83 ] in file:line
2014-11-27 17:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-27 17:30:14 --- CRITICAL: ErrorException [ 1 ]: Class 'RM' not found ~ APPPATH\classes\Model\User.php [ 14 ] in file:line
2014-11-27 17:30:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line