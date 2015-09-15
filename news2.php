<?php
  include_once 'bnav.php'; 

 

?>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	    <section id="aboutbrio">
    <div class="container">
        <div class="row">
				<div class="text-center bgGFont opsix">NEWS</div>
				  					  <!--		<div class="arrow_box">
          <h1 class="logo">css arrow please!</h1>
          </div>-->
			<div class="text-center meetbrio">WHAT'S NEW AT BRIO</div>

			
        </div>

    </div>

        </section>
	
	    <!--HOME SECTION END  -->
    <section id="aboutus" class="arrow_box">
        <div class="hidden-xs container">

            <div class="row text-center pad-bottom">
			<h2 class="pad-top30"></h2><h2 class="pad-top30"></h2>

							<h4 class="brlineheight">Fair warning: This section may seem a bit flighty. We're constantly looking for ways to get involved in our community, share interesting tips and info, or give our awesome employees the recognition they deserve, so there's always something new for us to share with you here! 
							</h4>
  

            </div>

        </div>



<div class="container">
<div class="row">
<div class="col-md-3">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b> &nbsp;  BRIO NEWS</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul id="nav">
<?php 
//$string = file_get_contents("NewsArticle.json");
//$arrayj=json_decode($string,true);
$db = new PDO('sqlite:site.db');

	$result = $db->query("SELECT * FROM NEWS");

    foreach($result as $row)
    {

	 echo "<li class='news-item' id="."><a href=#".$row['Id']."><strong>".$row['Title']."</strong></br>more...</a></li>";

    }
echo '</ul>
</div></div></div><div class="panel-footer"> ';

?>
</div></div>

<div class="">
<?php 
 include_once 'jcar.php';
?>
</div>
<div class="fb-page" data-href="https://www.facebook.com/brioinsurance" data-width="500" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/brioinsurance"><a href="https://www.facebook.com/brioinsurance">Brio Insurance</a></blockquote></div></div>

</div>

<?php	
echo '<div class="col-md-9"><div id="tab-content">';
	$result = $db->query("SELECT * FROM NEWS");
    foreach($result as $row)
    {
	echo "<div id=".$row['Id']." class='article' >".$row['TextData']."</div>";
    }
    $db = NULL;
?>
<div id="twitter-container">
    <a href="https://twitter.com/SunovaCU" id="twitter-handle" target="_blank"></a>
    <div id="twitter-feed">
        <img src="http://sunovacu.ca/Images/News/quotations_left_teal.png" alt="" class="float-left">
        <img src="http://sunovacu.ca/Images/News/quotations_right_teal.png" alt="" class="float-right">
        <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-timeline twitter-timeline-rendered" allowfullscreen="true" style="position: static; visibility: visible; display: inline-block; width: 100%; height: 125px; padding: 0px; border: none; max-width: 600px; min-width: 180px; margin-top: 0px; margin-bottom: 0px;" data-widget-id="302181776644771840" data-user-id="356440503" title="Twitter Timeline"></iframe>
        <script>!function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0], p = 'https'; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = p + "://platform.twitter.com/widgets.js"; fjs.parentNode.insertBefore(js, fjs); } } (document, "script", "twitter-wjs");</script>
    </div>
</div>
</div>
</div>

</div>
</div>
    </section>
	
<script type="text/javascript">
$('#tab-content div').hide();
$('#tab-content div:first').show();

    $(function () {
        $("#nav").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
                   navigation:true,
            onToDo: function () {
                //console.log(this);
            }
        });
		
	$('#nav li').click(function(event) {
    $('#nav li a').removeClass("active");
    $(this).find('a').addClass("active");
    $('#tab-content div').hide();

    var indexer = $(this).index(); //gets the current index of (this) which is #nav li
    var target_news=$(this).children(":first").attr("href");

	$(target_news).fadeIn();

	}); //end of click
	
}); //end of function
</script>
<div class="container aboutbrio col-md-12">
        <div class="row">
				<div class="text-center bgGFont opsix"></div>

			<div class="text-center meetbrio"></div>

			
        </div>

 </div>
<?php
   include_once 'bfooter.php'; 
?>	