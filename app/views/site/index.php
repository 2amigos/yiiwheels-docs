<?php
/* @var SiteController $this */
$this->pageTitle = param('pageTitle');
?>
<div class="jumbotron masthead">
    <div class="container">
        <h1>Wheels</h1>

        <p>Extension Library for Yiistrap</p>

        <!--<p><a href="https://github.com/Crisu83/yiistrap/archive/master.zip" class="btn btn-inverse btn-large"
              onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Download', 'Download 1.0.0']);">Download
                Yiiwheels</a></p>-->
        <ul class="masthead-links">
            <li><a href="https://github.com/2amigos/yiiwheels"
                   onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Jumbotron links', 'GitHub project']);">GitHub
                    project</a></li>
            <!--<li>Version 1.0.0 BETA</li>-->
        </ul>
    </div>
</div>

<div class="bs-docs-social">
    <div class="container">
        <ul class="bs-docs-social-buttons">
			<li>
				<iframe width="85" height="20" src="http://ghbtns.com/github-btn.html?user=2amigos&repo=yiiwheels&type=watch&count=true" frameborder="0" scrolling="0" allowtransparency="true"></iframe>
				<iframe width="95" height="20" src="http://ghbtns.com/github-btn.html?user=2amigos&repo=yiiwheels&type=fork&count=true" frameborder="0" scrolling="0" allowtransparency="true"></iframe>
			</li>
            <li>
                <a href="https://twitter.com/tonydspaniard" class="twitter-follow-button" data-align="right" data-width="233px" data-show-count="true">Follow @tonydspaniard</a>
			</li>
			<li>
                <a href="https://twitter.com/MhTabin" class="twitter-follow-button" data-align="right" data-width="196px" data-show-count="true">Follow @matt</a>
            </li>
			<li class="add-this">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
					<a class="addthis_button_twitter"></a>
					<a class="addthis_button_facebook"></a>
					<a class="addthis_button_google"></a>
					<a class="addthis_button_compact"></a>
					<a class="addthis_counter addthis_bubble_style"></a>
				</div>
				<!-- AddThis Button END -->
			</li>
        </ul>
    </div>
</div>
<script>!function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;

            js.src = "//platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
        }
    }(document, "script", "twitter-wjs");</script>
<script type="text/javascript">var addthis_config = {"data_track_addressbar":true};</script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4f362fc83fc39768"></script>
<div class="container">

    <div class="marketing">

        <h1>Introducing Yii Wheels</h1>

        <p class="marketing-byline">Wheels is an extension library for the Yiistrap extension.</p>

        <div class="row-fluid">
            <div class="span12">
                <p style="text-align:justify">
                    Yii Wheels has been totally rebuilded from ground up. It differs from YiiBooster (its ancestor) in a way that widgets are isolated in folders (better maintenance) and also their assets.
                    YiiBooster used to register all required assets at once, and developers realized that it was very slow compared to Yii-Bootstrap. With YiiWheels, you register what you need, nothing else, nothing more.
                </p>
            </div>
        </div>
    </div>
</div>