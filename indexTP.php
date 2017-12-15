<?php
 // phpinfo(); // all info
  // module info, phpinfo(8) identical
 // phpinfo(INFO_MODULES);

require __DIR__ . '/vendor/autoload.php';
//phpinfo();
$templates = new League\Plates\Engine('./templates');

//echo $templates->render('partials/header');
echo $templates->render('profile', ['name' => 'Jonathan']);
/*

// Render a template in a subdirectory

// Render a template
echo $templates->render('profile', ['name' => 'Jonathan']);*/
?>