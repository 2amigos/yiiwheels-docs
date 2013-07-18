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

            <p class="lead">Grids, Grid Columns, Views, Helpers</p>
        </div>
    </header>

    <div class="container">

        <!-- Docs nav
        ================================================== -->
        <div class="row-fluid">
            <div class="span3 bs-docs-sidebar">
                <ul class="nav nav-list bs-docs-sidenav">
                    <li><a href="#detailview"><i class="icon-chevron-right"></i> DetailView</a></li>
                    <li><a href="#relationalcolumn"><i class="icon-chevron-right"></i> RelationalColumn</a></li>
                    <li><a href="#toggle"><i class="icon-chevron-right"></i> Toggle Column</a></li>
                </ul>
            </div>
            <div class="span9">

                <!-- DetailView
                ================================================== -->
                <section id="detailview">

                    <div class="page-header">
                        <h1>DetailView
                            <small>WhDetailView.php</small>
                        </h1>
                    </div>
                    <div class="bs-docs-example">
                        <?php
                        $this->widget(
                            'yiiwheels.widgets.detail.WhDetailView',
                            array(
                                'data'       => array(
                                    'id'        => 1,
                                    'firstName' => 'Mark',
                                    'lastName'  => 'Otto',
                                    'language'  => 'CSS'
                                ),
                                'attributes' => array(
                                    array('name' => 'firstName', 'label' => 'First name'),
                                    array('name' => 'lastName', 'label' => 'Last name'),
                                    array('name' => 'language', 'label' => 'Language'),
                                ),
                            )
                        );
                        ?>
                    </div>

<pre class="prettyprint linenums">
&lt;?php
$this-&gt;widget(
    'yiiwheels.widgets.detail.WhDetailView',
    array(
        'data' =&gt; array(
            'id' =&gt; 1,
            'firstName' =&gt; 'Mark',
            'lastName' =&gt; 'Otto',
            'language' =&gt; 'CSS'
        ),
        'attributes' =&gt; array(
            array('name' =&gt; 'firstName', 'label' =&gt; 'First name'),
            array('name' =&gt; 'lastName', 'label' =&gt; 'Last name'),
            array('name' =&gt; 'language', 'label' =&gt; 'Language'),
        ),
    ));
?&gt;
</pre>
                </section>

                <!-- RelationalColumn
                        ================================================== -->
                <section id="relationalcolumn">

                    <div class="page-header">
                        <h1>RelationalColumn
                            <small>WhRelationColumn.php</small>
                        </h1>
                    </div>

                    <p>Todo</p>

                    <div class="bs-docs-example">

                    </div>

                    <pre class="prettyprint linenums"></pre>
                </section>

                <!-- Toggle
                ================================================== -->
                <section id="toggle">

                    <div class="page-header">
                        <h1>ToggleColumn
                            <small>WhToggleColumn.php</small>
                        </h1>
                    </div>

                    <p>Todo</p>

                    <div class="bs-docs-example">

                    </div>

                    <pre class="prettyprint linenums"></pre>

                </section>
            </div>
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
