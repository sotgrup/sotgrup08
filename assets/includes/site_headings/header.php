<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<title>СОТ ГРУП 08</title>
		<meta name="keywords" content="СОТ ГРУП 08" />
		<meta name="description" content="СОТ ГРУП 08" />
		<link href="<?php echo $base_dir; ?>assets/css/style.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo $base_dir; ?>assets/js/jquery-1.6.3.min.js" ></script>
		<script type="text/javascript" src="<?php echo $base_dir; ?>assets/js/jquery-ui.min.js" ></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#featured > ul").tabs({fx:{opacity: "toggle"}}).tabs("rotate", 5000, true);
		});
	</script>
	<link rel="stylesheet" type="text/css" href="<?php echo $base_dir; ?>assets/css/ddsmoothmenu.css" />
	<script type="text/javascript" src="<?php echo $base_dir; ?>assets/js/ddsmoothmenu.js"></script>

	<script type="text/javascript">

	ddsmoothmenu.init({
		mainmenuid: "menu", //menu DIV id
		orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
		classname: 'ddsmoothmenu', //class added to menu's outer DIV
		//customtheme: ["#1c5a80", "#18374a"],
		contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
	})

	</script>
	<link rel="stylesheet" href="<?php echo $base_dir; ?>assets/css/slimbox2.css" type="text/css" media="screen" /> 
	<script type="text/JavaScript" src="<?php echo $base_dir; ?>assets/js/slimbox2.js"></script> 
	<script type="text/javascript" language="javascript" src="<?php echo $base_dir; ?>assets/js/jquery.carouFredSel-5.3.0-packed.js"></script>
	<script type="text/javascript" language="javascript">
		$(function() {

			//	Scrolled by user interaction
			$('#foo2').carouFredSel({
				prev: '#prev2',
				next: '#next2',
				pagination: "#pager2",
				auto: false
			});
			
			$('#foo3').carouFredSel({
				prev: '#test_prev',
				next: '#test_next',
				auto: false
			});
			
		});
	</script>
	</head>
	<body>
	<div id="wrapper">
		<div id="header">
			<div id="site_title">
				<h1 class="fname">Сот Груп 08</h1>
			</div>
		</div> <!-- END of header -->
		<div id="middle"><span class="middle_bottom_frame"></span>
			<div id="menu" class="ddsmoothmenu">
				<ul>
					<li><a href="/2064_slidit" class="picked"><span></span>Начало</a></li>
					<li><a href="<?php echo $base_dir ?>News"><span></span>Новини</a></li>
					<li><a href="<?php echo $base_dir ?>Info"><span></span>Какво предлагаме</a></li>
					<li><a href="<?php echo $base_dir ?>Gallery"><span></span>Галерия</a></li>
					<li><a href="<?php echo $base_dir ?>aboutUs"><span></span>Кои сме ние</a></li>                
					<li><a href="<?php echo $base_dir ?>contactUs"><span></span>Контакти</a></li>
				</ul>
				<div class="clear"></div>
			</div> <!-- end of menu -->