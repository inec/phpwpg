<?php

require __DIR__ . '/vendor/autoload.php';
$cfg = new \Spot\Config();
// MySQL$cfg->addConnection('mysql', 'mysql://user:password@localhost/database_name');
// Sqlite
$cfg->addConnection('sqlite', 'sqlite:./database.sqlite');
$spot = new \Spot\Locator($cfg);
echo 'test';
?>