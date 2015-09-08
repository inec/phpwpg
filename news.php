<?php
  include_once 'bnav.php'; 

  require_once 'config.php';
require __DIR__ . '/vendor/autoload.php';

const DEFAULT_PATH = '/NewsArticle';
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

?>
<h1 style="margin-top:150px" align="center">jQuery Bootstrap News Box</h1>

<div class="container">
<div class="row">

<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul class="demo2">
<li class="news-item">2nes dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
<li class="news-item">2-2ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
<li class="news-item">2-3psum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
<li class="news-item">2-4ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
<li class="news-item">2-5 ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
<li class="news-item">2-6 ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></li>
</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>
<div class="col-md-4">
<div class="panel panel-default">
<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News</b></div>
<div class="panel-body">
<div class="row">
<div class="col-xs-12">
<ul id="demo3">
<li class="news-item">3-1 porttitor ante eget hendrerit adipiscing. Maecenas at magna accumsan,
										rhoncus neque id, fringilla dolor. <a href="#">Read more...</a></li>
<li class="news-item">3-2 porttitor ante eget hendrerit adipiscing. Maecenas at magna accumsan,
										rhoncus neque id, fringilla dolor. <a href="#">Read more...</a></li>
<li class="news-item">3-3 ornare nisl lorem, ut condimentum lectus gravida ut. Ut velit nunc, vehicula
										volutpat laoreet vel, consequat eu mauris. <a href="#">Read more...</a></li>
<li class="news-item">3-4 ultrices tortor eu massa placerat posuere. Vivamus viverra sagittis nunc. Nunc
										et imperdiet magna. Mauris sed eros nulla. <a href="#">Read more...</a></li>
<li class="news-item">3-5 sodales tellus sit amet leo congue bibendum. Ut non mauris eu neque fermentum
										pharetra. <a href="#">Read more...</a></li>
<li class="news-item">3-6 suscipit orci sed viverra. Praesent at sollicitudin tortor, id sagittis
										magna. Fusce massa sem, bibendum id. <a href="#">Read more...</a> </li>
<li class="news-item">3-7 nec ligula sed est suscipit aliquet sed eget ipsum. Suspendisse id auctor
										nibh. Ut porttitor volutpat augue, non sodales odio dignissi id. <a href="#">Read more...</a></li>
<li class="news-item">3-8 bibendum consectetur diam, nec euismod urna venenatis eget. Cras consequat
										convallis leo. <a href="#">Read more...</a> </li>
</ul>
</div>
</div>
</div>
<div class="panel-footer"> </div>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		$(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });

        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: true,
            
            onToDo: function () {
                //console.log(this);
            }
        });
    });
</script>
<?php
   include_once 'bfooter.php'; 
?>	