<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=banfakenews_rzerocorp_com',
    'username' => 'banfakcv8amsFAi0',
    'password' => 'hefTMCmQSH9oP8A',
    'charset' => 'utf8',
    'on afterOpen' => function($event) { 
        $event->sender->createCommand("SET time_zone='-05:00';")->execute(); 
    },
];
