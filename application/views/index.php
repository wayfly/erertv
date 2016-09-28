<!DOCTYPE html>
<html class="js cssanimations">
<head lang="zh">
	<meta charset="UTF-8"/>
	<title>erertv</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="format-detection" content="telephone=no"/>
	<meta name="renderer" content="webkit"/>
	<meta http-equiv="Cache-Control" content="no-siteapp"/>
	<link rel="alternate icon" type="image/x-icon" href="{{ URL::asset('favicon.ico') }}"/>
	<link rel="stylesheet" href="http://127.0.0.1/erertv/bootstrap/css/amazeui.min.css"/>
	<link media="all" type="text/css" rel="stylesheet" href="http://127.0.0.1/erertv/bootstrap/css/custom.css"/>
</head>
<body class="am-with-topbar-fixed-top">
<header class="am-topbar am-topbar-fixed-top">
	<div class="am-container">
		<h1 class="am-topbar-brand">
			<a href="www.erertv.com">ErerTV</a>
		</h1>
		<div class="am-collapse am-topbar-collapse" id="collapse-head">
			<ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right">
				<li class="am-dropdown" data-am-dropdown>
					<a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
					  <span class="am-icon-users"></span> <span class="am-icon-caret-down"></span>
					</a>
					<ul class="am-dropdown-content">
					  <li><a href="{{ URL::to('logout') }}"><span class="am-icon-power-off"></span> Exit</a></li>
					</ul>
				</li>
			</ul>
		  
			<div class="am-topbar-right">
			  <a href="http://127.0.0.1/erertv/index.php/login" class="am-btn am-btn-primary am-topbar-btn am-btn-sm topbar-link-btn"><span class="am-icon-user"></span>µÇÂ½</a>
			</div>
		</div>
	</div>
</header>
<div class="am-g am-g-fixed blog-g-fixed">
	<div class="am-u-sm-12">
	  <h1>Welcome to ErErtv <h1>
	</div>
</div>

<footer class="footer">
	<p> 2016 By <a href="http://www.miibeian.gov.cn/publish/query/indexFirst.action" target="_blank">¾©ICP±¸14060815ºÅ Copyright by erertv All rights reserved </a></p>
</footer>

<script src="//cdn.bootcss.com/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdn.amazeui.org/amazeui/2.1.0/js/amazeui.min.js"></script>
</body>
</html>
