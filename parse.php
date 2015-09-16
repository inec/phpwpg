<?php
require '/vendor/autoload.php';
 
use Parse\ParseClient;
use Parse\ParseObject;
 
ParseClient::initialize('OOq7zpzbzpEPjM7nWVJpbD7AKn8atU6f49CBweoF', 'qbgQKoPkICYhdQ7MuFTk2kxjf9QXEJkF51JFfxQe', 'PirUJuJlvVpSx1qhUvXVzs51wfnpr754JwXvZyYs');

 
$testObject = ParseObject::create("TestObject");
$testObject->set("foo", "phpbar");
$testObject->save();
echo "savpat";
?>