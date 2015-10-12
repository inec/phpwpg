<?php 
  include_once 'bnav.php';
?>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<script src="assets/js/scroll.js" type="text/javascript"></script>

	

	<div id="content-wrapper">
		<div id="example-wrapper">
			<div class="scrollContent">
				<section id="titlechart">
					<div id="description">

<p>ppp</p>
						<a href="#" class="viewsource">view source</a>
<p>ppp</p>
						</div>
				</section>
<div class="bgColor2">
 <nav  id="nav" class="">
      <div class="navbar">

        <ul class="nav navbar-nav bgColor3">
          <li><a class="icon info" href="#hotelinfo" id="high1"><span>info</span></a></li>
          <li><a class="icon rooms" href="#rooms" id="high2"><span>rooms</span></a></li>
          <li><a class="icon dining" href="#dining" id="high3"><span>dining</span></a></li>
          <li><a class="icon events" href="#events " id="high4"><span>events</span></a></li>
          <li><a class="icon attractions" href="#attractions"><span>attractions</span></a></li>
        </ul>
			<ul id="menu"></ul>
      </div><!-- navbar -->
 </nav>
</div>
				<section class="demo">
					<style type="text/css">
						.active {
							background-color: #999;
						}
					</style>
					

					<div class="spacer s1" id="sec1">
						<div class="box2" style="background-color: #8DBBE0;">
							<p>One</p>
							<a href="#" class="viewsource">view source</a>
								<p>ppp</p>
						</div>
					</div>
					<div class="spacer s1" id="sec2">
						<div class="box2" style="background-color: #6AA6D8;">
							<p>Two</p>
							<a href="#" class="viewsource">view source</a>
								<p>ppp</p>
						</div>
					</div>
					<div class="spacer s1" id="sec3">
						<div class="box2" style="background-color: #4E96D1;">
							<p>Three</p>
							<a href="#" class="viewsource">view source</a>
								<p>ppp</p>
						</div>
					</div>
					<div class="spacer s1" id="sec4">
						<div class="box2" style="background-color: #307FB5;">
							<p>Four</p>
							<a href="#" class="viewsource">view source</a>
								<p>ppp</p>
						</div>
					</div>
					<div class="spacer s2"></div>
					<script>
						// init controller
						//var controller = new ScrollMagic.Controller({globalSceneOptions: {duration: 100}});
						
						  var controller = new ScrollMagic.Controller({
    globalSceneOptions: {
      triggerHook: 'onLeave'
    }
  });

						// build scenes
						  var pin = new ScrollMagic.Scene({
    triggerElement: '#nav',
  }).addIndicators().setPin('#nav').addTo(controller);
  
						new ScrollMagic.Scene({triggerElement: "#sec1"})
										.setClassToggle("#high1", "active") // add class toggle
										.addIndicators() // add indicators (requires plugin)
										.addTo(controller);
						new ScrollMagic.Scene({triggerElement: "#sec2"})
										.setClassToggle("#high2", "active") // add class toggle
										.addIndicators() // add indicators (requires plugin)
										.addTo(controller);
										
						new ScrollMagic.Scene({triggerElement: "#sec3"})
										.setClassToggle("#high3", "active") // add class toggle
										.addIndicators() // add indicators (requires plugin)
										.addTo(controller);
										
						new ScrollMagic.Scene({triggerElement: "#sec4"})
										.setClassToggle("#high4", "active") // add class toggle
										.addTo(controller);
					</script>
				</section>
				<div class="spacer s_viewport"></div>
			</div>
		</div>
	</div>

 <?php

   include_once 'bfooter.php'; 
?>