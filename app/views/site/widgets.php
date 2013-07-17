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
    <div class="row">
    <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
            <li><a href="#ace"><i class="icon-chevron-right"></i> Ace Editor</a></li>
            <li><a href="#box"><i class="icon-chevron-right"></i> Box</a></li>
            <li><a href="#datepicker"><i class="icon-chevron-right"></i> DatePicker</a></li>
            <li><a href="#daterangepicker"><i class="icon-chevron-right"></i> DateRangePicker</a></li>
            <li><a href="#detailview"><i class="icon-chevron-right"></i> DetailView</a></li>
            <li><a href="#basicfileupload"><i class="icon-chevron-right"></i> BasicFileUpload</a></li>
            <li><a href="#fileupload"><i class="icon-chevron-right"></i> FileUpload</a></li>
            <li><a href="#fineuploader"><i class="icon-chevron-right"></i> FineUploader</a></li>
            <li><a href="#form"><i class="icon-chevron-right"></i> Form</a></li>
            <li><a href="#visualizationchart"><i class="icon-chevron-right"></i> VisualizationChart</a></li>
            <li><a href="#relationalcolumn"><i class="icon-chevron-right"></i> RelationalColumn</a></li>
            <li><a href="#highcharts"><i class="icon-chevron-right"></i> HighCharts</a></li>
            <li><a href="#html5editor"><i class="icon-chevron-right"></i> HTML5Editor</a></li>
            <li><a href="#maskinput"><i class="icon-chevron-right"></i> MaskInput</a></li>
            <li><a href="#maskmoney"><i class="icon-chevron-right"></i> MaskMoney</a></li>
            <li><a href="#modal"><i class="icon-chevron-right"></i> Modal</a></li>
            <li><a href="#multiselect"><i class="icon-chevron-right"></i> MultiSelect</a></li>
            <li><a href="#rangeslider"><i class="icon-chevron-right"></i> RangeSlider</a></li>
            <li><a href="#redactor"><i class="icon-chevron-right"></i> Redactor</a></li>
            <li><a href="#select2"><i class="icon-chevron-right"></i> Select2</a></li>
            <li><a href="#sparklines"><i class="icon-chevron-right"></i> Sparklines</a></li>
            <li><a href="#timeago"><i class="icon-chevron-right"></i> TimeAgo</a></li>
            <li><a href="#timepicker"><i class="icon-chevron-right"></i> TimePicker</a></li>
            <li><a href="#toggle"><i class="icon-chevron-right"></i> Toggle</a></li>
            <li><a href="#typeahead"><i class="icon-chevron-right"></i> TypeAhead</a></li>
        </ul>
    </div>
    <div class="span9">

        <!-- ACE Editor
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
                <?php $this->widget(
                    'yiiwheels.widgets.ace.WhAceEditor',
                    array(
                        'name'        => 'aceTest',
                        'htmlOptions' => array('style' => 'width:100%;height:150px')
                    )
                );?>
            </div>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this-&gt;widget(&#39;yiiwheels.widgets.ace.WhAceEditor&#39;,
    array(
        &#39;name&#39;=&gt;&#39;aceTest&#39;,
        &#39;htmlOptions&#39;=&gt; array(&#39;style&#39; =&gt; &#39;width:100%;height:150px&#39;)
));?&gt;</pre>
    </section>

    <!-- Box
        ================================================== -->
    <section id="box">

        <div class="page-header">
            <h1>Box
                <small>WhBox.php</small>
            </h1>
        </div>

        <h3>Basic Box</h3>

        <p>
            You use boxes to wrap up elements with a nice window effect. A Box is like a CPortlet type widget with the
            beauty of Bootstrap.
        </p>

        <div class="bs-docs-example">
            <?php $this->widget(
                'yiiwheels.widgets.box.WhBox',
                array(
                    'title'      => 'Basic Box',
                    'headerIcon' => 'icon-home',
                    'content'    => 'My Basic Content (you can use renderPartial here too :))'
                    // $this->renderPartial('_view')
                )
            ); ?>
        </div>

    <pre class="prettyprint linenums">
&lt;?php $this-&gt;widget(&#39;yiiwheels.widgets.box.WhBox&#39;, array(
        &#39;title&#39; =&gt; &#39;Basic Box&#39;,
        &#39;headerIcon&#39; =&gt; &#39;icon-home&#39;,
        &#39;content&#39; =&gt; &#39;My Basic Content (you can use renderPartial here too :))&#39;
)); ?&gt;</pre>

        <hr class="bs-docs-separator">

        <h3>Advanced Content</h3>

        <p>Wrap any content within.</p>

        <div class="bs-docs-example">
            <?php $box = $this->beginWidget(
                'yiiwheels.widgets.box.WhBox',
                array(
                    'title'       => 'Advanced Box',
                    'headerIcon'  => 'icon-th-list',
                    // when displaying a table, if we include bootstra-widget-table class
                    // the table will be 0-padding to the box
                    'htmlOptions' => array('class' => 'bootstrap-widget-table')
                )
            );?>
            <?php $this->renderPartial('_table'); ?>
            <?php $this->endWidget(); ?>
        </div>

    <pre class="prettyprint linenums">
&lt;?php $box = $this-&gt;beginWidget('bootstrap.widgets.TbBox', array(
        'title' =&gt; 'Advanced Box',
        'headerIcon' =&gt; 'icon-th-list',
        // when displaying a table, if we include bootstra-widget-table class
        // the table will be 0-padding to the box
        'htmlOptions' =&gt; array('class'=&gt;'bootstrap-widget-table')
    ));?&gt;
&lt;?php $this-&gt;renderPartial('_table');?&gt;
&lt;?php $this-&gt;endWidget();?&gt;</pre>

        <hr class="bs-docs-separator">

        <h2>Box with actions</h2>

        <p>You can also set actions to a box, so they can nicely display on its right corner as a dropdown button -<i>icon
                actions on the way :)</i></p>

        <p><span class="label label-important">Heads Up!</span> Now you can add <b>any type</b> of buttons to boxes</p>

        <div class="bs-docs-example">
<?php
$this->widget(
'yiiwheels.widgets.box.WhBox',
array(
    'title'         => 'test',
    'headerIcon'    => 'icon-home',
    'headerButtons' => array(
        TbHtml::buttonGroup(
            array(
                array('label' => 'Left'),
                array('label' => 'Middle'),
                array('label' => 'Right'),
            )
        ),
        '&nbsp;',
        TbHtml::buttonDropdown(
            'Action',
            array(
                array('label' => 'Action', 'url' => '#'),
                array('label' => 'Another action', 'url' => '#'),
                array('label' => 'Something else here', 'url' => '#'),
                TbHtml::menuDivider(),
                array('label' => 'Separate link', 'url' => '#'),
            )
        ),
    )
)
);
?>
        </div>
        <pre class="prettyprint linenums">
&lt;?php
$this-&gt;widget(
'yiiwheels.widgets.box.WhBox',
    array(
        'title'         =&gt; 'test',
        'headerIcon'    =&gt; 'icon-home',
        'headerButtons' =&gt; array(
            TbHtml::buttonGroup(
                array(
                    array('label' =&gt; 'Left'),
                    array('label' =&gt; 'Middle'),
                    array('label' =&gt; 'Right'),
                )
            ),
            '&amp;nbsp;',
            TbHtml::buttonDropdown(
                'Action',
                array(
                    array('label' =&gt; 'Action', 'url' =&gt; '#'),
                    array('label' =&gt; 'Another action', 'url' =&gt; '#'),
                    array('label' =&gt; 'Something else here', 'url' =&gt; '#'),
                    TbHtml::menuDivider(),
                    array('label' =&gt; 'Separate link', 'url' =&gt; '#'),
                )
            ),
        )
    )
);
?&gt;</pre>
    </section>
    <!-- Datepicker
    ================================================== -->
    <section id="datepicker">
        <div class="page-header">
            <h1>DatePicker
                <small>WhDatePicker.php</small>
            </h1>
        </div>
        <p>DatePicker is a widget that allows us, mere Yii developers, to make use of the great
            bootstrap datepicker plugin developed by <a href="http://www.eyecon.ro/bootstrap-datepicker">eyecon</a></p>

        <p>
            Its use is pretty straightforward:
        </p>

        <div class="bs-docs-example">
            <div class="input-append">
                <?php $this->widget(
                    'yiiwheels.widgets.datepicker.WhDatePicker',
                    array(
                        'name'          => 'datepickertest',
                        'htmlOptions'   => array(
                            'placeholder' => 'Select date'
                        ),
                        'pluginOptions' => array(
                            'format' => 'mm/dd/yyyy'
                        )
                    )
                );
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
        </div>

        <pre class="prettyprint linenums">
&lt;div class=&quot;input-append&quot;&gt;
&lt;?php $this-&gt;widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
        'name' =&gt; 'datepickertest',
        'pluginOptions' =&gt; array(
            'format' =&gt; 'mm/dd/yyyy'
        )
    ));
?&gt;
    &lt;span class=&quot;add-on&quot;&gt;&lt;icon class=&quot;icon-calendar&quot;&gt;&lt;/icon&gt;&lt;/span&gt;
&lt;/div&gt;
        </pre>
    </section>

    <!-- DateRangePicker
    ================================================== -->
    <section id="daterangepicker">

        <div class="page-header">
            <h1>DateRangePicker
                <small>WhDateRangePicker.php</small>
            </h1>
        </div>
        <p>For more information about the plugin and its options, please visit <a
                href="https://github.com/dangrossman/bootstrap-daterangepicker" target="_blank">dan grossman bootstrap
                daterangepicker</a></p>

        <div class="bs-docs-example">
            <div class="input-append">
                <?php $this->widget(
                    'yiiwheels.widgets.daterangepicker.WhDateRangePicker',
                    array(
                        'name'        => 'daterangepickertest',
                        'htmlOptions' => array(
                            'placeholder' => 'Select date'
                        )
                    )
                );
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
        </div>

        <pre class="prettyprint linenums">
&lt;div class=&quot;input-append&quot;&gt;
&lt;?php $this-&gt;widget(
    'yiiwheels.widgets.daterangepicker.WhDateRangePicker',
    array(
        'name' =&gt; 'daterangepickertest',
        'htmlOptions' =&gt; array(
            'placeholder' =&gt; 'Select date'
        )
    )
);
?&gt;
        </pre>
    </section>

    <!-- Datepicker
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
                    'data'       => array('id' => 1, 'firstName' => 'Mark', 'lastName' => 'Otto', 'language' => 'CSS'),
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

    <!-- FileUpload
    ================================================== -->
    <section id="basicfileupload">

        <div class="page-header">
            <h1>BasicFileUPload
                <small>WhBasicFileUpload.php</small>
            </h1>
        </div>
        <p>
            The following is the <a href="http://blueimp.github.io/jQuery-File-Upload/basic.html">JQuery File Upload</a>
            plugin from blueimp. Due to the amount of doubts and requests on how to use this plugin, I decided to create
            two versions: one basic and the other advanced (or regular).
        </p>

        <p>
            The basic one is the easiest one to use. Just wrap the widget with the appropriate HTML, setup the
            <code>pluginOptions</code> as required and voilá... done.
        </p>

        <p>
            <span class="label label-important">Sorry</span> but to create the file that will handle the upload is out
            of the scope of this docs. If you wish to know more about this fantastic plugin, visit
            <a href="http://blueimp.github.io/jQuery-File-Upload/index.html">JQuery File Upload</a> website.
        </p>

        <div class="bs-docs-example">
            <span class="btn btn-success fileinput-button">
                <i class="icon-plus icon-white"></i>
                <span>Select files...</span>
                <?php
                $this->widget(
                    'yiiwheels.widgets.fileupload.WhBasicFileUpload',
                    array(
                        'name'          => 'basicuploadtest',
                        'uploadAction'  => $this->createUrl('site/upload'),
                        'pluginOptions' => array(
                            'dataType'    => 'json',
                            'done'        => 'js:function(e, data){
                                        $.each(data.result.files, function(i, file){
                                            $("<p/>").text(file.name).appendTo("#bfiles");
                                        });
                                    }',
                            'progressall' => "js:function (e, data) {
                                        var progress = parseInt(data.loaded / data.total * 100, 10);
                                        $('#bprogress .bar').css(
                                            'width',
                                            progress + '%'
                                        );
                                    }"
                        )
                    )
                );
                ?>
             </span>
            <br>
            <br>
            <!-- The global progress bar -->
            <div id="bprogress" class="progress progress-success progress-striped">
                <div class="bar"></div>
            </div>
            <!-- The container for the uploaded files -->
            <div id="bfiles" class="files"></div>
            <div class="clearfix"></div>
        </div>

        <pre class="prettyprint linenums">
&lt;span class=&quot;btn btn-success fileinput-button&quot;&gt;
        &lt;i class=&quot;icon-plus icon-white&quot;&gt;&lt;/i&gt;
        &lt;span&gt;Select files...&lt;/span&gt;
        &lt;?php
        $this-&gt;widget(
            'yiiwheels.widgets.fileupload.WhBasicFileUpload',
            array(
                'name'          =&gt; 'basicuploadtest',
                'uploadAction'  =&gt; $this-&gt;createUrl('site/upload'),
                'pluginOptions' =&gt; array(
                    'dataType'    =&gt; 'json',
                    'done'        =&gt; 'js:function(e, data){
                        $.each(data.result.files, function(i, file){
                            $(&quot;&lt;p/&gt;&quot;).text(file.name).appendTo(&quot;#bfiles&quot;);
                        });
                    }',
                    'progressall' =&gt; &quot;js:function (e, data) {
                        var progress = parseInt(data.loaded / data.total * 100, 10);
                        $('#bprogress .bar').css(
                            'width',
                            progress + '%'
                        );
                    }&quot;
                )
            )
        );
        ?&gt;
     &lt;/span&gt;
    &lt;br&gt;
    &lt;br&gt;
    &lt;!-- The global progress bar --&gt;
    &lt;div id=&quot;bprogress&quot; class=&quot;progress progress-success progress-striped&quot;&gt;
        &lt;div class=&quot;bar&quot;&gt;&lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- The container for the uploaded files --&gt;
    &lt;div id=&quot;bfiles&quot; class=&quot;files&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;clearfix&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
        </pre>
    </section>

    <!-- FileUpload
    ================================================== -->
    <section id="fileupload">

        <div class="page-header">
            <h1>FileUpload
                <small>WhFileUpload.php</small>
            </h1>
        </div>
        <p>This is the same plugin as above but with its full UI.</p>

        <div class="bs-docs-example">
            <?php
            $this->widget(
                'yiiwheels.widgets.fileupload.WhFileUpload',
                array(
                    'name'     => 'fileuploadui',
                    'url'      => $this->createUrl('site/upload', array('type' => 'fine')),
                    'multiple' => true,
                )
            );
            ?>
        </div>

        <pre class="prettyprint linenums"></pre>
    </section>

    <!-- FineUploader
    ================================================== -->
    <section id="fineuploader">

        <div class="page-header">
            <h1>FineUploader
                <small>WhFineUploader.php</small>
            </h1>
        </div>
        <p>We also included another uploader: <a href="http://github.com/Valums-File-Uploader/file-uploader">FineUploader</a>.
            It is not the original version but it does good work too.</p>

        <div class="bs-docs-example">
            <?php
            $this->widget(
                'yiiwheels.widgets.fineuploader.WhFineUploader',
                array(
                    'name'          => 'fineuploadtest',
                    'uploadAction'  => $this->createUrl('site/upload', array('fine' => 1)),
                    'pluginOptions' => array(
                        'validation' => array(
                            'allowedExtensions' => array('jpeg', 'jpg')
                        )
                    )
                )
            );
            ?>
        </div>

        <pre class="prettyprint linenums">
&lt;?php
$this-&gt;widget('yiiwheels.widgets.fineuploader.WhFineUploader', array(
        'name'          =&gt; 'fineuploadtest',
        'uploadAction'  =&gt; $this-&gt;createUrl('site/upload', array('fine' =&gt; 1)),
        'pluginOptions' =&gt; array(
            'validation'=&gt;array(
                'allowedExtensions' =&gt; array('jpeg', 'jpg')
            )
        )
    ));
?&gt;
        </pre>
    </section>

    <!-- ActiveForm
    ================================================== -->
    <section id="form">

        <div class="page-header">
            <h1>ActiveForm
                <small>WhActiveForm.php</small>
            </h1>
        </div>

        <p>Even though we have a WhActiveForm. It is going to be removed from the collection.</p>
    </section>

    <!-- VisualizationChart
    ================================================== -->
    <section id="visualizationchart">

        <div class="page-header">
            <h1>VisualizationChart
                <small>WhVisualizationChart.php</small>
            </h1>
        </div>

        <p>
            <a href="https://google-developers.appspot.com/chart/interactive/docs/index" target="_blank">
                Google Charts
            </a> provides a perfect way to visualize data. Simple, and very effective widget.
        </p>

        <div class="bs-docs-example">
            <?php
            $this->widget(
                'yiiwheels.widgets.google.WhVisualizationChart',
                array(
                    'visualization' => 'PieChart',
                    'data'          => array(
                        array('Task', 'Hours per Day'),
                        array('Work', 11),
                        array('Eat', 2),
                        array('Commute', 2),
                        array('Watch TV', 2),
                        array('Sleep', 7)
                    ),
                    'options'       => array(
                        'title' => 'My Daily Activity'
                    )
                )
            );
            ?>
        </div>

        <pre class="prettyprint linenums">
&lt;?php
$this-&gt;widget('yiiwheels.widgets.google.WhVisualizationChart', array(
   'visualization' =&gt; 'PieChart',
    'data' =&gt; array(
        array('Task', 'Hours per Day'),
        array('Work', 11),
        array('Eat', 2),
        array('Commute', 2),
        array('Watch TV', 2),
        array('Sleep', 7)
    ),
    'options' =&gt; array(
        'title' =&gt; 'My Daily Activity'
    )
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

        <p>TODO: This widget will surely be moved to the Grid section of the site :)</p>

        <!--        <div class="bs-docs-example">-->
        <!---->
        <!--        </div>-->
        <!---->
        <!--        <pre class="prettyprint linenums"></pre>-->
    </section>

    <!-- HighCharts
    ================================================== -->
    <section id="highcharts">

        <div class="page-header">
            <h1>HighCharts
                <small>WhHighCharts.php</small>
            </h1>
        </div>

        <p>
            <span class="label label-important">Important</span> Highcharts is one of the best HTML5/Javascritp charting
            libraries on the web. Highcharts JS is free for a
            non-commercial project but not if you are developing a product that you are going to make money with.
        </p>

        <p>
            Visit <a href="http://www.highcharts.com/" target="_blank">HighCharts</a> site in order to get more
            information
            about the different options of this plugin and its <a href="http://shop.highsoft.com/highcharts.html"
                                                                  target="_blank">license pricing</a>.</p>

        <div class="bs-docs-example">
            <?php
            $this->widget(
                'yiiwheels.widgets.highcharts.WhHighCharts',
                array(
                    'pluginOptions' => array(
                        'title'  => array('text' => 'Fruit Consumption'),
                        'xAxis'  => array(
                            'categories' => array('Apples', 'Bananas', 'Oranges')
                        ),
                        'yAxis'  => array(
                            'title' => array('text' => 'Fruit eaten')
                        ),
                        'series' => array(
                            array('name' => 'Jane', 'data' => array(1, 0, 4)),
                            array('name' => 'John', 'data' => array(5, 7, 3))
                        )
                    )
                )
            );
            ?>
        </div>

        <pre class="prettyprint linenums">
&lt;?php
$this-&gt;widget(
    'yiiwheels.widgets.highcharts.WhHighCharts',
    array(
        'pluginOptions' =&gt; array(
            'title'  =&gt; array('text' =&gt; 'Fruit Consumption'),
            'xAxis'  =&gt; array(
                'categories' =&gt; array('Apples', 'Bananas', 'Oranges')
            ),
            'yAxis'  =&gt; array(
                'title' =&gt; array('text' =&gt; 'Fruit eaten')
            ),
            'series' =&gt; array(
                array('name' =&gt; 'Jane', 'data' =&gt; array(1, 0, 4)),
                array('name' =&gt; 'John', 'data' =&gt; array(5, 7, 3))
            )
        )
    )
);
?&gt;
        </pre>
    </section>

    <!-- HTML5Editor
    ================================================== -->
    <section id="html5editor">

        <div class="page-header">
            <h1>HTML5Editor
                <small>WhHtml5Editor.php</small>
            </h1>
        </div>

        <p>Todo</p>

        <div class="bs-docs-example">

        </div>

        <pre class="prettyprint linenums"></pre>
    </section>

    <!-- MaskInput
   ================================================== -->
    <section id="maskinput">

        <div class="page-header">
            <h1>MaskInput
                <small>WhMaskInput.php</small>
            </h1>
        </div>

        <p>Cool plugin to add masked inputs to your form. More information on <a
                href="http://igorescobar.github.io/jQuery-Mask-Plugin/" target="_blank">http://igorescobar.github.io/jQuery-Mask-Plugin/</a>
        </p>

        <div class="bs-docs-example">
        <div class="row-fluid">
            <div class="span6">
                <label>Date</label>
                <?php $this->widget(
                    'yiiwheels.widgets.maskinput.WhMaskInput',
                    array(
                        'name'        => 'maskdatetest',
                        'mask'        => '11/11/1111',
                        'htmlOptions' => array('placeholder' => '11/11/1111')
                    )
                );?>
            </div>
            <div class="span6">
                <label>Time</label>
                <?php $this->widget(
                    'yiiwheels.widgets.maskinput.WhMaskInput',
                    array(
                        'name'        => 'masktimetest',
                        'mask'        => '00:00:00',
                        'htmlOptions' => array('placeholder' => '00:00:00')
                    )
                );?>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <label>IP</label>
                <?php $this->widget(
                    'yiiwheels.widgets.maskinput.WhMaskInput',
                    array(
                        'name'          => 'maskiptest',
                        'mask'          => '0ZZ.0ZZ.0ZZ.0ZZ',
                        'htmlOptions'   => array('placeholder' => '0ZZ.0ZZ.0ZZ.0ZZ'),
                        'pluginOptions' => array(
                            'translation' => array('Z' => "[0-9]?")
                        )
                    )
                );?>
            </div>
            <div class="span6">
                <label>Time</label>
                <?php $this->widget(
                    'yiiwheels.widgets.maskinput.WhMaskInput',
                    array(
                        'name'        => 'maskphoneustest',
                        'mask'        => '(999) 999-9999',
                        'htmlOptions' => array('placeholder' => '(999) 999-9999')
                    )
                );?>
            </div>
        </div>
        </div>

        <pre class="prettyprint linenums">
&lt;div class=&quot;row-fluid&quot;&gt;
    &lt;div class=&quot;span6&quot;&gt;
        &lt;label&gt;Date&lt;/label&gt;
        &lt;?php $this-&gt;widget(
            'yiiwheels.widgets.maskinput.WhMaskInput',
            array(
                'name'        =&gt; 'maskdatetest',
                'mask'        =&gt; '11/11/1111',
                'htmlOptions' =&gt; array('placeholder' =&gt; '11/11/1111')
            )
        );?&gt;
    &lt;/div&gt;
    &lt;div class=&quot;span6&quot;&gt;
        &lt;label&gt;Time&lt;/label&gt;
        &lt;?php $this-&gt;widget(
            'yiiwheels.widgets.maskinput.WhMaskInput',
            array(
                'name'        =&gt; 'masktimetest',
                'mask'        =&gt; '00:00:00',
                'htmlOptions' =&gt; array('placeholder' =&gt; '00:00:00')
            )
        );?&gt;
    &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;row-fluid&quot;&gt;
    &lt;div class=&quot;span6&quot;&gt;
        &lt;label&gt;IP&lt;/label&gt;
        &lt;?php $this-&gt;widget(
            'yiiwheels.widgets.maskinput.WhMaskInput',
            array(
                'name'          =&gt; 'maskiptest',
                'mask'          =&gt; '0ZZ.0ZZ.0ZZ.0ZZ',
                'htmlOptions'   =&gt; array('placeholder' =&gt; '0ZZ.0ZZ.0ZZ.0ZZ'),
                'pluginOptions' =&gt; array(
                    'translation' =&gt; array('Z' =&gt; &quot;[0-9]?&quot;)
                )
            )
        );?&gt;
    &lt;/div&gt;
    &lt;div class=&quot;span6&quot;&gt;
        &lt;label&gt;Time&lt;/label&gt;
        &lt;?php $this-&gt;widget(
            'yiiwheels.widgets.maskinput.WhMaskInput',
            array(
                'name'        =&gt; 'maskphoneustest',
                'mask'        =&gt; '(999) 999-9999',
                'htmlOptions' =&gt; array('placeholder' =&gt; '(999) 999-9999')
            )
        );?&gt;
    &lt;/div&gt;
&lt;/div&gt;
        </pre>
    </section>

    <!-- MaskMoney
    ================================================== -->
    <section id="maskmoney">

        <div class="page-header">
            <h1>MaskMoney
                <small>WhMaskMoney.php</small>
            </h1>
        </div>

        <p>Todo</p>

        <div class="bs-docs-example">

        </div>

        <pre class="prettyprint linenums"></pre>
    </section>

    <!-- Modal
    ================================================== -->
    <section id="modal">

        <div class="page-header">
            <h1>Modal
                <small>WhModal.php</small>
            </h1>
        </div>

        <div class="bs-docs-example">
            <?php $this->widget(
                'yiiwheels.widgets.modal.WhModal',
                array(
                    'id'      => 'myModal',
                    'header'  => 'Modal Heading',
                    'content' => '<p>One fine body...</p>',
                    'footer'  => implode(
                        '&nbsp',
                        array(
                            TbHtml::button(
                                'Save Changes',
                                array('data-dismiss' => 'modal', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)
                            ),
                            TbHtml::button('Close', array('data-dismiss' => 'modal')),
                        )
                    ),
                )
            ); ?>
            <?php echo TbHtml::button(
                'Click me to open modal',
                array(
                    'color'       => TbHtml::BUTTON_COLOR_PRIMARY,
                    'size'        => TbHtml::BUTTON_SIZE_LARGE,
                    'data-toggle' => 'modal',
                    'data-target' => '#myModal'
                )
            ); ?>
        </div>

<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbModal', array(
    'id' => 'myModal',
    'header' => 'Modal Heading',
    'content' => '&lt;p>One fine body...&lt;/p>',
    'footer' => implode('&nbsp;', array(
        TbHtml::button('Save Changes', array('data-dismiss' => 'modal', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        TbHtml::button('Close', array('data-dismiss' => 'modal')),
     )),
)); ?>

&lt;?php echo TbHtml::button('Click me to open modal', array(
    'style' => TbHtml::BUTTON_COLOR_PRIMARY,
    'size' => TbHtml::BUTTON_SIZE_LARGE,
    'data-toggle' => 'modal',
    'data-target' => '#myModal',
)); ?></pre>

    </section>

    <!-- MultiSelect
    ================================================== -->
    <section id="multiselect">

        <div class="page-header">
            <h1>MultiSelect
                <small>WhMultiSelect.php</small>
            </h1>
        </div>

        <p>Todo</p>

        <div class="bs-docs-example">

        </div>

        <pre class="prettyprint linenums"></pre>
    </section>

    <!-- RangeSlider
    ================================================== -->
    <section id="rangeslider">

        <div class="page-header">
            <h1>RangeSlider
                <small>WhRangeSlider.php</small>
            </h1>
        </div>

        <p>Todo</p>

        <div class="bs-docs-example">

        </div>

        <pre class="prettyprint linenums"></pre>
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

    <!-- Select2
    ================================================== -->
    <section id="select2">

        <div class="page-header">
            <h1>Select2
                <small>WhSelect2.php</small>
            </h1>
        </div>
        <p>
            Included the <a href="http://ivaynberg.github.com/select2/" target="_blank">Select2 on roids plugin</a>
            of Igor Vaynberg.
            The following is a simple example of the amount of possible features that this plugin can do. For further
            information on its use,
            please visit <a href="http://ivaynberg.github.com/select2/" target="_blank">plugin docs</a>.
        </p>

        <div class="bs-docs-example">
            <?php
            $this->widget(
                'yiiwheels.widgets.select2.WhSelect2',
                array(
                    'asDropDownList' => false,
                    'name'           => 'select2test',
                    'pluginOptions'  => array(
                        'tags'            => array('2amigos', 'consulting', 'group', 'rocks'),
                        'placeholder'     => 'type 2amigos',
                        'width'           => '40%',
                        'tokenSeparators' => array(',', ' ')
                    )
                )
            );
            ?>
        </div>

        <pre class="prettyprint linenums">
&lt;?php
$this-&gt;widget('yiiwheels.widgets.select2.WhSelect2', array(
'asDropDownList' =&gt; false,
'name' =&gt; 'select2test',
'pluginOptions' =&gt; array(
    'tags' =&gt; array('2amigos','consulting', 'group', 'rocks'),
    'placeholder' =&gt; 'type 2amigos',
    'width' =&gt; '40%',
    'tokenSeparators' =&gt; array(',', ' ')
)));
?&gt;
        </pre>
    </section>

    <!-- SparkLines
   ================================================== -->
    <section id="sparklines">

        <div class="page-header">
            <h1>SparkLines
                <small>WhSparlines.php</small>
            </h1>
        </div>

        <p>Todo</p>

        <div class="bs-docs-example">

        </div>

        <pre class="prettyprint linenums"></pre>
    </section>

    <!-- TimeAgo
   ================================================== -->
    <section id="timeago">

        <div class="page-header">
            <h1>TimeAgo
                <small>WhTimeAgo.php</small>
            </h1>
        </div>

        <p>Todo</p>

        <div class="bs-docs-example">

        </div>

        <pre class="prettyprint linenums"></pre>
    </section>

    <!-- TimePicker
   ================================================== -->
    <section id="timepicker">

        <div class="page-header">
            <h1>TimePicker
                <small>WhTimeAgo.php</small>
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
            <h1>Toggle</h1>
        </div>

        <h2>ToggleButton
            <small>WhToggleButton.php</small>
        </h2>
        <p>Todo</p>

        <div class="bs-docs-example">

        </div>

        <pre class="prettyprint linenums"></pre>

        <hr class="bs-docs-separator">

        <h1>ToggleColumn
            <small>WhToggleColumn.php</small>
        </h1>

        <p>Todo</p>

        <div class="bs-docs-example">

        </div>

        <pre class="prettyprint linenums"></pre>

    </section>

    <!-- TypeAhead
   ================================================== -->
    <section id="typeahead">

        <div class="page-header">
            <h1>TypeAhead
                <small>WhTypeAhead.php</small>
            </h1>
        </div>

        <p>Todo</p>

        <div class="bs-docs-example">

        </div>

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
