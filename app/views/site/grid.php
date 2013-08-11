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
			<li><a href="#gridview"><i class="icon-chevron-right"></i> Grid View</a></li>
			<li><a href="#extendedsummary"><i class="icon-chevron-right"></i> Extended Summaries</a></li>
			<li><a href="#gridswitch"><i class="icon-chevron-right"></i> Grid/Chart Switch</a></li>
			<li><a href="#groupgridview"><i class="icon-chevron-right"></i> Group Grid View</a></li>
			<li><a href="#detailview"><i class="icon-chevron-right"></i> DetailView</a></li>
			<li><a href="#editablecolumn"><i class="icon-chevron-right"></i> Editable Column</a></li>
			<li><a href="#imagecolumn"><i class="icon-chevron-right"></i> Image Column</a></li>
			<li><a href="#relationalcolumn"><i class="icon-chevron-right"></i> RelationalColumn</a></li>
			<li><a href="#toggle"><i class="icon-chevron-right"></i> Toggle Column</a></li>
		</ul>
	</div>
	<div class="span9">

	<!-- DetailView
	================================================== -->
	<section id="gridview">

		<div class="page-header">
			<h1>GridView
				<small>WhGridView.php</small>
			</h1>
		</div>
		<p>
			Yep, we have finally ported the extended grid view from a previous library we collaborated with :).
			The difference is that it also encapsulates the required libraries in its own assets folder and we
			removed some of the widgets we thought it was just... not good looking to tell you the truth.
		</p>

		<p>
			Nevertheless, do not worry too much. With <strong>WhGridView</strong> you will be able to do
			most of the stuff other extended gridviews do. By the way, if you wish to extend the grid, we
			propose you to do it through behaviors. This way, we will keep the class code cleaner and easier
			to read.
		</p>

		<h3>Fixed Headers and Responsive Table</h3>

		<p>
			Special thanks to <a target="_blank" href="https://github.com/jmosbech/StickyTableHeaders">StickyTableHeaders</a>
			for its great plugin so we can have sticky headers on our grids.
		</p>

		<p>
			Also, by setting <code>responsiveTable</code> property to <code>true</code>, the grid will be
			automatically resized to suit mobile size.
		</p>

		<div class="bs-docs-example">
			<?php $this->widget('yiiwheels.widgets.grid.WhGridView', array(
				'fixedHeader' => true,
				'headerOffset' => 40,
				'type' => 'striped',
				'dataProvider' => Person::getGridDataProvider(),
				'responsiveTable' => true,
				'template' => "{items}",
				'columns' => Person::getGridColumns(),
			)); ?>

		</div>

<pre class="prettyprint linenums">
&lt;?php $this-&gt;widget('yiiwheels.widgets.grid.WhGridView', array(
	'fixedHeader' =&gt; true,
	'headerOffset' =&gt; 40,
	'type' =&gt; 'striped',
	'dataProvider' =&gt; Person::getGridDataProvider(),
	'responsiveTable' =&gt; true,
	'template' =&gt; &quot;{items}&quot;,
	'columns' =&gt; Person::getGridColumns(),
)); ?&gt;
</pre>
		<h3>Fixed header with Filters</h3>

		<div class="bs-docs-example">
			<?php $this->widget('yiiwheels.widgets.grid.WhGridView', array(
				'filter' => new Person(),
				'fixedHeader' => true,
				'type' => 'striped bordered',
				'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
				'dataProvider' => Person::getGridDataProvider(),
				'template' => "{items}",
				'columns' => Person::getGridColumns(),
			)); ?>
		</div>

<pre class="prettyprint linenums">
$this->widget('yiiwheels.widgets.grid.WhGridView', array(
	'filter'=>$person,
	'fixedHeader' => true,
	'headerOffset' => 40, // 40px is the height of the main navigation at bootstrap
	'type'=>'striped bordered',
	'dataProvider' => $gridDataProvider,
	'template' => "{items}",
	'columns' => $gridColumns,
));
</pre>

	</section>
	<!-- extendedgridview nav
  ================================================== -->
	<section id="extendedsummary">
	<h2>Extended Summaries</h2>

	<p>
		We ported all the summaries from the old library. We still think they are great and cool way to display
		extra grid information.
	</p>
	<table class="table table-bordered table-striped">
		<thead>
		<tr>
			<th>Name</th>
			<th>Description</th>
		</tr>
		</thead>
		<tbody>
		<tr>
			<td><strong>WhSumOperation</strong></td>
			<td>Will display the sum of an specific column</td>
		</tr>
		<tr>
			<td><strong>WhCountOfTypeOperation</strong></td>
			<td>Displays the number of times a type of value appears in the specified column cell (ie. total of
				zeros, total
				of ones).
			</td>
		</tr>
		<tr>
			<td><strong>WhPercentOfTypeOperation</strong></td>
			<td>Displays the percent number of times a type of value appears in the specified column cell (ie.
				percent of
				zeros, percent of ones)
			</td>
		</tr>
		<tr>
			<td><strong>WhPercentOfTypeEasyPieOperation</strong></td>
			<td>
				Displays the percent number of times a type of value appears in the specified column cell on
				<strong>pie</strong> charts. The handling of
				its display is taken care by the nice jquery plugin
				<a targe="_blank" href="https://github.com/rendro/easy-pie-chart">easy-pie-chart</a>.
			</td>
		</tr>
		<tr>
			<td><strong>WhPercentOfTypeGooglePieOperation</td>
			<td>
				Well, you guessed right. It is the same operation as <code>TbPercentOfTypeEasyPieOperation</code>
				but with the difference that this pie is more powerful as it can render
				a single pie to display the summary results.
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<span class="label label-warning">Important!</span> when using charts you may need to check browser
				compatibility. As you know, most of these plugins do
				use canvas for their rendering.
			</td>
		</tr>
		</tbody>
	</table>

	<h3>Examples</h3>
	<h4>Sum Operation
		<small>WhSumOperation</small>
	</h4>

	<div class="bs-docs-example">
		<?php $this->widget('yiiwheels.widgets.grid.WhGridView', array(
			'filter' => null,
			'type' => 'striped bordered',
			'dataProvider' => Person::getGridDataProvider(),
			'template' => "{items}\n{extendedSummary}",
			'columns' => Person::getGridColumns(),
			'extendedSummary' => array(
				'title' => 'Total Employee Hours',
				'columns' => array(
					'hours' => array(
						'label' => 'Total Hours',
						'class' => 'yiiwheels.widgets.grid.operations.WhSumOperation'
					)
				)
			),
			'extendedSummaryOptions' => array(
				'class' => 'well pull-right',
				'style' => 'width:300px'
			),
		)); ?>
		<div style="clear:both"></div>
	</div>
<pre class="prettyprint linenums">
$this->widget('yiiwheels.widgets.grid.WhGridView', array(
	'filter'=>$person,
	'type'=>'striped bordered',
	'dataProvider' => $gridDataProvider,
	'template' => "{items}\n{extendedSummary}",
	'columns' => $gridColumns,
	'extendedSummary' => array(
	'title' => 'Total Employee Hours',
	'columns' => array(
	'hours' => array(
		'label'=>'Total Hours',
		'class'=>'yiiwheels.widgets.grid.operations.WhSumOperation'
	),
	'extendedSummaryOptions' => array(
		'class' => 'well pull-right',
		'style' => 'width:300px'
	),
));
</pre>

	<h4>Count of types operation
		<small>WhCountOfTypeOperation</small>
	</h4>

	<div class="bs-docs-example">
		<?php $this->widget('yiiwheels.widgets.grid.WhGridView', array(
			'filter' => null,
			'type' => 'striped bordered',
			'dataProvider' => Person::getGridDataProvider(),
			'template' => "{items}\n{extendedSummary}",
			'columns' => Person::getGridColumns(),
			'extendedSummary' => array(
				'title' => 'Expertise',
				'columns' => array(
					'language' => array(
						'label' => 'Total Expertise',
						'types' => array(
							'CSS' => array('label' => 'Css'),
							'JavaScript' => array('label' => 'Js'),
							'HTML' => array('label' => 'html')
						),
						'class' => 'yiiwheels.widgets.grid.operations.WhCountOfTypeOperation'
					)
				)
			),
			'extendedSummaryOptions' => array(
				'class' => 'well pull-right',
				'style' => 'width:300px'
			),
		)); ?>
		<div style="clear:both"></div>
	</div>
<pre class="prettyprint linenums">
$this->widget('yiiwheels.widgets.grid.WhGridView', array(
    'filter'=>null,
    'type'=>'striped bordered',
    'dataProvider' => Person::getGridDataProvider(),
    'template' => "{items}\n{extendedSummary}",
    'columns' => Person::getGridColumns(),
    'extendedSummary' => array(
        'title' => 'Expertise',
        'columns' => array(
	        'language' => array(
		        'label'=>'Total Expertise',
		        'types' => array(
			        'CSS'=>array('label'=>'Css'),
			        'JavaScript'=>array('label'=>'Js'),
			        'HTML'=>array('label'=>'html')
		        ),
		        'class'=>'yiiwheels.widgets.grid.operations.WhCountOfTypeOperation'
	        )
        )
    ),
    'extendedSummaryOptions' => array(
        'class' => 'well pull-right',
        'style' => 'width:300px'
    ),
));
</pre>
	<h4>Percent of type operation
		<small>WhPercentOfTypeOperation</small>
	</h4>

	<div class="bs-docs-example">
		<?php $this->widget('yiiwheels.widgets.grid.WhGridView', array(
			'type' => 'striped bordered',
			'dataProvider' => Person::getGridDataProvider(),
			'template' => "{items}\n{extendedSummary}",
			'columns' => Person::getGridColumns(),
			'extendedSummary' => array(
				'title' => 'Expertise',
				'columns' => array(
					'language' => array(
						'label' => 'Total Expertise',
						'types' => array(
							'CSS' => array('label' => 'Css'),
							'JavaScript' => array('label' => 'Js'),
							'HTML' => array('label' => 'html')
						),
						'class' => 'yiiwheels.widgets.grid.operations.WhPercentOfTypeOperation'
					)
				)
			),
			'extendedSummaryOptions' => array(
				'class' => 'well pull-right',
				'style' => 'width:400px'
			),
		)); ?>
		<div style="clear:both"></div>
	</div>
<pre class="prettyprint linenums">
$this->widget('yiiwheels.widgets.grid.WhGridView', array(
    'type'=>'striped bordered',
    'dataProvider' => $gridDataProvider,
    'template' => "{items}\n{extendedSummary}",
    'columns' => $gridColumns,
    'extendedSummary' => array(
        'title' => 'Expertise',
        'columns' => array(
	        'language' => array(
		        'label'=>'Total Expertise',
		        'types' => array(
			        'CSS'=>array('label'=>'Css'),
			        'JavaScript'=>array('label'=>'Js'),
			        'HTML'=>array('label'=>'html')
		        ),
		        'class'=>'yiiwheels.widgets.grid.operations.WhPercentOfTypeOperation'
	        )
        )
    ),
    'extendedSummaryOptions' => array(
        'class' => 'well pull-right',
        'style' => 'width:400px'
    ),
));
</pre>
	<h4>Percent of type EasyPie operation
		<small>WhPercentOfTypeEasyPieOperation</small>
	</h4>

	<div class="bs-docs-example">
		<?php $this->widget('yiiwheels.widgets.grid.WhGridView', array(
			'type' => 'striped bordered',
			'dataProvider' => Person::getGridDataProvider(),
			'template' => "{items}\n{extendedSummary}",
			'columns' => Person::getGridColumns(),
			'extendedSummary' => array(
				'title' => 'Expertise',
				'columns' => array(
					'language' => array(
						'label' => 'Total Expertise',
						'types' => array(
							'CSS' => array('label' => 'Css'),
							'JavaScript' => array('label' => 'Js'),
							'HTML' => array('label' => 'html')
						),
						'class' => 'yiiwheels.widgets.grid.operations.WhPercentOfTypeEasyPieOperation',
						'chartOptions' => array(
							'barColor' => '#333',
							'trackColor' => '#999',
							'lineWidth' => 8,
							'lineCap' => 'square'
						)
					),

				)
			),
			'extendedSummaryOptions' => array(
				'class' => 'well pull-right',
				'style' => 'width:350px'
			),
		)); ?>
		<div style="clear:both"></div>
	</div>
<pre class="prettyprint linenums">
$this->widget('yiiwheels.widgets.grid.WhGridView', array(
    'type'=>'striped bordered',
    'dataProvider' => Person::getGridDataProvider(),
    'template' => "{items}\n{extendedSummary}",
    'columns' => Person::getGridColumns(),
    'extendedSummary' => array(
        'title' => 'Expertise',
        'columns' => array(
	        'language' => array(
		        'label'=>'Total Expertise',
		        'types' => array(
			        'CSS'=>array('label'=>'Css'),
			        'JavaScript'=>array('label'=>'Js'),
			        'HTML'=>array('label'=>'html')
		        ),
		        'class'=>'yiiwheels.widgets.grid.operations.WhPercentOfTypeEasyPieOperation',
		        // you can also configure how the chart looks like
		        'chartOptions' => array(
				'barColor' => '#333',
				'trackColor' => '#999',
				'lineWidth' => 8 ,
				'lineCap' => 'square'
		        )
	        )
        )
    ),
    'extendedSummaryOptions' => array(
        'class' => 'well pull-right',
        'style' => 'width:350px'
    ),
))
</pre>
	<h4>Percent of type google pie operation
		<small>WhPercentOfTypeGooglePieOperation</small>
	</h4>

	<div class="bs-docs-example">
		<?php $this->widget('yiiwheels.widgets.grid.WhGridView', array(
			'type' => 'striped bordered',
			'dataProvider' => Person::getGridDataProvider(),
			'template' => "{items}\n{extendedSummary}",
			'columns' => Person::getGridColumns(),
			'extendedSummary' => array(
				'title' => 'Expertise',
				'columns' => array(
					'language' => array(
						'label' => 'Total Expertise',
						'types' => array(
							'CSS' => array('label' => 'Css'),
							'JavaScript' => array('label' => 'Js'),
							'HTML' => array('label' => 'html')
						),
						'class' => 'yiiwheels.widgets.grid.operations.WhPercentOfTypeGooglePieOperation',
						'chartOptions' => array('title' => 'Now, thats cool!')
					),
				)
			),
			'extendedSummaryOptions' => array(
				'class' => 'well pull-right',
				'style' => 'width:250px'
			),
		)); ?>
		<div style="clear:both"></div>
	</div>
<pre class="prettyprint linenums">
$this->widget('yiiwheels.widgets.grid.WhGridView', array(
    'type'=>'striped bordered',
    'dataProvider' =>  Person::getGridDataProvider(),
    'template' => "{items}\n{extendedSummary}",
    'columns' => Person::getGridColumns(),
    'extendedSummary' => array(
        'title' => 'Expertise',
        'columns' => array(
	        'language' => array(
		        'label'=>'Total Expertise',
		        'types' => array(
			        'CSS'=>array('label'=>'Css'),
			        'JavaScript'=>array('label'=>'Js'),
			        'HTML'=>array('label'=>'html')
		        ),
		        'class'=>'yiiwheels.widgets.grid.operations.WhPercentOfTypeGooglePieOperation',
	        )
        )
    ),
    'extendedSummaryOptions' => array(
        'class' => 'well pull-right',
        'style' => 'width:300px'
    ),
))
</pre>
	<hr class="bs-docs-separator">
	</section>
	<!-- gridswitch nav
					 ================================================== -->
	<section id="gridswitch">
		<h2>The Grid/Chart switcher
			<small>WhChart Behavior</small>
		</h2>
		<p>
			There will be times, where you wish to see a bit more details on a graphic than just those values on a
			pie chart. <strong>WhGridView</strong> aims to provide an easy to configure chart display, where
			the data is automatically extracted from its dataProvider.
		</p>

		<p>
			The way it works, is that you set a couple of configuration options of the <code>chartOptions</code>
			property
			and thats it. The grid will automatically display a chart by making use of the great
			<a target="_blank" href="http://www.highcharts.com/">Higcharts JS</a> library by using
			<code>WhHighCharts</code>.
			We highly recommend you to get familiar with this library if you are going to make use of this feature.
		</p>

		<p>
			The <code>chartOptions</code> property is a configurable chart array with three elements:
		<ul>
			<li><code>data</code>, which will contain the <code>series</code> attribute of <strong>Highcharts
					JS</strong>
			</li>
			<li><code>config</code>, will hold the rest of <a target="_blank"
															  href="http://api.highcharts.com/highcharts">the
					chart configuration options</a></li>
			<li><code>htmlOptions</code>, the HTML tag attributes of the chart container.</li>
		</ul>
		<span class="label label-important">
			Important!</span> the <code>style</code> and <code>data-config</code> attributes
			of the container will be overrided, as they are required for the correct functionality of the chart.
		</p>
		<p>
			<span class="label label-important">Important</span>: Highcharts JS is not open source for commercial
			products.
			Maybe you create a new behavior that makes use of another chart library? :)</p>

		<h3>Example</h3>

		<div class="bs-docs-example">
			<?php $this->widget('yiiwheels.widgets.grid.WhGridView', array(
				'type' => 'striped bordered',
				'dataProvider' => Person::getGridDataProvider(),
				'template' => "{items}\n{extendedSummary}",
				'columns' => Person::getGridColumns(),
				'chartOptions' => array(
					'data' => array(
						'series' => array(
							array(
								'name' => 'Hours worked',
								'attribute' => 'hours'
							)
						)
					),
					'config' => array(
						'chart' => array(
							'width' => 800
						)
					)
				),
			)); ?>
			<div style="clear:both"></div>
		</div>
<pre class="prettyprint linenums">
$this->widget('yiiwheels.widgets.grid.WhGridView', array(
    'type'=>'striped bordered',
    'dataProvider' => Person::getGridDataProvider(),
    'template' => "{items}\n{extendedSummary}",
    'columns' => Person::getGridColumns(),
    'chartOptions' => array(
        'data' => array(
            'series' => array(
                array(
	                'name' => 'Hours worked',
	                'attribute' => 'hours'
                )
            )
        ),
        'config' => array(
            'chart'=>array(
                'width'=>800
            )
        )
    ),
));
</pre>
		<hr class="bs-docs-separator">
	</section>

	<!-- groupgridview nav
					 ================================================== -->
	<section id="groupgridview">
		<h2>Group Grid View <small>WhGroupGridView.php</small></h2>

		<p>
			We also included Vitaliy Potapov's BootGroupView,
			<a target="_blank" href="http://groupgridview.demopage.ru/">BootGroupView</a> grid,
			to provide our library with a grid that features row and cell merging and/or grouping.
		</p>
		<p>
			It is not the original but a modified version.
		</p>

		<h3>Examples</h3>
		<strong>Merge in one column</strong>

		<div class="bs-docs-example">
			<?php
			$this->widget('yiiwheels.widgets.grid.WhGroupGridView', array(
				'type' => 'striped bordered',
				'dataProvider' => Person::getGridDataProvider(),
				'template' => "{items}",
				'columns' => Person::getGridColumns(),
				'mergeColumns' => array('language')
			)); ?>
			<div style="clear:both"></div>
		</div>
<pre class="prettyprint linenums">
$this->widget('yiiwheels.widgets.grid.WhGroupGridView', array(
	'type' => 'striped bordered',
	'dataProvider' => Person::getGridDataProvider(),
	'template' => "{items}",
	'columns' => Person::getGridColumns(),
	'mergeColumns' => array('language')
));
</pre>
		<strong>Merge in two columns</strong>

		<div class="bs-docs-example">
			<?php
			$this->widget('yiiwheels.widgets.grid.WhGroupGridView', array(
				'type' => 'striped bordered',
				'dataProvider' => Person::getGridDataProvider(),
				'template' => "{items}",
				'columns' => Person::getGridColumns(),
				'mergeColumns' => array('language', 'hours')
			)); ?>
			<div style="clear:both"></div>
		</div>
<pre class="prettyprint linenums">
$this->widget('yiiwheels.widgets.grid.WhGroupGridView', array(
	'type' => 'striped bordered',
	'dataProvider' => Person::getGridDataProvider(),
	'template' => "{items}",
	'columns' => Person::getGridColumns(),
	'mergeColumns' => array('language', 'hours')
));
</pre>
		<strong>Extra Row</strong>

		<div class="bs-docs-example">
			<?php
			$groupGridColumns = Person::getGridColumns();
			$groupGridColumns[] = array(
				'name' => 'firstLetter',
				'value' => 'substr($data->firstName, 0, 1)',
				'headerHtmlOptions' => array('style' => 'display:none'),
				'htmlOptions' => array('style' => 'display:none')
			);

			$this->widget('yiiwheels.widgets.grid.WhGroupGridView', array(
				'type' => 'striped bordered',
				'dataProvider' => Person::getGridDataProvider(),
				'template' => "{items}",
				'extraRowColumns' => array('firstLetter'),
				'extraRowExpression' => '"<b style=\"font-size: 3em; color: #333;\">".substr($data->firstName, 0, 1)."</b>"',
				'extraRowHtmlOptions' => array('style' => 'padding:10px'),
				'columns' => $groupGridColumns
			)); ?>
			<div style="clear:both"></div>
		</div>
<pre class="prettyprint linenums">
&lt;?php
$groupGridColumns = Person::getGridColumns();
$groupGridColumns[] = array(
	'name' =&gt; 'firstLetter',
	'value' =&gt; 'substr($data-&gt;firstName, 0, 1)',
	'headerHtmlOptions' =&gt; array('style' =&gt; 'display:none'),
	'htmlOptions' =&gt; array('style' =&gt; 'display:none')
);

$this-&gt;widget('yiiwheels.widgets.grid.WhGroupGridView', array(
	'type' =&gt; 'striped bordered',
	'dataProvider' =&gt; Person::getGridDataProvider(),
	'template' =&gt; &quot;{items}&quot;,
	'extraRowColumns' =&gt; array('firstLetter'),
	'extraRowExpression' =&gt;
		'&quot;&lt;b style=&quot;font-size: 3em; color: #333;&quot;&gt;&quot;.substr($data-&gt;firstName, 0, 1).&quot;&lt;/b&gt;&quot;',
	'extraRowHtmlOptions' =&gt; array('style' =&gt; 'padding:10px'),
	'columns' =&gt; $groupGridColumns
)); ?&gt;
</pre>
		<strong>Extra Row + Merge</strong>

		<div class="bs-docs-example">
			<?php
			$groupGridColumns = Person::getGridColumns();
			$groupGridColumns[] = array(
				'name' => 'firstLetter',
				'value' => 'substr($data->firstName, 0, 1)',
				'headerHtmlOptions' => array('style' => 'display:none'),
				'htmlOptions' => array('style' => 'display:none')
			);

			$this->widget('yiiwheels.widgets.grid.WhGroupGridView', array(
				'type' => 'striped bordered',
				'dataProvider' => Person::getGridDataProvider(),
				'template' => "{items}",
				'extraRowColumns' => array('firstLetter'),
				'extraRowExpression' => '"<b style=\"font-size: 3em; color: #333;\">".substr($data->firstName, 0, 1)."</b>"',
				'extraRowHtmlOptions' => array('style' => 'padding:10px'),
				'columns' => $groupGridColumns,
				'mergeColumns' => array('hours')
			)); ?>
			<div style="clear:both"></div>
		</div>
<pre class="prettyprint linenums">
&lt;?php
$groupGridColumns = Person::getGridColumns();
$groupGridColumns[] = array(
	'name' =&gt; 'firstLetter',
	'value' =&gt; 'substr($data-&gt;firstName, 0, 1)',
	'headerHtmlOptions' =&gt; array('style' =&gt; 'display:none'),
	'htmlOptions' =&gt; array('style' =&gt; 'display:none')
);

$this-&gt;widget('yiiwheels.widgets.grid.WhGroupGridView', array(
	'type' =&gt; 'striped bordered',
	'dataProvider' =&gt; Person::getGridDataProvider(),
	'template' =&gt; &quot;{items}&quot;,
	'extraRowColumns' =&gt; array('firstLetter'),
	'extraRowExpression' =&gt;
	'&quot;&lt;b style=&quot;font-size: 3em; color: #333;&quot;&gt;&quot;.substr($data-&gt;firstName, 0, 1).&quot;&lt;/b&gt;&quot;',
	'extraRowHtmlOptions' =&gt; array('style' =&gt; 'padding:10px'),
	'columns' =&gt; $groupGridColumns,
	'mergeColumns' =&gt; array('hours')
)); ?&gt;
</pre>
		<hr class="bs-docs-separator">
	</section>


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
					'data' => array(
						'id' => 1,
						'firstName' => 'Mark',
						'lastName' => 'Otto',
						'language' => 'CSS'
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
		<hr class="bs-docs-separator">
	</section>

	<!-- EditableColumn
			================================================== -->
	<section id="editablecolumn">
		<h2>WhEditableColumn</h2>

		<p>
			Added the
			<a targer="_blank" href="http://ybe.demopage.ru/#EditableColumn">EditableColumn</a> widget from
			<a target="_blank" href="http://www.yiiframework.com/user/56359/">Vitaliy Potapov</a>.
		</p>

<pre class="prettyprint linenums">
$this->widget('yiiwheels.widgets.grid.WhGridView', array(
	'type' => 'striped bordered',
	'dataProvider' => Person::getGridDataProvider(),
	'template' => "{items}",
	'columns' => array(
		'country_code',
		array(
			'class' => 'yiiwheels.widgets.editable.WhEditableColumn',
			'name' => 'name',
			'sortable'=>false,
			'editable' => array(
				'url' => $this->createUrl('site/editable'),
				'placement' => 'right',
				'inputclass' => 'span3'
			)
		)),
));
</pre>
	</section>
	<!-- ImageColumn
			================================================== -->
	<section id="imagecolumn">

		<div class="page-header">
			<h1>Image Column
				<small>WhImageColumn.php</small>
			</h1>
		</div>

		<p>
			Display an image on your grid. In order to display an image related to the data provider of the grid, you set
			its <code>imagePathExpression</code>. The expression string will have the following variables passed to it:
			<strong>$row</strong> (the row number), <strong>$data</strong> (the data module of the row) and
			<strong>$this</strong> (the column object).
		</p>


		<div class="bs-docs-example">
			<?php $this->widget('yiiwheels.widgets.grid.WhGridView', array(
				'type' => 'striped bordered',
				'dataProvider' => Person::getGridDataProvider(),
				'template' => "{items}",
				'columns' => array_merge(
					array(
						array('class' => 'yiiwheels.widgets.grid.WhImageColumn', 'htmlOptions' => array('class' => 'span1'))
					), Person::getGridColumns()),
			)); ?>
			<div style="clear:both"></div>
		</div>
<pre class="prettyprint linenums">
$this->widget('yiiwheels.widgets.grid.WhGridView', array(
    'type'=>'striped bordered',
    'dataProvider' => Person::getGridDataProvider(),
    'template' => "{items}",
    'columns' => array_merge(
	array(
		array(
		'class' => 'yiiwheels.widgets.grid.WhImageColumn',
		'htmlOptions' => array('class' => 'span1'))
	), Person::getGridColumns()),
));
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

		<p>
			Display relational data or extra info from an ajax call into a dynamically created sub-row. This column
			is thought in order to display sub-grids or a more extended information about a model. The
			<code>TbPickerColumn</code> has a
			similar behavior but the amount of information that we can display is a less that with
			<code>TbRelationalColumn</code>.
		</p>

		<p>
			<span class="label label-important">Important</span>: Do not use this type of column to display a link. It is
			recommended to work with css classes instead to change the style of its contents.
		</p>

		<div class="bs-docs-example">
			<?php
			Yii::app()->getComponent('yiiwheels')->registerAssetJs('bootbox.min.js');
			$this->widget('yiiwheels.widgets.grid.WhGridView', array(
				'type' => 'striped bordered',
				'dataProvider' => Person::getGridDataProvider(),
				'template' => "{items}",
				'columns' => array_merge(array(
					array(
						'class' => 'yiiwheels.widgets.grid.WhRelationalColumn',
						'name' => 'subGrid',
						'url' => $this->createUrl('site/relational'),
						'value' => '"test-subgrid"',
						'afterAjaxUpdate' => 'js:function(tr,rowid,data){
				                bootbox.alert("I have afterAjax events too!<br/>This will only happen once for row with id: "+rowid);
				            }'
					)
				), Person::getGridColumns()),
			)); ?>
			<div style="clear:both"></div>
		</div>

		<pre class="prettyprint linenums">
&lt;?php
Yii::app()-&gt;getComponent('yiiwheels')-&gt;registerAssetJs('bootbox.min.js');
$this-&gt;widget('yiiwheels.widgets.grid.WhGridView', array(
	'type' =&gt; 'striped bordered',
	'dataProvider' =&gt; Person::getGridDataProvider(),
	'template' =&gt; &quot;{items}&quot;,
	'columns' =&gt; array_merge(array(
		array(
		'class' =&gt; 'yiiwheels.widgets.grid.WhRelationalColumn',
		'name' =&gt; 'subGrid',
		'url' =&gt; $this-&gt;createUrl('site/relational'),
		'value' =&gt; '&quot;test-subgrid&quot;',
		'afterAjaxUpdate' =&gt; 'js:function(tr,rowid,data){
			bootbox.alert(&quot;I have afterAjax events too!&lt;br/&gt;This will only happen once for row with id: &quot;+rowid);
		}'
		)
	), Person::getGridColumns()),
)); ?&gt;
		</pre>
	</section>

	<!-- Toggle
	================================================== -->
	<section id="toggle">

		<div class="page-header">
			<h1>ToggleColumn
				<small>WhToggleColumn.php</small>
			</h1>
		</div>

		<p>
			Allows to modify the value of column on the fly. This type of column is good when you wish to modify the value of
			a displayed model that has two states: yes-no, true-false, 1-0, etc...
		</p>
		<p>
			The widget works in conjunction with an action that will receive the <code>id</code> and the <code>attribute</code>
			parameters. <code>YiiWheels</code> comes with an action ready to use for that purpose: <code>WhToggleAction</code>
			(check on <code>yiiwheels.widgets.grid.actions.WhToggleAction</code>).
		</p>

		<p>
			<span class="label label-info">Heads up!</span> the following example is not updating the status because
			we are not using a CActiveRecord (not yet) just shows how nicely it renders.
		</p>

		<div class="bs-docs-example">
			<?php $this->widget('bootstrap.widgets.TbGridView', array(
					'type' => 'striped bordered',
					'dataProvider' => Person::getGridDataProvider(),
					'template' => "{items}",
					'columns' => array(
						array('name' => 'firstName', 'header' => 'First Name'),
						array('name' => 'lastName', 'header' => 'Last Name'),
						array(
							'class'=>'yiiwheels.widgets.grid.WhToggleColumn',
							'toggleAction'=>'site/toggle',
							'name' => 'status',
							'header' => 'Toggle'
						),
					)
				)
			); ?>
			<div style="clear:both"></div>
		</div>

		<pre class="prettyprint linenums">
// On the controller
public function actions()
{
	return array(
		'toggle' =&gt; array(
			'class'=&gt;'yiiwheels.widgets.toggle.WhToggleAction',
			'modelName' =&gt; 'Person',
		)
	);
}
// -----------
// On the grid:
$this-&gt;widget('bootstrap.widgets.TbGridView', array(
	'type' =&gt; 'striped bordered',
	'dataProvider' =&gt; Person::getGridDataProvider(),
	'template' =&gt; &quot;{items}&quot;,
	'columns' =&gt; array(
		array('name' =&gt; 'firstName', 'header' =&gt; 'First Name'),
		array('name' =&gt; 'lastName', 'header' =&gt; 'Last Name'),
		array(
			'class'=&gt;'yiiwheels.widgets.toggle.WhToggleColumn',
			'toggleAction'=&gt;'site/toggle', // contoller/action
			'name' =&gt; 'status',
			'header' =&gt; 'Toggle'
		),
	)
));
		</pre>

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
