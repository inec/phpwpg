<?php
	session_start();

	$ip = $_SERVER['REMOTE_ADDR'];
	$sid = session_id();

	include_once 'bnav.php'; 


	$TABLE = 'news';
	$db = new PDO('sqlite:site.db');
if (isset($_POST['submit'])){
   $t_result = $db->query("SELECT TIME FROM $TABLE WHERE SessID = '$sid' ORDER BY Time DESC"); // Lists all the times for current SessionIDs
   $t_array = array();
   //echo 'Times:';
   /*foreach($t_result as $row)
    {
		// echo $row[0];
		// echo '<br/>';
		$realtime = $row[0];
		array_push($t_array, $realtime); // Creates array of different times current user posted
	}*/
	if(isset($posts)){
	$posts = count($t_array);
	if (count($t_array) != 0){
	$last_post = max($t_array);
	$time_since = Time() - $last_post;
	}
	}
/* 	// Debugging Information
	echo '<br/>';
	echo '<pre>';
	print_r($t_array);
	echo '</pre>';
	echo '$posts: ' . $posts;
	echo '<br/>';
	echo 'Time Since Last: ' . $time_since;
	echo '<br/>';
	echo 'NOW: ' . Time(); */
	
	if(isset($_POST['TITLE'])){
		$TITLE = $_POST['TITLE'];
	}
	if(isset($_POST['DATE'])){
		$DATE = $_POST['DATE'];
	}
	if(isset($_POST['FROMDATE'])){
		$FROMDATE = $_POST['FROMDATE'];
	}
	if(isset($_POST['TEXT'])){
		$TEXT = $_POST['TEXT'];
	
	}
	if (strlen($_POST['TEXT']) > 0 && strlen($_POST['TITLE']) > 0){ // Comment Text field AND title contains at least one character
		if(isset($_SESSION['id'])){
		}
		$dupe = $db->query("SELECT COUNT(*) FROM $TABLE WHERE Title = '$TITLE'"); // Looks for Duplicate Titles
		$dupe2 = $db->query("SELECT COUNT(*) FROM $TABLE WHERE TextData = '$TEXT'"); // Looks for Duplicate Text
		$posts_ip = $db->query("SELECT COUNT(*) FROM $TABLE WHERE IP = '$ip'"); // $ of Posts by IP

$duplicates =0;
		if ($duplicates == 0){

				$Timex = Time(); // Get PHP's version of the time (Otherwise it'll use the database's)

				$db->exec("INSERT INTO NEWS (TextData, Title, Date, FromDate,SessID, Time, IP) VALUES ('$TEXT', '$TITLE', '$DATE', '$FROMDATE','$sid', '$Timex', '$ip')");
		}else{
			echo "<br/><font color=red>Duplicate Data Exists.</font><br/>";
			echo '<br/>Duplicates (of this message): ' . $duplicates; //Echo duplicate data
			echo '<br/>';
		}
if ($res = $db->query("SELECT COUNT(*) FROM $TABLE WHERE SessID = '$sid' ORDER BY Time DESC")) //Counts total number of rows matching criteria
{
//echo '<br/>Total Rows:';
$num_rows = $res->fetchColumn();
//echo $num_rows;
//echo '<br/>';
}}
}else{ 
// (If submit has NOT been pressed)
	$TEXT = "";
	$TITLE = "";
	$DATE = "";
}
	$TABLE = "news";
?>

<style>
#blogpost
{
	border: 1px solid black;
	width: 50%;
}
table{
border: none;
}
</style>
        <script src="assets/mockjax/jquery.mockjax.js"></script>
        
        <!-- momentjs --> 
        <script src="assets/momentjs/moment.min.js"></script> 
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Readmore.js/2.0.5/readmore.min.js"></script>
  <script type="text/javascript" src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"></script>

        <script src="assets/x-editable/inputs-ext/address/address.js"></script> 
		
<link href="assets/x-editable/inputs-ext/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.css" rel="stylesheet" type="text/css"></link>  
<script src="assets/x-editable/inputs-ext/wysihtml5/bootstrap-wysihtml5-0.0.2/wysihtml5-0.3.0.min.js"></script>  
<script src="assets/x-editable/inputs-ext/wysihtml5/bootstrap-wysihtml5-0.0.2/bootstrap-wysihtml5-0.0.2.min.js"></script>
	<script src="assets/x-editable/inputs-ext/wysihtml5/wysihtml5.js"></script>  
	
        <script src="assets/demo-mock.js"></script> 
        <script src="assets/demo.js"></script>  
  <div class="container">
  <a href="" class="username"  data-type="text" data-title="Enter username">currentValue</a>
  <a href="#" id="dob" data-type="combodate" data-value="1984-05-15" data-format="YYYY-MM-DD" data-viewformat="DD/MM/YYYY" data-template="D / MMM / YYYY" data-pk="1"  data-title="Select Date of birth"></a>
  
<h2>News Manager </h2><a href="<?php echo $_SERVER['PHP_SELF']; ?>">refresh</a>
<form method="post" >
<table class="jumbotron col-md-10 " border="1"  bordercolor="blue" padding=1>
	<tr>
		<td>Title:</td>
		<td><input type="text" name="TITLE" size="60"/></td>
	</tr>
	<tr>
		<td>Display  </td>
		<td>
			<?php echo '<label for="fromdate"> From : </label><input name="FROMDATE" type="date" value="'.date("Y-m-d").'"/>';
	echo	'<label for="todate">To : </label><input name="DATE" type="date" value="'.date("Y-m-d",strtotime("tomorrow")).'"/>';
		?>
		<input type="text" name="OLDDATE" />
		</td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td align=center> <textarea cols="80" rows="30" id="articleContent" name="TEXT"> 
<?php echo $TEXT; ?>
      </textarea></td>
	</tr>
    <tr>		     
	</tr>
</table>
 <div class="row col-md-12"><script type="text/javascript">
        CKEDITOR.replace( 'articleContent' );
      </script>
	<input type="submit" name="submit" value="Add Article" />
	</div>
</form>
</div>
<div class='container'>
<div id="aboutus" class="aboutus"><table class="table" width="100%" border=0>
<?PHP

	$result = $db->query("SELECT * FROM NEWS");

	//
	if(!empty($result)){
		
		
	

     
function TestBlockHTML ($replStr="",$str2="",$idStr="") {
return <<<HTML

  <div class="accordion-group">
    <div class="accordion-heading text-right">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#rmore{$idStr}">
       {$replStr}
      </a><button class="SeeMore2 btn btn-small" data-toggle="collapse" href= "#rmore{$idStr}">See More</button>
    </div>
    <div id= "rmore{$idStr}"" class="accordion-body collapse">
      <div class="accordion-inner">
      <div class="wysihtml5" data-name="newshtml5" data-type="wysihtml5" data-pk="{$idStr}"> {$str2} </div>
      </div>
    </div>
    
  </div>
HTML;
}

function writeMsg($name = "",$text="",$sid="") {
	
    echo  TestBlockHTML($name,$text,$sid);
}


    foreach($result as $row)
    {

	  print '';
	  print "<tr><td colspan=4 class='toDate'>".$row['FromDate'] .': ' . $row['Date'] . '</td>';

	  print "<td colspan=4 align=center>";
	writeMsg($row['Title'],$row['TextData'] ,$row['Id']);
	  if ($row['SessID'] == $sid){
			$id = $row['Id'];
			echo '';
	  }
	  
	  echo "</td>";
	  echo "<td><button class='btn btn-danger'>Delete</button></td>";
	   echo "<td><button class='btn btn-default'>Update</button></td>";
	  echo "<td><button class='btn btn-danger'>Delete</button></td></tr>";

    }
  

    $db = NULL;
	}



?>
<tr><td>


  
  </td>
  </tr>
</table></div><br/><br/>
<div id="te" class="wysihtml5" data-type="wysihtml5" data-pk="551"><h2>awesome</h2> comment!</div>

<a href="" data-name="addressData-Name" class="address" data-type="address" data-pk="131" data-title="Please, fill address" class="editable editable-click" data-original-title="oTitle" title="TT" style="background-color: rgba(0, 0, 0, 0);"><b>Moscow</b>, Lenina st., bld. 1231</a>
                    
            <div style="float: left; width: 50%">
                <h3>Console <small>(all ajax requests here are emulated)</small></h3> 
                <div><textarea id="console" class="form-control" rows="8" style="width: 70%" autocomplete="off"></textarea></div>
            </div>
           </div>


<?PHP 	include_once 'bfooter.php'; ?>