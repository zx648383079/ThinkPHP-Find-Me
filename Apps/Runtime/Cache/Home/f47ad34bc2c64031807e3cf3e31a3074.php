<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>开始查找！</title>
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

<script type="text/javascript" src="/Public/js/jquery.masonry.min.js"></script>


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
			 <div class="clearfix"></div>
		 <!-- script-for-menu -->			 
		 </div>
		 <div class="banner-form">
			 <div class="form">
				 <div class="row">
					 <input id="keyword" class="wow fadeInRight col-md-9" data-wow-delay="0.5s" type="text" placeholder="搜索"/>
					 <button id="searchbtn" class="wow fadeInLeft col-md-2" data-wow-delay="0.5s" >开始</button>
				 </div>
			 </div>
			 <div class="clearfix"></div>
		 </div>		 
	 </div>
	 
	 <div id="content" class="container">
	 </div>
</div>

<div style="position: fixed;top:100px">
	<a id="send" href="javascript:void(0);">发布</a>
</div>

<div id="sendForm" style="position:fixed;display:none;z-index:2000;top:0px;left:0px;width:100%;height:100%;background-color:rgba(255,255,0,0.5)">
	<div class="form">
		<div class="row">
			<input id="sendWord" class="col-md-12" type="text" placeholder="关键词" required/>
		</div>
		<div class="row">
			<textarea id="sendContent" class="col-md-12" rows="5" placeholder="内容" required></textarea>
		</div>
		<div class="row">
			<button id="sendBtn" class="col-md-2 col-md-offset-7">提交</button>
			<button id="cancel" class="col-md-2 col-md-offset-1">取消</button>
		</div>
	</div>
</div>

<script>
$(document).ready(function() { 
	
	$('#send').click(function() { 
		$('#sendForm').css('display','block');
	 } );
	
	$('#cancel').click(function() { 
		$('#sendForm').css('display','none');
	 } );
	
	$('#sendBtn').click(function() { 
		var word=$('#sendWord').val();
		var content=$('#sendContent').val();
		if(content!="" && word!="") {
			$.post('/index.php/find/add',{'keyword':word,'content':content},function(data) {
				alert(data);
			 } );
			 $('#sendWord').val('');
			 $('#sendContent').val('');
		 	$('#sendForm').css('display','none');
		 } else {
			 alert("关键字和内容不能为空");
		 }
		
	 } );
	
	$('#searchbtn').click(function() { 
		var keyword=$('#keyword').val();
		
		if(keyword){
			$('#content').html("");
			$('.form').css({"position": "fixed","top":"-56px","z-index":"1000"});
			$.getJSON("/index.php/find/search/keyword/"+keyword,function(result){
				$(result).each(function(index){
					var item=result[index];
					$('#content').append("<div class=\"item\">"+
						"<div class=\"panel panel-info\">"+
						"<div class=\"panel-heading\"><h3 class=\"panel-title\">关键字："+
						item.keyword+"</h3></div><div class=\"panel-body\">"+
						item.content+"</div><div class=\"panel-footer\">发布时间："+
						item.created+"</div>");
				})
			} );
		}
	 } );
	
	
	
	
  $('#content').masonry( {  
    // options  
    itemSelector : '.item',  
    columnWidth : 240 
   } );  
 } );
 

 
</script>


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