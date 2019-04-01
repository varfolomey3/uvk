<?php
    header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Уральская Вагоноремонтная компания</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/reset.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css"> 
	  <link rel="stylesheet" type="text/css" href="../css/slider_about.css">
	<link rel="apple-touch-icon" sizes="180x180" href="../img/favico/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../img/favico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/favico/favicon-16x16.png">
	<link rel="manifest" href="../site.webmanifest">
	<link rel="mask-icon" href="../img/favico/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#da532c">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<meta name="theme-color" content="#ffffff"></head>

<div class="header">

	<div class="logo">
		<a href="../index.php">
			<img src="../img/logo.png">
		</a>
		<p class="ln"><span>У</span>ральская<br><span>В</span>агоноремонтная<br><span>К</span>омпания</p>	
	</div >
	<div class="header_select">
		<ul>
			<li><a href="#">О&nbsp;компании</a></li>
			<li><a href="#">Услуги</a></li>
			<li><a href="contacts.php">Контакты</a></li>
		</ul>
	</div></div>

<div class="slider_about">
	<section class="slider">
	    <div>
	     	<img src="../img/about/1.jpg">
	    </div>
	    <div>
	      	<img src="../img/about/2.jpg">
	    </div>
	    <div>
	     	<img src="../img/about/3.jpg">
	    </div>
	    <div>
	     	<img src="../img/about/4.jpg">
	    </div>
	    <div>
	 		<img src="../img/about/5.jpg">
	    </div>
	</section>
		<div class="about_c"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p></div>
</div>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="../js/slick.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(document).on('ready', function() {
      $(".slider").slick({
        infinite: true,
        slidesToShow: 1,
  		slidesToScroll: 1,
  		dots: false,
  		arrows: false,
  		autoplay: true,
  		autoplaySpeed: 3500,
  		draggable: true,
      });});</script>

<div class="block_about">
	<div class="about_text"><p>
  	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p></div>
	<div class="about_pict">
		<img src="../img/about/about.jpg">
	</div>
</div>
<div class="license">
	<p>Наши лицензии:</p>
<button class="lic"><img src="../img/license/1.jpg"></button>
	<div class="lic_f">
	  <div class="lic_f_1">
	    <img src="../img/license/1.jpg">
	  </div>
	</div>
	<button class="lic"><img src="../img/license/2.jpg"></button>
	<div class="lic_f">
	  <div class="lic_f_1">
	    <img src="../img/license/2.jpg">
	  </div>
	</div>
	<button class="lic"><img src="../img/license/3.jpg"></button>
	<div class="lic_f">
	  <div class="lic_f_1">
	    <img src="../img/license/3.jpg">
	  </div>
	</div>
	<button class="lic"><img src="../img/license/4.jpg"></button>
	<div class="lic_f">
	  <div class="lic_f_1">
	    <img src="../img/license/4.jpg">
	  </div>
	</div>
	<button class="lic"><img src="../img/license/5.jpg"></button>
	<div class="lic_f">
	  <div class="lic_f_1">
	    <img src="../img/license/5.jpg">
	  </div>
	</div>
	<button class="lic"><img src="../img/license/6.jpg"></button>
	<div class="lic_f">
	  <div class="lic_f_1">
	    <img src="../img/license/6.jpg">
	  </div>
	</div>
</div>
<div class="footer">
	<p>АО &#171;Уральская вагоноремонтная компания&#187;<br>455005 Челябинская область г. Магнитогорск ул. Моховая д. 16<br>Телефон +7 (3519) 24-86-24<br>Факс +7 (3519) 24-86-22<br>Е-mail secretary@uvrk.ru</p></div>
</body>
</html>
