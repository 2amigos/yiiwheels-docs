<?php
/* @var SiteController $this */
$this->pageTitle = 'Getting started - ' . param('pageTitle');
?>
<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview">
    <div class="container">
        <h1>Getting started</h1>

        <p class="lead">How to configure Yiiwheels for your project</p>
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

        <p class="lead">Download the package and unzip its contents in your extensions folder. We highly
            recommend the use of <a href="http://getcomposer.org" target="_blank">Composer</a> to manage your
            dependencies. If you have problems to install it, you can check the preconfigured project
            boilerplates at <a href="http://yiinitializr.2amigos.us" target="_blank">Yiinitializr</a>.</p>

        <div class="row-fluid">
            <div class="span6">
                <h2>Download</h2>

                <p><strong>Fastest way to get started:</strong> get the extension and unzip its contents in your
                    extensions folder and configure it.</p>

                <p><a class="btn btn-large btn-primary"
                      href="https://github.com/2amigos/yiiwheels/archive/master.zip">Download Yiiwheels</a></p>
            </div>
            <div class="span6">
                <h2>Clone</h2>

                <p>You can also clone the git repository by heading to the GitHub project page and following the
                    instructions there.</p>

                <p><a class="btn btn-large" href="https://github.com/2amigos/yiiwheels">Yiiwheels on GitHub</a>
                </p>
            </div>
        </div>
        <div class="row-fluid">
            <p><span class="label label-important">important</span> This version of yiiwheels, requires the
                use of <a href="http://getyiistrap.com">Yiistrap</a>. If you wish to
                use the <a href="https://github.com/2amigos/yiiwheels-custom/tree">2amigOS! custom one</a>, we
                removed that requirement and made use of namespaces.</p>
        </div>

    </section>

    <!-- File structure
        ================================================== -->
    <section id="configuration">

        <div class="page-header">
            <h1>2. Configuration</h1>
        </div>

        <p class="lead">Within the download you'll find the following file structure and contents, logically
            grouping assets, behaviors, components, helpers and widgets in respective directories.</p>

        <p>Unzip the contents of the package under <strong>protected/extensions/yiiwheels</strong>. The folder
            structure should now be the following:</p>

<pre class="prettyprint">
  protected
  └── extensions
      └── yiwheels
          ├── assets
          │   ├── css
          │   ├── img
          │   ├── js
          │   └── less
          ├── behaviors
          ├── helpers
          └── widgets</pre>

        <p>Open your application configuration in <strong>protected/config/main.php</strong> and modify it
            according to the following example:</p>

<pre class="prettyprint">
&lt;?php
// main configuration
return array(
	...
    // path aliases
    'aliases' => array(
        ...
        // yiistrap configuration
        'bootstrap' => realpath(__DIR__ . '/../extensions/bootstrap'), // change if necessary
        // yiiwheels configuration
        'yiiwheels' => realpath(__DIR__ . '/../extensions/yiiwheels'), // change if necessary
    ),
    // import paths - yiistrap configuration
    'import' => array(
        'bootstrap.helpers.TbHtml',
    ),
    // application components
    'components' => array(
        ...
        // yiistrap configuration
        'bootstrap' => array(
            'class' => 'bootstrap.components.TbApi',
        ),
        // yiiwheels configuration
        'yiiwheels' => array(
            'class' => 'yiiwheels.YiiWheels',   
        ),
    ),
);</pre>

        <p>Add the following line to your main layout in <strong>protected/views/layouts/main.php</strong> to
            register the necessary CSS and JavaScript files:</p>

<pre class="prettyprint">
&lt;?php Yii::app()->bootstrap->register(); ?&gt;</pre>

    </section>

    <!-- What's included
        ================================================== -->
    <section id="contents">

        <div class="page-header">
            <h1>3. What's included</h1>
        </div>
        <p class="lead">Includes most of the widgets from YiiBooster (refactored) and the list will grow even more.</p>

        <div class="row-fluid">
            <div class="span3">
                <ul>
                    <li>Ace Editor</li>
                    <li>Box</li>
                    <li>DatePicker</li>
                    <li>DateRangePicker</li>
                    <li>DetailView</li>
                    <li>BasicFileUpload</li>
                    <li>FileUpload</li>
                    <li>FineUploader</li>
                    <li>ActiveForm</li>
                    <li>VisualizationChart</li>
                    <li>RelationalColumn</li>
                    <li>HighCharts</li>
                    <li>HTML5Editor</li>
                    <li>MaskMoney</li>
                </ul>
            </div>
            <div class="span3">
                <ul>
                    <li>Modal</li>
                    <li>MultiSelect</li>
                    <li>Redactor</li>
                    <li>Select2</li>
                    <li>SparkLines</li>
                    <li>TimeAgo</li>
                    <li>TimePicker</li>
                    <li>ToggleButton</li>
                    <li>ToggleAction</li>
                    <li>ToggleColumn</li>
                    <li>TypeAhead</li>
                    <li>More on development...</li>
                </ul>
            </div>
        </div>
        <p>

        </p>

    </section>

    <!-- Next
        ================================================== -->
    <section id="what-next">

        <div class="page-header">
            <h1>What next?</h1>
        </div>

        <p class="lead">Head to the docs for examples or take a look at the API.</p>

        <p class="lead">
            <a class="btn btn-large btn-primary" href="<?php echo $this->createUrl('inputs'); ?>"
               onclick="_gaq.push(['_trackEvent', 'Getting started', 'Next steps', 'Visit docs']);">Visit the
                Yiiwheels docs</a>
            <a class="btn btn-large" href="<?php echo $this->createUrl('/api'); ?>"
               onclick="_gaq.push(['_trackEvent', 'Getting started', 'Next steps', 'Visit API']);">Open the
                Yiiwheels API</a>
        </p>
    </section>

</div>

</div>

</div>
