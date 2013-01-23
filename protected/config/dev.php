<?php

return CMap::mergeArray(
                require(dirname(__FILE__) . '/main.php'), array(
            'modules' => array(
                'gii' => array(
                    'class' => 'system.gii.GiiModule',
                    'password' => 'Gii123',
                    // If removed, Gii defaults to localhost only. Edit carefully to taste.
                    'ipFilters' => array('127.0.0.1', '::1'),
                    'generatorPaths' => array(
                        'ext.giix-core', // giix generators
                    ),
                ),
            ),
            'components' => array(
                'db' => array(
                    'connectionString' => 'mysql:host=localhost;dbname=app_db',
                    'emulatePrepare' => true,
                    'username' => 'root',
                    'password' => 'root',
                    'charset' => 'utf8',
                    'tablePrefix' => '',
                ),
            ),
            'params' => array(
                // this is used in contact page
                'environment' => 'Development',
            ),
                )
);