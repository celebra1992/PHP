<?php
	require_once "../static/lang/lang1.php";	
?>
<head>
	<title><?php echo $Lang['probability']; ?></title>
	<meta http-equiv="Content-type" content="text/html; charset=Windows-1251" />
        <link href="../static/css/css_menu/style.css" rel="stylesheet" type="text/css" />
		<link href="../static/css/css_menu/style1.css" rel="stylesheet" type="text/css" />
		<link href="../static/css/css_menu/menu.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" type="text/css" href="../static/css/css_menu/component.css" />
		<link rel="stylesheet" type="text/css" href="../static/css/calculator/css_calculator.css" />
<!--		<script src="../static/js/js_calculator/calculator.js" type="text/javascript"></script>
-->
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Philosopher" rel="stylesheet">
		<link rel="shortcut icon" href="../static/images/images/icon.jpg" type="image/jpg">
		
		<style>
		body{
			font-family: 'Philosopher', sans-serif;
		}
		</style>
</head>

<body>
<div id="shapka"><?php echo $Lang['shapka']; ?></div>
<div class="wrapper">
	<table width="100%">
	<header class="header">
	<?php
		require_once "../static/blocks/top.php";
	?>
	</table>
	<div id="header"></div>
	</header>
	<main class="content">
	<?php
		require_once "../static/blocks/content_calculator.php";
	?>
	</main>
	</div>
	<footer class="footer">
	<?php
		require_once "../static/blocks/footer.php";
	?>
	</footer>	
	
	

	
</body>