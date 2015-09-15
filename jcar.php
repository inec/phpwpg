
<script src="https://cdnjs.cloudflare.com/ajax/libs/jcarousel/0.3.3/jquery.jcarousel.js"></script>
<script src="Scripts/jquery.newsTicker.min.js"></script>
<script src="Scripts/news.js"></script>


<div class="panel panel-default">

<div class="panel-heading"> 
       <span class="glyphicon glyphicon-list-alt"></span>
	   <b> &nbsp;   NEWS</b>
	   </div>
	   
<div class="panel-body">
					
<ul id="nt-example1" style=" height: 240px;overflow: hidden;">
		  <?php     $db = new PDO('sqlite:site.db');

	$result = $db->query("SELECT * FROM NEWS");

    foreach($result as $row)
    {

	echo"<li style='margin-top: 0px;'>".":".$row['Title']." <a href=#".$row['Id']. ">Read more...</a> </li>";
	// echo "<li class='news-item' id="."><a href=#".$row['Id']."><strong>".$row['Title']."</strong></br>more...</a></li>";

    } 
	?>


</ul>
		               	
				
					 
						
	</div>
	 <div class="panel-footer text-center">	<i class="fa fa-arrow-up" id="nt-example1-prev"></i> <i class="fa fa-arrow-down" id="nt-example1-next"></i>
						</div>
	
	</div>

				
<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/SunovaCU" data-widget-id="642446930987999232">Tweets by @SunovaCU</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<div id="twitter-container">
    <a href="https://twitter.com/SunovaCU" id="twitter-handle" target="_blank"></a>
    <div id="twitter-feed">
        <img src="http://sunovacu.ca/Images/News/quotations_left_teal.png" alt="" class="float-left">
        <img src="http://sunovacu.ca/Images/News/quotations_right_teal.png" alt="" class="float-right">
        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-timeline twitter-timeline-rendered" allowfullscreen="true" style="position: static; visibility: visible; display: inline-block; width: 100%; height: 125px; padding: 0px; border: none; max-width: 600px; min-width: 180px; margin-top: 0px; margin-bottom: 0px;" data-widget-id="302181776644771840" data-user-id="356440503" title="Twitter Timeline"></iframe>
        <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } } (document, "script", "twitter-wjs");</script>
    </div>
</div>

