<?php
  include_once 'bnav.php'; 

/*   require_once 'config.php';
require __DIR__ . '/vendor/autoload.php';

const DEFAULT_PATH = '/NewsArticle';
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN); */

?>
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
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b> &nbsp;  NEWS AT BRIO</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul id="nav">
<?php 
$string = file_get_contents("NewsArticle.json");
$arrayj=json_decode($string,true);

//echo sizeof($arrayj);
$cnt=0;
foreach ($arrayj as  $key =>&$value) {

		echo "<li class='news-item' id="."><a href=#".$cnt."><strong>".$key."</strong></br>more...</a></li>";
$cnt+=1;
}//end of each


?>

</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>
<div class="col-md-9">
<div id="tab-content">
<?php 
//$string = file_get_contents("NewsArticle.json");
//$arrayj=json_decode($string,true);

//echo sizeof($arrayj);
foreach ($arrayj as  $key =>&$value) {


if($key=="2015-09-08T04:48:12 02:00")
{
		echo "<div id=#".$key." >".array_values($value)[0]."</div>";
}
else
{
	echo "<div id=#".$key." >".array_values($value)[0]."</div>";
}
	}
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
            autoplay: false,
                   navigation:false,
            onToDo: function () {
                //console.log(this);
            }
        });
		
	$('#nav li').click(function(event) {
    $('#nav li a').removeClass("active");
    $(this).find('a').addClass("active");
    $('#tab-content div').hide();

    var indexer = $(this).index(); //gets the current index of (this) which is #nav li
	//var refid=$(this).find('a').attr('href');
	//console.log($(this).html());
	//console.log(  $(refid).html());
    //$(refid).find('a').addClass("active");
	//$(refid).fadeIn();
	//event.preventDefault();
	//$(this).find('a').attr('href').fadeIn();

   $('#tab-content div:eq(' + indexer + ')').fadeIn(); //uses whatever index the link has to open the corresponding box 
  // $(this).attr('id').fadeIn();
}); //end of click
    });
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