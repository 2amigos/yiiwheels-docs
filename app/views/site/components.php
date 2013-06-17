<?php
/* @var SiteController $this */
$this->pageTitle = 'Components - ' . param('pageTitle');
?>
<!-- Subhead
================================================== -->
<header class="jumbotron subhead" id="overview" xmlns="http://www.w3.org/1999/html">
   <div class="container">
      <h1>Components (TODO: Replace Yiistrap docs with Yiiwheels docs)</h1>
      <p class="lead">Rendering components using the html helper</p>
   </div>
</header>
<div class="container">

<!-- Docs nav
================================================== -->
<div class="row">
<div class="span3 bs-docs-sidebar">
   <ul class="nav nav-list bs-docs-sidenav">
      <li><a href="#buttonGroups"><i class="icon-chevron-right"></i> Button groups</a></li>
      <li><a href="#buttonDropdowns"><i class="icon-chevron-right"></i> Button dropdowns</a></li>
      <li><a href="#navs"><i class="icon-chevron-right"></i> Navs</a></li>
      <li><a href="#pagination"><i class="icon-chevron-right"></i> Pagination</a></li>
      <li><a href="#breadcrumbs"><i class="icon-chevron-right"></i> Breadcrumbs</a></li>
      <li><a href="#labels-badges"><i class="icon-chevron-right"></i> Labels and badges</a></li>
      <li><a href="#typography"><i class="icon-chevron-right"></i> Typography</a></li>
      <li><a href="#thumbnails"><i class="icon-chevron-right"></i> Thumbnails</a></li>
      <li><a href="#tooltips"><i class="icon-chevron-right"></i> Tooltip</a></li>
      <li><a href="#popovers"><i class="icon-chevron-right"></i> Popover</a></li>
      <li><a href="#alerts"><i class="icon-chevron-right"></i> Alerts</a></li>
      <li><a href="#progress"><i class="icon-chevron-right"></i> Progress bars</a></li>
      <li><a href="#media"><i class="icon-chevron-right"></i> Media object</a></li>
      <li><a href="#carousel"><i class="icon-chevron-right"></i> Carousel</a></li>
      <li><a href="#misc"><i class="icon-chevron-right"></i> Misc</a></li>
   </ul>
</div>

<div class="span9">

<!-- Button Groups
   ================================================== -->
<section id="buttonGroups">

    <?php $buttonGroupConfig = array(
        array('label' => 'Left'),
        array('label' => 'Middle'),
        array('label' => 'Right'),
    ); ?>

   <div class="page-header">
      <h1>Button groups</h1>
   </div>

   <h3>Single button group</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::buttonGroup($buttonGroupConfig); ?>
   </div>
   <pre class="prettyprint linenums">
&lt;?php
echo TbHtml::buttonGroup(array(
    array('label' => 'Left'),
    array('label' => 'Middle'),
    array('label' => 'Right'),
)); ?></pre>

   <h3>Multiple button groups</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::buttonToolbar(array(
         array('items' => array(
                array('label' => '1'),
                array('label' => '2'),
                array('label' => '3'),
                array('label' => '4'),
          )),
         array('items' => array(
                array('label' => '5'),
                array('label' => '6'),
                array('label' => '7'),
         )),
         array('items' => array(
                array('label' => '8'),
         )),
      )); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonToolbar(array(
    array('items' => array(
        array('label' => '1'),
        array('label' => '2'),
        array('label' => '3'),
        array('label' => '4'),
    )),
    array('items' => array(
        array('label' => '5'),
        array('label' => '6'),
        array('label' => '7'),
    )),
    array('items' => array(
        array('label' => '8'),
    )),
)); ?></pre>

   <h3>Vertical button groups</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::buttonGroup(array(
         array('icon' => 'align-left'),
         array('icon' => 'align-center'),
         array('icon' => 'align-right'),
         array('icon' => 'align-justify'),
      ), array('vertical' => true)); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonGroup(array(
    array('icon' => 'align-left'),
    array('icon' => 'align-center'),
    array('icon' => 'align-right'),
    array('icon' => 'align-justify'),
), array('vertical' => true)); ?></pre>

   <h3>Checkbox</h3>

    <div class="bs-docs-example">
        <?php echo TbHtml::buttonGroup($buttonGroupConfig, array('toggle' => TbHtml::BUTTON_TOGGLE_CHECKBOX, 'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php
echo TbHtml::buttonGroup(array(
    array('label' => 'Left'),
    array('label' => 'Middle'),
    array('label' => 'Right'),
), array('toggle' => TbHtml::BUTTON_TOGGLE_CHECKBOX, 'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?></pre>

   <h3>Radio</h3>

    <div class="bs-docs-example">
        <?php echo TbHtml::buttonGroup($buttonGroupConfig, array('toggle' => TbHtml::BUTTON_TOGGLE_RADIO, 'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php
echo TbHtml::buttonGroup(array(
    array('label' => 'Left'),
    array('label' => 'Middle'),
    array('label' => 'Right'),
), array('toggle' => TbHtml::BUTTON_TOGGLE_RADIO, 'color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?></pre>

</section>

<!-- Split button dropdowns
   ================================================== -->
<section id="buttonDropdowns">

   <?php $dropdownConfig = array(
      array('label' => 'Action', 'url' => '#'),
      array('label' => 'Another action', 'url' => '#'),
      array('label' => 'Something else here', 'url' => '#'),
      TbHtml::menuDivider(),
      array('label' => 'Separate link', 'url' => '#'),
   ); ?>

   <div class="page-header">
      <h1>Button dropdown menus</h1>
   </div>

   <div class="bs-docs-example">

      <div class="btn-toolbar">
         <?php echo TbHtml::buttonDropdown('Action', $dropdownConfig); ?>
         <?php echo TbHtml::buttonDropdown('Primary', $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_PRIMARY)); ?>
         <?php echo TbHtml::buttonDropdown('Danger', $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_DANGER)); ?>
         <?php echo TbHtml::buttonDropdown('Warning', $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_WARNING)); ?>
         <?php echo TbHtml::buttonDropdown('Success', $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_SUCCESS)); ?>
         <?php echo TbHtml::buttonDropdown('Info', $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_INFO)); ?>
         <?php echo TbHtml::buttonDropdown('Inverse', $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_INVERSE)); ?>
      </div>

   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonDropdown('Action', array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    TbHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
)); ?></pre>

   <h3>Works with all button sizes</h3>

   <div class="bs-docs-example">

      <div class="btn-toolbar">
         <?php echo TbHtml::buttonDropdown('Large action', $dropdownConfig, array('size' => TbHtml::BUTTON_SIZE_LARGE)); ?>
      </div>
      <div class="btn-toolbar">
         <?php echo TbHtml::buttonDropdown('Small action', $dropdownConfig, array('size' => TbHtml::BUTTON_SIZE_SMALL)); ?>
      </div>
      <div class="btn-toolbar">
         <?php echo TbHtml::buttonDropdown('Mini action', $dropdownConfig, array('size' => TbHtml::BUTTON_SIZE_MINI)); ?>
      </div>

   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonDropdown('Action', array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    TbHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
), array('size'=>TbHtml::BUTTON_SIZE_MINI)); ?></pre>

   <hr class="bs-docs-separator">

   <h2>Split button dropdowns</h2>

   <div class="bs-docs-example">
      <div class="btn-toolbar" style="margin: 0;">
         <?php echo TbHtml::buttonDropdown('Action', $dropdownConfig, array('split' => true)); ?>
         <?php echo TbHtml::buttonDropdown('Primary', $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_PRIMARY, 'split' => true)); ?>
         <?php echo TbHtml::buttonDropdown('Danger', $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_DANGER, 'split' => true)); ?>
         <?php echo TbHtml::buttonDropdown('Warning',   $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_WARNING, 'split' => true)); ?>
         <?php echo TbHtml::buttonDropdown('Success', $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_SUCCESS, 'split' => true)); ?>
         <?php echo TbHtml::buttonDropdown('Info', $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_INFO, 'split' => true)); ?>
         <?php echo TbHtml::buttonDropdown('Inverse', $dropdownConfig, array('color' => TbHtml::BUTTON_COLOR_INVERSE, 'split' => true)); ?>
      </div>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonDropdown('Action', array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    TbHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
), array('split' => true)); ?></pre>

   <h3>Dropup menus</h3>

   <div class="bs-docs-example">
      <div class="btn-toolbar" style="margin: 0;">
         <?php echo TbHtml::buttonDropdown('Dropup', $dropdownConfig, array('split' => true, 'dropup' => true)); ?>
         <?php echo TbHtml::buttonDropdown('Right dropup', $dropdownConfig, array('split' => true, 'dropup' => true, 'menuOptions' => array('pull' => TbHtml::PULL_RIGHT))); ?>
      </div>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::buttonDropdown('Right dropup', array(
    array('label' => 'Action', 'url' => '#'),
    array('label' => 'Another action', 'url' => '#'),
    array('label' => 'Something else here', 'url' => '#'),
    TbHtml::menuDivider(),
    array('label' => 'Separate link', 'url' => '#'),
), array('split' => true, 'dropup' => true, 'menuOptions' => array('pull' => TbHtml::PULL_RIGHT))); ?></pre>

</section>

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
      <h1>Navigation</h1>
   </div>

   <h3>Basic tabs</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::tabs(array(
         array('label' => 'Home', 'url' => '#', 'active' => true),
         array('label' => 'Profile', 'url' => '#',),
         array('label' => 'Messages', 'url' => '#',),
      )); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::tabs(array(
    array('label' => 'Home', 'url' => '#', 'active' => true),
    array('label' => 'Profile', 'url' => '#',),
    array('label' => 'Messages', 'url' => '#',),
)); ?>
</pre>

   <h3>Basic pills</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::pills(array(
         array('label' => 'Home', 'url' => '#', 'active' => true),
         array('label' => 'Profile', 'url' => '#',),
         array('label' => 'Messages', 'url' => '#',),
      )); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::pills(array(
    array('label' => 'Home', 'url' => '#', 'active' => true),
    array('label' => 'Profile', 'url' => '#',),
    array('label' => 'Messages', 'url' => '#',),
)); ?>
</pre>

   <h3>Disabled state</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::pills(array(
         array('label' => 'Clickable link', 'url' => '#'),
         array('label' => 'Clickable link', 'url' => '#'),
         array('label' => 'Disabled link', 'url' => '#', 'disabled' => true),
      )); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::pills(array(
    array('label' => 'Clickable link', 'url' => '#'),
    array('label' => 'Clickable link', 'url' => '#'),
    array('label' => 'Disabled link', 'url' => '#', 'disabled' => true),
)); ?>
</pre>

   <hr class="bs-docs-separator">

   <h2>Stackable</h2>

   <h3>Stacked tabs</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::stackedTabs(array(
         array('label' => 'Home', 'url' => '#', 'active' => true),
         array('label' => 'Profile', 'url' => '#',),
         array('label' => 'Messages', 'url' => '#',),
      )); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::stackedTabs(array(
    array('label' => 'Home', 'url' => '#', 'active' => true),
    array('label' => 'Profile', 'url' => '#',),
    array('label' => 'Messages', 'url' => '#',),
)); ?>
</pre>

   <h3>Stacked pills</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::stackedPills(array(
         array('label' => 'Home', 'url' => '#', 'active' => true),
         array('label' => 'Profile', 'url' => '#',),
         array('label' => 'Messages', 'url' => '#',),
      )); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::stackedPills(array(
    array('label' => 'Home', 'url' => '#', 'active' => true),
    array('label' => 'Profile', 'url' => '#',),
    array('label' => 'Messages', 'url' => '#',),
)); ?>
</pre>

   <hr class="bs-docs-separator">

   <h2>Dropdowns</h2>

   <h3>Tabs with dropdowns</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::tabs(array(
         array('label' => 'Home', 'url' => '#', 'active' => true),
         array('label' => 'Help', 'url' => '#'),
         array('label' => 'Dropdown', 'items' => $dropdownConfig),
      )); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::tabs(array(
    array('label' => 'Home', 'url' => '#', 'active' => true),
    array('label' => 'Help', 'url' => '#'),
    array('label' => 'Dropdown', 'items' => array(
        array('label' => 'Action', 'url' => '#'),
        array('label' => 'Another action', 'url' => '#'),
        array('label' => 'Something else here', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    )),
)); ?>
</pre>

   <h3>Pills with dropdowns</h3>

    <div class="bs-docs-example">
        <?php echo TbHtml::pills(array(
            array('label' => 'Home', 'url' => '#', 'active' => true),
            array('label' => 'Help', 'url' => '#'),
            array('label' => 'Dropdown', 'items' => $dropdownConfig),
        )); ?>
    </div>

    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::tabs(array(
    array('label' => 'Home', 'url' => '#', 'active' => true),
    array('label' => 'Help', 'url' => '#'),
    array('label' => 'Dropdown', 'items' => array(
        array('label' => 'Action', 'url' => '#'),
        array('label' => 'Another action', 'url' => '#'),
        array('label' => 'Something else here', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Separate link', 'url' => '#'),
    )),
)); ?>
</pre>

    <hr class="bs-docs-separator">

    <h2>Nav lists</h2>

    <div class="bs-docs-example">
        <div class="well" style="max-width: 340px; padding: 8px 0;">
            <?php echo TbHtml::navList(array(
                array('label' => 'List header'),
                array('label' => 'Home', 'url' => '#', 'active' => true),
                array('label' => 'Library', 'url' => '#'),
                array('label' => 'Applications', 'url' => '#'),
                array('label' => 'Another list header'),
                array('label' => 'Profile', 'url' => '#'),
                array('label' => 'Settings', 'url' => '#'),
                TbHtml::menuDivider(),
                array('label' => 'Help', 'url' => '#'),
            )); ?>
        </div>
    </div>

    <pre class="prettyprint linenums">
&lt;div class="well" style="max-width: 340px; padding: 8px 0;">
    &lt;?php echo TbHtml::navList(array(
        array('label' => 'List header'),
        array('label' => 'Home', 'url' => '#', 'active' => true),
        array('label' => 'Library', 'url' => '#'),
        array('label' => 'Applications', 'url' => '#'),
        array('label' => 'Another list header'),
        array('label' => 'Profile', 'url' => '#'),
        array('label' => 'Settings', 'url' => '#'),
        TbHtml::menuDivider(),
        array('label' => 'Help', 'url' => '#'),
    )); ?>
&lt;/div>
</pre>

    <h2>Tabbable nav</h2>

    <h3>Tabbable example</h3>

    <div class="bs-docs-example">
        <?php echo TbHtml::tabbable(array(
            array('label' => 'Section 1', 'active' => true, 'content' => '<p>I\'m in Section 1.</p>'),
            array('label' => 'Section 2', 'content' => '<p>Howdy, I\'m in Section 2.</p>'),
            array('label' => 'Section 3', 'content' => '<p>What up girl, this is Section 3.</p>'),
        )); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::tabbable(array(
    array('label' => 'Section 1', 'active' => true, 'content' => '&lt;p>I\'m in Section 1.&lt;/p>'),
    array('label' => 'Section 2', 'content' => '&lt;p>Howdy, I\'m in Section 2.&lt;/p>'),
    array('label' => 'Section 3', 'content' => '&lt;p>What up girl, this is Section 3.&lt;/p>'),
)); ?></pre>

    <h3>Tabbable in any direction</h3>

    <h4>Tabs on the bottom</h4>

    <div class="bs-docs-example">
        <?php echo TbHtml::tabbable(array(
            array('label' => 'Section 1', 'active' => true, 'content' => '<p>I\'m in Section A.</p>', 'id' => 'tabsBelow_1'),
            array('label' => 'Section 2', 'content' => '<p>Howdy, I\'m in Section B.</p>', 'id' => 'tabsBelow_2'),
            array('label' => 'Section 3', 'content' => '<p>What up girl, this is Section C.</p>', 'id' => 'tabsBelow_3'),
        ), array('placement' => TbHtml::TABS_PLACEMENT_BELOW)); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::tabbable(array(
    array('label' => 'Section 1', 'active' => true, 'content' => '...'),
    array('label' => 'Section 2', 'content' => '...'),
    array('label' => 'Section 3', 'content' => '...'),
), array('placement' => TbHtml::TABS_PLACEMENT_BELOW); ?></pre>

    <h4>Tabs on the left</h4>

    <div class="bs-docs-example">
        <?php echo TbHtml::tabbable(array(
            array('label' => 'Section 1', 'active' => true, 'content' => '<p>I\'m in Section A.</p>', 'id' => 'tabsLeft_1'),
            array('label' => 'Section 2', 'content' => '<p>Howdy, I\'m in Section B.</p>', 'id' => 'tabsLeft_2'),
            array('label' => 'Section 3', 'content' => '<p>What up girl, this is Section C.</p>', 'id' => 'tabsLeft_3'),
        ), array('placement' => TbHtml::TABS_PLACEMENT_LEFT)); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::tabbable(array(
    array('label' => 'Section 1', 'active' => true, 'content' => '...'),
    array('label' => 'Section 2', 'content' => '...'),
    array('label' => 'Section 3', 'content' => '...'),
), array('placement' => TbHtml::TABS_PLACEMENT_LEFT); ?></pre>

    <h4>Tabs on the right</h4>

    <div class="bs-docs-example">
        <?php echo TbHtml::tabbable(array(
            array('label' => 'Section 1', 'active' => true, 'content' => '<p>I\'m in Section A.</p>', 'id' => 'tabsRight_1'),
            array('label' => 'Section 2', 'content' => '<p>Howdy, I\'m in Section B.</p>', 'id' => 'tabsRight_2'),
            array('label' => 'Section 3', 'content' => '<p>What up girl, this is Section C.</p>', 'id' => 'tabsRight_3'),
        ), array('placement' => TbHtml::TABS_PLACEMENT_RIGHT)); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::tabbable(array(
    array('label' => 'Section 1', 'active' => true, 'content' => '..'),
    array('label' => 'Section 2', 'content' => '..'),
    array('label' => 'Section 3', 'content' => '...'),
), array('placement' => TbHtml::TABS_PLACEMENT_RIGHT); ?></pre>

</section>

<!-- Pagination
   ================================================== -->
<section id="pagination">

    <?php $paginationConfig = array(
        array('label' => '&laquo;', 'url' => '#'),
        array('label' => '1', 'url' => '#'),
        array('label' => '2', 'url' => '#'),
        array('label' => '3', 'url' => '#'),
        array('label' => '4', 'url' => '#'),
        array('label' => '5', 'url' => '#'),
        array('label' => '&raquo;', 'url' => '#'),
    ); ?>

    <div class="page-header">
      <h1>Pagination</h1>
    </div>

    <h2>Standard pagination</h2>

    <div class="bs-docs-example">
        <?php echo TbHtml::pagination($paginationConfig); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::pagination(array(
      array('label' => '&amp;laquo;', 'url' => '#'),
      array('label' => '1', 'url' => '#'),
      array('label' => '2', 'url' => '#'),
      array('label' => '3', 'url' => '#'),
      array('label' => '4', 'url' => '#'),
      array('label' => '5', 'url' => '#'),
      array('label' => '&amp;raquo;', 'url' => '#'),
)); ?></pre>

    <hr class="bs-docs-separator">

    <h2>Options</h2>

    <h3>Disable and active states</h3>

    <div class="bs-docs-example">
        <?php echo TbHtml::pagination(array(
            array('label' => '&laquo;', 'url' => '#', 'disabled' => true),
            array('label' => '1', 'url' => '#', 'active' => true),
            array('label' => '2', 'url' => '#'),
            array('label' => '3', 'url' => '#'),
            array('label' => '4', 'url' => '#'),
            array('label' => '5', 'url' => '#'),
            array('label' => '&raquo;', 'url' => '#'),
        )); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::pagination(array(
    array('label' => '&amp;laquo;', 'url' => '#', 'disabled' => true),
    array('label' => '1', 'url' => '#', 'active' => true),
    ...
)); ?></pre>

    <h3>Sizes</h3>

    <div class="bs-docs-example">
        <?php echo TbHtml::pagination($paginationConfig, array('size' => TbHtml::PAGINATION_SIZE_LARGE)); ?>
        <?php echo TbHtml::pagination($paginationConfig); ?>
        <?php echo TbHtml::pagination($paginationConfig, array('size' => TbHtml::PAGINATION_SIZE_SMALL)); ?>
        <?php echo TbHtml::pagination($paginationConfig, array('size' => TbHtml::PAGINATION_SIZE_MINI)); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::pagination(array(...), array('size' => TbHtml::PAGINATION_SIZE_LARGE)); ?>
&lt;?php echo TbHtml::pagination(array(...)); ?>
&lt;?php echo TbHtml::pagination(array(...), array('size' => TbHtml::PAGINATION_SIZE_SMALL)); ?>
&lt;?php echo TbHtml::pagination(array(...), array('size' => TbHtml::PAGINATION_SIZE_MINI)); ?></pre>

    <h3>Alignments</h3>

    <div class="bs-docs-example">
        <?php echo TbHtml::pagination($paginationConfig, array('align' => TbHtml::PAGINATION_ALIGN_CENTER)); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::pagination(array(...), array('align' => TbHtml::PAGINATION_ALIGN_CENTER)); ?></pre>

    <div class="bs-docs-example">
        <?php echo TbHtml::pagination($paginationConfig, array('align' => TbHtml::PAGINATION_ALIGN_RIGHT)); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::pagination(array(...), array('align' => TbHtml::PAGINATION_ALIGN_RIGHT)); ?></pre>

    <hr class="bs-docs-separator">

    <h2>Pager</h2>

    <h3>Default example</h3>

    <div class="bs-docs-example">
        <?php echo TbHtml::pager(array(
            array('label' => 'Previous', 'url' => '#'),
            array('label' => 'Next', 'url' => '#'),
        )); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::pager(array(
    array('label' => 'Previous', 'url' => '#'),
    array('label' => 'Next', 'url' => '#'),
)); ?></pre>

    <h3>Aligned links</h3>

    <div class="bs-docs-example">
        <?php echo TbHtml::pager(array(
            array('label' => '&larr; Older', 'url' => '#', 'previous' => true),
            array('label' => 'Newer &rarr;', 'url' => '#', 'next' => true),
        )); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::pager(array(
    array('label' => '&amp;larr; Older', 'url' => '#', 'previous' => true),
    array('label' => 'Newer &amp;rarr;', 'url' => '#', 'next' => true),
)); ?></pre>

    <h3>Optional disabled state</h3>

    <div class="bs-docs-example">
        <?php echo TbHtml::pager(array(
            array('label' => '&larr; Older', 'url' => '#', 'previous' => true, 'disabled' => true),
            array('label' => 'Newer &rarr;', 'url' => '#', 'next' => true),
        )); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::pager(array(
    array('label' => '&amp;larr; Older', 'url' => '#', 'previous' => true, 'disabled' => true),
    ...
)); ?></pre>

</section>

<!-- Breadcrumbs
   ================================================== -->
<section id="breadcrumbs">

   <div class="page-header">
      <h1>Breadcrumbs</h1>
   </div>

   <div class="bs-docs-example">
      <?php echo TbHtml::breadcrumbs(array(
         'Home' => '#',
         'Library',
      )); ?>
      <?php echo TbHtml::breadcrumbs(array(
         'Home' => '#',
         'Library' => '#',
         'Data',
      ));   ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::breadcrumbs(array(
    'Home' => '#',
    'Library' => '#',
    'Data',
)); ?></pre>

</section>

<!-- Labels and badges
   ================================================== -->
<section id="labels-badges">

   <div class="page-header">
      <h1>Labels and badges</h1>
   </div>

   <h3>Labels</h3>

   <table class="table table-bordered table-striped">
      <thead>
      <tr>
         <th>Labels</th>
         <th>Code</th>
      </tr>
      </thead>
      <tbody>
      <tr>
         <td>
            <span class="label">Default</span>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::labelTb('Default'); ?></code>
         </td>
      </tr>
      <tr>
         <td>
            <?php echo TbHtml::labelTb('Success', array('color' =>  TbHtml::LABEL_COLOR_SUCCESS)); ?>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::labelTb('Success', array('color' =>  TbHtml::LABEL_COLOR_SUCCESS)); ?></code>
         </td>
      </tr>
      <tr>
         <td>
            <?php echo TbHtml::labelTb('Warning', array('color' =>  TbHtml::LABEL_COLOR_WARNING)); ?>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::labelTb('Warning', array('color' =>  TbHtml::LABEL_COLOR_WARNING)); ?></code>
         </td>
      </tr>
      <tr>
         <td>
            <?php echo TbHtml::labelTb('Important', array('color' =>  TbHtml::LABEL_COLOR_IMPORTANT)); ?>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::labelTb('Important', array('color' =>  TbHtml::LABEL_COLOR_IMPORTANT)); ?></code>
         </td>
      </tr>
      <tr>
         <td>
            <?php echo TbHtml::labelTb('Info', array('color' =>  TbHtml::LABEL_COLOR_INFO)); ?>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::labelTb('Info', array('color' =>  TbHtml::LABEL_COLOR_INFO)); ?></code>
         </td>
      </tr>
      <tr>
         <td>
            <?php echo TbHtml::labelTb('Inverse', array('color' =>  TbHtml::LABEL_COLOR_INVERSE)); ?>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::labelTb('Inverse', array('color' =>  TbHtml::LABEL_COLOR_INVERSE)); ?></code>
         </td>
      </tr>
      </tbody>
   </table>

   <h3>Badges</h3>

   <table class="table table-bordered table-striped">
      <thead>
      <tr>
         <th>Name</th>
         <th>Example</th>
         <th>Code</th>
      </tr>
      </thead>
      <tbody>
      <tr>
         <td>
            Default
         </td>
         <td>
            <?php echo TbHtml::badge('1'); ?>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::badge('1'); ?></code>
         </td>
      </tr>
      <tr>
         <td>
            Success
         </td>
         <td>
            <?php echo TbHtml::badge('2', array('color' =>  TbHtml::BADGE_COLOR_SUCCESS)); ?>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::badge('2', array('color' =>  TbHtml::BADGE_COLOR_SUCCESS)); ?></code>
         </td>
      </tr>
      <tr>
         <td>
            Warning
         </td>
         <td>
            <?php echo TbHtml::badge('4', array('color' =>  TbHtml::BADGE_COLOR_WARNING)); ?>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::badge('4', array('color' =>  TbHtml::BADGE_COLOR_WARNING)); ?></code>
         </td>
      </tr>
      <tr>
         <td>
            Important
         </td>
         <td>
            <?php echo TbHtml::badge('6', array('color' =>  TbHtml::BADGE_COLOR_IMPORTANT)); ?>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::badge('6', array('color' =>  TbHtml::BADGE_COLOR_IMPORTANT)); ?></code>
         </td>
      </tr>
      <tr>
         <td>
            Info
         </td>
         <td>
            <?php echo TbHtml::badge('8', array('color' =>  TbHtml::BADGE_COLOR_INFO)); ?>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::badge('8', array('color' =>  TbHtml::BADGE_COLOR_INFO)); ?></code>
         </td>
      </tr>
      <tr>
         <td>
            Inverse
         </td>
         <td>
            <?php echo TbHtml::badge('10', array('color' =>  TbHtml::BADGE_COLOR_INVERSE)); ?>
         </td>
         <td>
            <code>&lt;?php echo TbHtml::badge('10', array('color' =>  TbHtml::BADGE_COLOR_INVERSE)); ?></code>
         </td>
      </tr>
      </tbody>
   </table>

</section>

<!-- Typography
   ================================================== -->
<section id="typography">

   <div class="page-header">
      <h1>Typography</h1>
   </div>

   <h2>Hero unit</h2>

   <div class="bs-docs-example">
      <?php echo TbHtml::heroUnit('Hello, world!', '<p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>' . TbHtml::button('Learn more', array('color' => TbHtml::BUTTON_COLOR_PRIMARY, 'size' => TbHtml::BUTTON_SIZE_LARGE))); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::heroUnit('Hello, world!', '...'); ?></pre>

   <hr class="bs-docs-separator">

   <h2>Page header</h2>

   <div class="bs-docs-example">
      <?php echo TbHtml::pageHeader('Example page header', 'Subtext for header'); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php TbHtml::pageHeader('Example page header', 'Subtext for header'); ?></pre>

</section>

<!-- Thumbnails
   ================================================== -->
<section id="thumbnails">

   <?php $thumbnail = array(
      'image' => 'holder.js/260x180',
      'url' => '#',
   ); ?>

   <?php $captionThumbnail = array(
      'image' => 'holder.js/300x200',
      'label' => 'Thumbnail label',
      'caption' => '<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>' . TbHtml::button('Action',   array('color' => 'primary')) . ' ' . TbHtml::button('Action'),
   ); ?>

   <div class="page-header">
      <h1>Thumbnails
         <small>Grids of images, videos, text, and more</small>
      </h1>
   </div>

   <h2>Default thumbnails</h2>

   <div class="row-fluid">
      <?php echo TbHtml::thumbnails(array($thumbnail, $thumbnail, $thumbnail, $thumbnail)); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::thumbnails(array(
    array('image' => 'holder.js/260x180', 'url' => '#'),
    array('image' => 'holder.js/260x180', 'url' => '#'),
    array('image' => 'holder.js/260x180', 'url' => '#'),
    array('image' => 'holder.js/260x180', 'url' => '#'),
)); ?></pre>

   <hr class="bs-docs-separator">

   <h2>Thumbnails with caption</h2>

   <div class="row-fluid">
      <?php echo TbHtml::thumbnails(array($captionThumbnail, $captionThumbnail, $captionThumbnail), array('span' => 4)); ?>
   </div>

    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::thumbnails(array(
    array('image' => 'holder.js/300x200', 'label' => 'Thumbnail label', 'caption' => '...'),
    array('image' => 'holder.js/300x200', 'label' => 'Thumbnail label', 'caption' => '...'),
    array('image' => 'holder.js/300x200', 'label' => 'Thumbnail label', 'caption' => '...'),
), array('span' => 4)); ?></pre>

   <div>

   <hr class="bs-docs-separator">

   <h2>Different sizes</h2>

   <?php echo TbHtml::thumbnails(array(
      array('image' => 'holder.js/360x270', 'url' => '#', 'span' => 4),
      array('image' => 'holder.js/260x120', 'url' => '#', 'span' => 3),
      array('image' => 'holder.js/160x120', 'url' => '#', 'span' => 2),
      array('image' => 'holder.js/260x120', 'url' => '#', 'span' => 3),
      array('image' => 'holder.js/160x120', 'url' => '#', 'span' => 2),
   )); ?>

   </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::thumbnails(array(
    array('image' => 'holder.js/360x270', 'url' => '#', 'span' => 4),
    array('image' => 'holder.js/260x120', 'url' => '#', 'span' => 3),
    array('image' => 'holder.js/160x120', 'url' => '#', 'span' => 2),
    array('image' => 'holder.js/260x120', 'url' => '#', 'span' => 3),
    array('image' => 'holder.js/160x120', 'url' => '#', 'span' => 2),
)); ?>
    </pre>
</section>

<!-- Tooltips
================================================== -->
<section id="tooltips">

   <div class="page-header">
      <h1>Tooltips</h1>
   </div>

   <div class="bs-docs-example tooltip-demo">
      <p class="muted" style="margin-bottom: 0;">
         Tight pants next level keffiyeh
         <?php echo TbHtml::tooltip('you probably', '#', 'Default tooltip'); ?>
         haven't   heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan,   mcsweeney's fixie sustainable quinoa 8-bit american apparel
         <?php echo TbHtml::tooltip('have a', '#', 'Another tooltip'); ?>
         richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney's cleanse vegan chambray. A really ironic artisan
         <?php echo TbHtml::tooltip('whatever keytar', '#', 'Another one here too'); ?>
         , scenester farm-to-table banksy Austin twitter handle freegan cred raw denim single-origin coffee viral.
      </p>
   </div>

   <pre class="prettyprint linenums">
    Tight pants next level keffiyeh &lt;?php echo TbHtml::tooltip('you probably', '#', 'Default tooltip'); ?> haven\'t heard of them. Photo booth beard raw denim letterpress vegan messenger bag stumptown. Farm-to-table seitan, mcsweeney\'s fixie sustainable quinoa 8-bit american apparel &lt;?php echo TbHtml::tooltip('have a', '#', 'Another tooltip'); ?> richardson vinyl chambray. Beard stumptown, cardigans banh mi lomo thundercats. Tofu biodiesel williamsburg marfa, four loko mcsweeney\'s cleanse vegan chambray. A really ironic artisan &lt;?php echo TbHtml::tooltip('whatever keytar', '#', 'Another one here too'); ?>, scenester farm-to-table banksy Austin twitter handle freegan cred raw denim single-origin coffee viral.</pre>

   <h3>Four directions</h3>

   <div class="bs-docs-example tooltip-demo">
      <ul class="bs-docs-tooltip-examples">
         <li><?php echo TbHtml::tooltip('Tooltip on top', '#', 'Tooltip on top'); ?></li>
         <li><?php echo TbHtml::tooltip('Tooltip on right', '#', 'Tooltip on right', array('placement' => TbHtml::TOOLTIP_PLACEMENT_RIGHT)); ?></li>
         <li><?php echo TbHtml::tooltip('Tooltip on bottom', '#', 'Tooltip on bottom', array('placement' => TbHtml::TOOLTIP_PLACEMENT_BOTTOM)); ?></li>
         <li><?php echo TbHtml::tooltip('Tooltip on left', '#', 'Tooltip on left', array('placement' => TbHtml::TOOLTIP_PLACEMENT_LEFT)); ?></li>
      </ul>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::tooltip(...); ?>
&lt;?php echo TbHtml::tooltip(..., array('placement' => TbHtml::TOOLTIP_PLACEMENT_RIGHT)); ?>
&lt;?php echo TbHtml::tooltip(..., array('placement' => TbHtml::TOOLTIP_PLACEMENT_BOTTOM)); ?>
&lt;?php echo TbHtml::tooltip(..., array('placement' => TbHtml::TOOLTIP_PLACEMENT_LEFT)); ?></pre>

</section>

<!-- Popovers
================================================== -->
<section id="popovers">

   <div class="page-header">
      <h1>Popovers</h1>
   </div>

   <div class="bs-docs-example">
      <?php echo TbHtml::popover('Click to toggle popover', 'A Title', 'And here\'s some amazing content. It\'s very engaging. right?', array(
         'class' => 'btn btn-large btn-danger',
      )); ?>
   </div>

   <pre class="prettyprint linenums">
&lt?php echo TbHtml::popover('Click to toggle popover', 'A Title', '...', array(
    'class' => 'btn btn-large btn-danger',
)); ?></pre>

   <h3>Four directions</h3>

   <div class="bs-docs-example tooltip-demo">
      <ul class="bs-docs-tooltip-examples">
         <li><?php echo TbHtml::popover('Popover on top', 'Popover on top', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.', array('class' => 'btn', 'placement' => TbHtml::POPOVER_PLACEMENT_TOP)); ?></li>
         <li><?php echo TbHtml::popover('Popover on right', 'Popover on right', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.', array('class' => 'btn', 'placement' => TbHtml::POPOVER_PLACEMENT_RIGHT)); ?></li>
         <li><?php echo TbHtml::popover('Popover on bottom', 'Popover on bottom', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.', array('class' => 'btn', 'placement' => TbHtml::POPOVER_PLACEMENT_BOTTOM)); ?></li>
         <li><?php echo TbHtml::popover('Popover on left', 'Popover on left', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus.', array('class' => 'btn', 'placement' => TbHtml::POPOVER_PLACEMENT_LEFT)); ?></li>
      </ul>
   </div>

</section>

<!-- Alerts
   ================================================== -->
<section id="alerts">

   <div class="page-header">
      <h1>Alerts <small>Styles for success, warning, and error messages</small></h1>
   </div>

   <h2>Default alert</h2>

   <div class="bs-docs-example">
      <?php echo TbHtml::alert(TbHtml::ALERT_COLOR_WARNING, '<h4>Warning!</h4> Best check yo self, you\'re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.'); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::alert(TbHtml::ALERT_COLOR_WARNING, '...'); ?></pre>

   <hr class="bs-docs-separator">

   <h2>Block</h2>

   <div class="bs-docs-example">
      <?php echo TbHtml::blockAlert(TbHtml::ALERT_COLOR_WARNING, '<h4>Warning!</h4> Best check yo self, you\'re not looking too good. Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.'); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::blockAlert(TbHtml::ALERT_COLOR_WARNING, '...'); ?></pre>

   <hr class="bs-docs-separator">

   <h2>Contextual alternatives</h2>

   <h3>Error or danger</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, '<strong>Oh snap!</strong> Change a few things up and try submitting again.'); ?>
   </div>
   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::alert(TbHtml::ALERT_COLOR_ERROR, '...'); ?></pre>

   <h3>Success</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, '<strong>Well done!</strong> You successfully read this important alert message.'); ?>
   </div>
   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::alert(TbHtml::ALERT_COLOR_SUCCESS, '...'); ?></pre>

   <h3>Information</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::alert(TbHtml::ALERT_COLOR_INFO, '<strong>Heads up!</strong> This alert needs your attention, but it\'s not super important.'); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::alert(TbHtml::ALERT_COLOR_INFO, '...'); ?></pre>

</section>

<!-- Progress bars
   ================================================== -->
<section id="progress">

   <div class="page-header">
      <h1>Progress bars <small>For loading, redirecting, or action status</small></h1>
   </div>

   <h3>Basic</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::progressBar(60); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::progressBar(60); ?></pre>

   <h3>Striped</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::stripedProgressBar(20); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::stripedProgressBar(20); ?></pre>

   <h3>Animated</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::animatedProgressBar(40); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::animatedProgressBar(40); ?></pre>

   <h3>Stacked</h3>

   <div class="bs-docs-example">
      <?php echo TbHtml::stackedProgressBar(array(
         array('color' => TbHtml::PROGRESS_COLOR_SUCCESS, 'width' => 35),
         array('color' => TbHtml::PROGRESS_COLOR_WARNING, 'width' => 20),
         array('color' => TbHtml::PROGRESS_COLOR_DANGER, 'width' => 10),
      )); ?>
   </div>
   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::stackedProgressBar(array(
    array('color' => TbHtml::PROGRESS_COLOR_SUCCESS, 'width' => 35),
    array('color' => TbHtml::PROGRESS_COLOR_WARNING, 'width' => 20),
    array('color' => TbHtml::PROGRESS_COLOR_DANGER, 'width' => 10),
)); ?></pre>

</section>

<!-- Media object
   ================================================== -->
<section id="media">

   <div class="page-header">
      <h1>Media object</h1>
   </div>

   <h2>Default example</h2>

    <div class="bs-docs-example">
        <?php echo TbHtml::mediaObjects(array(
            array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'),
            array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.', 'items' => array(
                array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.'),
            )),
        )); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::mediaObjects(array(
    array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...'),
    array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...', 'items' => array(
        array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...'),
    )),
)); ?></pre>

    <hr class="bs-docs-separator">

    <h2>Media list</h2>

    <div class="bs-docs-example">
        <?php echo TbHtml::mediaObjects(array(
            array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', 'items' => array(
                array('image' => 'holder.js/64x64', 'heading' => 'Nested media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.', 'items' => array(
                    array('image' => 'holder.js/64x64', 'heading' => 'Nested media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.'),
                )),
                array('image' => 'holder.js/64x64', 'heading' => 'Nested media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.'),
            )),
            array('heading' => 'Media heading', 'content' => 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.'),
        )); ?>
    </div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::mediaObjects(array(
    array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...', 'items' => array(
        array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...', 'items' => array(
            array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...'),
        )),
        array('image' => 'holder.js/64x64', 'heading' => 'Media heading', 'content' => '...'),
    )),
    array('heading' => 'Media heading', 'content' => '...'),
)); ?></pre>

</section>

<!-- Carousel
   ================================================== -->
<section id="carousel">

   <div class="page-header">
      <h1>Carousel</h1>
   </div>

   <div class="bs-docs-example">
      <?php echo TbHtml::carousel(array(
         array('image' => 'holder.js/830x477', 'label' => 'First Thumbnail label', 'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
         array('image' => 'holder.js/830x477', 'label' => 'Second Thumbnail label', 'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
         array('image' => 'holder.js/830x477', 'label' => 'Third Thumbnail label', 'caption' => 'Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.'),
      )); ?>
   </div>

   <pre class="prettyprint linenums">
&lt;?php echo TbHtml::carousel(array(
    array('image' => 'holder.js/830x477', 'label' => 'First Thumbnail label', 'caption' => '...'),
    array('image' => 'holder.js/830x477', 'label' => 'Second Thumbnail label', 'caption' => '...'),
    array('image' => 'holder.js/830x477', 'label' => 'Third Thumbnail label', 'caption' => '...'),
)); ?></pre>

</section>


<!-- Miscellaneous
    ================================================== -->
<section id="misc">

	<div class="page-header">
		<h1>Miscellaneous</h1>
	</div>

	<h2>Wells</h2>

	<div class="bs-docs-example">
		<?php echo TbHtml::well('Look, I\'m in a well!'); ?>
	</div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::well('Look, I\'m in a well!'); ?></pre>

	<h3>Sizes</h3>

	<h4>Large</h4>

	<div class="bs-docs-example">
		<?php echo TbHtml::well('Look, I\'m in a well!', array('size' => TbHtml::WELL_SIZE_LARGE)); ?>
	</div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::well('Look, I\'m in a well!', array('size' => TbHtml::WELL_SIZE_LARGE)); ?></pre>

	<h4>Small</h4>

	<div class="bs-docs-example">
		<?php echo TbHtml::well('Look, I\'m in a well!', array('size' => TbHtml::WELL_SIZE_SMALL)); ?>
	</div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::well('Look, I\'m in a well!', array('size' => TbHtml::WELL_SIZE_SMALL)); ?></pre>

	<h2>Close icon</h2>

	<div class="bs-docs-example">
		<?php echo TbHtml::closeButton(TbHtml::CLOSE_TEXT, array('style' => 'float: none')); ?>
	</div>
    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::closeButton(); ?></pre>

    <pre class="prettyprint linenums">
&lt;?php echo TbHtml::closeLink(); ?></pre>

</section>

</div>
</div>

</div>