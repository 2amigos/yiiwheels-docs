<?php
/**
 *
 * inputs.php
 *
 * Date: 18/07/13
 * Time: 13:32
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 */
?>
<!-- Subhead
   ================================================== -->
<header class="jumbotron subhead">
    <div class="container">
        <h1>Widgets</h1>

        <p class="lead">Form Input Helpers</p>
    </div>
</header>

<div class="container">
<!-- Docs nav
    ================================================== -->
<div class="row-fluid">
<div class="span3 bs-docs-sidebar">
    <ul class="nav nav-list bs-docs-sidenav">
        <li><a href="#datepicker"><i class="icon-chevron-right"></i> DatePicker</a></li>
        <li><a href="#daterangepicker"><i class="icon-chevron-right"></i> DateRangePicker</a></li>
        <li><a href="#basicfileupload"><i class="icon-chevron-right"></i> BasicFileUpload</a></li>
        <li><a href="#fileupload"><i class="icon-chevron-right"></i> FileUpload</a></li>
        <li><a href="#fineuploader"><i class="icon-chevron-right"></i> FineUploader</a></li>
        <li><a href="#maskinput"><i class="icon-chevron-right"></i> MaskInput</a></li>
        <li><a href="#maskmoney"><i class="icon-chevron-right"></i> MaskMoney</a></li>
        <li><a href="#multiselect"><i class="icon-chevron-right"></i> MultiSelect</a></li>
        <li><a href="#select2"><i class="icon-chevron-right"></i> Select2</a></li>
        <li><a href="#timepicker"><i class="icon-chevron-right"></i> TimePicker</a></li>
        <li><a href="#toggle"><i class="icon-chevron-right"></i> Toggle</a></li>
        <li><a href="#typeahead"><i class="icon-chevron-right"></i> TypeAhead</a></li>
    </ul>
</div>
<div class="span9">

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
        <a href="http://blueimp.github.io/jQuery-File-Upload/index.html">JQuery File Upload</a> website. Also, this
        first example may not work due to the issue of having multiple file upload widgets on the same page. If you
        wish to implement this feature then follow the instructions on <a
            href="https://github.com/blueimp/jQuery-File-Upload/wiki/Multiple-File-Upload-Widgets-on-the-same-page"
            target="_blank">Multipe file upload widgets wiki</a>.
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

<pre class="prettyprint linenums">
&lt;?php
$this-&gt;widget(
    'yiiwheels.widgets.fileupload.WhFileUpload',
    array(
        'name'     =&gt; 'fileuploadui',
        'url'      =&gt; $this-&gt;createUrl('site/upload', array('type' =&gt; 'fine')),
        'multiple' =&gt; true,
    )
);
?&gt;
</pre>
</section>

<!-- FineUploader
================================================== -->
<section id="fineuploader">

    <div class="page-header">
        <h1>FineUploader
            <small>WhFineUploader.php</small>
        </h1>
    </div>
    <p>We also included another uploader: <a
            href="http://github.com/Valums-File-Uploader/file-uploader">FineUploader</a>.
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

<!-- MultiSelect
================================================== -->
<section id="multiselect">

    <div class="page-header">
        <h1>MultiSelect
            <small>WhMultiSelect.php</small>
        </h1>
    </div>

    <p>Bootstrap multiselect included. Check its <a href="http://davidstutz.github.io/bootstrap-multiselect/"
                                                    target="_blank">Site</a> to find out about its configuration
        options.</p>

    <div class="bs-docs-example">
        <?php
        $this->widget(
            'yiiwheels.widgets.multiselect.WhMultiSelect',
            array(
                'name' => 'multiselecttest',
                'data' => array(
                    '2amigos',
                    'consultation',
                    'group',
                    'llc'
                )
            )
        );
        ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php
$this-&gt;widget('yiiwheels.widgets.multiselect.WhMultiSelect', array(
        'name' =&gt; 'multiselecttest',
        'data' =&gt; array(
            '2amigos', 'consultation', 'group', 'llc'
        )
    ));
?&gt;
    </pre>
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

<!-- TimePicker
================================================== -->
<section id="timepicker">

    <div class="page-header">
        <h1>TimePicker
            <small>WhTimeAgo.php</small>
        </h1>
    </div>

    <p>Nice timepicker helper. For more information, please visit <a
            href="http://jdewit.github.com/bootstrap-timepicker" target="_blank">Bootstrap TimePicker</a></p>

    <div class="bs-docs-example">
        <?php $this->widget(
            'yiiwheels.widgets.timepicker.WhTimePicker',
            array(
                'name' => 'timepickertest'
            )
        );?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this-&gt;widget(
    'yiiwheels.widgets.timepicker.WhTimePicker',
    array(
        'name' =&gt; 'timepickertest'
    )
);?&gt;
    </pre>
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
    <div class="bs-docs-example">
        <?php $this->widget(
            'yiiwheels.widgets.toggle.WhToggleButton',
            array(
                'name' => 'togglebuttontest'
            )
        );?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this-&gt;widget('yiiwheels.widgets.toggle.WhToggleButton', array(
    'name' =&gt; 'togglebuttontest'
));?&gt;
    </pre>

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