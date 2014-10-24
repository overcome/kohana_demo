<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-22 02:58:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function get_rd_comments() ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2014-10-22 02:58:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-22 02:59:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function get_rd_comments() ~ APPPATH/classes/Controller/Ajax.php [ 26 ] in file:line
2014-10-22 02:59:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-22 03:00:04 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'record_id' in 'where clause' [ SELECT * FROM tl_cs_contact WHERE record_id = '12' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-22 03:00:04 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT * FROM t...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(60): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(26): Model_User->get_rd_comments('12')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_save_comments()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-22 21:57:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '$user_info' (T_VARIABLE) ~ APPPATH/classes/Controller/Ajax.php [ 53 ] in file:line
2014-10-22 21:57:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-10-22 22:18:12 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'assignto' in 'field list' [ UPDATE tl_cs_comments SET assignto = '3' WHERE id = '12' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-22 22:18:12 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(3, 'UPDATE tl_cs_co...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(74): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(52): Model_User->update_comment_assignto('12', '3')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-22 22:36:06 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:06 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:08 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:08 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:09 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:09 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:09 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:09 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:09 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:09 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:10 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:36:10 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:38:13 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:38:13 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:38:13 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:38:13 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:38:13 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 50 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50
2014-10-22 22:38:13 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(50): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 50, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_assignto()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:50