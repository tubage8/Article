<?php 
    require_once ('connect.php');
    $key = $_GET['key'];
    $sql = "select * from article where title like '$key%' order by dateline desc";
    $query = mysql_query($sql);
    if($query && mysql_num_rows($query)){
        while ($row = mysql_fetch_assoc($query)){
            $data[] = $row;
        }
    }else {
        $data = array();
    }
?>


<!DOCTYPE HTML>
<!--
	Iridium by TEMPLATED
    templated.co @templatedco
    Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>文章发布系统</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
<!-- 		<link href='http://fonts.googleapis.com/css?family=Arimo:400,700' rel='stylesheet' type='text/css'> -->
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
<!-- 		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body class="homepage">

		<!-- Header -->
		<div id="header">
			<div class="container"> 
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">兔八哥的文章发布系统</a></h1>
					<span>Design by tubage</span>
				</div>
				
				<!-- Nav -->
				<!-- <nav id="nav">
					<ul>
						<li class="active"><a href="index.html">Homepage</a></li>
						<li><a href="left-sidebar.html">Left Sidebar</a></li>
						<li><a href="right-sidebar.html">Right Sidebar</a></li>
						<li><a href="no-sidebar.html">No Sidebar</a></li>
					</ul>
				</nav> -->
			</div>
		</div>

		<!-- Main -->
		<div id="main">
			<div class="container">
				<div class="row"> 
					
					<!-- Content -->
					<div id="content" class="8u skel-cell-important">
						<section>
							<header>
								<h2>欢迎来到兔八哥的博客!</h2>
								<span class="byline">@兔八哥</span>
							</header>
							<a href="#" class="image full"><img src="images/pic07.jpg" alt="" /></a>
<!-- 							<p>This is <strong>Iridium</strong>, a responsive HTML5 site template freebie by <a href="http://templated.co">TEMPLATED</a>. Released for free under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so use it for whatever (personal or commercial) &ndash; just give us credit! Check out more of our stuff at <a href="http://templated.co">our site</a> or follow us on <a href="http://twitter.com/templatedco">Twitter</a>.</p> -->
<!-- 							<p>Sed etiam vestibulum velit, euismod lacinia quam nisl id lorem. Quisque erat. Vestibulum pellentesque, justo mollis pretium suscipit, justo nulla blandit libero, in blandit augue justo quis nisl. Fusce mattis viverra elit. Fusce quis tortor. Consectetuer adipiscing elit. Nam pede erat, porta eu, lobortis eget lorem ipsum dolor.</p> -->
						        <p>兔八哥的博客文章开通啦，欢迎大家来浇水！</p>
						</section>
					</div>
					
					<!-- Sidebar -->
					<div id="sidebar" class="4u">
					       <div id="searcher">
						        <ul>
						          <li id="search">
						              <h3>搜索</h3>
						              <form method="get" action="article.search.php">
						                  <fieldset>
						                      <input type="text" id="s" name="key" value="" />
						                      <input type="submit" id="x" value="搜索" />
						                  </fieldset>
						              </form>
						          </li>
						        </ul>
						    </div>
					
						<section>
							<header>
								<h2>文章列表</h2>
							</header>
							<ul class="style">
								<!-- <li>
									<p class="posted">August 11, 2002  |  (10 )  Comments</p>
									<img src="images/pic04.jpg" alt="" />
									<p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
								</li>
								<li>
									<p class="posted">August 11, 2002  |  (10 )  Comments</p>
									<img src="images/pic05.jpg" alt="" />
									<p class="text">Nullam non wisi a sem eleifend. Donec mattis libero eget urna. Pellentesque viverra enim.</p>
								</li> -->
								<?php 
								    if (empty($data)){
								        echo "该博客目前没有任何文章";
								    }else {
								        foreach ($data as $value){
								                
								?>
								<li>
									<p class="posted"><?php echo date('Y年m月d日  H:i:s修改',$value['dateline'])?></p>
									<img src="images/pic0<?php echo rand(4,6)?>.jpg" alt="" />
									<p class="list_title"><?php echo $value['title']?></p>
									<p class="text"><?php echo $value['description']?>&nbsp;&nbsp;<a href="article.show.php?id=<?php echo $value['id']?>">详细内容</a>&nbsp;&nbsp;&raquo;&nbsp;&nbsp;</p>
								</li>
								<?php 
								        }
								    }
								?>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div>

		<!-- Footer -->
		<!-- <div id="featured">
			<div class="container">
				<div class="row">
					<div class="4u">
						<h2>Aenean elementum facilisis</h2>
						<a href="#" class="image full"><img src="images/pic01.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="#" class="button">More Details</a></p>
					</div>
					<div class="4u">
						<h2>Fusce ultrices fringilla</h2>
						<a href="#" class="image full"><img src="images/pic02.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="#" class="button">More Details</a></p>
					</div>
					<div class="4u">
						<h2>Etiam rhoncus volutpat erat</h2>
						<a href="#" class="image full"><img src="images/pic03.jpg" alt="" /></a>
						<p>Nullam non wisi a sem semper eleifend. Donec mattis libero eget urna. Donec leo, vivamus fermentum nibh in augue praesent a lacus at urna congue rutrum. Quisque dictum. Pellentesque viverra vulputate enim.</p>
						<p><a href="#" class="button">More Details</a></p>
					</div>
				</div>
			</div>
		</div> -->


		<!-- Footer -->
		<!-- <div id="footer">
			<div class="container">
				<div class="row">
					<div class="4u">
						<section>
							<h2>Latest Posts</h2>
							<ul class="default">
								<li><a href="#">Pellentesque lectus gravida blandit</a></li>
								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
								<li><a href="#">Phasellus nibh pellentesque congue</a></li>
								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>Ultrices fringilla</h2>
							<ul class="default">
								<li><a href="#">Pellentesque lectus gravida blandit</a></li>
								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
								<li><a href="#">Phasellus nibh pellentesque congue</a></li>
								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
							</ul>
						</section>
					</div>
					<div class="4u">
						<section>
							<h2>Aenean elementum</h2>
							<ul class="default">
								<li><a href="#">Pellentesque lectus gravida blandit</a></li>
								<li><a href="#">Lorem ipsum consectetuer adipiscing</a></li>
								<li><a href="#">Phasellus nibh pellentesque congue</a></li>
								<li><a href="#">Cras vitae metus aliquam pharetra</a></li>
								<li><a href="#">Maecenas vitae orci feugiat eleifend</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>
		</div> -->

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">tubage</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
			<div class="container">
                <a href="about.php">关于我们</a>&nbsp;&nbsp;<a href="contact.php">联系我们</a>
			</div>
		</div>
		
	</body>
</html>