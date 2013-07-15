<?php /* @var $this Controller */ ?>
<?php Yii::app()->bootstrap->register(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>
    <meta name="keywords" content="yii framework, yii application, yii application development, php framework, yii bootstrap, yii framework tutorial, yii php framework, yii bootstrap, yiistrap"/>
	<?php css('css/styles.css'); ?>
	<?php css('js/google-code-prettify/prettify.css'); ?>
    <?php js('js/google-code-prettify/prettify.js'); ?>
    <?php js('js/google-code-prettify/prettify.js'); ?>
    <?php js('js/holder.js'); ?>
	<?php js('js/app.js', CClientScript::POS_END); ?>
    <title><?php echo e($this->pageTitle); ?></title>
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php echo baseUrl('favicon.ico'); ?>">
    <style id="holderjs-style" type="text/css">
        .holderjs-fluid {
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            font-family: sans-serif;
            margin: 0
        }
    </style>
</head>
<body class="layout-main" data-spy="scroll" data-target=".bs-docs-sidebar">
<!-- Navbar -->
<?php $this->widget('bootstrap.widgets.TbNavbar', array(
	'brandLabel' => img('images/logo-navbar.png') . ' ' . e(Yii::app()->name) . ' <small>BETA</small>',
	'brandUrl' => baseUrl('site/index'),
	//'collapse' => true,
	'items' => array(
		array(
			'class' => 'bootstrap.widgets.TbNav',
			'items' => array(
				array('label' => 'Home', 'url' => array('site/index')),
				array('label' => 'Get started', 'url' => array('site/started')),
				array('label' => 'Widgets', 'url' => array('site/widgets')),
                array('label' => 'Documentation', 'url' => array('/api')),
			),
		),
	),
));
?>
<!-- Content -->
<?php echo $content; ?>
<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="text-center">
            <p class="credits">
                Developed by <a href="http://www.ramirezcobos.com/" target="_blank">Antonio Ramirez</a> and <a href="http://www.2amigos.us" target="_blank">Matt Tabin</a>.
            </p>
            <p class="license">
                Code licensed under <a href="http://opensource.org/licenses/BSD-3-Clause">BSD-3-Clause License</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/">CC BY 3.0</a>.
            </p>
			<p class="sponsors" style="margin-top: 60px;">
                <div style="text-align:center;margin-bottom:5px">
                    <small class="muted">Proudly hosted by</small><br>
                    <a href="http://2amigos.us"><img src="<?php echo baseUrl('images/2amigos-logo.png'); ?>"/></a>
                </div>
				<!--<a href="http://www.jetbrains.com/phpstorm/" style="position:relative;display:inline-block;width:127px;height:37px;border:0;margin:0;padding:0;text-decoration:none;text-indent:0;"><span style="margin: 0;padding: 0;position: absolute;top: 0;left: 36px;font-size: 10px;cursor:pointer;  background-image:none;border:0;color: #fff; font-family: trebuchet ms,arial,sans-serif;font-weight: normal;text-align:left;">Developed with</span><img src="http://www.jetbrains.com/phpstorm/documentation/phpstorm_banners/phpstorm1/phpstorm125x37_violet.gif" alt="Developed with PhpStorm" border="0"/></a>-->
            </p>
        </div>
    </div>
</footer>
<!-- Piwik -->
<script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(["trackPageView"]);
    _paq.push(["enableLinkTracking"]);

    (function() {
        var u=(("https:" == document.location.protocol) ? "https" : "http") + "://analytics.2amigos.us/";
        _paq.push(["setTrackerUrl", u+"piwik.php"]);
        _paq.push(["setSiteId", "3"]);
        var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
        g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
    })();
</script>
<!-- End Piwik Code -->
</body>
</html>
