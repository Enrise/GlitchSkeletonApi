<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */


return array(
    'service_manager' => array(
        'factories' => array(
                'Global\Db\Adapter\Main' => function($sm) {
                    $config = $sm->get('config');
//                     var_dump($config['db']['main']); exit;
                    return new \Zend\Db\Adapter\Adapter($config['db']['main']);
                },
                'Global\Db\Adapter\Meta' => function($sm) {
                    $config = $sm->get('config');
                    return new \Zend\Db\Adapter\Adapter($config['db']['meta']);
                },
        ),
    ),

    'db' => array(
        'main' => array(
            'driver'         => 'Pdo',
            'username'       => 'root',
            'dsn'            => 'mysql:dbname=GlitchSkeletonApi;host=localhost',
            'driver_options' => array(1002 => // PDO::MYSQL_ATTR_INIT_COMMAND
                'SET SESSION sql_mode = \'STRICT_ALL_TABLES,ANSI\', NAMES utf8'
            ),
        ),
        'meta' => array( // Used for statistics and admin stuff
            'driver'         => 'Pdo',
            'username'       => 'root',
            'dsn'            => 'mysql:dbname=GlitchSkeletonApi_Meta;host=localhost',
            'driver_options' => array(1002 => // PDO::MYSQL_ATTR_INIT_COMMAND
                    'SET SESSION sql_mode = \'STRICT_ALL_TABLES,ANSI\', NAMES utf8'
            ),
        ),
    ),
);
