<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Simon Kotlinski
 * Date: 2012-01-22
 * Time: 00:02
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description"
		  content="Wassberg Media är ett nystartat företag som riktar in sig på bröloppsfilmning och att fånga känslan i en av de viktigaste dagarna i era liv.">
	<meta name="author" content="Simon Kotlinski">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="revisit-after" content="1 days">
	<meta name="keywords" content="brölopp fotograf cecilia wassberg bröloppsfilm wedding fotografi">
	<meta itemprop="name" content="Cecilia Wassberg">
	<title>WassbergMedia<?= ' - ' . $title ?></title>
	<meta name="description" content="Bröllopsfilmer och redigerering; WassbergMedia - <?= $title ?>.">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="stylesheet" href="<?= base_url('/statics/css/normalize.css') ?>">
	<link rel="stylesheet" href="<?= base_url('statics/css/sticky_footer.css') ?>">
	<link rel="stylesheet" href="<?= base_url('statics/css/wassberg.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/statics/css/main.css') ?>">
	<link rel="stylesheet" href="<?= base_url('/statics/css/menu.css') ?>">
	<script src="<?= base_url('statics/js/libs/modernizr-2.6.2.min.js') ?>"></script>
<!--	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
-->
</head>
<body>
<div class="wrapper">
	<div>
		<h1 id="primary_header">Wassberg Media</h1>

		<h2 id="secondary_header">Bröllopsfotografering och redigering</h2>

	</div>
	<div id="contentContainer">
		<?php echo $menu; ?>

		<div id="module_wrapper">
			<?php echo $selected_module;?>
		</div>
	</div>

	<div class="push"></div>
</div>
<div class="footer">
	<div class="footer-style">
		Copyright © Cecilia Wassberg <?= date("Y"); ?>
	</div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/statics/js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
<script src="/statics/js/plugins.js"></script>
<script src="/statics/js/main.js"></script>
<?php if (ENVIRONMENT != "development") { ?>
<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-48617020-1']);
	_gaq.push(['_trackPageview']);
	(function () {
		var ga = document.createElement('script');
		ga.type = 'text/javascript';
		ga.async = true;

		ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(ga, s);
	})();
</script>
	<?php } ?>
<script type="text/javascript">
	WebFontConfig = {
		google: { families: [ 'Source+Code+Pro::latin-ext' ] }
	};
	(function() {
		var wf = document.createElement('script');
		wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
			'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
		wf.type = 'text/javascript';
		wf.async = 'true';
		var s = document.getElementsByTagName('script')[0];
		s.parentNode.insertBefore(wf, s);
	})(); </script>
</body>
</html>