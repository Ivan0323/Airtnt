<!DOCTYPE HTML>
<html>
<head>
	<title>AirTNT</title>
	<link rel="stylesheet" href="css\shopstyle.css">
	<link rel="icon" href="images\tnt.png" sizes="32x32">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Seen Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<link href='http://fonts.useso.com/css?family=Source+Sans+Pro:200,300,400,600,700,900,200italic,300italic,400italic,600italic,700italic,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.useso.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
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
	<script type="text/javascript" src="js/easing.js"></script>
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
<!-- header -->
	<div class="header" id="home">
		<div class="header-top">
			<div class="container">
				<div class="icon">
					<ul>
				  		<li><i class="message"></i></li>
						<li><a href="mailto:example@mail.com">Info@Seen.com</a></li>
						<li><i class="phone"></i></li>
						<li><p>+00(123)4567890</p</li>
					</ul>
				</div>
				<div class="social-icons">
					<ul>
						<li><a href="login.html"><span>登录/注册</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
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
			<div class="clearfix"></div>
			</div>
		</div>
	</div>
			<!-- content-section-starts -->
			<section class="main-container col2-left-layout">
				<div class="container">
				  <div class="row">
					  <article class="col-main">
						<h3 class="page-heading"> <span class="page-heading-title">选择您的酒店</span> </h3>
						<div class="toolbar">
						  <div class="row">
							<div class="col-md-4 col-sm-8">
							  <div class="btn-group">
								<div id="grid-view" class="btn btn-default active" data-toggle="tooltip" title="Grid"><a href="shop_grid.html"><i class="fa fa-th"></i></a></div>
								<div id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><a href="#"><i class="fa fa-th-list"></i></a></div>
							  </div>
							  <a href="#" id="compare-total">酒店比较 (3)</a> </div>
							<div class="col-sm-2 text-right sort-by hidden-sm">
							  <label class="control-label" for="input-sort">展示条数:</label>
							</div>
							<div class="col-md-3 col-sm-6 text-right">
							  <select id="input-sort" class="form-control col-sm-3">
								<option value="" selected="selected">默认</option>
								<option value="">名字 (倒序)</option>
								<option value="">名字 (顺序)</option>
								<option value="">价格 (低 &gt; 高)</option>
								<option value="">价格 (高 &gt; 低)</option>
								<option value="">排名 (高)</option>
								<option value="">排名 (低)</option>
							  </select>
							</div>
							<div class="col-sm-1 text-right show-limit hidden-sm">
							  <label class="control-label" for="input-limit">Show:</label>
							</div>
							<div class="col-md-2 col-sm-6 text-right">
							  <select id="input-limit" class="form-control">
								<option value="" selected="selected">15</option>
								<option value="">20</option>
								<option value="">30</option>
								<option value="">40</option>
								<option value="">50</option>
							  </select>
							</div>
						  </div>
						</div>
						<?php

						include "./conn.php";

						$sql = "select * from shop";
						$result =$conn->query($sql);
						echo"<div class='category-products'>";
						if($result->num_rows >0){
							while($row =$result->fetch_assoc()){
								echo"<ul class='products-grid'>";
								echo"<li class='item col-lg-4 col-md-4 col-sm-4 col-xs-6'>";
								echo"<div class='item-inner'>";
								echo"<div class='item-img'>";
								echo"<div class='item-img-info'> <a class='product-image' title='Product Title Here' href='pages.html'> <img alt='Product Title Here' src='images/products/img01.jpg'> </a>";
								echo"<div class='new-label new-top-left'>new</div>";
								echo"<div class='jtv-box-hover'>";
								echo"<ul class='add-to-links'>";
								echo"<li><a class='link-quickview' href='#'><i class='icon-magnifier-add icons'></i><span class='hidden'>Quick View</span></a></li>";
								echo"<li><a class='link-wishlist' href='#'><i class='icon-heart icons'></i><span class='hidden'>Wishlist</span></a></li>";
								echo"<li><a class='link-compare' href='#'><i class='icon-shuffle icons'></i><span class='hidden'>Compare</span></a></li>";
								echo"</ul>";
								echo"</div>";
								echo"</div>";
								echo"</div>";
								echo"<div class='item-info'>";
								echo"<div class='info-inner'>";
								echo"<div class='item-title'><h6> <a title='Product Title Here' href='pages.html'> ".$row["shopname"]." </a></h6> </div>";
								echo"<div class='item-content'>";
								echo"<div class='rating'> <i class='fa fa-star-o'></i> <i class='fa fa-star-o'></i> <i class='fa fa-star-o'></i> <i class='fa fa-star-o'></i> <i class='fa fa-star-o'></i> </div>";
								echo"<p> <span class='price'> ".$row["price"]." </span> </p>";
								echo"<div class='action'>";
								echo"<button class='button btn-cart' type='button' title='' data-original-title='Add to Cart'><span>添加至购物车</span> </button>";
								echo"</div>";
								echo"</div>";
								echo"</div>";
								echo"</div>";
								echo"</div>";
								echo"</li>";
								echo"</ul>";
							}
						}
						echo"</div>";
						?>

						<div class="toolbar">
						  <div class="row">
							<div class="col-sm-6 text-left">
							  <ul class="pagination">
								<li class="active"><span>1</span></li>
								<li><a href="#">2</a></li>
								<li><a href="#">&gt;</a></li>
								<li><a href="#">&gt;|</a></li>
							  </ul>
							</div>
						</div>
					  </article>
					  <!--	///*///======    End article  ========= //*/// --> 
					</div>
			  </section>
			  <!-- Main Container End --> 
			
			  <!-- Footer -->
			
			
			<!-- End Footer --> 


	 <!-- content-section-ends -->
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
			<div class="clearfix"></div>
				<script type="text/javascript">
					$(document).ready(function() {
						$().UItoTop({ easingType: 'easeOutQuart' 
						});
					});
				</script>
				<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>				
		</div>
	</div>
</body>
</html>