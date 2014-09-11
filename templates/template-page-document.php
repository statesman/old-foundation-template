<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- working cache -->
	<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
	<meta http-equiv="Pragma" content="no-cache" />
	<meta http-equiv="Expires" content="0" />

<!-- production cache -->
<!--	<meta http-equiv="Cache-Control" content="max-age=3600, must-revalidate" /> -->

	<meta name="apple-mobile-web-app-title" content="Project Name">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="apple-touch-icon" href="assets/appicon.png">
	<link rel="icon" type="image/png" href="../../common/favicon.ico">

	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="apple-touch-icon" href="assets/appicon.png">
	<meta name="apple-mobile-web-app-title" content="Project Name">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">

	<title>Project Name</title>
	<meta name="description" content="Project Name: Description">
	<meta property="og:title" content="Project Name"/>
	<meta property="og:description" content="Project Name: Description"/>
	<meta property="og:image" content="assets/appicon.png"/>
	<meta property="og:url" content="http://projects.statesman.com/news/project-url/"/>

	<link rel="stylesheet" href="../../foundation-5.3.3/css/normalize.css">
	<link rel="stylesheet" href="../../foundation-5.3.3/css/foundation.css">

<!-- project additions -->
	<?php include "assets/advertising.js";?>

<!-- project-specific styles -->
	<link rel="stylesheet" type="text/css" href="../../foundation-5.3.3/slick/slick/slick.css"/>
	<link rel="stylesheet" href="project.css">
	<link href='http://fonts.googleapis.com/css?family=Tinos:400,700|Playfair+Display+SC:400,700|Nobile' rel='stylesheet' type='text/css'>

<!-- page additions -->
<style type="text/css">
#headerImage img {position: relative; width: 100%; margin-bottom: 20px;}
#headerImage #headerText {position: absolute; top: 2%; text-align: left;  background: rgba(220, 214, 214, 0.5); padding: 10px 20px 10px 20px;}


</style>

<?php include "../../common/metrics-head.js";?>
</head>

<body>
<div class="fixed sticky" data-options="sticky_on: large">
	<nav class="top-bar" data-topbar>
		<ul class="title-area">
			<li class="name"><h1><a href="http://www.statesman.com/" target="_blank"><img src="../../common/logo-white.svg" /></a></h1></li>
            <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
		</ul>

		<section class="top-bar-section">
        	<!-- left Nav Section -->
			<ul class="left">
            </ul>
			<!-- Right Nav Section -->
			<ul class="right">
                <li class="active"><a href="./">HOME</a></li>
                <li class=""><a href="#">CHAP 1</a></li>
                <li class=""><a href="#">CHAP 2</a></li>
				<li class="has-dropdown"><a href="#">CREDITS</a>
						<ul class="dropdown">
                            <li><a href="mailto:author@statesman.com">Author: </a></li>
                            <li><a href="mailto:author@statesman.com">Photographer: </a></li>
						</ul>
				</li>
			</ul>
		</section>
	</nav>
</div>


<!-- small sharing because stock add this goes away -->
<div class="row show-for-small-only">
	<div class="small-12 columns small-centered">
	<!-- AddThis Button BEGIN -->
	<div class="addthis_toolbox addthis_default_style addthis_32x32_style small-12 small-centered columns">
	<a class="addthis_button_facebook"></a>
	<a class="addthis_button_twitter"></a>
	<a class="addthis_button_google_plusone_share"></a>
	<a class="addthis_button_email"></a>
	<a class="addthis_button_compact"></a>
	</div>
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52f93567099a6a05"></script>
	<!-- AddThis Button END -->
	</div>
 </div>

<!-- stock add this. this is tied to the account and will show anytime you you have addthis script () -->
<div class="show-for-medium-up">
	<!-- Go to www.addthis.com/dashboard to customize your tools -->
	<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-52f93567099a6a05"></script>
</div>


<div class="row">
	<div class="columns">
		<h1>Title of project</h1>
	</div>
</div>

<!-- this is where the full-width document embed goes. Nothing will how below the document viewer (no matter how hard you try!) -->
<div id="DV-viewer-1219436-inspector-general-report-on-suzy-gulliver" class="DV-container"></div>
<script src="//s3.amazonaws.com/s3.documentcloud.org/viewer/loader.js"></script>
<script>
  DV.load("//www.documentcloud.org/documents/1219436-inspector-general-report-on-suzy-gulliver.js", {
  container: "#DV-viewer-1219436-inspector-general-report-on-suzy-gulliver"
  });
</script>
  <noscript>
  <a href="http://s3.documentcloud.org/documents/1219436/inspector-general-report-on-suzy-gulliver.pdf">Inspector General report on Suzy Gulliver (PDF)</a>
  <br />
  <a href="http://s3.documentcloud.org/documents/1219436/inspector-general-report-on-suzy-gulliver.txt">Inspector General report on Suzy Gulliver (Text)</a>
</noscript>
<!-- end document -->



<!-- scripts -->
	<script src="../../foundation-5.3.3/js/vendor/jquery.js"></script>
	<script src="../../foundation-5.3.3/js/foundation.min.js"></script>
	<script>
		$(document).foundation();
	</script>
	<script type="text/javascript" src="../../foundation-5.3.3/slick/slick/slick.min.js"></script>

<!-- project scripts -->
<!-- might could save in separate file -->
    <script type="text/javascript">
        $(document).ready(function(){
            $('.sliderContent').slick({
		        dots: true,
		        infinite: true,
		        speed: 300,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        arrows: false,
		        draggable:true
        	});
        });
    </script>

<!-- metrics code -->
<?php include "assets/project-metrics.js"; ?>
<?php include "../../common/metrics.js"; ?>
</body>
</html>