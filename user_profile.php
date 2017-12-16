<?php require __DIR__ . '/vendor/autoload.php';

 ?>

 
<?php $this->layout('template', ['title' => 'User Profile']) ?>

<h1>User Profile</h1>
<p>Hello, <?=$this->escape($name)?></p>


