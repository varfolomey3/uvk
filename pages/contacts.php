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
	<meta name="theme-color" content="#ffffff">
	<script src="https://maps.api.2gis.ru/2.0/loader.js?pkg=full&skin=dark"></script>
<script type="text/javascript">
    var map;
	DG.then(function () {
        map = DG.map('map', {
            center: [53.4711,59.0516],
            zoom: 16,
            dragging : true,
            touchZoom: false,
            scrollWheelZoom: false,
            doubleClickZoom: false,
            boxZoom: false,
            geoclicker: false,
            zoomControl: false,
            fullscreenControl: false
        });

	    var myIcon = DG.icon({
	    	iconUrl: '../img/logo.png',
	    	iconSize: [80, 25],
	    	iconAnchor: [45, 35],
	    	popupAnchor: [85, -85],
		});
		var popup = DG.popup({maxWidth: 400, minWidth:385})
		    .setContent('<p id="popup"><p id="mname">АО  &#171Уральская вагоноремонтная компания&#187;</p><img id="mimg" src="../img/addres.png"><p id="mtext">&nbsp;&nbsp;Моховая д.16</p><img id="mimg" src="../img/phone.png"><p id="mtext">&nbsp;&nbsp; +7 (3519) 24-86-24</p><img id="mimg" src="../img/email.png"><p id="mtext">&nbsp;&nbsp;secretary@uvrk.ru</p></p>')
		DG.marker([53.4711,59.0484], {icon: myIcon}).addTo(map).bindPopup(popup);
		});
</script>
</head>

<div class="header">

	<div class="logo">
		<a href="../index.php">
			<img src="../img/logo.png">
		</a>
		<p class="ln"><span>У</span>ральская<br><span>В</span>агоноремонтная<br><span>К</span>омпания</p>	
	</div >
	<div class="header_select">
		<ul>
			<li><a href="about.php">О&nbsp;компании</a></li>
			<li><a href="#">Услуги</a></li>
			<li><a href="#">Контакты</a></li>
		</ul>
	</div>
</div>


<div class="contacts">
    <div class="contacts_1">
        <div class="photo">
            <img src="../img/contacts/b.jpg">
        </div>
        <div class="name"><p>Боднар<br>Виктор<br>Евгеньевич</p></div>
        <div class="post"><p>Генеральный директор</p></div>
        <div class="nm"><p>Тел: 24-86-20</p></div></div>
    <div class="contacts_1">
        <div class="photo">
            <img src="../img/contacts/r.jpg">
        </div>
        <div class="name"><p>Рузанова<br>Зоя<br>Александровна</p></div>
        <div class="post_l"><p>Первый заместитель генерального директора </p></div>
        <div class="nm"><p>Тел: 24-86-30</p></div></div>
    <div class="contacts_1">
        <div class="photo">
            <img src="../img/contacts/m.jpg">
        </div>
        <div class="name"><p>Морин<br>Виталий<br> Владимирович</p></div>
        <div class="post"><p>Главный инженер</p></div>
        <div class="nm"><p>Тел: 24-86-20</p></div></div>
    <div class="contacts_1">
        <div class="photo">
            <img src="../img/contacts/i.jpg">
        </div>
        <div class="name"><p>Юхименко<br>Елена<br>Геннадьевна</p></div>
        <div class="post_xl"><p>Заместитель генерального директора по качеству и технологии</p></div>
        <div class="nm"><p>Тел: 24-86-20</p></div></div>
    <div class="contacts_1">
        <div class="photo">
            <img src="../img/contacts/bb.jpg">
        </div>
        <div class="name"><p>Бобринский<br>Вячеслав<br>Александрович</p></div>
        <div class="post"><p>Финансовый директор</p></div>
        <div class="nm"><p>Тел: 24-86-20</p></div></div>
</div>
<div class="requisites">
	<p class="reqv">Наши реквизиты:</p>
	<div class="req">
		<p><span>Акционерное общество «Уральская вагоноремонтная компания» (АО «УВК»)
		</span></p>
		<p><span>Генеральный директор:</span> Боднар Виктор Евгеньевич</p>
 		<p><span>Адрес:</span> 455005, Челябинская область г. Магнитогорск, ул. Моховая д. 16</p>
 		<p><span>E-mail:</span> secretary@uvrk.ru</p>
 		<p><span>Телефон:</span> +7 (3519) 24-86-24</p>
 		<p><span>Факс:</span> +7 (3519) 24-86-22</p>
 		<div class="dwnl"><p><a href="../doc/requisites.pdf" download>Скачать реквизиты</a></p></div>
	</div>	
	<div class="req">
		<p><span>ИНН:</span> 7705742646</p>
		<p><span>КПП:</span> 745601001</p>
		<p><span>ОГРН:</span> 1067746823836</p>
		<p><span>Рассчетный счет:</span> 40702810772000010616 Отделение № 8597 Сбербанка России г. Челябинск</p>
		<p><span>БИК:</span> 047501602</p>
		<p><span>Корреспондентский счет:</span> 30101810700000000602</p>
		<p><span>ОКПО:</span> 96499777</p>
		<p><span>ОКФС:</span> 34</p>
		<p><span>ОКАТО:</span> 75438372000</p>
		<p><span>ОКОПФ:</span> 67</p>
		<p><span>ОКВЭД:</span> 35.20.9</p>
	</div>
</div>
<div id="map" style="width:100%; height:862px"></div>

<div class="footer">
	<p>АО &#171;Уральская вагоноремонтная компания&#187;<br>455005 Челябинская область г. Магнитогорск ул. Моховая д. 16<br>Телефон +7 (3519) 24-86-24<br>Факс +7 (3519) 24-86-22<br>Е-mail secretary@uvrk.ru</p></div>
</body>
</html>
