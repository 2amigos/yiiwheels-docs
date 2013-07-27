<?php
/* @var SiteController $this */
$this->pageTitle = param('pageTitle');
?>
<div class="jumbotron masthead">
    <div class="container">
        <h1><img src="<?php echo $this->baseUrl('/images/trasparentCentre.png');?>"></h1>
        <p>Extension Library for Yiistrap</p>

        <p><a href="https://github.com/2amigos/yiiwheels/archive/master.zip" class="btn btn-inverse btn-large"
              onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Download', 'Download 1.0.0']);">Download
                Yiiwheels</a></p>
        <ul class="masthead-links">
            <li><a href="https://github.com/2amigos/yiiwheels"
                   onclick="_gaq.push(['_trackEvent', 'Jumbotron actions', 'Jumbotron links', 'GitHub project']);">GitHub
                    project</a></li>
            <li>Version 1.0.0</li>
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
<!-- AddThis Smart Layers BEGIN -->
<!-- Go to http://www.addthis.com/get/smart-layers to customize -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid="></script>
<script type="text/javascript">
    addthis.layers({
        'theme' : 'transparent',
        'share' : {
            'position' : 'left',
            'numPreferredServices' : 5
        },
        'whatsnext' : {},
        'recommended' : {
            'title': 'Recommended for you:'
        }
    });
</script>
<!-- AddThis Smart Layers END -->
<div class="container">

    <div class="marketing">

        <h1>Introducing Yii Wheels</h1>

        <p class="marketing-byline">Wheels is an extension library for the Yiistrap extension.</p>

        <div class="row-fluid">
            <div class="span12">
                <p style="text-align:justify">
      Yii Wheels has been completely rebuilt from ground up. It differs from its predecessor, YiiBooster, in that widgets and their assets are isolated in their own folders; which promotes better and easier maintenance.
                    YiiBooster had to register all its required assets at the once, and developers soon realized that this slowed things down, as compared to Yii-Bootstrap's performance. Now, with YiiWheels, you register only what you need, when you need it, nothing else, nothing more. Simple, but elegant.
                </p>
            </div>
        </div>
    </div>
</div>
