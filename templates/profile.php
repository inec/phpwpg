
<?php $this->layout('template', ['title' => 'User Profile']) ?>
<h1>1 profile.User Profile</h1>

<p>2. Hello, <?=$this->e($name)?></p>

<!-- Example without using batch -->
<p>3. Welcome = <?=$this->escape(strtoupper(strip_tags($name)))?></p>


<p>4. Welcome   </p>
