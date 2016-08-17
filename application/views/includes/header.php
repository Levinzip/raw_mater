<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>金属ドットコム</title>

	<!-- Bootstrap Core CSS -->
	<link href="<?php echo base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="<?php echo base_url()?>/assets/css/modern-business.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="<?php echo base_url()?>/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>
		.badge-notify{
			background:red;
			position:relative;
			top: -20px;
			right: 10px;
		}
		.my-cart-icon-affix {
			position: fixed;
			z-index: 999;
		}
	</style>

</head>


<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php echo base_url(); ?>admin/products/">金属ドットコム</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="<?php echo base_url(); ?>admin/products/">メイン</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>admin/products/blog">ブログ</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>admin/products/purchase">イベント</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>admin/products/event">買い物</a>
				</li>
<!--				<li>-->
<!--					<a href="--><?php //echo base_url(); ?><!--admin/products/service">サービス</a>-->
<!--				</li>-->
<!--				<li>-->
<!--					<a href="--><?php //echo base_url(); ?><!--admin/products/about">会社情報</a>-->
<!--				</li>-->
				<li>
					<h3>
						<div>
							<span class="glyphicon glyphicon-shopping-cart my-cart-icon" style="color:blue"><span class="badge badge-notify my-cart-badge"></span></span>
						</div>
					</h3>
				</li>
<!--				<li>-->
<!--					<a href="--><?php //echo site_url("admin").'/'.$this->uri->segment(2); ?><!--/contact">Contact</a>-->
<!--				</li>-->


			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>