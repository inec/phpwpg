<?php
require 'vendor/autoload.php';
$app = new Slim\Slim();
$app->get('/', function () {    echo "<h1>wPhpWPG Hello world</h1>";});

$app->config(array(
   'templates.path' => './templates'
));
$app->get('/about', function () use ($app) {
    $data = array(
        'heading' => 'my headingAbout page',
        'message' => ' my msg This page is an example of static route, rendering a php file.'
    );
    $app->render('about.php',$data);
});
$app->run();