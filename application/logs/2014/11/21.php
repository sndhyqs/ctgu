<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-21 09:43:11 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 19 ] in file:line
2014-11-21 09:43:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 09:43:32 --- CRITICAL: ErrorException [ 2 ]: include(url) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\Kohana\Core.php [ 829 ] in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-21 09:43:32 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::error_handler(2, 'include(url) [<...', 'D:\WWW\ctguhelp...', 829, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::load()
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(19): Kohana_Core::load('url')
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): ctgu::instance()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-21 09:44:34 --- CRITICAL: ErrorException [ 2048 ]: Non-static method Kohana_Config::load() should not be called statically ~ MODPATH\ctgu\classes\ctgu.php [ 19 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:19
2014-11-21 09:44:34 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(19): Kohana_Core::error_handler(2048, 'Non-static meth...', 'D:\WWW\ctguhelp...', 19, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(19): Kohana_Config::load()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): ctgu::instance()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:19
2014-11-21 10:06:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:06:43 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:25 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:48 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:49 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:50 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:50 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:50 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:50 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:51 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:51 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:51 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:51 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:52 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:52 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:52 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:52 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:52 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:08:53 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:09:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:09:31 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:09:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:09:32 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:09:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:09:33 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:09:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:09:33 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:09:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:09:34 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:27
2014-11-21 10:10:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  check_code ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:28
2014-11-21 10:10:01 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 28, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:28
2014-11-21 10:14:36 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Response::factory() must be an array, null given, called in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php on line 27 and defined ~ SYSPATH\classes\Kohana\Response.php [ 29 ] in D:\WWW\ctguhelp\system\classes\Kohana\Response.php:29
2014-11-21 10:14:36 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Response.php(29): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\WWW\ctguhelp...', 29, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(27): Kohana_Response::factory(NULL)
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Response.php:29
2014-11-21 10:24:06 --- CRITICAL: ErrorException [ 2 ]: file_put_contents(./data/1.jpg) [function.file-put-contents]: failed to open stream: No such file or directory ~ APPPATH\classes\Controller\Api\home.php [ 16 ] in file:line
2014-11-21 10:24:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', 'D:\WWW\ctguhelp...', 16, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(16): file_put_contents('./data/1.jpg', '??????JFIF?????...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-21 10:29:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: APPPATH ~ APPPATH\classes\Controller\Api\home.php [ 16 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:16
2014-11-21 10:29:39 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 16, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:16
2014-11-21 10:30:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: application ~ APPPATH\classes\Controller\Api\home.php [ 16 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:16
2014-11-21 10:30:09 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 16, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:16
2014-11-21 10:30:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: application ~ APPPATH\classes\Controller\Api\home.php [ 16 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:16
2014-11-21 10:30:10 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 16, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:16
2014-11-21 10:30:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: application ~ APPPATH\classes\Controller\Api\home.php [ 16 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:16
2014-11-21 10:30:11 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 16, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:16
2014-11-21 10:31:07 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 10:31:07 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 10:39:01 --- CRITICAL: ErrorException [ 1 ]: Access to undeclared static property: Ctgu::$config ~ MODPATH\ctgu\classes\ctgu.php [ 29 ] in file:line
2014-11-21 10:39:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:10:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index:  default ~ APPPATH\classes\Controller\Api\home.php [ 17 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:17
2014-11-21 11:10:16 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\WWW\ctguhelp...', 17, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:17
2014-11-21 11:17:17 --- CRITICAL: ErrorException [ 1 ]: Call to private method Ctgu::get_check_code() from context 'Controller_Api_Home' ~ APPPATH\classes\Controller\Api\home.php [ 14 ] in file:line
2014-11-21 11:17:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:18:26 --- CRITICAL: ErrorException [ 1 ]: Class 'CheckCode' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:18:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:15 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:16 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:20 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:23:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:23:45 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 11:23:45 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(28): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 11:23:46 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 11:23:46 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(28): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 11:24:51 --- CRITICAL: ErrorException [ 1 ]: Class 'check_code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:24:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:24:52 --- CRITICAL: ErrorException [ 1 ]: Class 'check_code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:24:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:24:52 --- CRITICAL: ErrorException [ 1 ]: Class 'check_code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:24:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:24:53 --- CRITICAL: ErrorException [ 1 ]: Class 'check_code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:24:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:24:53 --- CRITICAL: ErrorException [ 1 ]: Class 'check_code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:24:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:24:53 --- CRITICAL: ErrorException [ 1 ]: Class 'check_code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:24:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:24:53 --- CRITICAL: ErrorException [ 1 ]: Class 'check_code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:24:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:24:54 --- CRITICAL: ErrorException [ 1 ]: Class 'check_code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:24:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:24:54 --- CRITICAL: ErrorException [ 1 ]: Class 'check_code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:24:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:14 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:23 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:28 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 11:27:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 11:27:34 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 11:27:34 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(28): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 13:25:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 13:25:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:25:27 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Code' not found ~ MODPATH\ctgu\classes\ctgu.php [ 30 ] in file:line
2014-11-21 13:25:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:29:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method File::getFileName() ~ MODPATH\ctgu\classes\Check\Code.php [ 11 ] in file:line
2014-11-21 13:29:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:36:45 --- CRITICAL: ErrorException [ 2 ]: opendir(./image/data/,./image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:36:45 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(./image...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('./image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('./image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:38:02 --- CRITICAL: ErrorException [ 2 ]: opendir(./image/data/,./image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:38:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(./image...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('./image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('./image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:38:02 --- CRITICAL: ErrorException [ 2 ]: opendir(./image/data/,./image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:38:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(./image...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('./image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('./image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:38:03 --- CRITICAL: ErrorException [ 2 ]: opendir(./image/data/,./image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:38:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(./image...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('./image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('./image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:39:14 --- CRITICAL: ErrorException [ 2 ]: opendir(image/data/,image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:39:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(image/d...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:39:14 --- CRITICAL: ErrorException [ 2 ]: opendir(image/data/,image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:39:14 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(image/d...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:39:15 --- CRITICAL: ErrorException [ 2 ]: opendir(image/data/,image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:39:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(image/d...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:39:15 --- CRITICAL: ErrorException [ 2 ]: opendir(image/data/,image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:39:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(image/d...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:39:15 --- CRITICAL: ErrorException [ 2 ]: opendir(image/data/,image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:39:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(image/d...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:39:16 --- CRITICAL: ErrorException [ 2 ]: opendir(image/data/,image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:39:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(image/d...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:39:16 --- CRITICAL: ErrorException [ 2 ]: opendir(image/data/,image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:39:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(image/d...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:39:16 --- CRITICAL: ErrorException [ 2 ]: opendir(image/data/,image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:39:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(image/d...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:39:16 --- CRITICAL: ErrorException [ 2 ]: opendir(image/data/,image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:39:16 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(image/d...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:39:17 --- CRITICAL: ErrorException [ 2 ]: opendir(image/data/,image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(image/d...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:40:20 --- CRITICAL: ErrorException [ 2 ]: opendir(/image/data/,/image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:40:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/image/...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:40:20 --- CRITICAL: ErrorException [ 2 ]: opendir(/image/data/,/image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:40:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/image/...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:40:20 --- CRITICAL: ErrorException [ 2 ]: opendir(/image/data/,/image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:40:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/image/...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:40:21 --- CRITICAL: ErrorException [ 2 ]: opendir(/image/data/,/image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:40:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/image/...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:40:21 --- CRITICAL: ErrorException [ 2 ]: opendir(/image/data/,/image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:40:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/image/...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:40:21 --- CRITICAL: ErrorException [ 2 ]: opendir(/image/data/,/image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:40:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/image/...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:40:21 --- CRITICAL: ErrorException [ 2 ]: opendir(/image/data/,/image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 14 ] in file:line
2014-11-21 13:40:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/image/...', 'D:\WWW\ctguhelp...', 14, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(14): opendir('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:41:07 --- CRITICAL: ErrorException [ 2 ]: opendir(/image/data/,/image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 17 ] in file:line
2014-11-21 13:41:07 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/image/...', 'D:\WWW\ctguhelp...', 17, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(17): opendir('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:41:08 --- CRITICAL: ErrorException [ 2 ]: opendir(/image/data/,/image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 17 ] in file:line
2014-11-21 13:41:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/image/...', 'D:\WWW\ctguhelp...', 17, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(17): opendir('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:41:10 --- CRITICAL: ErrorException [ 2 ]: opendir(/image/data/,/image/data/) [function.opendir]: 系统找不到指定的路径。 (code: 3) ~ MODPATH\ctgu\classes\Check\File.php [ 17 ] in file:line
2014-11-21 13:41:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'opendir(/image/...', 'D:\WWW\ctguhelp...', 17, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(17): opendir('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2014-11-21 13:41:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: FileArray ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:41:19 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:41:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:21
2014-11-21 13:41:53 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:21
2014-11-21 13:41:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:21
2014-11-21 13:41:54 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:21
2014-11-21 13:42:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:21
2014-11-21 13:42:16 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:21
2014-11-21 13:43:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:21
2014-11-21 13:43:36 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:21
2014-11-21 13:49:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:49:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:50:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:50:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:50:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:50:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:50:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:50:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:50:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:50:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:50:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:50:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:50:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:50:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:51:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:51:17 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:00 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:01 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:01 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:02 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:02 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:02 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:02 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:03 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:03 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:03 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:20 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:25 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:26 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 18 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:26 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 18, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:18
2014-11-21 13:52:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 20 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:52:46 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 20, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 20 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:00 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 20, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 20 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:01 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 20, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 20 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:02 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 20, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 20 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:02 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 20, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 20 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:02 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 20, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 20 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:03 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 20, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 20 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:04 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 20, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 20 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:09 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 20, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(11): Check_File::getFileName('MODPATH/ctgu/im...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:20
2014-11-21 13:53:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:53:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:53:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:53:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:53:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:53:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:53:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:53:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:53:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:53:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:53:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:53:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:53:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:53:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:53:37 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 13:53:37 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(28): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 13:53:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:53:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:53:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:53:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:53:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:53:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:53:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:53:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:20 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 13:54:20 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(28): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 13:54:21 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 13:54:21 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(28): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 13:54:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:54:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\Check\Code.php [ 6 ] in file:line
2014-11-21 13:54:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:55:07 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 13:55:07 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(28): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 13:55:07 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 13:55:07 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(28): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 13:56:58 --- CRITICAL: ErrorException [ 1 ]: Class 'MyMain' not found ~ MODPATH\ctgu\classes\Check\Code.php [ 12 ] in file:line
2014-11-21 13:56:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:57:58 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'temFile' ~ MODPATH\ctgu\classes\Check\Code.php [ 11 ] in file:line
2014-11-21 13:57:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 13:58:17 --- CRITICAL: ErrorException [ 1 ]: Class 'MyMain' not found ~ MODPATH\ctgu\classes\Check\Code.php [ 13 ] in file:line
2014-11-21 13:58:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:17:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fopen ~ MODPATH\ctgu\classes\Check\File.php [ 22 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:22
2014-11-21 14:17:10 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 22, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Check\Code.php(12): Check_File::getFileName('/image/data/')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(31): Check_Code->discernCheckCode()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->get_check_code()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Check\File.php:22
2014-11-21 14:18:12 --- CRITICAL: ErrorException [ 1 ]: Class 'MyMain' not found ~ MODPATH\ctgu\classes\Check\Code.php [ 13 ] in file:line
2014-11-21 14:18:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:19:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Check_Main' not found ~ MODPATH\ctgu\classes\Check\Code.php [ 12 ] in file:line
2014-11-21 14:19:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:19:28 --- CRITICAL: ErrorException [ 1 ]: Class 'YImage' not found ~ MODPATH\ctgu\classes\Check\Main.php [ 63 ] in file:line
2014-11-21 14:19:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:20:11 --- CRITICAL: ErrorException [ 1 ]: Class 'YImage' not found ~ MODPATH\ctgu\classes\Check\Main.php [ 63 ] in file:line
2014-11-21 14:20:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:20:12 --- CRITICAL: ErrorException [ 1 ]: Class 'YImage' not found ~ MODPATH\ctgu\classes\Check\Main.php [ 63 ] in file:line
2014-11-21 14:20:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:20:45 --- CRITICAL: ErrorException [ 1 ]: Class 'YImage' not found ~ MODPATH\ctgu\classes\Check\Code.php [ 22 ] in file:line
2014-11-21 14:20:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:37:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.', expecting ',' or ';' ~ MODPATH\ctgu\classes\ctgu.php [ 11 ] in file:line
2014-11-21 14:37:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:53 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:54 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:54 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:54 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:55 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:55 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:55 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:56 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:56 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:56 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:56 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:39:57 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 28 ] in file:line
2014-11-21 14:39:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:41:09 --- CRITICAL: ErrorException [ 2048 ]: Accessing static property Ctgu::$check_code as non static ~ MODPATH\ctgu\classes\ctgu.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:41:09 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(21): Kohana_Core::error_handler(2048, 'Accessing stati...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(29): Ctgu->__construct()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:41:53 --- CRITICAL: ErrorException [ 2048 ]: Accessing static property Ctgu::$check_code as non static ~ MODPATH\ctgu\classes\ctgu.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:41:53 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(21): Kohana_Core::error_handler(2048, 'Accessing stati...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(29): Ctgu->__construct()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:41:55 --- CRITICAL: ErrorException [ 2048 ]: Accessing static property Ctgu::$check_code as non static ~ MODPATH\ctgu\classes\ctgu.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:41:55 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(21): Kohana_Core::error_handler(2048, 'Accessing stati...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(29): Ctgu->__construct()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:41:55 --- CRITICAL: ErrorException [ 2048 ]: Accessing static property Ctgu::$check_code as non static ~ MODPATH\ctgu\classes\ctgu.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:41:55 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(21): Kohana_Core::error_handler(2048, 'Accessing stati...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(29): Ctgu->__construct()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:42:28 --- CRITICAL: ErrorException [ 2048 ]: Accessing static property Ctgu::$check_code as non static ~ MODPATH\ctgu\classes\ctgu.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:42:28 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(21): Kohana_Core::error_handler(2048, 'Accessing stati...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(29): Ctgu->__construct()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:42:29 --- CRITICAL: ErrorException [ 2048 ]: Accessing static property Ctgu::$check_code as non static ~ MODPATH\ctgu\classes\ctgu.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:42:29 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(21): Kohana_Core::error_handler(2048, 'Accessing stati...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(29): Ctgu->__construct()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:42:29 --- CRITICAL: ErrorException [ 2048 ]: Accessing static property Ctgu::$check_code as non static ~ MODPATH\ctgu\classes\ctgu.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:42:29 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(21): Kohana_Core::error_handler(2048, 'Accessing stati...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(29): Ctgu->__construct()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:42:29 --- CRITICAL: ErrorException [ 2048 ]: Accessing static property Ctgu::$check_code as non static ~ MODPATH\ctgu\classes\ctgu.php [ 21 ] in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:42:29 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(21): Kohana_Core::error_handler(2048, 'Accessing stati...', 'D:\WWW\ctguhelp...', 21, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php(29): Ctgu->__construct()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\ctgu.php:21
2014-11-21 14:43:58 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ MODPATH\ctgu\classes\ctgu.php [ 27 ] in file:line
2014-11-21 14:43:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:44:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_check_code() ~ MODPATH\ctgu\classes\ctgu.php [ 23 ] in file:line
2014-11-21 14:44:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:44:43 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_check_code() ~ MODPATH\ctgu\classes\ctgu.php [ 23 ] in file:line
2014-11-21 14:44:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:44:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_check_code() ~ MODPATH\ctgu\classes\ctgu.php [ 23 ] in file:line
2014-11-21 14:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:53:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Ctgu::getget_check_code() ~ APPPATH\classes\Controller\Api\home.php [ 15 ] in file:line
2014-11-21 14:53:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:53:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Ctgu::getget_check_code() ~ APPPATH\classes\Controller\Api\home.php [ 15 ] in file:line
2014-11-21 14:53:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:53:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Ctgu::getget_check_code() ~ APPPATH\classes\Controller\Api\home.php [ 15 ] in file:line
2014-11-21 14:53:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:53:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Ctgu::getget_check_code() ~ APPPATH\classes\Controller\Api\home.php [ 15 ] in file:line
2014-11-21 14:53:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:53:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Ctgu::getget_check_code() ~ APPPATH\classes\Controller\Api\home.php [ 15 ] in file:line
2014-11-21 14:53:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 14:54:28 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 14:54:28 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(29): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 14:55:17 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 14:55:17 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(29): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 14:57:05 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 14:57:05 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(29): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:23:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uri ~ MODPATH\ctgu\classes\HttpClient.php [ 24 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:24
2014-11-21 15:23:01 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 24, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(18): HttpClient->get('http://www.ctgu...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:24
2014-11-21 15:23:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uri ~ MODPATH\ctgu\classes\HttpClient.php [ 24 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:24
2014-11-21 15:23:21 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 24, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(18): HttpClient->get('http://www.ctgu...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:24
2014-11-21 15:23:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uri ~ MODPATH\ctgu\classes\HttpClient.php [ 24 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:24
2014-11-21 15:23:22 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 24, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(18): HttpClient->get('http://www.ctgu...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:24
2014-11-21 15:24:04 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:24:04 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(21): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(27): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:24:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::uri() ~ MODPATH\ctgu\classes\HttpClient.php [ 24 ] in file:line
2014-11-21 15:24:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:24:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Response::uri() ~ MODPATH\ctgu\classes\HttpClient.php [ 24 ] in file:line
2014-11-21 15:24:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:26:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\ctgu\classes\HttpClient.php [ 24 ] in file:line
2014-11-21 15:26:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:26:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\ctgu\classes\HttpClient.php [ 24 ] in file:line
2014-11-21 15:26:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:26:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\ctgu\classes\HttpClient.php [ 24 ] in file:line
2014-11-21 15:26:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:26:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\ctgu\classes\HttpClient.php [ 24 ] in file:line
2014-11-21 15:26:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:35:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: uri ~ MODPATH\ctgu\classes\HttpClient.php [ 17 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:17
2014-11-21 15:35:03 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 17, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(16): HttpClient->__construct()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:17
2014-11-21 15:36:20 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:36:20 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(21): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(27): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:36:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 17 ] in file:line
2014-11-21 15:36:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:36:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 17 ] in file:line
2014-11-21 15:36:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:36:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 17 ] in file:line
2014-11-21 15:36:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:36:50 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 17 ] in file:line
2014-11-21 15:36:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:36:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 17 ] in file:line
2014-11-21 15:36:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:36:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 17 ] in file:line
2014-11-21 15:36:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:37:31 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:37:31 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(21): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(27): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:39:19 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:39:19 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(21): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(27): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:39:49 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:39:49 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(21): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(27): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:40:00 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:40:00 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(21): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(27): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 15:42:18 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Request::$execute ~ MODPATH\ctgu\classes\HttpClient.php [ 24 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:24
2014-11-21 15:42:18 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(24): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\WWW\ctguhelp...', 24, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(17): HttpClient->get()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:24
2014-11-21 15:43:14 --- CRITICAL: ErrorException [ 1 ]: Call to a member function execute() on a non-object ~ MODPATH\ctgu\classes\HttpClient.php [ 24 ] in file:line
2014-11-21 15:43:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 15:45:51 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:45:51 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:10 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:10 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:15 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:15 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:16 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:16 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:16 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:16 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:25 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:25 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:25 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:25 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:25 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:25 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:26 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:26 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:42 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:42 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:49 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:49 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:49 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:58:49 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:01 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:01 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:28 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:28 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:30 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:30 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:34 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:34 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:35 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:35 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:36 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:36 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:36 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:36 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:37 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:37 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:37 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:37 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:46 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:46 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:46 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:46 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:57 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:57 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:58 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:58 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:58 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:58 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:59 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:59 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:59 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:59 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:59 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 15:59:59 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:02:53 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:02:53 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:06 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:06 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:06 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:07 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:07 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:45 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:45 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:45 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:45 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:46 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:46 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:46 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:46 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:48 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:48 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:48 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:06:48 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:07:56 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:07:56 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:07:56 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:07:56 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:11:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function init() ~ MODPATH\ctgu\classes\HttpClient.php [ 17 ] in file:line
2014-11-21 16:11:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-21 16:13:20 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 84: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:13:20 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(21): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(27): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:13:46 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 84: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:13:46 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(21): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(27): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:19:50 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:50 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:51 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:51 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:51 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:51 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:51 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:51 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:51 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:51 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:52 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:52 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:52 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:52 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:52 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:52 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:52 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:52 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:53 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:53 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:53 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 151 ] in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:19:53 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('CNZZDATA1000500...', NULL)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('CNZZDATA1000500...')
#2 D:\WWW\ctguhelp\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Cookie.php:67
2014-11-21 16:26:19 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 84: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:26:19 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(28): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:27:02 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:27:02 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(28): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:28:21 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:28:21 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(28): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:28:35 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:28:35 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(28): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:29:29 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:29:29 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(28): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:29:35 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:29:35 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(28): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:52:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array ~ MODPATH\ctgu\classes\HttpClient.php [ 37 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:37
2014-11-21 16:52:09 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(37): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 37, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(19): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:37
2014-11-21 16:53:29 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:53:29 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(28): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 16:55:57 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for HttpClient::__construct(), called in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php on line 18 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 23 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:23
2014-11-21 16:55:57 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 23, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(18): HttpClient->__construct()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:23
2014-11-21 16:55:59 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for HttpClient::__construct(), called in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php on line 18 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 23 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:23
2014-11-21 16:55:59 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 23, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(18): HttpClient->__construct()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:23
2014-11-21 16:56:00 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for HttpClient::__construct(), called in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php on line 18 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 23 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:23
2014-11-21 16:56:00 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 23, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(18): HttpClient->__construct()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:23
2014-11-21 17:24:40 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-21 17:24:40 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(28): Ctgu->__construct()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138