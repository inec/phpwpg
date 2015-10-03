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


							<h4 class="brlineheight">Fair warning: This section may seem a bit flighty. We're constantly looking for ways to get involved in our community, share interesting tips and info, or give our awesome employees the recognition they deserve, so there's always something new for us to share with you here! 
							</h4>
  

            </div>

        </div>



<div class="container">
<div class="row">
<div class="col-md-3">
<div class="panel panel-default">

<div class="panel-heading"> 
       <span class="glyphicon glyphicon-list-alt"></span>
	   <b> &nbsp;  BRIO NEWS</b>
	   </div>
	   
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


<div class="fb-page" data-href="https://www.facebook.com/brioinsurance" data-width="500" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/brioinsurance"><a href="https://www.facebook.com/brioinsurance">Brio Insurance</a></blockquote></div></div>

</div>
<?php	
echo '<div class="col-md-9"><div id="tab-content">';
	$result = $db->query("SELECT * FROM NEWS");
    foreach($result as $row)
    {
	echo "<div id=".$row['Id']." >".$row['TextData']."</div>";
    }
    $db = NULL;
?>

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
			//event.preventDefault();
    $('#nav li a').removeClass("active");
    $(this).find('a').addClass("active");
    $('#tab-content div').hide();

    var indexer = $(this).index(); //gets the current index of (this) which is #nav li
    var target_news=$(this).children(":first").attr("href");
console.log(target_news);
	$(target_news).fadeIn();
console.log("t");
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