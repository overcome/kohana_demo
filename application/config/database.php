<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
    'default' => array
    (
        'type'       => 'PDO',
        'connection' => array(
            /**
             * The following options are available for PDO:
             *
             * string   dsn         Data Source Name
             * string   username    database username
             * string   password    database password
             * boolean  persistent  use persistent connections?
             */
            'dsn'        => 'mysql:host=localhost;dbname=demo_contao_335;port=8889',
            'username'   => 'root',
            'password'   => 'root',
            'persistent' => FALSE,
        ),
        /**
         * The following extra options are available for PDO:
         *
         * string   identifier  set the escaping identifier
         */
        'table_prefix' => 'tl_',
        'charset'      => 'utf8',
        'caching'      => FALSE,
    ),
    'alternate' => array(
        'type'       => 'PDO',
        'connection' => array(
            /**
             * The following options are available for PDO:
             *
             * string   dsn         Data Source Name
             * string   username    database username
             * string   password    database password
             * boolean  persistent  use persistent connections?
             */
            'dsn'        => 'mysql:host=localhost;dbname=demo_contao_335;port=8889',
            'username'   => 'root',
            'password'   => 'root',
            'persistent' => FALSE,
        ),
        /**
         * The following extra options are available for PDO:
         *
         * string   identifier  set the escaping identifier
         */
        'table_prefix' => '',
        'charset'      => 'utf8',
        'caching'      => FALSE,
    ),
);
