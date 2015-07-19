<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>Find Me!找到我！</title>
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


<!---->
<div class="banner">
	 <div class="container">
		 <div class="header">	 
			 <div class="logo wow fadeInLeft" data-wow-delay="0.5s">
			 <a href="/"><img src="/Public/images/logo2.png" alt=""/></a>
			 </div>	
			 <div class="top-menu">
				 <span class="menu"></span> 
				 <ul>
					    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><li><a class="scroll" href="<?php echo ($vo["link"]); ?>"><?php echo ($vo["title"]); ?></a></li><?php endforeach; endif; ?>
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
		 <div class="banner-text wow fadeInUp" data-wow-delay="0.5s">
			 <h1>了解我们的 <span>产品</span>让您的生活更<label>便利</label></h1>
			 <h2>本产品专注于解决生活中不便，在本站中可以随时找到那个陌生但又急于找到的她/他，本产品不会保留任何隐私，请放心使用！</h2>
		 </div>
		 <div class="banner-form">
			 <form action="#contact">
				 <div class="row">
					 <input class="wow fadeInRight col-md-4" data-wow-delay="0.5s" type="text" placeholder="称呼"/>
					 <input class="wow fadeInRight col-md-4" data-wow-delay="0.5s" type="text" placeholder="邮箱"/>
					 <input class="wow fadeInLeft col-md-3" data-wow-delay="0.5s" type="submit" value="开始"/>
				 </div>
			 </form>
			 <div class="register">
			 <span></span>
			 <h3 class="wow bounceInRight" data-wow-delay="0.5s">请下拉或直接点击联系我们</h3>		 
		     </div>	
			 <div class="clearfix"></div>
		 </div>		 
	 </div>
</div>
<!---->
<div id="brief" class="brief">
	 <div class="container">
		 <div class="col-md-6 brief-grids wow fadeInLeft" data-wow-delay="0.5s">
			 <?php echo ($brief["0"]["content"]); ?>
		 </div>
		 <div class="col-md-6 brief-grids wow fadeInRight" data-wow-delay="0.5s">
			 <?php echo ($brief["1"]["content"]); ?>
		 </div>
		 <div class="clearfix"></div>		 
	 </div>
</div>
<!---->
<div id="video" class="video">
	 <div class="container">
		 <div class="video-text text-center">
			 <h3>观看视频</h3>
			<p>在视频中您或许会有一些不同的发现！</p>
		 </div>
		 <div class="video-play ">
			 <div class="playing">
				 <div class="col-md-6 col-md-offset-3">			
				 	<?php echo ($video["0"]["content"]); ?>
				 </div>
			 </div>
			 <h4 class="wow fadeInLeft" data-wow-delay="0.5s"><a href="#" class="p1">100+用户</a></h4>
			 <h4 class="wow fadeInUp" data-wow-delay="0.5s"><a href="#" class="p2">视频文件</a></h4>
			 <h4 class="wow fadeInRight" data-wow-delay="0.5s"><a href="#" class="p3">24/7 在线支持</a></h4>			 
		 </div>
	 </div>
</div>

<!---->
<div class="get-started">
	 <div class="container">
		 <h4 class="wow bounceInLeft" data-wow-delay="0.5s">我们随时为您服务</h4>
		 <h3 class="wow bounceInRight" data-wow-delay="0.5s">随时解决您的一切问题</h3>
		 <a href="#contact">开始吧</a>
	 </div>
</div>
<!---->
<div id="contact" class="contact">
	 <div class="container">
		 <div class="contact-text text-center">
			 <h3>联系我们</h3>
			<p>任何问题都可以联系我们！</p>
		 </div>
		  <div class="contact-form">
				<form action="/admin.php/messages/add" method="POST">
					<div class="col-md-6 text-box">
						<input class="wow fadeInLeft" data-wow-delay="0.5s" type="text" name="name" placeholder="称呼" />
						<input class="wow fadeInLeft" data-wow-delay="0.5s" type="email" name="email" placeholder="邮箱" required/>
						<input class="wow fadeInLeft" data-wow-delay="0.5s" type="text" name="kind" placeholder="类别" />
				    </div>
					 <div class="col-md-6 textarea">
							<textarea class="wow fadeInRight" data-wow-delay="0.5s" name="message" >消息</textarea>
							<input class="wow fadeInRight" data-wow-delay="0.5s" type="submit" value="提交" required/>
					  </div>
					  <div class="clearfix"> </div>					  
			  </form>
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