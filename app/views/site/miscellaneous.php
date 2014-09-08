<?php
/* @var SiteController $this */
/* @var TestForm $model */

Yii::app()->getClientScript()->scriptMap = array(
    'bootstrap.min.css' => false,
    'bootstrap.min.js' => false,
    'bootstrap-yii.css' => false,
);

$this->pageTitle = 'Widgets - ' . param('pageTitle');
?>
    <!-- Subhead
    ================================================== -->
    <header class="jumbotron subhead">
        <div class="container">
            <h1>Widgets</h1>

            <p class="lead">Miscellaneous Utilities</p>
        </div>
    </header>

    <div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
    <div class="col-md-3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
            <li><a href="#box"><i class="icon-chevron-right"></i> Box</a></li>
            <li><a href="#gallery"><i class="icon-chevron-right"></i> Gallery</a></li>
            <li><a href="#modal"><i class="icon-chevron-right"></i> Modal</a></li>
            <li><a href="#timeago"><i class="icon-chevron-right"></i> TimeAgo</a></li>
            <li><a href="#rangeslider"><i class="icon-chevron-right"></i> RangeSlider</a></li>
        </ul>
    </div>
    <div class="col-md-9">

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
                    'title' => 'Basic Box',
                    'headerIcon' => 'icon-home',
                    'content' => 'My Basic Content (you can use renderPartial here too :))'
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
                    'title' => 'Advanced Box',
                    'headerIcon' => 'icon-th-list',
                    // when displaying a table, if we include bootstra-widget-table class
                    // the table will be 0-padding to the box
                    'htmlOptions' => array('class' => 'bootstrap-widget-table')
                )
            );?>
            <?php $this->renderPartial('partials/_table'); ?>
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
&lt;?php $this-&gt;renderPartial('partials/_table');?&gt;
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
                    'title' => 'test',
                    'headerIcon' => 'icon-home',
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
));
?&gt;</pre>
    </section>
    <section id="gallery">
        <div class="page-header">
            <h1>Gallery</h1>
        </div>
        <p>
            <a href="https://github.com/blueimp" target="_blank">Sebastian Tschan</a>  has done it again. We already
            know its work through the <a href="http://blueimp.github.io/jQuery-File-Upload/" target="_blank">JQuery File Uploader</a>
            but its full refactor of the bootstrap image library
        </p>
        <p>
            Blueimp Gallery is a touch-enabled, responsive and customizable image & video gallery, carousel and lightbox,
            optimized for both mobile and desktop web browsers. It features swipe, mouse and keyboard navigation,
            transition effects, slideshow functionality, fullscreen support and on-demand content loading and can be
            extended to display additional. For more information, please visit
            <a href="http://blueimp.github.io/Gallery/" target="_blank">http://blueimp.github.io/Gallery/</a>
        </p>
        <h3>Gallery <small>WhGallery.php</small></h3>
        <div class="bs-docs-example" style="text-align: center">
            <?php $items = array(
                array(
                    'url' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_b.jpg',
                    'src' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_s.jpg',
                    'options' => array('title' => 'Camposanto monumentale (inside)')
                ),
                array(
                    'url' => 'http://farm3.static.flickr.com/2863/9479121747_0b37c63fe7_b.jpg',
                    'src' => 'http://farm3.static.flickr.com/2863/9479121747_0b37c63fe7_s.jpg',
                    'options' => array('title' => 'Hafsten - Sunset')
                ),
                array(
                    'url' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_b.jpg',
                    'src' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_s.jpg',
                    'options' => array('title' => 'Sail us to the Moon')
                ),
                array(
                    'url' => 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_b.jpg',
                    'src' => 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_s.jpg',
                    'options' => array('title' => 'Sail us to the Moon')
                ),
                array(
                    'url' => 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_b.jpg',
                    'src' => 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_s.jpg',
                    'options' => array('title' => 'Sail us to the Moon')
                ),
                array(
                    'url' => 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_b.jpg',
                    'src' => 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_s.jpg',
                    'options' => array('title' => 'Sail us to the Moon')
                ),
                array(
                    'url' => 'http://farm4.static.flickr.com/3749/9480072539_e3a1d70d39_b.jpg',
                    'src' => 'http://farm4.static.flickr.com/3749/9480072539_e3a1d70d39_s.jpg',
                    'options' => array('title' => 'Sail us to the Moon')
                ),
                array(
                    'url' => 'http://farm8.static.flickr.com/7352/9477439317_901d75114a_b.jpg',
                    'src' => 'http://farm8.static.flickr.com/7352/9477439317_901d75114a_s.jpg',
                    'options' => array('title' => 'Sail us to the Moon')
                ),
                array(
                    'url' => 'http://farm4.static.flickr.com/3802/9478895708_ccb710cfd1_b.jpg',
                    'src' => 'http://farm4.static.flickr.com/3802/9478895708_ccb710cfd1_s.jpg',
                    'options' => array('title' => 'Sail us to the Moon')
                ),
            );?>
            <?php $this->widget('yiiwheels.widgets.gallery.WhGallery', array('items' => $items));?>
        </div>
            <pre class="prettyprint linenums">
&lt;?php $items = array(
    array(
        'url' =&gt; 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_b.jpg',
        'src' =&gt; 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_s.jpg',
        'options' =&gt; array('title' =&gt; 'Camposanto monumentale (inside)')
    ),
    array(
        'url' =&gt; 'http://farm3.static.flickr.com/2863/9479121747_0b37c63fe7_b.jpg',
        'src' =&gt; 'http://farm3.static.flickr.com/2863/9479121747_0b37c63fe7_s.jpg',
        'options' =&gt; array('title' =&gt; 'Hafsten - Sunset')
    ),
    array(
        'url' =&gt; 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_b.jpg',
        'src' =&gt; 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_s.jpg',
        'options' =&gt; array('title' =&gt; 'Sail us to the Moon')
    ),
    array(
        'url' =&gt; 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_b.jpg',
        'src' =&gt; 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_s.jpg',
        'options' =&gt; array('title' =&gt; 'Sail us to the Moon')
    ),
    array(
        'url' =&gt; 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_b.jpg',
        'src' =&gt; 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_s.jpg',
        'options' =&gt; array('title' =&gt; 'Sail us to the Moon')
    ),
    array(
        'url' =&gt; 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_b.jpg',
        'src' =&gt; 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_s.jpg',
        'options' =&gt; array('title' =&gt; 'Sail us to the Moon')
    ),
    array(
        'url' =&gt; 'http://farm4.static.flickr.com/3749/9480072539_e3a1d70d39_b.jpg',
        'src' =&gt; 'http://farm4.static.flickr.com/3749/9480072539_e3a1d70d39_s.jpg',
        'options' =&gt; array('title' =&gt; 'Sail us to the Moon')
    ),
    array(
        'url' =&gt; 'http://farm8.static.flickr.com/7352/9477439317_901d75114a_b.jpg',
        'src' =&gt; 'http://farm8.static.flickr.com/7352/9477439317_901d75114a_s.jpg',
        'options' =&gt; array('title' =&gt; 'Sail us to the Moon')
    ),
    array(
        'url' =&gt; 'http://farm4.static.flickr.com/3802/9478895708_ccb710cfd1_b.jpg',
        'src' =&gt; 'http://farm4.static.flickr.com/3802/9478895708_ccb710cfd1_s.jpg',
        'options' =&gt; array('title' =&gt; 'Sail us to the Moon')
    ),
);?&gt;
&lt;?php $this-&gt;widget('yiiwheels.widgets.gallery.WhGallery', array('items' =&gt; $items));?&gt;</pre>

        <h3>Carousel <small>WhCarousel</small></h3>
        <div class="bs-docs-example">
            <?php $this->widget('yiiwheels.widgets.gallery.WhCarousel', array('items' => $items));?>
            <div style="clear:both"></div>
        </div>
        <pre class="prettyprint linenums">
&lt;?php $this-&gt;widget('yiiwheels.widgets.gallery.WhCarousel', array('items' =&gt; $items));?&gt;
        </pre>
        <div class="bs-docs-example">
            <?php $videoItems = array(
                array(
                    'title' => 'Sintel',
                    'href' => 'http://media.w3.org/2010/05/sintel/trailer.mp4',
                    'type' => 'video/mp4',
                    'poster' => 'http://media.w3.org/2010/05/sintel/poster.png'
                ),
                array(
                    'title' => 'Big Buck Bunny',
                    'href' => 'http://upload.wikimedia.org/wikipedia/commons/7/75/Big_Buck_Bunny_Trailer_400p.ogg',
                    'type' => 'video/ogg',
                    'poster' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Big.Buck.Bunny.-.Opening.Screen.png/800px-Big.Buck.Bunny.-.Opening.Screen.png'
                ),
                array(
                    'title' => 'Elephants Dream',
                    'href' => 'http://upload.wikimedia.org/wikipedia/commons/transcoded/8/83/Elephants_Dream_%28high_quality%29.ogv/Elephants_Dream_%28high_quality%29.ogv.360p.webm',
                    'type' => 'video/webm',
                    'poster' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Elephants_Dream_s1_proog.jpg/800px-Elephants_Dream_s1_proog.jpg'
                ),
            );?>

            <?php $this->widget('yiiwheels.widgets.gallery.WhVideoCarousel', array('items' => $videoItems));?>
        </div>
        <pre class="prettyprint linenums">
&lt;?php $videoItems = array(
    array(
        'title' =&gt; 'Sintel',
        'href' =&gt; 'http://media.w3.org/2010/05/sintel/trailer.mp4',
        'type' =&gt; 'video/mp4',
        'poster' =&gt; 'http://media.w3.org/2010/05/sintel/poster.png'
    ),
    array(
        'title' =&gt; 'Big Buck Bunny',
        'href' =&gt; 'http://upload.wikimedia.org/wikipedia/commons/7/75/Big_Buck_Bunny_Trailer_400p.ogg',
        'type' =&gt; 'video/ogg',
        'poster' =&gt; 'http://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Big.Buck.Bunny.-.Opening.Screen.png/800px-Big.Buck.Bunny.-.Opening.Screen.png'
    ),
    array(
        'title' =&gt; 'Elephants Dream',
        'href' =&gt; 'http://upload.wikimedia.org/wikipedia/commons/transcoded/8/83/Elephants_Dream_%28high_quality%29.ogv/Elephants_Dream_%28high_quality%29.ogv.360p.webm',
        'type' =&gt; 'video/webm',
        'poster' =&gt; 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Elephants_Dream_s1_proog.jpg/800px-Elephants_Dream_s1_proog.jpg'
    ),
);?&gt;

&lt;?php $this-&gt;widget('yiiwheels.widgets.gallery.WhVideoCarousel', array('items' =&gt; $videoItems));?&gt;
        </pre>

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
                    'id' => 'myModal',
                    'header' => 'Modal Heading',
                    'content' => '<p>One fine body...</p>',
                    'footer' => implode(
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
                    'color' => TbHtml::BUTTON_COLOR_PRIMARY,
                    'size' => TbHtml::BUTTON_SIZE_LARGE,
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
        TbHtml::button('Save Changes', array(
            'data-dismiss' => 'modal',
            'color' => TbHtml::BUTTON_COLOR_PRIMARY)
        ),
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

    <!-- TimeAgo
    ================================================== -->
    <section id="timeago">

        <div class="page-header">
            <h1>TimeAgo
                <small>WhTimeAgo.php</small>
            </h1>
        </div>

        <p>
            Timeago is a jQuery plugin that makes it easy to support automatically updating fuzzy timestamps (e.g. "4
            minutes ago" or "about 1 day ago"). For more information about its jquery plugin functionality and options,
            please
            visit <a href="http://timeago.yarp.com/" target="_blank">http://timeago.yarp.com/</a>.
        </p>

        <div class="bs-docs-example">
            <?php $this->widget(
                'yiiwheels.widgets.timeago.WhTimeAgo',
                array(
                    'date' => '2008-07-17T09:24:17Z'
                )
            ); ?>
        </div>

        <pre class="prettyprint linenums">
&lt;?php $this-&gt;widget(
    'yiiwheels.widgets.timeago.WhTimeAgo',
    array(
        'date' =&gt; '2008-07-17T09:24:17Z'
    )
); ?&gt;
        </pre>

        <hr class="bs-docs-separator">

        <h3>TimeAgo Format Component
            <small>
                WhTimeAgoFormatter.php
            </small>
        </h3>
        <p>
            TimeAgo comes in two flavours: a widget and a format component. The format component differs from the widget
            in that it takes a UNIX_TIMESTAMP value, making it perfect to work with database values that are goign to be
            displayed on a grid.
        </p>

        <p>
            TimeAgo format component requires that you configure it on your main.php config file. Check how it is
            configured
            on this site at its <a href="https://github.com/2amigos/yiiwheels-docs/blob/master/app/config/main.php#L47"
                                   target="_blank">github source code</a>.
        </p>

        <div class="bs-docs-example">
            <?php $time = strtotime('-1 day'); ?>
            <?php echo $time; ?>=
            <?php echo Yii::app()->format->timeago($time); ?><br>
            <?php $time = strtotime('-1 minute'); ?>
            <?php echo $time; ?>=
            <?php echo Yii::app()->format->timeago($time); ?>
        </div>

        <pre class="prettyprint linenums">
&lt;?php $time = strtotime('-1 day'); ?&gt;
&lt;?php echo $time; ?&gt;=
&lt;?php echo Yii::app()-&gt;format-&gt;timeago($time); ?&gt;&lt;br&gt;
&lt;?php $time = strtotime('-1 minute'); ?&gt;
&lt;?php echo $time; ?&gt;=
&lt;?php echo Yii::app()-&gt;format-&gt;timeago($time); ?&gt;
        </pre>
    </section>


    <!-- RangeSlider
    ================================================== -->
    <section id="rangeslider">

        <div class="page-header">
            <h1>RangeSlider
                <small>WhRangeSlider.php</small>
            </h1>
        </div>

        <p>RangeSlider implements <a href="http://ghusse.github.io/jQRangeSlider/index.html" target="_blank">jQRangeSlider</a>,
            A powerful slider for selecting value ranges, supporting dates and more.</p>

        <div class="bs-docs-example">
            <?php $this->widget(
                'yiiwheels.widgets.rangeslider.WhRangeSlider',
                array(
                    'id' => 'rangesliderbasictest',
                    'name' => 'rangesliderbasictest',
                    'delayOut' => 4000,
                )
            );?>
            <p>Basic</p>
            <br>
            <?php $this->widget(
                'yiiwheels.widgets.rangeslider.WhRangeSlider',
                array(
                    'id' => 'rangeslidereditabletest',
                    'name' => 'rangeslidereditabletest',
                    'delayOut' => 4000,
                    'type' => 'editRange'
                )
            );?>
            <p>Editable</p>
            <?php
            $months = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sept", "Oct", "Nov", "Dec");
            $this->widget(
                'yiiwheels.widgets.rangeslider.WhRangeSlider',
                array(
                    'id' => 'rangesliderdatetest',
                    'name' => 'rangesliderdatetest',
                    'delayOut' => 4000,
                    'type' => 'dateRange',
                    'scales' => array(array(
                        'first' => 'js: function(value){return value;}',
                        'end' => 'js: function(value){return value;}',
                        'next' => 'js: function(value){
                            var next = new Date(value);
                            return new Date(next.setMonth(value.getMonth() + 1));
                        }',
                        'label' => 'js: function(value){
                            var months = [
                                "Jan", "Feb", "Mar", "Apr", "May", "Jun",
                                "Jul", "Aug", "Sept", "Oct", "Nov", "Dec"
                                ];
                            return months[value.getMonth()];
                        }',
                        'format' => 'js: function(tickContainer, tickStart, tickEnd){
                            tickContainer.addClass("myCustomClass");
                        }'
                    )),
                    'pluginOptions' => array(
                        'bounds' => array(
                            'min' => 'js: new Date(2012, 0, 1)',
                            'max' => 'js: new Date(2012, 11, 31, 12, 59, 59)'
                        ),
                        'defaultValues' => array(
                            'min' => 'js:new Date(2012, 1, 10)',
                            'max' => 'js:new Date(2012, 4, 22)'
                        ),
                    )
                )
            );?>
            <p>Date Range <small>with scales</small></p>
            <div style="clear:both;height:20px"></div>
        </div>

        <pre class="prettyprint linenums">
&lt;?php $this-&gt;widget(
    &apos;yiiwheels.widgets.rangeslider.WhRangeSlider&apos;,
    array(
        &apos;id&apos; =&gt; &apos;rangesliderbasictest&apos;,
        &apos;name&apos; =&gt; &apos;rangesliderbasictest&apos;,
        &apos;delayOut&apos; =&gt; 4000,
    )
);?&gt;
&lt;p&gt;Basic&lt;/p&gt;
&lt;br&gt;
&lt;?php $this-&gt;widget(
    &apos;yiiwheels.widgets.rangeslider.WhRangeSlider&apos;,
    array(
        &apos;id&apos; =&gt; &apos;rangeslidereditabletest&apos;,
        &apos;name&apos; =&gt; &apos;rangeslidereditabletest&apos;,
        &apos;delayOut&apos; =&gt; 4000,
        &apos;type&apos; =&gt; &apos;editRange&apos;
    )
);?&gt;
&lt;p&gt;Editable&lt;/p&gt;
&lt;?php
$months = array(&quot;Jan&quot;, &quot;Feb&quot;, &quot;Mar&quot;, &quot;Apr&quot;, &quot;May&quot;, &quot;Jun&quot;, &quot;Jul&quot;, &quot;Aug&quot;, &quot;Sept&quot;, &quot;Oct&quot;, &quot;Nov&quot;, &quot;Dec&quot;);
$this-&gt;widget(
    &apos;yiiwheels.widgets.rangeslider.WhRangeSlider&apos;,
    array(
        &apos;id&apos; =&gt; &apos;rangesliderdatetest&apos;,
        &apos;name&apos; =&gt; &apos;rangesliderdatetest&apos;,
        &apos;delayOut&apos; =&gt; 4000,
        &apos;type&apos; =&gt; &apos;dateRange&apos;,
        &apos;scales&apos; =&gt; array(array(
            &apos;first&apos; =&gt; &apos;js: function(value){return value;}&apos;,
            &apos;end&apos; =&gt; &apos;js: function(value){return value;}&apos;,
            &apos;next&apos; =&gt; &apos;js: function(value){
                var next = new Date(value);
                return new Date(next.setMonth(value.getMonth() + 1));
            }&apos;,
            &apos;label&apos; =&gt; &apos;js: function(value){
                var months = [
                    &quot;Jan&quot;, &quot;Feb&quot;, &quot;Mar&quot;, &quot;Apr&quot;, &quot;May&quot;, &quot;Jun&quot;,
                    &quot;Jul&quot;, &quot;Aug&quot;, &quot;Sept&quot;, &quot;Oct&quot;, &quot;Nov&quot;, &quot;Dec&quot;
                    ];
                return months[value.getMonth()];
            }&apos;,
            &apos;format&apos; =&gt; &apos;js: function(tickContainer, tickStart, tickEnd){
                tickContainer.addClass(&quot;myCustomClass&quot;);
            }&apos;
        )),
        &apos;pluginOptions&apos; =&gt; array(
            &apos;bounds&apos; =&gt; array(
                &apos;min&apos; =&gt; &apos;js: new Date(2012, 0, 1)&apos;,
                &apos;max&apos; =&gt; &apos;js: new Date(2012, 11, 31, 12, 59, 59)&apos;
            ),
            &apos;defaultValues&apos; =&gt; array(
                &apos;min&apos; =&gt; &apos;js:new Date(2012, 1, 10)&apos;,
                &apos;max&apos; =&gt; &apos;js:new Date(2012, 4, 22)&apos;
            ),
        )
    )
);?&gt;
&lt;p&gt;Date Range &lt;small&gt;with scales&lt;/small&gt;&lt;/p&gt;
        </pre>
    </section>

    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'yiiwheels'; // required: replace example with your forum shortname
        var disqus_identifier = 'miscellaneous';
        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
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
