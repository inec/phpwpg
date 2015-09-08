<?php
  include_once 'bnav.php'; 

  require_once 'config.php';
require __DIR__ . '/vendor/autoload.php';

const DEFAULT_PATH = '/NewsArticle';
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

$content=stripslashes($_POST['content']);
$fromdate=stripslashes($_POST['fromdate']);
echo($content);
echo("start date:".$fromdate."</br>");
echo("end date".stripslashes($_POST['todate']));
// --- storing an array ---
$test = array(
    "content" => $content,
    "fromdate" => $fromdate,
    "id" => 42
);
$dateTime = new DateTime();
//$firebase->set(DEFAULT_PATH . '/' . $dateTime->format('c'), $test);

// --- storing a string ---
//$firebase->set(DEFAULT_PATH . '/name/contact001', "value");

// --- reading the stored string ---
$name = $firebase->get(DEFAULT_PATH . '/');


echo "</br>";

  /* post.php : this page shows what insert.php has sent */
//echo json_encode($name);
$arrayj=json_decode($name,true);
echo sizeof($arrayj);
foreach ($arrayj as &$value) {
    echo sizeof($value);
	echo array_values($value)[1]."</br>";
}
//echo array_values($arrayj)[0];
echo ($name!='null'? 'f':'t');
   include_once 'bfooter.php'; 
?>	