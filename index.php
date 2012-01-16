<?php
if (isset($_GET["prop"])) {
	$prop = $_GET["prop"];
} else {
	$prop = "feature-default";
}

echo $qs;

$proptitlestr = str_replace("feature-", "", $prop);
?><!doctype html>

<!--[if lt IE 7 ]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if (gt IE 6)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head>

	<meta charset="utf-8">

	<title>CSS3 Click Chart | CSS3 Browser Support and Information</title>
	<meta name="description" content="CSS3 Click Chart">
	<meta name="author" content="Louis Lazaris">

	<!-- Remove these two references once the files are in root with these file names -->
	<link rel="shortcut icon" href="/favicon.ico">
	<link rel="apple-touch-icon" href="/apple-touch-icon.png">
	
	<link rel="stylesheet" href="css/normalize.css?v=1.0">
	<link rel="stylesheet" href="css/styles.css?v=1.0">

	<script src="js/modernizr-2.0.6.js"></script>

</head>

<body>

	<header>

		<div class="header-inside globalwidth">

		<h1><a href="http://www.css3clickchart.com" class="title-link">CSS3 Click Chart</a></h1>

		<ul class="viewnav">
			<li class="btncommon"><a href="?view=common" class="selected">common stuff</a></li>
			<li class="btnedge"><a href="?view=edge">cutting-edge</a></li>
		</ul>

		</div><!-- .header-inside -->

	</header>

	<div class="propsnav globalwidth">

		<ul id="commonlist" class="featureslist">
			<?php include "includes/common.php"; ?>
		</ul>

		<ul id="edgelist" class="featureslist">
			<?php include "includes/edge.php"; ?>
		</ul>

	</div><!-- .proplist -->

	<div class="globalwidth">

		<div id="description" class="desc">
		<h2><?php include "includes/features/" . $proptitlestr . "/title.php"; ?></h2>
		<p><?php include "includes/features/" . $proptitlestr . "/description.php"; ?></p>
		</div><!-- #description -->

		<div id="info" class="spec ext">
		<h2>Specification</h2>
		<p><?php include "includes/features/" . $proptitlestr . "/technical.php"; ?></p>
		</div><!-- #info -->

		<?php //$handle = fopen("includes/features/" . str_replace("feature-", "", $view) . "/title.php", 'w') or die('Cannot open file: '.$view . ".php"); ?>

		<?php //mkdir("includes/features/" . str_replace("feature-", "", $view), 0700); ?>

	</div><!-- .globalwidth -->

	<div class="globalwidth ed">
	<h2>Example Code</h2>

	<!--[if lte IE 9 ]><pre id="code" class="code"><![endif]-->
	<!--[if gt IE 9 | !(IE)]><!--><textarea id="code" class="code" readonly><!--<![endif]-->
	<?php include "includes/features/" . $proptitlestr . "/code.php"; ?>
	<!--[if gt IE 9 | !(IE)]><!--></textarea><!--<![endif]-->
	<!--[if lte IE 9 ]></pre><![endif]-->
	</div><!-- .ed -->

	<div class="globalwidth">

		<div class="demo-left">
		<h2>Live Demonstration</h2>

			<div id="result" class="result ext"><?php include "includes/features/" . $proptitlestr . "/result.php"; ?></div><!-- #result -->
		</div><!-- .demo-left -->

		<div class="demo-right">
		<h2>Desktop Browser Support</h2>

			<div id="support" class="support"><?php include "includes/features/" . $proptitlestr . "/support.php"; ?></div><!-- #support -->

		</div><!-- .demo-right -->

	</div>

	<div class="globalwidth infoboxes ext">

		<div id="polyfills" class="polyfills">
		<h2>Tools / Polyfills</h2>
		<p><?php include "includes/features/" . $proptitlestr . "/polyfills.php"; ?></p>
		</div><!-- #polyfills -->
		
		<div id="tutorials" class="tutorials">
		<h2>Tutorials / Articles</h2>
		<p><?php include "includes/features/" . $proptitlestr . "/tutorials.php"; ?></p>
		</div><!-- #tutorials -->

	</div><!-- .infoboxes -->

	<footer>

		<div class="globalwidth">
		<p>Fork the project or offer suggestions for improvements <a href="https://github.com/impressivewebs/CSS3-Click-Chart">on the GitHub page</a></p>

		<p class="cr">Copyright &copy; 2011 by <a href="http://www.impressivewebs.com">Louis Lazaris</a> | <a href="http://twitter.com/ImpressiveWebs">Follow me on Twitter</a> | <a href="http://www.iconshock.com/html5-icons/">HTML5 icons by Icon Shock</a></p>
		</div><!-- .footer-inside -->

	</footer>

	<a href="https://github.com/impressivewebs/CSS3-Click-Chart"><img class="github-ribbon" src="https://a248.e.akamai.net/assets.github.com/img/4c7dc970b89fd04b81c8e221ba88ff99a06c6b61/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f77686974655f6666666666662e706e67" alt="Fork me on GitHub"></a>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>!window.jQuery && document.write(unescape('%3Cscript src="js/jquery-1.7.1.min.js"%3E%3C/script%3E'))</script>

<script src="js/general.js"></script>

<script>
var _gaq = [['_setAccount', 'UA-1965499-10'], ['_trackPageview']];
(function(d, t) {
	var g = d.createElement(t),
		s = d.getElementsByTagName(t)[0];
	g.async = true;
	g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g, s);
})(document, 'script');
</script>
</body>
</html>