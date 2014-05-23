<?php 
//Conteúdo
switch ($page) {
	case home : $content = "home.html";
	break;

	default :	$content = "home.html";
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Projeto LMA - Universa</title>
<meta charset="UTF-8"> 
<noscript>
<link rel="stylesheet" href="css/5grid/core.css">
<link rel="stylesheet" href="css/5grid/core-desktop.css">
<link rel="stylesheet" href="css/5grid/core-1200px.css">
<link rel="stylesheet" href="css/5grid/core-noscript.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-desktop.css">
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]>
<link rel="stylesheet" href="css/style-ie9.css">
<![endif]-->
</head>
<body>
<div id="header-wrapper">
  <header id="header" class="5grid-layout">
    <div id="row">
      <div id="12u">
        <div id="logo">
          <h1><a href="#" class="mobileUI-site-name">Incidência de dengue no Brasil</a></h1>
          <p>Você faz parte deste grupo.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="12u">
        <div class="5grid-layout" id="menu">
          <nav class="mobileUI-site-nav">
            <ul>
              <li class="current_page_item"><a href="index.php?page=home">Home</a></li>
              <li><a href="?page=brasil">Brasil</a></li>
              <li><a href="?page=grandes-regioes">Grandes Regiões</a></li>
              <li><a href="?page=uf">UF</a></li>
              <li><a href="?page=capitais">Capitais</a></li>
              <li><a href="?page=regioes-metropolitanas">Regiões Metropolitanas</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
</div>
<div id="wrapper">
  <div class="5grid-layout" id="welcome">
    <div class="row">
      <div class="12u">
        <section class="content">
        
          <? include($content);	?>
        
        </section>
      </div>
    </div>
  </div>
  
</div>
<div class="5grid-layout" id="copyright">
  <div class="row">
    <div class="12u">
      <section>
        <p>&copy; Projeto LMA - Universa | Images: <a href="http://fotogrph.com/">Fotogrph</a> | Design: <a href="http://html5templates.com/">HTML5Templates.com</a></p>
      </section>
    </div>
  </div>
</div>
</body>
</html>