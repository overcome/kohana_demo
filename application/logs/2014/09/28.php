<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-09-28 01:00:18 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Contact::values() ~ APPPATH/classes/Controller/Contact.php [ 13 ] in file:line
2014-09-28 01:00:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 01:01:02 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/Controller/Contact.php [ 18 ] in file:line
2014-09-28 01:01:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 01:02:59 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/Controller/Contact.php [ 18 ] in file:line
2014-09-28 01:02:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 01:03:03 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/Controller/Contact.php [ 18 ] in file:line
2014-09-28 01:03:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 01:39:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Contact::values() ~ APPPATH/classes/Controller/Contact.php [ 13 ] in file:line
2014-09-28 01:39:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 01:39:46 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Contact::values() ~ APPPATH/classes/Controller/Contact.php [ 13 ] in file:line
2014-09-28 01:39:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:15:17 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_tl_cs_contact' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in file:line
2014-09-28 03:15:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:15:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Contact::values() ~ APPPATH/classes/Controller/Contact.php [ 13 ] in file:line
2014-09-28 03:15:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:17:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Contact::values() ~ APPPATH/classes/Controller/Contact.php [ 13 ] in file:line
2014-09-28 03:17:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:17:42 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/Controller/Contact.php [ 18 ] in file:line
2014-09-28 03:17:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:20:02 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Model_Contact::values() should be compatible with Kohana_ORM::values(array $values, array $expected = NULL) ~ APPPATH/classes/Model/contact.php [ 29 ] in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Core.php:511
2014-09-28 03:20:02 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', '/Applications/M...', 29, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_contact')
#3 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(46): spl_autoload_call('Model_contact')
#4 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Contact.php(13): Kohana_ORM::factory('contact')
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Contact->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Core.php:511
2014-09-28 03:20:26 --- EMERGENCY: ErrorException [ 2048 ]: Declaration of Model_Contact::values() should be compatible with Kohana_ORM::values(array $values, array $expected = NULL) ~ APPPATH/classes/Model/contact.php [ 29 ] in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Core.php:511
2014-09-28 03:20:26 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Core.php(511): Kohana_Core::error_handler(2048, 'Declaration of ...', '/Applications/M...', 29, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Core.php(511): Kohana_Core::auto_load()
#2 [internal function]: Kohana_Core::auto_load('Model_contact')
#3 /Applications/MAMP/htdocs/kohana/modules/orm/classes/Kohana/ORM.php(46): spl_autoload_call('Model_contact')
#4 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Contact.php(13): Kohana_ORM::factory('contact')
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Contact->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Contact))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Core.php:511
2014-09-28 03:20:45 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/Controller/Contact.php [ 18 ] in file:line
2014-09-28 03:20:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:21:00 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/Controller/Contact.php [ 18 ] in file:line
2014-09-28 03:21:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:21:05 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/Controller/Contact.php [ 18 ] in file:line
2014-09-28 03:21:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:31:29 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function save() on a non-object ~ APPPATH/classes/Controller/Contact.php [ 18 ] in file:line
2014-09-28 03:31:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:45:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 41 ] in file:line
2014-09-28 03:45:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:49:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 46 ] in file:line
2014-09-28 03:49:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:49:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 46 ] in file:line
2014-09-28 03:49:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:49:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 46 ] in file:line
2014-09-28 03:49:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:49:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 46 ] in file:line
2014-09-28 03:49:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:49:11 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 46 ] in file:line
2014-09-28 03:49:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:49:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 46 ] in file:line
2014-09-28 03:49:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:49:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 46 ] in file:line
2014-09-28 03:49:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:49:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 46 ] in file:line
2014-09-28 03:49:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:49:13 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 46 ] in file:line
2014-09-28 03:49:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:49:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 15 ] in file:line
2014-09-28 03:49:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 03:50:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-09-28 03:50:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:01:06 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-09-28 04:01:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:01:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-09-28 04:01:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:01:43 --- EMERGENCY: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_User' does not have a method 'unique_username' ~ SYSPATH/classes/Kohana/Validation.php [ 377 ] in file:line
2014-09-28 04:01:43 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', '/Applications/M...', 377, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2014-09-28 04:03:23 --- EMERGENCY: ErrorException [ 1 ]: Class 'DB' not found ~ APPPATH/classes/Model/user.php [ 27 ] in file:line
2014-09-28 04:03:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:04:50 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:431
2014-09-28 04:04:50 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(431): Kohana_Database_MySQL->connect()
#1 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_MySQL->escape('test')
#2 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('test')
#3 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#4 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#5 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#6 [internal function]: Model_User->unique_username('test')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#8 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:431
2014-09-28 04:09:55 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-09-28 04:09:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:10:48 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-09-28 04:10:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:11:59 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:431
2014-09-28 04:11:59 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(431): Kohana_Database_MySQL->connect()
#1 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_MySQL->escape('test')
#2 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('test')
#3 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#4 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#5 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#6 [internal function]: Model_User->unique_username('test')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#8 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:431
2014-09-28 04:12:13 --- EMERGENCY: ErrorException [ 1 ]: Class 'Database_Mysqli' not found ~ MODPATH/database/classes/Kohana/Database.php [ 78 ] in file:line
2014-09-28 04:12:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:14:57 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2014-09-28 04:14:57 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('test')
#2 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('test')
#3 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PDO), Array)
#4 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#5 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#6 [internal function]: Model_User->unique_username('test')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#8 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2014-09-28 04:15:42 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2014-09-28 04:15:42 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('test')
#2 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('test')
#3 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PDO), Array)
#4 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#5 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#6 [internal function]: Model_User->unique_username('test')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#8 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2014-09-28 04:16:19 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2014-09-28 04:16:19 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('test')
#2 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('test')
#3 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PDO), Array)
#4 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#5 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#6 [internal function]: Model_User->unique_username('test')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#8 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2014-09-28 04:16:46 --- EMERGENCY: Database_Exception [ 0 ]: invalid data source name ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2014-09-28 04:16:46 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php(242): Kohana_Database_PDO->connect()
#1 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_PDO->escape('test')
#2 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('test')
#3 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_PDO), Array)
#4 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_PDO))
#5 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#6 [internal function]: Model_User->unique_username('test')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#8 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/PDO.php:242
2014-09-28 04:21:07 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:431
2014-09-28 04:21:07 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(431): Kohana_Database_MySQL->connect()
#1 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_MySQL->escape('test')
#2 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('test')
#3 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#4 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#5 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#6 [internal function]: Model_User->unique_username('test')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#8 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:431
2014-09-28 04:21:11 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:431
2014-09-28 04:21:11 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php(431): Kohana_Database_MySQL->connect()
#1 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database.php(478): Kohana_Database_MySQL->escape('test')
#2 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder.php(116): Kohana_Database->quote('test')
#3 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query/Builder/Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#4 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#5 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#6 [internal function]: Model_User->unique_username('test')
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#8 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#10 [internal function]: Kohana_Controller->execute()
#11 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#12 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#15 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/MySQL.php:431
2014-09-28 04:23:16 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'demo_contao_335.users' doesn't exist [ SELECT COUNT(username) AS total FROM users WHERE username = 'test' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:23:16 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(us...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Model_User->unique_username('test')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#4 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:23:29 --- EMERGENCY: Database_Exception [ 42S02 ]: SQLSTATE[42S02]: Base table or view not found: 1146 Table 'demo_contao_335.tl_users' doesn't exist [ SELECT COUNT(username) AS total FROM tl_users WHERE username = 'test' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:23:29 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(us...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Model_User->unique_username('test')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#4 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:24:28 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'username' in 'where clause' [ SELECT COUNT(firstname) AS total FROM tl_cs_contact WHERE username = 'test' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:24:28 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(fi...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Model_User->unique_username('test')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#4 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:25:56 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'username' in 'where clause' [ SELECT COUNT(firstname) AS total FROM tl_cs_contact WHERE username = 'a' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:25:56 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(1, 'SELECT COUNT(fi...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(30): Kohana_Database_Query->execute()
#2 [internal function]: Model_User->unique_username('a')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Validation.php(377): call_user_func_array(Array, Array)
#4 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(33): Kohana_Validation->check()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#6 [internal function]: Kohana_Controller->execute()
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#8 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#11 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:26:09 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-09-28 04:26:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:26:23 --- EMERGENCY: Database_Exception [ 42000 ]: SQLSTATE[42000]: Syntax error or access violation: 1064 You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AS tl_password () VALUES ('test', '111111', '111111', 'yes')' at line 1 [ INSERT INTO tl_username AS tl_password () VALUES ('test', '111111', '111111', 'yes') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:26:23 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO tl_...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(16): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(36): Model_User->register(Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:42:29 --- EMERGENCY: ErrorException [ 1 ]: Function name must be a string ~ APPPATH/classes/Model/user.php [ 14 ] in file:line
2014-09-28 04:42:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:43:49 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'username' in 'field list' [ INSERT INTO tl_cs_contact (username, password, confirm, use_ssl) VALUES ('test', '111111', '111111', 'yes') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:43:49 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO tl_...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(17): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(36): Model_User->register(Array)
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-09-28 04:49:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-09-28 04:49:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:49:44 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-09-28 04:49:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:49:49 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-09-28 04:49:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:50:58 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-09-28 04:50:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:52:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/User.php [ 33 ] in file:line
2014-09-28 04:52:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:52:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/User.php [ 33 ] in file:line
2014-09-28 04:52:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:52:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH/classes/Controller/User.php [ 33 ] in file:line
2014-09-28 04:52:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 04:52:41 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Response::bind() ~ APPPATH/classes/Controller/User.php [ 47 ] in file:line
2014-09-28 04:52:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 05:20:38 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/User.php [ 47 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php:47
2014-09-28 05:20:38 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(47): Kohana_Core::error_handler(2048, 'Only variables ...', '/Applications/M...', 47, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php:47
2014-09-28 05:21:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/classes/Controller/User.php [ 53 ] in file:line
2014-09-28 05:21:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-09-28 05:21:38 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/User.php [ 51 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php:51
2014-09-28 05:21:38 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(51): Kohana_Core::error_handler(2048, 'Only variables ...', '/Applications/M...', 51, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php:51
2014-09-28 05:24:49 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/User.php [ 51 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php:51
2014-09-28 05:24:49 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(51): Kohana_Core::error_handler(2048, 'Only variables ...', '/Applications/M...', 51, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php:51
2014-09-28 05:25:58 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/User.php [ 51 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php:51
2014-09-28 05:25:58 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(51): Kohana_Core::error_handler(2048, 'Only variables ...', '/Applications/M...', 51, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php:51
2014-09-28 05:26:28 --- EMERGENCY: ErrorException [ 2048 ]: Only variables should be passed by reference ~ APPPATH/classes/Controller/User.php [ 51 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php:51
2014-09-28 05:26:28 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php(51): Kohana_Core::error_handler(2048, 'Only variables ...', '/Applications/M...', 51, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_User->action_register()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/User.php:51
2014-09-28 05:39:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH/classes/Controller/User.php [ 21 ] in file:line
2014-09-28 05:39:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line