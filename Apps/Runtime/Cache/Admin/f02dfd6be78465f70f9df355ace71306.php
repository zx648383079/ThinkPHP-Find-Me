<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>欢迎进入后台管理</title>
<link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.css" />
<!-- jQuery (Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="/Public/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Find Me，找到我" />
<link href="/Public/images/favicon.png" rel="shortcut icon">

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.useso.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Raleway:400,800,300,100,500,700,600,900' rel='stylesheet' type='text/css'>
<!--animated-css-->
<link rel="stylesheet" type="text/css" href="/Public/css/animate.css" />
<script type="text/javascript" src="/Public/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!--/animated-css-->
<!--script-->
<script type="text/javascript" src="/Public/js/move-top.js"></script>
<script type="text/javascript" src="/Public/js/easing.js"></script>

<!--video.js -->
<link href="//vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">
<script src="//vjs.zencdn.net/4.12/video.js"></script>

<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) { 
				$(".scroll").click(function(event) { 		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				 } );
			 } );
</script>
</head>
<body>


<div class="message">
	 <div class="container">
		 <div class="header">	 
			 <div class="logo wow fadeInLeft" data-wow-delay="0.5s">
			 <a href="/"><img src="/Public/images/logo2.png" alt=""/></a>
			 </div>	
			 <div class="top-menu">
				 <span class="menu"></span> 
				 <ul>
					 <li><a href="/admin.php">首页</a></li>
					 <li><a href="<?php echo U('/index/news','','');?>">新闻</a></li>
					 <li><a href="<?php echo U('/index/videos','','');?>">视频</a></li>
					 <li><a href="#">消息</a></li>
					 <li><a href="<?php echo U('/logout','','');?>">登出</a></li>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
			 <!-- script-for-menu -->
		 <script>					
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle("slow" , function(){
						});
					});
		 </script>
		 <!-- script-for-menu -->			 
		 </div>
			 <div class="clearfix"></div> 
	 </div>
</div>

<!---->
<div class="footer">
	 <div class="container">
		 <div class="ftr-logo">
			 <a class="wow bounceIn" data-wow-delay="0.5s" href="/"><img src="/Public/images/logo2.png" alt=""/></a>
		 </div>
		 <div class="copy-right wow bounceInUp" data-wow-delay="0.5s">
			 <p>版权所有@</p>
		 </div>

	 </div>
</div>
<!---->
<script type="text/javascript">
		$(document).ready(function() { 
				/*
				var defaults = { 
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				 } ;
				*/
		$().UItoTop( { easingType: 'easeOutQuart' } );
 } );
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
 </body>
 </html>