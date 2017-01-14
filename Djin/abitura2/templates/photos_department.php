<?php
	require_once "../static/lang/lang1.php";
?>
<head>
	<title><?php echo $Lang['photos']; ?></title>
	<meta http-equiv="Content-type" content="text/html; charset=Windows-1251" />
        <link href="../static/css/css_menu/style.css" rel="stylesheet" type="text/css" />
		<link href="../static/css/css_menu/style1.css" rel="stylesheet" type="text/css" />
		<link href="../static/css/css_menu/menu.css" rel="stylesheet" type="text/css" /> 
		
		<link href="https://fonts.googleapis.com/css?family=Bree+Serif|Dancing+Script|Philosopher" rel="stylesheet">
		<link rel="shortcut icon" href="../static/images/images/icon.jpg" type="image/jpg">
		<link rel="stylesheet" type="text/css" href="../static/css/css_photo/slick.css">
		<link rel="stylesheet" type="text/css" href="../static/css/css_photo/slick-theme.css">
		<link rel="stylesheet" type="text/css" href="../static/css/css_photo/increase.css">
		
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
		require_once "../static/blocks/content_photo.php";
	?>	
	</main>
	</div>
	<footer class="footer">
	<?php
		require_once "../static/blocks/footer.php";
	?>
	</footer>
		
		
				<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
		<script src="../static/js/js_photo/slick.js" type="text/javascript"></script>
		<script src="../static/js/js_photo/slick.min.js" type="text/javascript"></script>
		
		  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 5
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 5
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
  </script>
</body>
</html>