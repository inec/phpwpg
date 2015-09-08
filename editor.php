
<?php include_once 'bnav.php'; ?>
  <script type="text/javascript" src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"></script>
  <h1>Add a new news Article</h1>
  <form action="form_handler.php" method="post">
    <div>
      <textarea cols="80" rows="10" id="articleContent" name="content"> 
        &lt;h1&gt;Article Title&lt;/h1&gt;
        &lt;p&gt;Here's some sample text&lt;/p&gt;
      </textarea>
	  
	  	<?php  
	echo '<label for="fromdate">Display  From : </label><input name="fromdate" type="date" value="'.date("Y-m-d").'"/>';
	echo	'<label for="todate">Display  To : </label><input name="todate" type="date" value="'.date("Y-m-d",strtotime("tomorrow")).'"/>';
	?>
      <script type="text/javascript">
        CKEDITOR.replace( 'articleContent' );
      </script>
      <input type="submit" value="Submit"/>
    </div>



	
  </form>
  <?php include_once 'bfooter.php'; ?>
