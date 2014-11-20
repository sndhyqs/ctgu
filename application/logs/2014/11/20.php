<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-11-20 03:23:34 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::debug() ~ APPPATH\bootstrap.php [ 150 ] in file:line
2014-11-20 03:23:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-11-20 03:23:55 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Route::matches() must be an instance of Request, string given, called in D:\WWW\ctguhelp\application\bootstrap.php on line 150 and defined ~ SYSPATH\classes\Kohana\Route.php [ 418 ] in D:\WWW\ctguhelp\system\classes\Kohana\Route.php:418
2014-11-20 03:23:55 --- DEBUG: #0 D:\WWW\ctguhelp\system\classes\Kohana\Route.php(418): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'D:\WWW\ctguhelp...', 418, Array)
#1 D:\WWW\ctguhelp\application\bootstrap.php(150): Kohana_Route->matches('post/1')
#2 D:\WWW\ctguhelp\index.php(102): require('D:\WWW\ctguhelp...')
#3 {main} in D:\WWW\ctguhelp\system\classes\Kohana\Route.php:418
2014-11-20 03:24:26 --- CRITICAL: ErrorException [ 4096 ]: Object of class Route could not be converted to string ~ APPPATH\bootstrap.php [ 150 ] in D:\WWW\ctguhelp\application\bootstrap.php:150
2014-11-20 03:24:26 --- DEBUG: #0 D:\WWW\ctguhelp\application\bootstrap.php(150): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\WWW\ctguhelp...', 150, Array)
#1 D:\WWW\ctguhelp\index.php(102): require('D:\WWW\ctguhelp...')
#2 {main} in D:\WWW\ctguhelp\application\bootstrap.php:150