<?php


require __DIR__ . '/vendor/autoload.php';

$templates = new League\Plates\Engine('./templates');

$template 
= new League\Plates\Template\Template($templates, 'profile');

// Render the template
echo $template->render(['name' => 'TTTg']);

// You can also render the template using the toString() magic method


?>

<?php
//  echo $template;
?>
