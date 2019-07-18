<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:' . realpath(__DIR__ . '/../db/') . '/tophotels.db',
    'charset' => 'utf8',
    'enableSchemaCache' => true,

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];


