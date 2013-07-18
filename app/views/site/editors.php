<?php
/* @var SiteController $this */
/* @var TestForm $model */

$this->pageTitle = 'Widgets - ' . param('pageTitle');
?>
    <!-- Subhead
    ================================================== -->
    <header class="jumbotron subhead">
        <div class="container">
            <h1>Widgets</h1>

            <p class="lead">Getting advanced with widgets</p>
        </div>
    </header>

<div class="container">

<!-- Docs nav
================================================== -->
<div class="row-fluid">
<div class="span3 bs-docs-sidebar">
    <ul class="nav nav-list bs-docs-sidenav">
        <li><a href="#ace"><i class="icon-chevron-right"></i> Ace Editor</a></li>
        <li><a href="#redactor"><i class="icon-chevron-right"></i> Redactor</a></li>
    </ul>
</div>
<div class="span9">

<!-- ACE  Editor
================================================== -->
<section id="ace">

    <?php $dropdownConfig = array(
        array('label' => 'Action', 'url' => '#'),
        array('label' => 'Another action', 'url' => '#'),
        array('label' => 'Something else here', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    ); ?>
    <div class="page-header">
        <h1>Ace Editor
            <small>WhAceEditor.php</small>
        </h1>
    </div>

    <h3>Basic Example
        <small>Ace Editor in mode html</small>
    </h3>
    <p>
        Implements the amazing high performance ace code editor. For more information about the plugin, please
        visit
        <a href="http://ajaxorg.github.io/ace/#nav=about" target="_blank">Ace editor website</a>.
    </p>

    <p>Write some HTML code :)</p>

    <div class="bs-docs-example">
        <?php
        $this->widget(
            'yiiwheels.widgets.ace.WhAceEditor',
            array(
                'name'        => 'aceTest',
                'htmlOptions' => array('style' => 'width:100%;height:150px')
            )
        );?>
    </div>

<pre class="prettyprint linenums">
&lt;?php $this-&gt;widget(&#39;yiiwheels.widgets.ace.WhAceEditor&#39;,
array(
    &#39;name&#39;=&gt;&#39;aceTest&#39;,
    &#39;htmlOptions&#39;=&gt; array(&#39;style&#39; =&gt; &#39;width:100%;height:150px&#39;)
));?&gt;</pre>
</section>

<!-- Redactor
================================================== -->
<section id="redactor">

    <div class="page-header">
        <h1>Redactor
            <small>WhRedactor.php</small>
        </h1>
    </div>

    <p>Todo</p>

    <div class="bs-docs-example">

    </div>

    <pre class="prettyprint linenums"></pre>
</section>

</div>
</div>

<?php
// fix twitter bootstrap docs bug: https://github.com/twitter/bootstrap/issues/6832
Yii::app()->clientScript->registerScript(
    'javascript#ReadyJS',
    <<<EOD
   $('.tooltip-demo a[rel=tooltip]').tooltip();
EOD
);
