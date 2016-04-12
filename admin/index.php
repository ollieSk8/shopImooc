<?php
	require_once "../include.php";
	checkLog();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<link rel="stylesheet" type="text/css" href="./styles/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./styles/admin.css">
	<script type="text/javascript" src="scripts/jquery-2.2.0.min.js"></script>
	 <script type="text/javascript" src="scripts/bootstrap.min.js"></script>
	<script type="text/javascript" src="scripts/index.js"></script>
</head>
<body>
	<nav class="navbar navbar-default admin-nav">
		<p class="navbar-text">商城后台系统</p>
	</nav>
	<!-- 二级导航 -->
	<section>
	  <div class="col-md-4 admin-left">
	  	<ol class="breadcrumb">
		  <li><a href="#">首页</a></li>
		  <li><a href="#">商品管理</a></li>
		  <li class="active">商品修改</li>
		</ol>
	  </div>
	  <div class="col-md-8 admin-right">
	  	<ol class="breadcrumb" style="text-align:right;">
	  
	  	   <li>
		  	<a class="" href="javaScript:;">
			     <span aria-hidden="true"></span>
			     欢迎您<?php 
			     	if(isset($_SESSION["adminName"])){
			     		echo $_SESSION["adminName"];
			     	}elseif(isset($_COOKIE["adminName"])){
			     		echo $_COOKIE["adminName"];
			     	}
			     ?>
			 </a>
		  </li>
		  <li>
		  	<a class="" href="#">
			     <span class="glyphicon glyphicon-home" aria-hidden="true"></span>首页
			 </a>
		  </li>
		  <li>
		  	<a class="" href="#">
			     <span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span>后退
			 </a>
		  </li>
		  <li>
		  	<a class="" href="#">
			     <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>前进
			 </a>
		  </li>
		  <li>
		  	<a class="" href="#">
			     <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>刷新
			 </a>
		  </li>
		  <li>
		  	<a class="" href="doAdminAction.php?act=logout">
			     <span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>退出
			 </a>
		  </li>
		</ol>
	  </div>
	</section>
	<!-- 二级导航end -->
	<section>
		<div class="col-md-2 menu-left">
			<div class="panel panel-info">
			  <div class="panel-heading">管理员</div>
			  <div class="panel-body" >
					<ul class="list-group">
					  <li class="list-group-item" data-hover="hover">
					  	<span class="glyphicon glyphicon-plus"></span>管理员管理
					  	<ul class="list-group second-menu">
						  <li class="list-group-item">
						  	<a href="addAdmin.php" target="mainFrame">添加管理员</a>
						  </li>
						   <li class="list-group-item">
						  	<a href="listAdmin.php" target="mainFrame">管理员列表</a>
						  </li>
						</ul>
					  </li>
					  <li class="list-group-item" data-hover="hover">
					  	<span class="glyphicon glyphicon-plus"></span>分类管理
					  	<ul class="list-group second-menu">
						  <li class="list-group-item">
						  	<a href="addCate.php" target="mainFrame">添加分类</a>
						  </li>
						   <li class="list-group-item">
						  	<a href="listCate.php" target="mainFrame">分类列表</a>
						  </li>
						</ul>
					  </li>
					  <li class="list-group-item" data-hover="hover">
					  	<span class="glyphicon glyphicon-plus"></span>商品管理
					  	<ul class="list-group second-menu">
						  <li class="list-group-item">
						  	<a href="addProduct.php" target="mainFrame">添加商品</a>
						  </li>
						   <li class="list-group-item">
						  	<a href="listAdmin.php" target="mainFrame">商品列表</a>
						  </li>
						</ul>
					  </li>
					</ul>
			  </div>
			</div>
		</div>
		<div class="col-md-10 menu-right" style="padding:0;">
			<div class="panel panel-info">
			  <div class="panel-heading">产品管理</div>
			  <div class="panel-body" style="">
					<iframe frameborder="0" width="100%" height="500" src="main.php" name="mainFrame"></iframe>
			  </div>
			</div>
		</div>
	</section>
</body>
</html>