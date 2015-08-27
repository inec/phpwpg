<?php
require 'vendor/autoload.php';
$app = new Slim\Slim();
$app->get('/', function () {    echo "<h1>wPhpWPG Hello world</h1>";});

$app->config(array(
   'templates.path' => './templates'
));
$app->get('/about', function () use ($app) {
    $app->render('about.php');
});
$app->run();