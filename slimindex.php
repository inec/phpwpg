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
app->get('/:param1(/:param2(/:param3))', function () use ($app) {
    $args = func_get_args();
    foreach($args as $arg){
        echo $arg . ' -- '; 
    }
});
$app->run();