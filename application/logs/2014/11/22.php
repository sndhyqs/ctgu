<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-22 18:21:59 --- CRITICAL: ErrorException [ 1 ]: Class 'YHttpClient' not found ~ APPPATH\classes\Controller\Api\home.php [ 23 ] in file:line
2014-11-22 18:21:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-22 18:23:27 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\ctgu\classes\YHttpClient.php [ 188 ] in file:line
2014-11-22 18:23:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-22 18:24:34 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\ctgu\classes\YHttpClient.php [ 188 ] in file:line
2014-11-22 18:24:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-22 18:25:38 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Api\home.php [ 22 ] in file:line
2014-11-22 18:25:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-22 18:45:27 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\External.php:138
2014-11-22 18:45:27 --- DEBUG: #0 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\phpStudy\WWW\ctgu\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\phpStudy\WWW\ctgu\modules\ctgu\classes\Ctgu.php(28): Ctgu->__construct()
#5 D:\phpStudy\WWW\ctgu\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\phpStudy\WWW\ctgu\index.php(118): Kohana_Request->execute()
#12 {main} in D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\External.php:138
2014-11-22 18:55:59 --- CRITICAL: ErrorException [ 2 ]: curl_multi_info_read(): supplied resource is not a valid cURL Multi Handle resource ~ MODPATH\ctgu\classes\HttpClient.php [ 53 ] in file:line
2014-11-22 18:55:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'curl_multi_info...', 'D:\phpStudy\WWW...', 53, Array)
#1 D:\phpStudy\WWW\ctgu\modules\ctgu\classes\HttpClient.php(53): curl_multi_info_read(Resource id #519)
#2 D:\phpStudy\WWW\ctgu\application\classes\Controller\Api\home.php(22): HttpClient->get('http://210.42.3...')
#3 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#6 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 D:\phpStudy\WWW\ctgu\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-11-22 19:11:40 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Ctgu::$get_cookie ~ APPPATH\classes\Controller\Api\home.php [ 20 ] in D:\phpStudy\WWW\ctgu\application\classes\Controller\Api\home.php:20
2014-11-22 19:11:40 --- DEBUG: #0 D:\phpStudy\WWW\ctgu\application\classes\Controller\Api\home.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\phpStudy\WWW...', 20, Array)
#1 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#4 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 D:\phpStudy\WWW\ctgu\index.php(118): Kohana_Request->execute()
#7 {main} in D:\phpStudy\WWW\ctgu\application\classes\Controller\Api\home.php:20
2014-11-22 19:15:39 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for HttpClient::get(), called in D:\phpStudy\WWW\ctgu\application\classes\Controller\Api\home.php on line 21 and defined ~ MODPATH\ctgu\classes\HttpClient.php [ 38 ] in D:\phpStudy\WWW\ctgu\modules\ctgu\classes\HttpClient.php:38
2014-11-22 19:15:39 --- DEBUG: #0 D:\phpStudy\WWW\ctgu\modules\ctgu\classes\HttpClient.php(38): Kohana_Core::error_handler(2, 'Missing argumen...', 'D:\phpStudy\WWW...', 38, Array)
#1 D:\phpStudy\WWW\ctgu\application\classes\Controller\Api\home.php(21): HttpClient->get('http://210.42.3...')
#2 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#5 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 D:\phpStudy\WWW\ctgu\index.php(118): Kohana_Request->execute()
#8 {main} in D:\phpStudy\WWW\ctgu\modules\ctgu\classes\HttpClient.php:38
2014-11-22 19:16:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Api\home.php [ 20 ] in file:line
2014-11-22 19:16:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-22 19:17:18 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\External.php:138
2014-11-22 19:17:18 --- DEBUG: #0 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\phpStudy\WWW\ctgu\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\phpStudy\WWW\ctgu\modules\ctgu\classes\Ctgu.php(28): Ctgu->__construct()
#5 D:\phpStudy\WWW\ctgu\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\phpStudy\WWW\ctgu\index.php(118): Kohana_Request->execute()
#12 {main} in D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\External.php:138
2014-11-22 19:23:05 --- CRITICAL: Request_Exception [ 0 ]: Error fetching remote /jwc_glxt/ValidateCode.aspx [ status 0 ] Failed to connect to 210.42.38.26 port 81: Timed out ~ SYSPATH\classes\Kohana\Request\Client\Curl.php [ 102 ] in D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\External.php:138
2014-11-22 19:23:05 --- DEBUG: #0 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\External.php(138): Kohana_Request_Client_Curl->_send_message(Object(Request), Object(Response))
#1 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_External->execute_request(Object(Request), Object(Response))
#2 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#3 D:\phpStudy\WWW\ctgu\modules\ctgu\classes\Ctgu.php(22): Kohana_Request->execute()
#4 D:\phpStudy\WWW\ctgu\modules\ctgu\classes\Ctgu.php(28): Ctgu->__construct()
#5 D:\phpStudy\WWW\ctgu\application\classes\Controller\Api\home.php(14): Ctgu::instance()
#6 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Controller.php(84): Controller_Api_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api_Home))
#9 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 D:\phpStudy\WWW\ctgu\index.php(118): Kohana_Request->execute()
#12 {main} in D:\phpStudy\WWW\ctgu\system\classes\Kohana\Request\Client\External.php:138