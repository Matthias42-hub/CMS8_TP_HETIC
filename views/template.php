<!DOCTYPE HTML>
<html lang="en">
<head>
	<title>PROJET CMS</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">


	<!-- Font -->

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">


	<!-- Stylesheets -->

	<link href="public/common-css/bootstrap.css" rel="stylesheet">

	<link href="public/common-css/ionicons.css" rel="stylesheet">


	<link href="public/layout-1/css/styles.css" rel="stylesheet">

	<link href="public/layout-1/css/responsive.css" rel="stylesheet">

</head>
<body >

	<header>
		<div class="container-fluid position-relative no-side-padding">

			<a href="#" class="logo"><img src="public/images/logo.png" alt="Logo Image"></a>

			<div class="menu-nav-icon" data-nav-menu="#main-menu"><i class="ion-navicon"></i></div>

			<ul class="main-menu visible-on-click" id="main-menu">
				<li><a href="#">Home</a></li>
				<li><a href="post&create">Créer un article</a></li>
			</ul><!-- main-menu -->

		</div><!-- container -->
	</header>


  <?= $content ?>

	<!-- SCRIPTS -->

	<script src="public/common-js/jquery-3.1.1.min.js"></script>

	<script src="public/common-js/tether.min.js"></script>

	<script src="public/common-js/bootstrap.js"></script>

	<script src="public/common-js/scripts.js"></script>

</body>
</html>
