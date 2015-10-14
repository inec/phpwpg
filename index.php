<?php

//include 
include_once('BrioSys/bootstrap.php');

$app = new Lime\App();

// bind routes

$app->bind("/", function() use($app) {

  $bnav="default.php"; 
 return $app->render('default.php', ['posts' => $posts,'bnav'=>$bnav]);
  
});

$app->bind("/news.php", function()  use($app) {
//$rangeQuery = array( '$and' => array( array('todate' =>Date()), array('marks'=>70) ) );

//$rangeQuery=array('todate' => array('$eq'=>'2015-01-23'));
//$rangeQuery=["public"=>true];//$rangeQuery=["todate"=>'2015-01-23'];//gt lt//$rangeQuery1=array('todate' => array('$gt'=>$today));

//preschedule
$draftQuery=["public"=>array('$not'=>true)];
$today=date("Y-m-d");
$yesterday=date("Y-m-d", strtotime("-1 day"));
$tomorrow=date("Y-m-d", strtotime("+1 day"));
$rangeQuery2=array('fromdate' => array('$lt'=>$tomorrow));

//$rangeQuery=array('$and'=>array(array($rangeQuery2,$draftQuery)));
$brionews= cockpit('collections:find', 'BrioNews', ['filter' => $rangeQuery2, 'sort'   => ['fromdate' => -1]]);
//$brionews=collection("BrioNews")->find(function($post){      return ( $post['fromdate']< $tomorrow );    });
//cockpit('collections:find', 'BrioNews', ['filter' => $rangeQuery1,  'sort'   => ['created' => -1]]);
 $posts = $brionews->toArray();

$bnav="news.php";
  return $app->render('views/news.php', ['posts' => $posts,'bnav'=>$bnav,'toast'=>$toast]);
});

$app->bind("/mailphp", function()  use($app) {

$bnav="mail.php";
  return $app->render('views/mail.php', ['posts' => $posts,'bnav'=>$bnav]);
});

$app->bind("/faq.php", function()  use($app) {

$bnav="faq.php";
  return $app->render('views/faq.php', ['posts' => $posts,'bnav'=>$bnav]);
});
$app->bind("/about.php", function()  use($app) {

$bnav="about.php";
  return $app->render('views/about.php', ['posts' => $posts,'bnav'=>$bnav]);
});

$app->bind("/product.php", function()  use($app) {

$bnav="product.php";
  return $app->render('views/product.php', ['posts' => $posts,'bnav'=>$bnav]);
});

$app->bind("/article/:id", function($params) use($app) {

    $post = collection('blog')->findOne(["_id"=>$params['id']]);
 //return "Hello World!".$params['id'];
  return $app->render('views/article.php', ['post' => $post]);
});

$app->run();