<?php
/* @var SiteController $this */
$this->pageTitle = 'Getting started - ' . param('pageTitle');
?>
<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Getting started (TODO: Replace Yiistrap docs with Yiiwheels docs)</h1>
        <p class="lead">How to configure Yiistrap for your project</p>
    </div>
</header>


<div class="container">

    <!-- Docs nav
   ================================================== -->
    <div class="row">

        <div class="span3 bs-docs-sidebar">
            <ul class="nav nav-list bs-docs-sidenav">
                <li><a href="#download-bootstrap"><i class="icon-chevron-right"></i> Download</a></li>
                <li><a href="#configuration"><i class="icon-chevron-right"></i> Configuration</a></li>
                <li><a href="#contents"><i class="icon-chevron-right"></i> What's included</a></li>
                <li><a href="#basic-layout"><i class="icon-chevron-right"></i> Basic layout</a></li>
                <li><a href="#what-next"><i class="icon-chevron-right"></i> What next?</a></li>
            </ul>
        </div>

<div class="span9">

<!-- Download
	================================================== -->
<section id="download-bootstrap">

	<div class="page-header">
		<h1>1. Download</h1>
	</div>

	<p class="lead">Download the package and unzip its contents in your extensions folder. We highly recommend the use of <a href="http://getcomposer.org" target="_blank">Composer</a> to manage your dependencies. If you have problems to install it, you can check the preconfigured project boilerplates, <a href="http://www.yiiframework.com/wiki/446/kickstart-development-with-yii-app/" target="_blank">Yii-app</a>	or <a href="http://yiinitializr.2amigos.us" target="_blank">Yiinitializr</a>.</p>

	<div class="row-fluid">
		<div class="span6">
			<h2>Download</h2>
			<p><strong>Fastest way to get started:</strong> get the extension and unzip its contents in your extensions folder and configure it.</p>
			<p><a class="btn btn-large btn-primary" href="https://github.com/Crisu83/yiistrap/archive/master.zip">Download Yiistrap</a></p>
		</div>
		<div class="span6">
			<h2>Clone</h2>
			<p>You can also clone the git repository by heading to the GitHub project page and following the instructions there.</p>
			<p><a class="btn btn-large" href="https://github.com/Crisu83/yiistrap">Yiistrap on GitHub</a></p>
		</div>
	</div>

</section>

<!-- File structure
	================================================== -->
<section id="configuration">

	<div class="page-header">
		<h1>2. Configuration</h1>
	</div>

	<p class="lead">Within the download you'll find the following file structure and contents, logically grouping assets, behaviors, components, helpers and widgets in respective directories.</p>

	<p>Unzip the contents of the page under <strong>protected/extensions/bootstrap</strong>. The folder structure should now be the following:</p>

<pre class="prettyprint">
  protected
  └── extensions
      └── bootstrap
          ├── assets
          │   ├── css
          │   ├── img
          │   ├── js
          │   └── less
          ├── behaviors
          ├── components
          ├── helpers
          └── widgets</pre>

	<p>Open your application configuration in <strong>protected/config/main.php</strong> and modify it according to the following example:</p>

<pre class="prettyprint">
&lt;?php
// main configuration
return array(
	...
    // path aliases
    'aliases' => array(
        ...
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change this if necessary
    ),
    // import paths
    'import' => array(
        'bootstrap.helpers.TbHtml',
    ),
    // application components
    'components' => array(
        ...
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',   
        ),
    ),
);</pre>

    <p>Add the following line to your main layout in <strong>protected/views/layouts/main.php</strong> to register the necessary CSS and JavaScript files:</p>

<pre class="prettyprint">
&lt;?php Yii::app()->bootstrap->register(); ?&gt;</pre>

</section>

<!-- What's included
	================================================== -->
<section id="contents">

	<div class="page-header">
		<h1>3. What's included</h1>
	</div>

	<p class="muted">Coming soon!</p>

</section>

<!-- Basic layout
================================================== -->
<section id="basic-layout">

	<div class="page-header">
		<h1>4. Basic layout</h1>
	</div>

	<p class="muted">Coming soon!</p>

</section>

<!-- Next
	================================================== -->
<section id="what-next">

	<div class="page-header">
		<h1>What next?</h1>
	</div>

	<p class="lead">Head to the docs for examples or take a look at the API.</p>

	<p class="lead">
		<a class="btn btn-large btn-primary" href="<?php echo $this->createUrl('basics'); ?>" onclick="_gaq.push(['_trackEvent', 'Getting started', 'Next steps', 'Visit docs']);">Visit the Yiistrap docs</a>
		<a class="btn btn-large" href="<?php echo $this->createUrl('/api'); ?>"  onclick="_gaq.push(['_trackEvent', 'Getting started', 'Next steps', 'Visit API']);">Open the Yiistrap API</a>
	</p>
</section>

        </div>

    </div>

</div>