<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>后台注册</title>
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
<!--<link href='http://fonts.useso.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.useso.com/css?family=Raleway:400,800,300,100,500,700,600,900' rel='stylesheet' type='text/css'>
--><!--animated-css-->
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


<div class="banner">
	 <div class="container">
		 		 
		 <div class="form">
			 <div class="col-md-6 col-md-offset-3">
				 <form action="<?php echo U('login/postregister','','');?>" method="POST">
					 <div class="row">
					 	<input class="wow fadeInRight col-md-12" data-wow-delay="0.5s" type="text" name="name" placeholder="用户名" required/>
					 </div>
					 <div class="row">
					 	<input class="wow fadeInRight col-md-12" data-wow-delay="0.5s" type="email" name="email" placeholder="邮箱" required/>
					 </div>
					 <div class="row">
					 	<input class="wow fadeInRight col-md-12" data-wow-delay="0.5s" type="password" name="pwd" placeholder="密码" required/>
					 </div>
					 <div class="row">
					 <input class="wow fadeInRight col-md-12" data-wow-delay="0.5s" type="password" name="confirmpwd" placeholder="确认密码" required/>
					 </div>
					 <div class="row">
					 	<input class="wow fadeInLeft col-md-5 col-md-offset-2" data-wow-delay="0.5s" type="submit" value="注册"/>
						 <h1>
						 	<a href="<?php echo U('index','','');?>">登录</a>
						 </h1>
					 </div>
				 </form>
			 </div>
			 <div class="clearfix"></div>
		 </div>		 
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