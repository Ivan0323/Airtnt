<!DOCTYPE HTML>
<html>
<head>
	<title>AirTNT</title> 
	<link rel="icon" href="images\tnt.png" sizes="32x32">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Seen Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script><!--jquery幻灯片样式-->
	<script>
   	 	$(function () {
      		$("#slider").responsiveSlides({
    		auto: true,
      		nav: true,
      		speed: 500,
        	namespace: "callbacks",
        	pager: true,
      		});
    	});
  	</script>

	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script><!--控制动画效果速度-->
 	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<!---End-smoth-scrolling---->
</head>
<body>
	<div class="header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="icon">
					<ul>
						<li><i class="message"></i></li>
						<li><a href="mailto:example@mail.com">123@456.com</a></li>
						<li><i class="phone"></i></li>
						<li><p>+00(123)4567890</p></li>
					</ul>
				</div>
				<?php
				$name=$_GET['loginname'];
				 
				echo"<div class='social-icons'>";
				echo"<ul>";
				if($name){
						echo "<li><p>$name</p></li>";
				}else{
						echo"<li><a href='login.html'><span>登录/注册</span></a></li>";
					echo"</ul>";
				echo"</div>";
				}
				?>
			</div>
		</div>
		<div class="container">
	   		<div class="header-bottom">
				<div class="logo">
					<h1><a href="index.php">AirTnT</a></h1>
				</div>
				<div class="top-menu">
					<span class="menu"><img src="images/nav-icon.png" alt=""/></span>
					<ul>
						<nav class="cl-effect-5">
							<li><a href="index.php" class="active"><span data-hover="主页">主页</span></a></li>
							<li><a href="blog.html"><span data-hover="攻略游记">攻略游记</span></a></li>
							<li><a href="hotelplus.php"><span data-hover="酒店">酒店</span></a></li>
							<li><a href="pages.html"><span data-hover="客栈公寓">客栈公寓</span></a></li>
							<li><a href="pages.html"><span data-hover="国内机票">国内机票</span></a></li>
							<li><a href="pages.html"><span data-hover="国际机票">国际机票</span></a></li>
						</nav>
					</ul>
				</div>
				 <!--script-nav-->
				<script>
					$("span.menu").click(function(){
						$(".top-menu ul").slideToggle("slow" , function(){
						});
					});
				</script>
		
			</div>
		</div>
	</div>
 <!-- header-section-ends --> 
	<div class="header-slider">
		<div class="slider">
			<div class="callbacks_container">
			  	<ul class="rslides" id="slider">
					<li>
				  		<img src="images/banner.jpg" alt="">
				  			<div class="caption">
								<h3>上海</h3>
								<p>繁华的南京路、 风景秀丽的外滩、 亚洲最高的东方明珠电视塔,使我终身难忘。</p>
							</div>
					</li>
					<li>
				  		<img src="images/banner1.jpg" alt="">
							<div class="caption">
								<h3>广州</h3>
								<p>自然风景秀丽，气候温和，雨量充沛，四季常青，风光旖旎，被誉为中国的"南海明珠"。</p>
							</div>
					</li>
				</ul>
		  	</div>
	  	</div>
	</div>

	<div class="beautifull">
		<div class="container">
			<div class="beautifull-header">
				<h4>西部大开发 旅行新机遇</h4>
				<p>世界屋脊青藏高原、雄奇壮阔的冰川大山、广袤苍凉的大漠戈壁、沟壑纵横的黄土高原、波涛汹涌的九曲黄河、秀丽壮观的长江三峡，还有世界奇迹秦始皇陵兵马俑、敦煌莫高窟、拉萨布达拉宫……中国西部拥有众多世界级的自然人文资源。</p>
			</div>
			<div class="beautifull-grids">
				<div class="col-md-4 beautiful-grid">
					<div class="icon1">
						<i class="heart"></i>
					</div>
					<div class="passion">
						<h4>小贴士</h4>
						<p>游玩过程中要量力而行，如果出现头晕、乏力、胸闷和心悸等症状，应立刻休息，必要时到医院治疗。另外，如果是到冰雪之地旅行，还要注意视力的保护。因为白茫茫的雪地对阳光中的紫外线吸收少而反射强，容易出现雪盲。事先可以准备一副墨镜来保护眼睛。若已经患上雪盲，旅途中治疗可用鲜奶频繁滴眼，有条件的情况下则可用0.3%地卡因眼药水和抗生素眼膏。</p>
					</div>	
				</div>
				<div class="col-md-4 beautiful-grid">
					<div class="icon1">
						<i class="lamp"></i>
					</div>
					<div class="passion">
						<h4>灵感</h4>
						<p>旅行除了可以体验地方风情，拍几张美美的照片也是重中之重呢，无论是人物还是景色，因为每次回到家后闲来无事翻看照片时，还总能想起旅行时的种种美好记忆。</p>
					</div>	
				</div>
				<div class="col-md-4 beautiful-grid">
					<div class="icon1">
						<i class="star"></i>
					</div>
					<div class="passion">
						<h4>收藏</h4>
						<p>要理性消费，依法维权。要文明礼让，做文明游客，扬君子之风；购物时要衡量一下价格和价值再进行选择，不要盲目冲动购物，要理性消费；如发生因航班延误或商品质量等问题时，请保持冷静克制，文明协商，依法维权。</p>
					</div>
				</div>	
			</div>
		</div>
	</div>							
	<div class="wantto-section">
		<div class="container">
			<h4>旅行，发现更美景点</h4>
			<p>放松身心，开阔眼界，洗涤心境，见识世界大好河山。感悟人生，了解各地的风俗习惯，见识各地的奇人异事，读万卷书不如行万里路，行万里路不如阅人无数！</p>
			<a href="blog.html" class="hvr-rectangle-in">发现更多</a>
		</div>
	</div>	
	<div class="contact-section">
		<div class="container">
			<div class="contact-grids">
				<div class="col-md-3 contact-grid">
					<h5>旅行社区</h5>
					<p>在这里与别人分享你旅行的脚步。</p>
					<a href="#" class="more">more about us<img src="images/arrow.png"></a>
				</div>
				<div class="col-md-3 contact-grid">
					<h5>联系我们 </h5>
					<div class="icon2">
						<ul>
							<li><i class="indicate"></i></li>
							<li><p class="label1">YunNan KunMing</p></li>
						</ul>
						<ul>
							<li><i class="phone"></i></li>
							<li><p class="label1">+00(123)4567890</p></li>
						</ul>
						<ul>
							<li><i class="message"></i></li>
							<li><a href="mailto:example@mail.com">123@456.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 contact-grid">
					<h5>美丽风光</h5>
					<div class="cont">
						<div class="contact-leftgrid">
							<div class="img-grid1">
								<img src="images/pic7.jpg">
							</div>
							<div class="img-grid2">
								<img src="images/pic8.jpg">
							</div>		
						</div>										
						<div class="contact-rightgrid">
							<div class="img-grid3">
								<img src="images/pic9.jpg">
							</div>
							<div class="img-grid4">
								<img src="images/pic10.jpg">
							</div>			
						</div>
					</div>
				</div>
					<div class="col-md-3 contact-grid">
						<h5>关于我们</h5>
						<p>年轻的旅行社区网站，帮助您更好的旅行</p>
						<div class="subscribe">
							<form>
								<input type="text" class="text" value="输入你的电子邮箱" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = ' Enter your email';}">
								<input type="submit" value="联系我们">
							</form>
						</div>
					</div>
									
			</div>
		</div>
	</div>
	<div class="footer-section">
		<div class="container">
			<div class="bottom-menu">
				<ul>
					<li><a href="blog.html">攻略游记</a></li>
					<li><a href="hotelplus.php">酒店</a></li>
					<li><a href="pages.html">客栈公寓</a></li>
					<li><a href="pages.html">国内机票</a></li>
					<li><a href="pages.html">国际机票</a></li>
				</ul>
			</div>						
			<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
		</div>				
	</div>				
</body>
</html>