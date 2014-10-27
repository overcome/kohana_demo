<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-10-26 22:22:25 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'record_id' in 'where clause' [ DELETE FROM tl_cs_comments WHERE record_id = '19' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-26 22:22:25 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(4, 'DELETE FROM tl_...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(119): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(147): Model_User->delete_contact_rd('19')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-26 22:22:43 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'record_id' in 'where clause' [ DELETE FROM tl_cs_comments WHERE record_id = '17' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-26 22:22:43 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(4, 'DELETE FROM tl_...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(119): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(147): Model_User->delete_contact_rd('17')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-26 22:23:04 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'record_id' in 'where clause' [ DELETE FROM tl_cs_comments WHERE record_id = '18' ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 151 ] in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-26 22:23:04 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(4, 'DELETE FROM tl_...', false, Array)
#1 /Applications/MAMP/htdocs/kohana/application/classes/Model/user.php(119): Kohana_Database_Query->execute()
#2 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(147): Model_User->delete_contact_rd('18')
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#9 {main} in /Applications/MAMP/htdocs/kohana/modules/database/classes/Kohana/Database/Query.php:251
2014-10-26 23:21:35 --- EMERGENCY: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/classes/Controller/Ajax.php [ 146 ] in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:146
2014-10-26 23:21:35 --- DEBUG: #0 /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php(146): Kohana_Core::error_handler(2, 'Invalid argumen...', '/Applications/M...', 146, Array)
#1 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Applications/MAMP/htdocs/kohana/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Applications/MAMP/htdocs/kohana/index.php(118): Kohana_Request->execute()
#7 {main} in /Applications/MAMP/htdocs/kohana/application/classes/Controller/Ajax.php:146