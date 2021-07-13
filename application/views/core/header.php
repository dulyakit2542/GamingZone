<!DOCTYPE html>
<html lang="en">
<?php
$permission_admin = false;
if (count($_SESSION) > 1) {
	$per = $_SESSION['user_info']->permission;
	if ($per == 'admin') {
		$permission_admin = true;
	}
}
$permission_user = false;
if (count($_SESSION) > 1) {
	$per = $_SESSION['user_info']->permission;
	if ($per == '') {
		$permission_user = true;
	}
}
?>
<head>
	<!-- SITE TITTLE -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<script src="<?php echo base_url() . 'theme/js' ?>/java.js"></script>
	<!-- PLUGINS CSS STYLE -->
	<link href="<?php echo base_url() . 'theme/Fonts' ?>/promt/stylesheet.css" rel="stylesheet" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/listtyicons/style.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/menuzord/css/menuzord.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/css/map.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/selectric/selectric.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/dzsparallaxer/dzsparallaxer.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/owl-carousel/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/revolution/css/settings.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/css/map.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/rateyo/jquery.rateyo.min.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/fancybox/jquery.fancybox.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML' ?>/assets/css/style.css" rel="stylesheet" id="option_style">
	<link href="<?php echo base_url() . 'theme/listty-2-1/Static HTML' ?>/assets/img/favicon.png" rel="shortcut icon">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<script>
		var base_url = '<?php echo base_url(); ?>';
</script>
<style> 
.text_head {
    font-family: 'promptlight';
    font-size: 11pt;
    font-weight: bold;
    transition: 0.3s;
    color: #505050;
    filter: alpha(opacity=100);
  }

  .text_head:hover {
    font-family: 'promptlight';
    color: #00BFFF;
    opacity: 2.0;
    filter: alpha(opacity=100);
  }

  .text_drop {
    font-family: 'promptlight';
    color: #707070;
    opacity: 1.0;
    filter: alpha(opacity=100);
  }

  .text_drop:hover {
    font-family: 'promptlight';
    color: #00BFFF;
    color: #00BFFF;
    opacity: 1.0;
    filter: alpha(opacity=100);
  }

  .h2 {
    font-family: 'promptlight';
    color: aliceblue;
  }

  .h6 {
    font-family: 'promptlight';
    font-size: 100%;
  }

  .h6left {
    font-family: 'promptlight';
    margin-left: auto;
  }

  .card1 {
    background-color: white;
    width: 100%;
    border-radius: 5px;
    box-shadow: 0 0px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);
    transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);

    /* padding: 14px 80px 18px 36px; */
    cursor: pointer;
  }

  .card1:hover {
    transform: scale(1.03);
    box-shadow: 0 0px 20px rgba(0, 0, 0, .12), 0 4px 8px rgba(0, 0, 0, .06);
  }
  #myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
  box-shadow: 0 0px 10px rgba(0, 0, 0, .08), 0 0 6px rgba(0, 0, 0, .05);

}
#myBtn:hover {
  background-color: #555;
}
</style>

<body id="body" class="up-scroll">

	<!-- Preloader -->
	<div id="preloader" class="smooth-loader-wrapper">
		<div class="smooth-loader">
			<div class="loader1">
				<div class="loader-target">
					<div class="loader-target-main"></div>
					<div class="loader-target-inner"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="main-wrapper">
		<!-- HEADER -->
		<header class="header">
			<nav class="nav-menuzord navbar-sticky">
				<div class="container clearfix">
					<div id="menuzord" class="menuzord menuzord-responsive">
						<a class="navbar-brand menuzord-brand" href="">
							<strong>GamingZone</strong>
						</a>
						<ul class="menuzord-menu menuzord-right text_head">
							<li class="text_head ">
								<a  href="<?php echo base_url() . 'main' ?>"><h6 class="text_head"> Home </h6></a>
							</li>
							<li>
								<?php
								if ($permission_user || $permission_admin) {
								?>
									<a   href="<?php echo base_url() . 'main/find_game' ?>"><h6 class="text_head"> ค้นหาเกม</h6></a>
								<?php } else { ?>
									<a   href="<?php echo base_url() . 'login'?>"><h6 class="text_head"> ค้นหาเกม </h6></a>
								<?php } ?>
							</li>
							<?php

							if ($permission_admin) {
							?>
								<li class="" >
									<a href="javascript:0" style="font-family:promptlight;font-size: 11pt;font-weight: bold;transition: 0.3s; color: #505050;"> Admin </a>
									<ul class="dropdown">
										<li>
											<a href="<?php echo base_url() . 'dashboard' ?>">Dashboard</a>
										</li>
										<li>
											<a href="<?php echo base_url() . 'dashboard/manage_user' ?>">Manage user</a>
										</li>
									</ul>
								</li>
							<?php }

							if ($permission_user || $permission_admin) {
							?>

								<li class="">
									<a href="javascript:0" style="font-family:promptlight;font-size: 11pt;font-weight: bold;transition: 0.3s; color: #505050;"><?php echo $_SESSION['user_info']->fname; ?></h6></a>
									<ul class="dropdown">
										
										<li>
											<a href="<?php echo base_url() . 'userc' ?>">ข้อมูลส่วนตัว</a>
										</li>
										<li>
											<hr>
										</li>
										<li>
											<a class="text_head " href="<?php echo base_url() . 'login/logout' ?>">
												ออกจากระบบ
											</a>
										</li>
									</ul>
								</li>
								<?php
								if (count($_SESSION) < 2) {
									session_destroy();
									redirect('login', 'refresh');
								}
							} else {
								?>
								<li class="">
									<a class="text_head" href="<?php echo base_url() . 'login' ?>">
										<h6 class="text_head">Login</h6>
									</a>
									<span class="sr-only"></span>
								</li>
							<?php
							}
							?>

							<li class="">
								<br>
							</li>
						</ul><br>
					</div>
				</div>
			</nav>
		</header>
		<!-- JAVASCRIPTS -->
		<div style="background-color: #F7F7F7;">
			<div class="container">
			<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/jquery/jquery-3.4.1.min.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/bootstrap/js/bootstrap.bundle.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/menuzord/js/menuzord.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/selectric/jquery.selectric.min.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/dzsparallaxer/dzsparallaxer.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/dzsparallaxer/dzsparallaxer.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/isotope/isotope.pkgd.min.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/revolution/js/jquery.themepunch.tools.min.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/revolution/js/jquery.themepunch.revolution.min.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/smoothscroll/SmoothScroll.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/owl-carousel/owl.carousel.min.js"></script>
				<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDU79W1lu5f6PIiuMqNfT1C6M0e_lq1ECY"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/js/markerclusterer.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/js/rich-marker.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML/assets/plugins' ?>/map/js/infobox_packed.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML' ?>/assets/js/map.js"></script>
				<script src="<?php echo base_url() . 'theme/listty-2-1/Static HTML' ?>/assets/js/listty.js"></script>

				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
				<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</html>
