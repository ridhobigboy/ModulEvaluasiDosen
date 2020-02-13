<?php

return [
   // 'class' => 'yii\db\Connection',
    //'dsn' => 'mysql:host=localhost;dbname=yii2basic',
    //'username' => 'root',
    //'password' => 'root',
    //'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',\

    'class' => 'yii\db\Connection',
			'driverName' => 'mysql',
			'dsn' => 'mysql:host=127.0.0.1;dbname=DosenAis',
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
            'enableSchemaCache' => true,

            // Duration of schema cache.
            'schemaCacheDuration' => 3600,

            // Name of the cache component used to store schema information
            'schemaCache' => 'cache',
];
