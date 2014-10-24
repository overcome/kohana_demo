<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-23 02:20:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::get() ~ APPPATH/classes/Controller/User.php [ 85 ] in file:line
2014-10-23 02:20:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 03:17:28 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$record_id' (T_VARIABLE) ~ APPPATH/classes/Controller/User.php [ 112 ] in file:line
2014-10-23 03:17:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 03:33:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Controller/User.php [ 103 ] in file:line
2014-10-23 03:33:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 03:33:57 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/classes/Controller/User.php [ 105 ] in file:line
2014-10-23 03:33:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 04:03:28 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-23 04:03:28 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-23 04:03:28 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-23 04:03:28 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-23 05:33:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/User.php [ 38 ] in file:line
2014-10-23 05:33:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 05:33:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/User.php [ 38 ] in file:line
2014-10-23 05:33:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 05:34:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '；' (T_STRING) ~ APPPATH/classes/Controller/User.php [ 35 ] in file:line
2014-10-23 05:34:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 05:40:00 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'username' in 'field list' [ INSERT INTO tl_cs_contact (username, password, tstamp, submit_date) VALUES ('kriss', '12345678', 1414060800, 1414060800) ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 05:40:00 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO tl_...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(17): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(45): Model_User->register(Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 05:51:21 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'username' in 'where clause' [ SELECT COUNT(firstname) AS total FROM tl_cs_contact WHERE username = 'nidaye' AND password = 'erdaye' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 05:51:21 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(fi...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(52): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(44): Model_User->login_check(Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 05:51:42 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'username' in 'field list' [ SELECT COUNT(username) AS total FROM tl_cs_contact WHERE username = 'nidaye' AND password = 'erdaye' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 05:51:42 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(us...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(52): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(44): Model_User->login_check(Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 05:51:51 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'username' in 'field list' [ SELECT COUNT(username) AS total FROM tl_cs_contact WHERE username = 'nidaye' AND password = 'erdaye' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 05:51:51 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(us...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(52): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(44): Model_User->login_check(Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 06:30:40 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views/user/login.php [ 19 ] in /Applications/MAMP/htdocs/kohana/application/views/user/login.php:19
2014-10-23 06:30:40 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/views/user/login.php(19): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 19, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(61): include('/Applications/M...')
#2 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(348): Kohana_View::capture('/Applications/M...', Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(76): Kohana_Response->body(Object(View))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_login()
#7 [internal function]: Kohana_Controller->execute()
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#12 {main} in /Applications/MAMP/htdocs/kohana/application/views/user/login.php:19
2014-10-23 06:43:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 17 ] in file:line
2014-10-23 06:43:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 06:43:24 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/User.php [ 17 ] in file:line
2014-10-23 06:43:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-23 21:24:28 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'record_id' in 'where clause' [ SELECT * FROM tl_cs_comments WHERE record_id = '18' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 21:24:28 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM t...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(92): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(31): Model_User->get_rd_comments('18')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_save_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 21:24:31 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'record_id' in 'where clause' [ SELECT * FROM tl_cs_comments WHERE record_id = '18' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 21:24:31 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM t...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(92): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(31): Model_User->get_rd_comments('18')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_save_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 21:24:43 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'record_id' in 'where clause' [ SELECT * FROM tl_cs_comments WHERE record_id = '18' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-23 21:24:43 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM t...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(92): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(31): Model_User->get_rd_comments('18')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_save_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251