<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=banfakenews_sandbox_rzerocorp_com',
    'username' => 'banfakdTgsE7DmPu',
    'password' => 'Oh5NuKl9Gv8zDXM',
    'charset' => 'utf8',
    'on afterOpen' => function($event) { 
        $event->sender->createCommand("SET time_zone='-05:00';")->execute(); 
    },
];
