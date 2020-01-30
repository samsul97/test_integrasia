<?php

return [
	'class' => 'yii\db\Connection',
	'dsn' => 'pgsql:host=localhost;port=5432;dbname=test_integrasia',
	'emulatePrepare' => true,
	'username' => 'postgres',
	'password' => 'sulsamoke12345',
	'charset' => 'utf8',
	'schemaMap' => [
		'pgsql' => [
			'class' => 'yii\db\pgsql\Schema',
                  'defaultSchema' => 'public' //specify your schema here, public is the default schema
              ]
            ], // PostgreSQL

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
        ];