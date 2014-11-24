<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-24 09:19:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Cache' not found ~ APPPATH\classes\Controller\Api\home.php [ 15 ] in file:line
2014-11-24 09:19:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 09:20:05 --- CRITICAL: Cache_Exception [ 0 ]: Failed to load Kohana Cache group: file ~ MODPATH\cache\classes\Kohana\Cache.php [ 127 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:15
2014-11-24 09:20:05 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Kohana_Cache::instance()
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:15
2014-11-24 09:24:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: check_code ~ APPPATH\classes\Controller\Api\home.php [ 26 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:26
2014-11-24 09:24:01 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 26, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:26
2014-11-24 09:59:40 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant NUL - assumed 'NUL' ~ MODPATH\ctgu\classes\Ctgu.php [ 24 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:24
2014-11-24 09:59:40 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(24): Kohana_Core::error_handler(8, 'Use of undefine...', 'D:\WWW\ctguhelp...', 24, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->login()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:24
2014-11-24 10:01:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\ctgu\classes\Ctgu.php [ 27 ] in file:line
2014-11-24 10:01:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 10:02:33 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ MODPATH\ctgu\classes\Ctgu.php [ 27 ] in file:line
2014-11-24 10:02:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 10:02:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cookie ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-24 10:02:56 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->login()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-24 10:03:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cookie ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-24 10:03:29 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->login()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-24 10:03:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cookie ~ MODPATH\ctgu\classes\Ctgu.php [ 32 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-24 10:03:31 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 32, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->login()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:32
2014-11-24 10:04:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: cookie ~ MODPATH\ctgu\classes\Ctgu.php [ 33 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:33
2014-11-24 10:04:38 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 33, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->login()
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:33
2014-11-24 10:04:41 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 10:04:41 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(29): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->login()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 10:05:24 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 10:05:24 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(29): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->login()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 10:11:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function headers() on a non-object ~ MODPATH\ctgu\classes\Ctgu.php [ 64 ] in file:line
2014-11-24 10:11:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 10:43:01 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Ctgu::set_cookie(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 55 and defined ~ MODPATH\ctgu\classes\Ctgu.php [ 59 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:59
2014-11-24 10:43:01 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(59): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 59, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(55): Ctgu->set_cookie()
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(31): Ctgu->set_check_code()
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(24): Ctgu->login()
#4 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->__construct()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#11 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:59
2014-11-24 11:18:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: previous ~ MODPATH\ctgu\classes\Ctgu.php [ 38 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:38
2014-11-24 11:18:07 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 38, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(24): Ctgu->login()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->__construct()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:38
2014-11-24 11:18:12 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:12 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:17 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:17 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: previous ~ MODPATH\ctgu\classes\Ctgu.php [ 38 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:38
2014-11-24 11:18:18 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(38): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 38, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(24): Ctgu->login()
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->__construct()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:38
2014-11-24 11:18:28 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:28 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:29 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:29 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:31 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:31 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:32 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:32 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:34 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:34 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:35 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:35 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:36 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:36 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:37 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:37 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:37 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:37 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:38 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:38 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:39 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:39 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:40 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:40 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:41 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:41 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:55 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:55 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:56 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:56 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:57 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:57 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:58 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:18:58 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:19:00 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php on line 44 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 60 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:19:00 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 60, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(44): HttpClient->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#3 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#9 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:60
2014-11-24 11:21:37 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Ctgu::get(), called in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php on line 15 and defined ~ MODPATH\ctgu\classes\Ctgu.php [ 42 ] in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:42
2014-11-24 11:21:37 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(42): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 42, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get('http://210.42.3...')
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php:42
2014-11-24 11:23:12 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 11:23:12 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(30): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(24): Ctgu->login()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->__construct()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 11:23:34 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 11:23:34 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(28): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(23): Ctgu->login()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->__construct()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 11:23:57 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 11:23:57 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(28): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(23): Ctgu->login()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): Ctgu->__construct()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 11:26:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\Api\home.php [ 14 ] in file:line
2014-11-24 11:26:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 11:26:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH\classes\Controller\Api\home.php [ 14 ] in file:line
2014-11-24 11:26:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:20:09 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::post(), called in D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php on line 43 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 27 ] in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:27
2014-11-24 14:20:09 --- DEBUG: #0 D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php(27): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php(43): HttpClient->post('http://210.42.3...')
#2 D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php(31): BaseCtgu->login()
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): BaseCtgu->__construct()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\modules\ctgu\classes\HttpClient.php:27
2014-11-24 14:21:38 --- CRITICAL: ErrorException [ 1 ]: Cannot access private property Ctgu::$param ~ MODPATH\ctgu\classes\BaseCtgu.php [ 68 ] in file:line
2014-11-24 14:21:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:22:34 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 14:22:34 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php(37): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php(31): BaseCtgu->login()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): BaseCtgu->__construct()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 14:22:47 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 14:22:47 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php(37): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php(31): BaseCtgu->login()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): BaseCtgu->__construct()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 14:26:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Config_Group::post() ~ MODPATH\ctgu\classes\BaseCtgu.php [ 40 ] in file:line
2014-11-24 14:26:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:28:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Config_Group::post() ~ MODPATH\ctgu\classes\BaseCtgu.php [ 40 ] in file:line
2014-11-24 14:28:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:45:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ MODPATH\ctgu\classes\Ctgu.php [ 12 ] in file:line
2014-11-24 14:45:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:46:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\ctgu\classes\Ctgu.php [ 12 ] in file:line
2014-11-24 14:46:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:46:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\ctgu\classes\Ctgu.php [ 12 ] in file:line
2014-11-24 14:46:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:46:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\ctgu\classes\Ctgu.php [ 12 ] in file:line
2014-11-24 14:46:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:46:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\ctgu\classes\Ctgu.php [ 12 ] in file:line
2014-11-24 14:46:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:46:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\ctgu\classes\Ctgu.php [ 12 ] in file:line
2014-11-24 14:46:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:48:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\ctgu\classes\Ctgu.php [ 16 ] in file:line
2014-11-24 14:48:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:48:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\ctgu\classes\Ctgu.php [ 16 ] in file:line
2014-11-24 14:48:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:48:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\ctgu\classes\Ctgu.php [ 16 ] in file:line
2014-11-24 14:48:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:48:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ MODPATH\ctgu\classes\Ctgu.php [ 16 ] in file:line
2014-11-24 14:48:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 14:48:32 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'config' ~ MODPATH\ctgu\classes\Ctgu.php [ 12 ] in file:line
2014-11-24 14:48:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:22:26 --- CRITICAL: ErrorException [ 2 ]: include(html_dom) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\Kohana\Core.php [ 829 ] in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:22:26 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::error_handler(2, 'include(html_do...', 'D:\WWW\ctguhelp...', 829, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::load()
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(12): Kohana_Core::load('html_dom')
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get_score()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:22:56 --- CRITICAL: ErrorException [ 2 ]: include(html_dom) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\Kohana\Core.php [ 829 ] in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:22:56 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::error_handler(2, 'include(html_do...', 'D:\WWW\ctguhelp...', 829, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::load()
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(12): Kohana_Core::load('html_dom')
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get_score()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:23:09 --- CRITICAL: ErrorException [ 2 ]: include(html_dom) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\Kohana\Core.php [ 829 ] in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:23:09 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::error_handler(2, 'include(html_do...', 'D:\WWW\ctguhelp...', 829, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::load()
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(12): Kohana_Core::load('html_dom')
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get_score()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:23:22 --- CRITICAL: ErrorException [ 2 ]: include(html_dom) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\Kohana\Core.php [ 829 ] in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:23:22 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::error_handler(2, 'include(html_do...', 'D:\WWW\ctguhelp...', 829, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::load()
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(12): Kohana_Core::load('html_dom')
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get_score()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:23:47 --- CRITICAL: ErrorException [ 2 ]: include(html_dom) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\Kohana\Core.php [ 829 ] in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:23:47 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::error_handler(2, 'include(html_do...', 'D:\WWW\ctguhelp...', 829, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::load()
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(12): Kohana_Core::load('html_dom')
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get_score()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:26:50 --- CRITICAL: ErrorException [ 2 ]: include(html_dom) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\Kohana\Core.php [ 829 ] in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:26:50 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::error_handler(2, 'include(html_do...', 'D:\WWW\ctguhelp...', 829, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::load()
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(12): Kohana_Core::load('html_dom')
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get_score()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:28:35 --- CRITICAL: ErrorException [ 2 ]: include(html_dom.php) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\Kohana\Core.php [ 829 ] in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:28:35 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::error_handler(2, 'include(html_do...', 'D:\WWW\ctguhelp...', 829, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::load()
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(12): Kohana_Core::load('html_dom.php')
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get_score()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:29:25 --- CRITICAL: ErrorException [ 2 ]: include(html_dom.php) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\Kohana\Core.php [ 829 ] in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:29:25 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::error_handler(2, 'include(html_do...', 'D:\WWW\ctguhelp...', 829, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::load()
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(12): Kohana_Core::load('html_dom.php')
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get_score()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:29:48 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 15:29:48 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php(36): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php(30): BaseCtgu->login()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): BaseCtgu->__construct()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 15:31:23 --- CRITICAL: ErrorException [ 2 ]: include(html_dom.php) [function.include]: failed to open stream: No such file or directory ~ SYSPATH\classes\Kohana\Core.php [ 829 ] in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:31:23 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::error_handler(2, 'include(html_do...', 'D:\WWW\ctguhelp...', 829, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Core.php(829): Kohana_Core::load()
#2 D:\WWW\ctguhelp\modules\ctgu\classes\Ctgu.php(12): Kohana_Core::load('html_dom.php')
#3 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(15): Ctgu->get_score()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#7 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#10 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Core.php:829
2014-11-24 15:32:56 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 15:32:56 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php(36): Kohana_Request->execute()
#4 D:\WWW\ctguhelp\modules\ctgu\classes\BaseCtgu.php(30): BaseCtgu->login()
#5 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(14): BaseCtgu->__construct()
#6 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#12 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\External.php:138
2014-11-24 15:58:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:46 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:48 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:57 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:58 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:58:59 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:58:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:59:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:59:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:59:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:59:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 15:59:00 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 67 ] in file:line
2014-11-24 15:59:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:01:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 69 ] in file:line
2014-11-24 16:01:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:01:31 --- CRITICAL: ErrorException [ 1 ]: Wrong parameters for Exception([string $exception [, long $code [, Exception $previous = NULL]]]) ~ MODPATH\ctgu\classes\BaseCtgu.php [ 40 ] in file:line
2014-11-24 16:01:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:01:41 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 69 ] in file:line
2014-11-24 16:01:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:01:48 --- CRITICAL: ErrorException [ 1 ]: Wrong parameters for Exception([string $exception [, long $code [, Exception $previous = NULL]]]) ~ MODPATH\ctgu\classes\BaseCtgu.php [ 40 ] in file:line
2014-11-24 16:01:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:01:49 --- CRITICAL: ErrorException [ 1 ]: Wrong parameters for Exception([string $exception [, long $code [, Exception $previous = NULL]]]) ~ MODPATH\ctgu\classes\BaseCtgu.php [ 40 ] in file:line
2014-11-24 16:01:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:02:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 69 ] in file:line
2014-11-24 16:02:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:02:47 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 69 ] in file:line
2014-11-24 16:02:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:03:39 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 66 ] in file:line
2014-11-24 16:03:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:08:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function body() on a non-object ~ MODPATH\ctgu\classes\BaseCtgu.php [ 66 ] in file:line
2014-11-24 16:08:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:24:59 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type simple_html_dom_node as array ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:24:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:29:39 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:29:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:29:44 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:29:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:31:46 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 21 ] in file:line
2014-11-24 16:31:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:31:51 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 21 ] in file:line
2014-11-24 16:31:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:32:30 --- CRITICAL: ErrorException [ 1 ]: Call to a member function children() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 21 ] in file:line
2014-11-24 16:32:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:33:54 --- CRITICAL: ErrorException [ 1 ]: Call to a member function childNodes() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:33:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:33:55 --- CRITICAL: ErrorException [ 1 ]: Call to a member function childNodes() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:33:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:33:56 --- CRITICAL: ErrorException [ 1 ]: Call to a member function childNodes() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:33:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:34:26 --- CRITICAL: ErrorException [ 1 ]: Call to a member function firstChild() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:34:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:34:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function firstChild() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:34:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:34:27 --- CRITICAL: ErrorException [ 1 ]: Call to a member function firstChild() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:34:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:34:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function firstChild() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:34:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:34:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function firstChild() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:34:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:34:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function firstChild() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:34:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:34:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function firstChild() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:34:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:34:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function firstChild() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:34:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:34:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function firstChild() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:34:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:34:29 --- CRITICAL: ErrorException [ 1 ]: Call to a member function firstChild() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:34:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:34:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Api\home.php [ 23 ] in file:line
2014-11-24 16:34:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:35:12 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type simple_html_dom_node as array ~ APPPATH\classes\Controller\Api\home.php [ 21 ] in file:line
2014-11-24 16:35:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:35:51 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 21 ] in file:line
2014-11-24 16:35:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:36:08 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 21 ] in file:line
2014-11-24 16:36:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:38:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:38:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:38:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:38:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:38:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:38:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:38:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:38:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:38:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:38:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:38:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:38:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:38:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_FOREACH ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:38:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:39:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Controller\Api\home.php [ 24 ] in file:line
2014-11-24 16:39:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:41:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=', expecting ')' ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-24 16:41:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:49:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[' ~ APPPATH\classes\Controller\Api\home.php [ 24 ] in file:line
2014-11-24 16:49:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:49:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end, expecting T_FUNCTION ~ APPPATH\classes\Controller\Api\home.php [ 41 ] in file:line
2014-11-24 16:49:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:50:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lenth ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:22
2014-11-24 16:50:14 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 22, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:22
2014-11-24 16:50:23 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 4747514 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 230 ] in file:line
2014-11-24 16:50:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:52:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lenth ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:22
2014-11-24 16:52:11 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 22, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:22
2014-11-24 16:52:19 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 4747514 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 230 ] in file:line
2014-11-24 16:52:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:52:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: lenth ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:22
2014-11-24 16:52:43 --- DEBUG: #0 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\WWW\ctguhelp...', 22, Array)
#1 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#7 {main} in D:\WWW\ctguhelp\application\classes\Controller\Api\home.php:22
2014-11-24 16:52:51 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 4747514 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 230 ] in file:line
2014-11-24 16:52:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 16:57:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_FOR, expecting ',' or ';' ~ APPPATH\classes\Controller\Api\home.php [ 25 ] in file:line
2014-11-24 16:57:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:17:06 --- CRITICAL: ErrorException [ 1 ]: Call to a member function children() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 24 ] in file:line
2014-11-24 17:17:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:19:13 --- CRITICAL: ErrorException [ 2 ]: json_encode() [function.json-encode]: recursion detected ~ APPPATH\classes\Controller\Api\home.php [ 27 ] in file:line
2014-11-24 17:19:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(27): json_encode(Array)
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-24 17:19:18 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 36221467 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in file:line
2014-11-24 17:19:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:19:23 --- CRITICAL: ErrorException [ 2 ]: json_encode() [function.json-encode]: recursion detected ~ APPPATH\classes\Controller\Api\home.php [ 27 ] in file:line
2014-11-24 17:19:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(27): json_encode(Array)
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-24 17:19:24 --- CRITICAL: ErrorException [ 2 ]: json_encode() [function.json-encode]: recursion detected ~ APPPATH\classes\Controller\Api\home.php [ 27 ] in file:line
2014-11-24 17:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', 'D:\WWW\ctguhelp...', 27, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(27): json_encode(Array)
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-24 17:19:28 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 36221467 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in file:line
2014-11-24 17:19:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:19:29 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 36221467 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in file:line
2014-11-24 17:19:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:21:11 --- CRITICAL: ErrorException [ 2 ]: json_encode() [function.json-encode]: recursion detected ~ APPPATH\classes\Controller\Api\home.php [ 26 ] in file:line
2014-11-24 17:21:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', 'D:\WWW\ctguhelp...', 26, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(26): json_encode(Array)
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-24 17:21:15 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 36221467 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in file:line
2014-11-24 17:21:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:22:58 --- CRITICAL: ErrorException [ 2 ]: array_pad() expects exactly 3 parameters, 2 given ~ APPPATH\classes\Controller\Api\home.php [ 26 ] in file:line
2014-11-24 17:22:58 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_pad() exp...', 'D:\WWW\ctguhelp...', 26, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(26): array_pad(Array, Array)
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-24 17:23:02 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 36221816 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in file:line
2014-11-24 17:23:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:23:21 --- CRITICAL: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, integer given ~ APPPATH\classes\Controller\Api\home.php [ 26 ] in file:line
2014-11-24 17:23:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'D:\WWW\ctguhelp...', 26, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(26): array_push(1, Array)
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-24 17:23:25 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 36221698 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in file:line
2014-11-24 17:23:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:24:25 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\Api\home.php [ 29 ] in file:line
2014-11-24 17:24:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'D:\WWW\ctguhelp...', 29, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(29): json_decode(Array)
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-24 17:24:25 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 120009730 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 29 ] in file:line
2014-11-24 17:24:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:24:30 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 36221467 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in file:line
2014-11-24 17:24:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:25:57 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 120009730 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 29 ] in file:line
2014-11-24 17:25:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:27:23 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 29 ] in file:line
2014-11-24 17:27:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:27:49 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 29 ] in file:line
2014-11-24 17:27:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:29:04 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 31 ] in file:line
2014-11-24 17:29:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:31:47 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 30 ] in file:line
2014-11-24 17:31:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:34:12 --- CRITICAL: ErrorException [ 2 ]: json_encode() [function.json-encode]: recursion detected ~ APPPATH\classes\Controller\Api\home.php [ 28 ] in file:line
2014-11-24 17:34:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', 'D:\WWW\ctguhelp...', 28, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(28): json_encode(Array)
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-24 17:34:17 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 36221816 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in file:line
2014-11-24 17:34:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:37:11 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 120008456 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 29 ] in file:line
2014-11-24 17:37:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:39:12 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 120009730 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 29 ] in file:line
2014-11-24 17:39:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:42:41 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 120009730 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 29 ] in file:line
2014-11-24 17:42:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:43:23 --- CRITICAL: ErrorException [ 2 ]: json_encode() [function.json-encode]: recursion detected ~ APPPATH\classes\Controller\Api\home.php [ 28 ] in file:line
2014-11-24 17:43:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_encode() [...', 'D:\WWW\ctguhelp...', 28, Array)
#1 D:\WWW\ctguhelp\application\classes\Controller\Api\home.php(28): json_encode(Array)
#2 D:\WWW\ctguhelp\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\WWW\ctguhelp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\WWW\ctguhelp\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\WWW\ctguhelp\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-11-24 17:43:28 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 36221816 bytes) ~ SYSPATH\classes\Kohana\Debug.php [ 173 ] in file:line
2014-11-24 17:43:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:44:55 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 28 ] in file:line
2014-11-24 17:44:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:45:15 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 28 ] in file:line
2014-11-24 17:45:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-24 17:45:28 --- CRITICAL: ErrorException [ 1 ]: Allowed memory size of 134217728 bytes exhausted (tried to allocate 130027521 bytes) ~ APPPATH\classes\Controller\Api\home.php [ 28 ] in file:line
2014-11-24 17:45:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line