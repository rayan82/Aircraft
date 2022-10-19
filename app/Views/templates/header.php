<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title><?= esc($title); ?></title>
		<link href="inc/style.css" type="text/css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<header class="header">
			<link type="text/css" rel="stylesheet" href="inc/style2.css" />
			<img src="/img/avionlogin.jpg" alt="JS" style="width: 65px;"/>
			<a class="logo"><?= esc($title); ?></a>
  
			<input class="menu-btn" type="checkbox" id="menu-btn" />
			<label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
			<ul class="menu">
				<li><a href="#work">Nos avions</a></li>
				<li><a href="#about">ok</a></li>
				<li><a href="#careers">Catalogue</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</header>
	</body>
</html>