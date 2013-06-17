<?php
/* @var SiteController $this */
/* @var TestForm $model */

$this->pageTitle = 'Widgets - ' . param('pageTitle');
?>
<!-- Subhead
================================================== -->
<header class="jumbotron subhead">
    <div class="container">
        <h1>Widgets (TODO: Replace Yiistrap docs with Yiiwheels docs)</h1>
        <p class="lead">Getting advanced with widgets</p>
    </div>
</header>

<div class="container">

    <!-- Docs nav
    ================================================== -->
    <div class="row">
    <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
            <li><a href="#navs"><i class="icon-chevron-right"></i> Nav</a></li>
            <li><a href="#navbar"><i class="icon-chevron-right"></i> Navbar</a></li>
            <li><a href="#breadcrumb"><i class="icon-chevron-right"></i> Breadcrumb</a></li>
            <li><a href="#herounit"><i class="icon-chevron-right"></i> Hero unit</a></li>
            <li><a href="#gridview"><i class="icon-chevron-right"></i> Grid view</a></li>
            <li><a href="#forms"><i class="icon-chevron-right"></i> Form</a></li>
            <li><a href="#modals"><i class="icon-chevron-right"></i> Modal</a></li>
            <li><a href="#scrollspy"><i class="icon-chevron-right"></i> Scrollspy</a></li>
            <li><a href="#tabs"><i class="icon-chevron-right"></i> Tab</a></li>
            <li><a href="#alert"><i class="icon-chevron-right"></i> Alert</a></li>
            <li><a href="#collapse"><i class="icon-chevron-right"></i> Collapse</a></li>
            <li><a href="#carousel"><i class="icon-chevron-right"></i> Carousel</a></li>
            <li><a href="#typeahead"><i class="icon-chevron-right"></i> Typeahead</a></li>
            <li><a href="#affix"><i class="icon-chevron-right"></i> Affix</a></li>
        </ul>
    </div>
    <div class="span9">

<!-- Navigation
================================================== -->
<section id="navs">

    <?php $dropdownConfig = array(
        array('label' => 'Action', 'url' => '#'),
        array('label' => 'Another action', 'url' => '#'),
        array('label' => 'Something else here', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    ); ?>

    <div class="page-header">
        <h1>Navigation <small>TbNav.php</small></h1>
    </div>

    <h3>Basic tabs</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbNav', array(
            'type' => TbHtml::NAV_TYPE_TABS,
            'items' => array(
                array('label' => 'Home', 'url' => '#', 'active' => true),
                array('label' => 'Profile', 'url' => '#',),
                array('label' => 'Messages', 'url' => '#',),
            ),
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_TABS,
    'items' => array(
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Profile', 'url' => '#',),
        array('label' => 'Messages', 'url' => '#',),
    ),
)); ?></pre>

    <h3>Basic pills</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbNav', array(
            'type' => TbHtml::NAV_TYPE_PILLS,
            'items' => array(
                array('label' => 'Home', 'url' => '#', 'active' => true),
                array('label' => 'Profile', 'url' => '#',),
                array('label' => 'Messages', 'url' => '#',),
            ),
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_PILLS,
    'items' => array(
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Profile', 'url' => '#',),
        array('label' => 'Messages', 'url' => '#',),
    ),
)); ?></pre>

    <h3>Disabled state</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbNav', array(
            'type' => TbHtml::NAV_TYPE_PILLS,
            'items' => array(
                array('label' => 'Clickable link', 'url' => '#'),
                array('label' => 'Clickable link', 'url' => '#'),
                array('label' => 'Disabled link', 'url' => '#', 'disabled' => true),
            ),
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_PILLS,
    'items' => array(
        array('label' => 'Clickable link', 'url' => '#'),
        array('label' => 'Clickable link', 'url' => '#'),
        array('label' => 'Disabled link', 'url' => '#', 'disabled' => true),
    ),
)); ?></pre>

    <hr class="bs-docs-separator">

    <h2>Stackable</h2>

    <h3>Stacked tabs</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbNav', array(
            'type' => TbHtml::NAV_TYPE_TABS,
            'stacked' => true,
            'items' => array(
                array('label' => 'Home', 'url' => '#', 'active' => true),
                array('label' => 'Profile', 'url' => '#',),
                array('label' => 'Messages', 'url' => '#',),
            ),
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_TABS,
    'stacked' => true,
    ...
)); ?></pre>

    <h3>Stacked pills</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbNav', array(
            'type' => TbHtml::NAV_TYPE_PILLS,
            'stacked' => true,
            'items' => array(
                array('label' => 'Home', 'url' => '#', 'active' => true),
                array('label' => 'Profile', 'url' => '#',),
                array('label' => 'Messages', 'url' => '#',),
            ),
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_PILLS,
    'stacked' => true,
    ...
)); ?></pre>

    <hr class="bs-docs-separator">

    <h2>Dropdowns</h2>

    <h3>Tabs with dropdowns</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbNav', array(
            'type' => TbHtml::NAV_TYPE_TABS,
            'items' => array(
                array('label' => 'Home', 'url' => '#', 'active' => true),
                array('label' => 'Help', 'url' => '#'),
                array('label' => 'Dropdown', 'items' => $dropdownConfig),
            )
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_TABS,
    'items' => array(
        ...
        array('label' => 'Dropdown', 'items' => array(
            array('label' => 'Action', 'url' => '#'),
            array('label' => 'Another action', 'url' => '#'),
            array('label' => 'Something else here', 'url' => '#'),
            TbHtml::menuDivider(),
            array('label' => 'Separate link', 'url' => '#'),
        ),
    ),
)); ?></pre>

    <h3>Pills with dropdowns</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbNav', array(
            'type' => TbHtml::NAV_TYPE_PILLS,
            'items' => array(
                array('label' => 'Home', 'url' => '#', 'active' => true),
                array('label' => 'Help', 'url' => '#'),
                array('label' => 'Dropdown', 'items' => $dropdownConfig),
            )
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_PILLS,
    'items' => array(
        ...
        array('label' => 'Dropdown', 'items' => array(
            array('label' => 'Action', 'url' => '#'),
            array('label' => 'Another action', 'url' => '#'),
            array('label' => 'Something else here', 'url' => '#'),
            TbHtml::menuDivider(),
            array('label' => 'Separate link', 'url' => '#'),
        ),
    ),
)); ?></pre>

    <hr class="bs-docs-separator">

    <h2>Nav lists</h2>

    <div class="bs-docs-example">
        <div class="well" style="max-width: 340px; padding: 8px 0;">
            <?php $this->widget('bootstrap.widgets.TbNav', array(
                'type' => TbHtml::NAV_TYPE_LIST,
                'items' => array(
                    array('label' => 'List header'),
                    array('label' => 'Home', 'url' => '#', 'active' => true),
                    array('label' => 'Library', 'url' => '#'),
                    array('label' => 'Applications', 'url' => '#'),
                    array('label' => 'Another list header'),
                    array('label' => 'Profile', 'url' => '#'),
                    array('label' => 'Settings', 'url' => '#'),
                    TbHtml::menuDivider(),
                    array('label' => 'Help', 'url' => '#'),
                )
            )); ?>
        </div>
    </div>

    <pre class="prettyprint linenums">
$this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_LIST,
    'items' => array(
        array('label' => 'List header'),
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Library', 'url' => '#'),
        array('label' => 'Applications', 'url' => '#'),
        array('label' => 'Another list header'),
        array('label' => 'Profile', 'url' => '#'),
        array('label' => 'Settings', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Help', 'url' => '#'),
    )
));
    </pre>

</section>

<!-- Navbar
    ================================================== -->
<section id="navbar">

    <?php $navbarNav = array(
        'class' => 'bootstrap.widgets.TbNav',
        'items' => array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Link', 'url' => '#'),
            array('label' => 'Link', 'url' => '#'),
        ),
    ); ?>

    <?php $navbarItems = array(
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'items' => array(
                array('label' => 'Home', 'url' => '#', 'active' => true),
                array('label' => 'Link', 'url' => '#'),
                array('label' => 'Link', 'url' => '#'),
                array('label' => 'Dropdown', 'items' => array(
                    array('label' => 'Action', 'url' => '#'),
                    array('label' => 'Another action', 'url' => '#'),
                    array('label' => 'Something else here', 'url' => '#'),
                    TbHtml::menuDivider(),
                    array('label' => 'Nav header'),
                    array('label' => 'Separated link', 'url' => '#'),
                    array('label' => 'One more separated link', 'url' => '#'),
                )),
            ),
        ),
        TbHtml::navbarSearchForm('#'),
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'htmlOptions' => array('class' => 'pull-right'),
            'items' => array(
                array('label' => 'Link', 'url' => '#'),
                array('label' => 'Dropdown', 'items' => $dropdownConfig),
            ),
        ),
    ); ?>

    <div class="page-header">
        <h1>Navbar <small>TbNavbar.php</small></h1>
    </div>

    <h2>Basic navbar</h2>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbNavbar', array(
            'display' => TbHtml::NAVBAR_DISPLAY_NONE,
            'brandLabel' => 'Title',
            'items' => array($navbarNav),
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'brandLabel' => 'Title',
    'display' => null, // default is static to top
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'items' => array(
                array('label' => 'Home', 'url' => '#', 'active' => true),
                array('label' => 'Link', 'url' => '#'),
                array('label' => 'Link', 'url' => '#'),
            ),
        ),
    ),
)); ?></pre>

    <hr class="bs-docs-separator">

    <h3>Search form</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbNavbar', array(
            'display' => TbHtml::NAVBAR_DISPLAY_NONE,
            'brandLabel' => 'Title',
            'items' => array(
                TbHtml::navbarSearchForm('#'),
            ),
        ));
        ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'brandLabel' => 'Title',
    'items' => array(
        TbHtml::navbarSearchForm('#'),
    ),
));</pre>

    <hr class="bs-docs-separator">

    <h2>Display variations</h2>

    <p class="muted">Example coming soon!</p>
    <div class="bs-docs-example bs-navbar-top-example">
        <?php $this->widget('bootstrap.widgets.TbNavbar', array(
            'brandLabel' => 'Title',
            'collapse' => true,
            'items' => $navbarItems,
            'htmlOptions' => array('style'=>'position:absolute')
        ));?>
    </div>

    <hr class="bs-docs-separator">

    <h2>Responsive navbar</h2>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbNavbar', array(
            'display' => TbHtml::NAVBAR_DISPLAY_NONE,
            'brandLabel' => 'Title',
            'collapse' => true,
            'items' => $navbarItems
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'brandLabel' => 'Title',
    'collapse' => true,
    'items' => array(...),
)); ?></pre>

    <hr class="bs-docs-separator">

    <h2>Inverted variation</h2>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbNavbar', array(
            'display' => TbHtml::NAVBAR_DISPLAY_NONE,
            'color' => TbHtml::NAVBAR_COLOR_INVERSE,
            'brandLabel' => 'Title',
            'collapse' => true,
            'items' => $navbarItems,
        ));    ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbNavbar', array(
    'color' => TbHtml::NAVBAR_COLOR_INVERSE,
    'brandLabel' => 'Title',
    'collapse' => true,
    'items' => array(...),
)); ?></pre>

</section>

<!-- Breadcrumb
================================================== -->
<section id="breadcrumb">

    <div class="page-header">
        <h1>Breadcrumb <small>TbBreadcrumb.php</small></h1>
    </div>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
            'homeLabel' => 'Home',
            'links' => array('Library'),
        )); ?>
        <?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
            'homeLabel' => 'Home',
            'links' => array(
                'Library' => '#',
                'Data',
            ),
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbBreadcrumb', array(
    'links' => array(
        'Library' => '#',
        'Data',
    ),
)); ?>
</pre>

<!-- Hero unit
    ================================================== -->
<section id="herounit">

    <div class="page-header">
        <h1>Hero unit <small>TbHeroUnit.php</small></h1>
    </div>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbHeroUnit', array(
            'heading' => 'Hello, world!',
            'content' => '<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>' . TbHtml::button('Learn more', array('color' =>TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE)),
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbHeroUnit', array(
    'heading' => 'Hello, world!',
    'content' => '&lt;p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.&lt;/p>' . TbHtml::button('Learn more', array('color' =>TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE)),
)); ?></pre>

    <h4>Using a view</h4>

    <p><?php echo TbHtml::labelTb('Head up!', array('color' =>TbHtml::LABEL_COLOR_INFO)); ?> You can also use a view instead of a string as content by passing the path or alias to that view as the content attribute.</p>

</section>

<!-- Grid view
================================================== -->
<section id="gridview">

    <?php
    $gridDataProvider = new CArrayDataProvider(array(
        array('id' => 1, 'firstName' => 'Mark', 'lastName' => 'Otto', 'username' => '@mdo'),
        array('id' => 2, 'firstName' => 'Jacob', 'lastName' => 'Thornton', 'username' => '@fat'),
        array('id' => 3, 'firstName' => 'Larry', 'lastName' => 'the Bird', 'username' => '@twitter'),
    ));

    $gridColumns = array(
        array('name' => 'id', 'header' => '#', 'htmlOptions' => array('color' =>'width: 60px')),
        array('name' => 'firstName', 'header' => 'First name'),
        array('name' => 'lastName', 'header' => 'Last name'),
        array('name' => 'username', 'header' => 'Username'),
    );
    ?>

    <div class="page-header">
        <h1>Grid view <small>TbGridView.php</small></h1>
    </div>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbGridView', array(
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => $gridColumns,
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbGridView', array(
   'dataProvider' => $gridDataProvider,
   'template' => "{items}",
   'columns' => array(
        array('name' => 'id', 'header' => '#', 'htmlOptions' => array('color' =>'width: 60px')),
        array('name' => 'firstName', 'header' => 'First name'),
        array('name' => 'lastName', 'header' => 'Last name'),
        array('name' => 'username', 'header' => 'Username'),
    ),
)); ?></pre>

    <hr class="bs-docs-separator">

    <h2>Optional styles</h2>

    <h3>Striped</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbGridView', array(
            'type' => TbHtml::GRID_TYPE_STRIPED,
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => $gridColumns,
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type' => TbHtml::GRID_TYPE_STRIPED,
    ...
)); ?></pre>

    <h3>Bordered</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbGridView', array(
            'type' => TbHtml::GRID_TYPE_BORDERED,
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => $gridColumns,
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type' => TbHtml::GRID_TYPE_BORDERED,
    ...
)); ?></pre>

    <h3>Hover</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbGridView', array(
            'type' => TbHtml::GRID_TYPE_HOVER,
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => $gridColumns,
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type' => TbHtml::GRID_HOVER,
    ...
)); ?></pre>

    <h3>Condensed</h3>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbGridView', array(
            'type' => TbHtml::GRID_TYPE_CONDENSED,
            'dataProvider' => $gridDataProvider,
            'template' => "{items}",
            'columns' => $gridColumns,
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt?php $this->widget('bootstrap.widgets.TbGridView', array(
    'type' => TbHtml::GRID_TYPE_CONDENSED,
    ...
)); ?></pre>

    <p><?php echo TbHtml::labelTb('Heads up!', array('color' =>TbHtml::LABEL_COLOR_INFO)); ?> You can also combine table styles by providing multiple values.</p>

</section>

<!-- Forms
    ================================================== -->
<section id="forms">

    <div class="page-header">
        <h1>Forms <small>TbActiveForm.php</small></h1>
    </div>

    <div class="bs-docs-example">
        <div class="row-fluid">
        <?php /* @var TbActiveForm $form */
        $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
			'id' => 'test-form',
            'layout' => TbHtml::FORM_LAYOUT_HORIZONTAL,
			'enableAjaxValidation'=>true,
			'enableClientValidation'=>true,
			'clientOptions' => array(
				'validateOnType' => true,
				'validateOnChange' => true,
				'validateOnSubmit' => true,
			),
        )); ?>

        <fieldset>

			<?php echo $form->errorSummary($model); ?>

            <legend>Legend</legend>

            <?php echo $form->textFieldControlGroup($model, 'textField', array('help' => 'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
            <?php echo $form->dropDownListControlGroup($model, 'dropDown', array('1', '2', '3', '4', '5'), array('empty' => 'Something ...')); ?>
            <?php echo $form->dropDownListControlGroup($model, 'multiDropDown', array('1', '2', '3', '4', '5'), array('multiple' => true)); ?>
            <?php echo $form->fileFieldControlGroup($model, 'fileField'); ?>
            <?php echo $form->textAreaControlGroup($model, 'textArea', array('span' => 8, 'rows' => 5)); ?>
            <?php echo $form->uneditableFieldControlGroup($model, 'uneditableField'); ?>
            <?php echo $form->textFieldControlGroup($model, 'disabled', array('disabled' => true)); ?>
            <?php echo $form->textFieldControlGroup($model, 'prepend', array('prepend' => '@')); ?>
            <?php echo $form->textFieldControlGroup($model, 'append', array('append' => '.00')); ?>
            <?php echo $form->checkBoxControlGroup($model, 'disabledCheckbox', array('disabled' => true)); ?>
            <?php echo $form->inlineCheckBoxListControlGroup($model, 'inlineCheckboxes', array('1', '2', '3')); ?>
            <?php echo $form->checkBoxListControlGroup($model, 'checkboxes', array(
                'Option one is this and that—be sure to include why it\'s great',
                'Option two can also be checked and included in form results',
                'Option three can—yes, you guessed it—also be checked and included in form results',
            ), array('help' => '<strong>Note:</strong> Labels surround all the options for much larger click areas.')); ?>
            <?php echo $form->radioButtonControlGroup($model, 'radioButton'); ?>
            <?php echo $form->radioButtonListControlGroup($model, 'radioButtons', array(
                'Option one is this and that—be sure to include why it\'s great',
                'Option two can is something else and selecting it will deselect option one',
            )); ?>

        </fieldset>

        <?php echo TbHtml::formActions(array(
            TbHtml::submitButton('Submit', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
            TbHtml::resetButton('Reset'),
        )); ?>

        <?php $this->endWidget(); ?>
        </div>
    </div>
    <pre class="prettyprint linenums">
&lt;?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
    'layout' => TbHtml::FORM_LAYOUTHORIZONTAL,
)); ?>

&lt;fieldset>

    &lt;legend>Legend&lt;/legend>

    &lt;?php echo $form->textFieldControlGroup($model, 'textField',
        array('help' => 'In addition to freeform text, any HTML5 text-based input appears like so.')); ?>
    &lt;?php echo $form->dropDownListControlGroup($model, 'dropDown',
        array('1', '2', '3', '4', '5'), array('empty' => 'Something ...')); ?>
    &lt;?php echo $form->dropDownListControlGroup($model, 'multiDropDown',
        array('1', '2', '3', '4', '5'), array('multiple' => true)); ?>
    &lt;?php echo $form->fileFieldControlGroup($model, 'fileField'); ?>
    &lt;?php echo $form->textAreaControlGroup($model, 'textArea',
        array('span' => 8, 'rows' => 5)); ?>
    &lt;?php echo $form->uneditableFieldControlGroup($model, 'uneditableField'); ?>
    &lt;?php echo $form->textFieldControlGroup($model, 'disabled', array('disabled' => true)); ?>
    &lt;?php echo $form->textFieldControlGroup($model, 'prepend', array('prepend' => '@')); ?>
    &lt;?php echo $form->textFieldControlGroup($model, 'append', array('append' => '.00')); ?>
    &lt;?php echo $form->checkBoxControlGroup($model, 'disabledCheckbox', array('disabled' => true)); ?>
    &lt;?php echo $form->inlineCheckBoxListControlGroup($model, 'inlineCheckboxes', array('1', '2', '3')); ?>
    &lt;?php echo $form->checkBoxListControlGroup($model, 'checkboxes', array(
        'Option one is this and that—be sure to include why it\'s great',
        'Option two can also be checked and included in form results',
        'Option three can—yes, you guessed it—also be checked and included in form results',
    ), array('help' => '&lt;strong>Note:&lt;/strong> Labels surround all the options for much larger click areas.')); ?>
    &lt;?php echo $form->radioButtonControlGroup($model, 'radioButton'); ?>
    &lt;?php echo $form->radioButtonListControlGroup($model, 'radioButtons', array(
        'Option one is this and that—be sure to include why it\'s great',
        'Option two can is something else and selecting it will deselect option one',
    )); ?>

&lt;/fieldset>

&lt;?php echo TbHtml::formActions(array(
    TbHtml::submitButton('Submit', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
    TbHtml::resetButton('Reset'),
)); ?>

&lt;?php $this->endWidget(); ?></pre>

</section>

<!-- Modal
================================================== -->
<section id="modals">

    <div class="page-header">
        <h1>Modal <small>TbModal.php</small></h1>
    </div>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbModal', array(
            'id' => 'myModal',
            'header' => 'Modal Heading',
            'content' => '<p>One fine body...</p>',
            'footer' => array(
                TbHtml::button('Save Changes', array('data-dismiss' => 'modal', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)),
                TbHtml::button('Close', array('data-dismiss' => 'modal')),
             ),
        )); ?>
        <?php echo TbHtml::button('Click me to open modal', array('color' =>TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE, 'data-toggle' => 'modal', 'data-target' => '#myModal')); ?>
    </div>

<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbModal', array(
    'id' => 'myModal',
    'header' => 'Modal Heading',
    'content' => '&lt;p>One fine body...&lt;/p>',
    'footer' => array(
        TbHtml::button('Save Changes', array('data-dismiss' => 'modal', 'color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        TbHtml::button('Close', array('data-dismiss' => 'modal')),
     ),
)); ?>

&lt;?php echo TbHtml::button('Click me to open modal', array(
    'style' => TbHtml::BUTTON_COLOR_PRIMARY,
    'size' => TbHtml::BUTTON_SIZE_LARGE,
    'data-toggle' => 'modal',
    'data-target' => '#myModal',
)); ?></pre>

</section>

<!-- Scrollspy
================================================== -->
<section id="scrollspy">

    <div class="page-header">
        <h1>Scrollspy <small>TbScrollspy.php</small></h1>
    </div>

    <p class="muted">Example coming soon!</p>

</section>

<!-- Tabs
================================================== -->
<section id="tabs">

    <div class="page-header">
        <h1>Togglable tabs <small>TbTabs.php</small></h1>
    </div>

    <div class="bs-docs-example">
        <?php $this->widget('bootstrap.widgets.TbTabs', array(
            'tabs' => array(
                array('label' => 'Home', 'content' => 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.', 'active' => true),
                array('label' => 'Profile', 'content' => 'Food truck fixie locavore, accusamus mcsweeney\'s marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.'),
                array('label' => 'Messages', 'items' => array(
                    array('label' => '@fat', 'content' => 'Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney\'s organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven\'t heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.'),
                    array('label' => '@mdo', 'content' => 'Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.'),
                )),
            ),
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbTabs', array(
    'tabs' => array(
        array('label' => 'Home', 'content' => '...', 'active' => true),
        array('label' => 'Profile', 'content' => '...'),
        array('label' => 'Messages', 'items' => array(
            array('label' => '@fat', 'content' => '...'),
            array('label' => '@mdo', 'content' => '...'),
        )),
    ),
)); ?></pre>

</section>

<!-- Alerts
================================================== -->
<section id="alert">

    <div class="page-header">
        <h1>Alert <small>TbAlert.php</small></h1>
    </div>

    <h2>Default alert</h2>

    <div class="bs-docs-example">
        <?php Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_WARNING, '<strong>Warning!</strong> Best check yo self, you\'re not looking too good.'); ?>
        <?php $this->widget('bootstrap.widgets.TbAlert'); ?>
    </div>

    <pre class="prettyprint linenums">
Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_WARNING,
    '&lt;strong>Warning!&lt;/strong> Best check yo self, you\'re not looking too good.');

&lt;?php $this->widget('bootstrap.widgets.TbAlert'); ?></pre>

    <hr class="bs-docs-separator">

    <h2>Block</h2>

    <div class="bs-docs-example">
        <?php Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_WARNING, '<h4>Warning!</h4> Best check yo self, you\'re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.'); ?>
        <?php $this->widget('bootstrap.widgets.TbAlert', array(
            'block' => true,
        )); ?>
    </div>

    <pre class="prettyprint linenums">
Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_WARNING,
    '&lt;h4>Warning!&lt;/h4> Best check yo self, you\'re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.');

&lt;?php $this->widget('bootstrap.widgets.TbAlert', array(
    'block'=>true,
)); ?></pre>

    <hr class="bs-docs-separator">

    <h2>Contextual alternatives</h2>

    <h3>Error or danger</h3>

    <div class="bs-docs-example">
        <?php Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_ERROR, '<strong>Oh snap!</strong> Change a few things up and try submitting again.'); ?>
        <?php $this->widget('bootstrap.widgets.TbAlert'); ?>
    </div>

    <pre class="prettyprint linenums">
Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_ERROR,
    '&lt;strong>Oh snap!&lt;/strong> Change a few things up and try submitting again.');</pre>

    <h3>Success</h3>

    <div class="bs-docs-example">
        <?php Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Well done!</strong> You successfully read this important alert message.'); ?>
        <?php $this->widget('bootstrap.widgets.TbAlert'); ?>
    </div>

    <pre class="prettyprint linenums">
Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_SUCCESS,
    '&lt;strong>Well done!&lt;/strong> You successfully read this important alert message.');</pre>

    <h3>Information</h3>

    <div class="bs-docs-example">
        <?php Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_INFO, '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.'); ?>
        <?php $this->widget('bootstrap.widgets.TbAlert'); ?>
    </div>

    <pre class="prettyprint linenums">
Yii::app()->user->setFlash(TbHtml::ALERT_COLOR_INFO,
    '&lt;strong>Heads up!&lt;/strong> This alert needs your attention, but it\'s not super important.');</pre>

</section>

<!-- Collapse
================================================== -->
<section id="collapse">

    <div class="page-header">
        <h1>Collapse <small>TbCollapse.php</small></h1>
    </div>

    <p class="muted">Example coming soon!</p>

</section>

<!-- Carousel
================================================== -->
<section id="carousel">

    <div class="page-header">
        <h1>Carousel <small>TbCarousel.php</small></h1>
    </div>

    <p class="muted">Example coming soon!</p>

</section>

<!-- Typeahead
================================================== -->
<section id="typeahead">

    <div class="page-header">
        <h1>Typeahead <small>TbTypeaAhead.php</small></h1>
    </div>

    <div class="bs-docs-example" style="background-color: #f5f5f5;">
        <?php $this->widget('bootstrap.widgets.TbTypeAhead', array(
            'name' => 'typeahead-test',
            'source' => array(
                "Alabama",
                "Alaska",
                "Arizona",
                "Arkansas",
                "California",
                "Colorado",
                "Connecticut",
                "Delaware",
                "Florida",
                "Georgia",
                "Hawaii",
                "Idaho",
                "Illinois",
                "Indiana",
                "Iowa",
                "Kansas",
                "Kentucky",
                "Louisiana",
                "Maine",
                "Maryland",
                "Massachusetts",
                "Michigan",
                "Minnesota",
                "Mississippi",
                "Missouri",
                "Montana",
                "Nebraska",
                "Nevada",
                "New Hampshire",
                "New Jersey",
                "New Mexico",
                "New York",
                "North Dakota",
                "North Carolina",
                "Ohio",
                "Oklahoma",
                "Oregon",
                "Pennsylvania",
                "Rhode Island",
                "South Carolina",
                "South Dakota",
                "Tennessee",
                "Texas",
                "Utah",
                "Vermont",
                "Virginia",
                "Washington",
                "West Virginia",
                "Wisconsin",
                "Wyoming"
            ),
            'htmlOptions' => array(
                'prepend' => TbHtml::icon(TbHtml::ICON_GLOBE),
                'placeholder' => 'Write an USA state'
            ),
        )); ?>
    </div>

<pre class="prettyprint linenums">
&lt;?php $this->widget('bootstrap.widgets.TbTypeAhead', array(
    'name' => 'typeahead-test',
    'source' => array(...),
    'htmlOptions' => array(
        'prepend' => TbHtml::icon(TbHtml::ICON_GLOBE),
        'placeholder' => 'Write an USA state'
    ),
)); ?></pre>

</section>

<!-- Affix
================================================== -->
<section id="affix">

    <div class="page-header">
        <h1>Affix <small>TbAffix.php</small></h1>
    </div>

    <p class="muted">Example coming soon!</p>

</section>

        </div>
    </div>
</div>

<?php
// fix twitter bootstrap docs bug: https://github.com/twitter/bootstrap/issues/6832
Yii::app()->clientScript->registerScript('javascript#ReadyJS', <<<EOD
$('.tooltip-demo a[rel=tooltip]').tooltip();
EOD
);
