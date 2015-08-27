<?php
require 'vendor/autoload.php';
$app = new Slim\Slim();
$app->get('/', function () {
    echo "<h1>Hello world</h1>";
});
$app->run();