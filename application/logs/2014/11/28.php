<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-28 09:54:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: _SESSION ~ APPPATH\classes\Controller\Home.php [ 15 ] in D:\WWW\ctguhelp\application\classes\Controller\Home.php:15
2014-11-28 09:54:03 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Home.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 15, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Home.php:15
2014-11-28 09:59:54 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 09:59:54 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 10:18:16 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 10:18:16 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 10:19:43 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 10:19:43 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 10:19:43 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 10:19:43 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 10:19:45 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 10:19:45 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 10:19:47 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 10:19:47 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-28 10:22:19 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 35 ] in file:line
2014-11-28 10:22:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-28 10:22:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 35 ] in file:line
2014-11-28 10:22:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-28 10:22:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 35 ] in file:line
2014-11-28 10:22:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-28 10:24:21 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 35 ] in file:line
2014-11-28 10:24:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-28 10:25:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:25:35 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:28:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:28:52 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:32:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:32:18 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:37:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:37:35 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:37:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:37:56 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:14 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:24 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:29 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:31 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:40 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: score_array ~ APPPATH\views\score_list.php [ 12 ] in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:42 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\score_list.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 12, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\score_list.php:12
2014-11-28 10:41:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: t6 ~ APPPATH\views\course.php [ 23 ] in D:\WWW\ctguhelp\application\views\course.php:23
2014-11-28 10:41:55 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\course.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 23, Array)
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
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\course.php:23
2014-11-28 10:44:13 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 55 ] in file:line
2014-11-28 10:44:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-28 10:46:05 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 32 ] in file:line
2014-11-28 10:46:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-28 13:52:12 --- CRITICAL: ErrorException [ 1 ]: Call to a member function innertext() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 61 ] in file:line
2014-11-28 13:52:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-28 13:58:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 85 ] in file:line
2014-11-28 13:58:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-28 14:59:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: year_array ~ APPPATH\views\navbar.php [ 13 ] in D:\WWW\ctguhelp\application\views\navbar.php:13
2014-11-28 14:59:45 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\navbar.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 13, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#3 D:\WWW\ctguhelp\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\WWW\ctguhelp\application\views\template.php(11): Kohana_View->__toString()
#5 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#6 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#7 D:\WWW\ctguhelp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\WWW\ctguhelp\application\classes\Controller\Main.php(29): Kohana_Controller_Template->after()
#9 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\navbar.php:13
2014-11-28 15:01:54 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\navbar.php [ 13 ] in D:\WWW\ctguhelp\application\views\navbar.php:13
2014-11-28 15:01:54 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\navbar.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 13, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#3 D:\WWW\ctguhelp\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\WWW\ctguhelp\application\views\template.php(11): Kohana_View->__toString()
#5 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#6 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#7 D:\WWW\ctguhelp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\WWW\ctguhelp\application\classes\Controller\Main.php(30): Kohana_Controller_Template->after()
#9 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\navbar.php:13
2014-11-28 15:01:56 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\navbar.php [ 13 ] in D:\WWW\ctguhelp\application\views\navbar.php:13
2014-11-28 15:01:56 --- DEBUG: #0 D:\WWW\ctguhelp\application\views\navbar.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 13, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#3 D:\WWW\ctguhelp\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 D:\WWW\ctguhelp\application\views\template.php(11): Kohana_View->__toString()
#5 D:\WWW\ctguhelp\system\classes\Kohana\View.php(61): include('D:\WWW\ctguhelp...')
#6 D:\WWW\ctguhelp\system\classes\Kohana\View.php(348): Kohana_View::capture('D:\WWW\ctguhelp...', Array)
#7 D:\WWW\ctguhelp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\WWW\ctguhelp\application\classes\Controller\Main.php(30): Kohana_Controller_Template->after()
#9 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(87): Controller_Main->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#15 {main} in D:\WWW\ctguhelp\application\views\navbar.php:13
2014-11-28 15:07:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find() on a non-object ~ MODPATH\ctgu\classes\Analysis\Main.php [ 36 ] in file:line
2014-11-28 15:07:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-28 15:13:02 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:13:02 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('[{"year":"2014"...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:14:22 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:14:22 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('[{"year":"2014"...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:14:23 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:14:23 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('[{"year":"2014"...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:14:23 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:14:23 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('[{"year":"2014"...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:19 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:19 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('"[{\"year\":\"2...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:19 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:19 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('"[{\"year\":\"2...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:20 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:20 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('"[{\"year\":\"2...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:20 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:20 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('"[{\"year\":\"2...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:21 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:21 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('"[{\"year\":\"2...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:24 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:24 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('"[{\"year\":\"2...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:27 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:27 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('"[{\"year\":\"2...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:28 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:15:28 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(2, 'Invalid argumen...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Ctgu\Ctgu.php(23): Ctgu->get_year_array('"[{\"year\":\"2...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Ctgu_Ctgu->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ctgu_Ctgu))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-28 15:36:21 --- CRITICAL: View_Exception [ 0 ]: The requested view test could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in D:\WWW\ctguhelp\system\classes\Kohana\View.php:137
2014-11-28 15:36:21 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\View.php(137): Kohana_View->set_filename('test')
#1 D:\WWW\ctguhelp\system\classes\Kohana\View.php(30): Kohana_View->__construct('test', NULL)
#2 D:\WWW\ctguhelp\application\classes\Controller\Home.php(14): Kohana_View::factory('test')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Home->action_del()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\system\classes\Kohana\View.php:137
2014-11-28 15:38:00 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Main.php [ 19 ] in D:\WWW\ctguhelp\application\classes\Controller\Main.php:19
2014-11-28 15:38:00 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Main.php(19): Kohana_Core::error_handler(2048, 'Creating defaul...', 'D:\WWW\ctguhelp...', 19, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(69): Controller_Main->before()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Main.php:19