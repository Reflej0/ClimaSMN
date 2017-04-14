<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type="text/css">
#lbOverlay {position: absolute;left: 0;	width: 100%; background-color: #000; z-index:900; cursor: pointer;}
#lbCenter, #lbBottomContainer {	position: absolute;	left: 50%;	overflow: hidden;	background-color: #fff; text-align: center; padding: 5px; z-index:900;}
.lbLoading {background: #fff url(gifs/loading.gif) no-repeat center; z-index:900;}
#lbImage {border: 10px solid #fff; z-index:900;}
#lbPrevLink, #lbNextLink {display: block; position: absolute; top: 0; width: 50%; outline: none; z-index:900;}
#lbPrevLink { left: 0; z-index:900;}
#lbPrevLink:hover { background: transparent url(prevlabel.gif) no-repeat 0% 15%; z-index:900;}
#lbNextLink {right: 0; z-index:900;}
#lbNextLink:hover {	background: transparent url(nextlabel.gif) no-repeat 100% 15%; z-index:900;}
#lbBottom { font-family: Verdana, Helvetica, sans-serif; font-size: 10px; 	color: #666; line-height: 1.4em; text-align: left; border: 5px solid #fff; border-top-style: none; z-index:900;}
#lbCloseLink { display: block; float: right; width: 66px; height: 22px;	background: transparent url(gifs/closelabel.gif) no-repeat center; margin: 5px 0; z-index:900;}
#lbCaption, #lbNumber {	margin-right: 71px; z-index:900;}
#lbCaption { font-weight: bold; z-index:900;}
</style>
<style>
#lightbox{
	background-color:#eee;
	padding: 10px;
	border-bottom: 2px solid #666;
	border-right: 2px solid #666;
	}
#lightboxDetails{
	font-size: 0.8em;
	padding-top: 0.4em;
	}	
#lightboxCaption{ float: left; }
#keyboardMsg{ float: right; }

#lightbox img{ border: none; } 
#overlay img{ border: none; }

#overlay{ background-image: url("js/lightbox/overlay.png"); }

* html #overlay{
	background-color: #000;
	background-color: transparent;
	background-image: url("js/lightbox/blank.gif");
	}
	
</style>
<script src="js/ajax.js" type="text/javascript"></script>
<style type="text/css">
								#header
								{
									background: url('gifs/header/fondo_principal.jpg');
									background-repeat:no-repeat;
									background-position:center;
								}
								</style><style type="text/css">
.divTemperatura {
	color:navy; 
	padding-top:10px;
	font-size:10px; 
	font-family:Verdana, Arial, Helvetica, sans-serif;
	padding-top:2px;
	visibility:hidden; 
	position:absolute; 
	left:371px; 
	top:0px; 
	width:240px; 
	height:85px; 
	background-image:url(http://www.smn.gov.ar/gifs/fondoestacion.gif) !important; 
	background-image: none; 
	background-repeat:no-repeat;
	filter: none !important; 
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://www.smn.gov.ar/gifs/fondoestacion.gif', sizingMethod='scale'); 
	z-index:300; 
	text-align:center;
}

.divTemperatura_ie6 {
	color:navy; 
	padding-top:10px;
	font-size:10px; 
	font-family:Verdana, Arial, Helvetica, sans-serif;
	visibility:hidden; 
	position:absolute; 
	left:368px; 
	top:0px; 
	width:240px; 
	height:83px; 
	background-image:url(http://www.smn.gov.ar/gifs/fondoestacion.gif) !important; 
	background-image: none; 
	background-repeat:no-repeat;
	filter: none !important; 
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='http://www.smn.gov.ar/gifs/fondoestacion.gif', sizingMethod='scale'); 
	z-index:300; 
	text-align:center;
}

html{
	width:100%;
}

#contenedorexplorer6 {
	height:auto;
	width: 780px;
	position:relative;
	margin:auto;
	background-repeat:repeat-y;
}

#contenedorgeneral {
	height:auto;
	width: 780px;
	position:relative;
	margin:auto;
	background-repeat:repeat-y;
}

.preload2 {background: url(http://www.smn.gov.ar/gifs/button4a.gif);}
.menuhorizontal {padding:0; margin:0; margin-bottom:0; list-style:none; height:24px; background:none; position:relative; font-family:arial, verdana, sans-serif; text-align:left; color:#543929;}
.menuhorizontal li.top {display:block; float:left; position:relative;}
.menuhorizontal li a.top_link {display:block; float:left; height:24px; margin-left:6px; line-height:25px; color:#333; text-decoration:none; font-size:11px; font-weight:bold; padding:0 0 0 6px; cursor:pointer; z-index:2;}
.menuhorizontal li a.top_link span {float:left; display:block; padding:0 10px 0 6px; height:40px;}
.menuhorizontal li a.top_link span.down {float:left; display:block; padding:0 10px 0 6px; height:25px;/*background:url(prodrop2/down.gif) no-repeat right top;*/}
.menuhorizontal li a.top_link:hover {color:#fff;  background:url(http://www.smn.gov.ar/gifs/button4a.gif);}
.menuhorizontal li a.top_link:hover span { background:url(http://www.smn.gov.ar/gifs/button4a.gif)}
.menuhorizontal li a.top_link:hover span.down { background:url(http://www.smn.gov.ar/gifs/button4a.gif)}

.menuhorizontal li:hover > a.top_link {color:#fff; background:url(http://www.smn.gov.ar/gifs/button4a.gif);}
.menuhorizontal li:hover > a.top_link span {background:url(http://www.smn.gov.ar/gifs/button4a.gif);}
.menuhorizontal li:hover > a.top_link span.down {background:url(http://www.smn.gov.ar/gifs/button4a.gif);}


.menuhorizontal table {border-collapse:collapse; width:0; height:0; position:absolute; top:0; left:0; width:160px;}

/* Default link styling */

/* Style the list OR link hover. Depends on which browser is used */

.menuhorizontal a:hover {visibility:visible;}
.menuhorizontal li:hover {position:relative; z-index:200;}

/* keep the 'next' level invisible by placing it off screen. */
.menuhorizontal ul, 
.menuhorizontal :hover ul ul, 
.menuhorizontal :hover ul :hover ul ul,
.menuhorizontal :hover ul :hover ul :hover ul ul,
.menuhorizontal :hover ul :hover ul :hover ul :hover ul ul {position:absolute; left:-9999px; top:-9999px; width:0; height:0; margin:0; padding:0; list-style:none;}

.menuhorizontal :hover ul.sub {left:6px; top:25px; background: #DBDB96; padding:0; /*border:1px solid #1E8BB5; white-space:nowrap;*/ width:auto; height:auto; font-weight:normal; z-index:300;}
.menuhorizontal :hover ul.sub li {display:block; /*height:20px; */position:relative; float:left; width:160px; border-bottom:1px solid #9F9F3B; border-left:1px solid #9F9F3B; border-right:1px solid #9F9F3B; margin-bottom:0; z-index:202;}
.menuhorizontal :hover ul.sub li a {display:block; height:auto; font-size:11px; padding:4px 3px; line-height:1; color:#12110A; text-decoration:none; z-index:300;}
.menuhorizontal :hover ul.sub li a.fly {background:#DBDB96  url(http://www.smn.gov.ar/vineta_menu.gif) no-repeat 150px 6px;}
.menuhorizontal :hover ul.sub li a:hover {background:#B2B258; color:#FFF;}
.menuhorizontal :hover ul.sub li a.fly:hover {background:#B2B258 url(http://www.smn.gov.ar/vineta_menu.gif) no-repeat 150px 6px;}
.menuhorizontal :hover ul li:hover > a.fly {background:#B2B258} 

.menuhorizontal :hover ul :hover ul,
.menuhorizontal :hover ul :hover ul :hover ul,
.menuhorizontal :hover ul :hover ul :hover ul :hover ul,
.menuhorizontal :hover ul :hover ul :hover ul :hover ul :hover ul
{left:160px; top:-1px; background: #DBDB96; padding:0; /* white-space:nowrap; */width:auto; z-index:300; height:auto;}
.menuhorizontal :hover ul.sub li ul {border-top:1px solid #9F9F3B; background: #DBDB96; z-index:300;}

#encabezado {
	height: 105px;
	width: 780px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 36px;
	font-style: normal;
	font-weight: bold;
	text-transform: uppercase;
	color: #CCCCCC;
}

#encabezado_ie6 {
	height: 103px;
	width: 780px;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 36px;
	font-style: normal;
	font-weight: bold;
	text-transform: uppercase;
	color: #CCCCCC;
}

#menu {
	background-image:none;
	height: 22px;
	width: 780px;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: normal;
	font-weight: bold;
}


.TABLE, TD, TH, OL {FONT-SIZE: 9pt; FONT-FAMILY: Verdana, Geneva, Arial, Helvetica, sans-serif; text-align:left;}

.titulo {FONT-WEIGHT: bold; TEXT-TRANSFORM: uppercase}

.normal {FONT-SIZE: 9pt; FONT-FAMILY: Verdana, Geneva, Arial, Helvetica, sans-serif; FONT-WEIGHT: bold;}

.mayusLink {FONT-WEIGHT: bold; FONT-SIZE: 7pt; TEXT-TRANSFORM: uppercase; LINE-HEIGHT: normal}

.box1 {PADDING-RIGHT: 5px; PADDING-LEFT: 5px; PADDING-BOTTOM: 3px; PADDING-TOP: 3px; FONT-SIZE: 10px;}
.box2 {PADDING-RIGHT: 10px; PADDING-LEFT: 10px; PADDING-BOTTOM: 7px; PADDING-TOP: 7px;}
.box3 {PADDING-RIGHT: 20px; PADDING-LEFT: 20px; PADDING-BOTTOM: 15px; PADDING-TOP: 15px;}
.box4 {BACKGROUND-COLOR: #CCCCCC}
.box5 {PADDING-RIGHT: 2px; PADDING-LEFT: 2px; PADDING-BOTTOM: 1px; PADDING-TOP: 1px;}
.box6 {PADDING-RIGHT: 20px; PADDING-LEFT: 20px; PADDING-BOTTOM: 15px; PADDING-TOP: 15px;}
.box7 {PADDING-RIGHT: 2px; PADDING-LEFT: 2px; PADDING-BOTTOM: 1px; PADDING-TOP: 1px; BACKGROUND-COLOR: #D9ECEC}

/* los tamaños de fuente se visualizan de forma diferente dependiendo del navegador
	no se recomienda usar valores fijos en px., sino su valor porcentual, o la sintaxis del tamaño (ej: small, medium, x-small, etc)
*/
.header {FONT-SIZE: 10px}

.font1 {FONT-SIZE: 10px}

.text1 {color: #0066FF;font-weight: bold;}

.negrita1-Bold {
	font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #000066;
	font-weight: bold;
	text-transform: uppercase;
	text-decoration: none;	
}

.verdana1 {FONT-SIZE: xx-small}

.azul {FONT-SIZE: 10px; FONT-WEIGHT: bold; TEXT-TRANSFORM: uppercase; COLOR: #003399}

.sinlink {COLOR: #000066; TEXT-DECORATION: none; font-family:Arial, Helvetica, sans-serif; font-size:12px;}

.verdanalink {FONT-SIZE: 10px; COLOR: #FFFFFF; TEXT-DECORATION: none}

.tdtitulo {FONT-SIZE: 17px;COLOR: #FFFFFF; PADDING-RIGHT: 2px;PADDING-LEFT: 3px;PADDING-BOTTOM: 2px;PADDING-TOP: 2px; BACKGROUND-COLOR: #8FA98F;line-height:22px;}

.tdvaac {FONT-SIZE: 18px; COLOR: #FFFFFF; PADDING-RIGHT: 2px; PADDING-LEFT: 3px; PADDING-BOTTOM: 2px; PADDING-TOP: 2px; BACKGROUND-COLOR: #CC6600}

.submenu {FONT-SIZE: 9px; COLOR: #FFFFFF; BACKGROUND-COLOR: #3366FF}

.footer {FONT-SIZE: 10px; COLOR: black; BACKGROUND-COLOR: #AABFD6}

.tdcolor {COLOR: #FFFFFF; BACKGROUND-COLOR: #8D8D6A}

.box_biblio {PADDING-RIGHT: 20px; PADDING-LEFT: 20px; PADDING-BOTTOM: 15px; PADDING-TOP: 15px;}

.f_tit {BACKGROUND-COLOR: #CCCCCC; FONT-WEIGHT: bold; line-height:20px}
.f1 {BACKGROUND-COLOR: #E0E9F4; line-height:15px}
.f2 {BACKGROUND-COLOR: #E6EFF8; line-height:15px;}
.f3 {BACKGROUND-COLOR: #BBCFB4; line-height:20px}
.f4 {BACKGROUND-COLOR: #CCCCCC; line-height:20px}
.f5 {BACKGROUND-COLOR: #CC6600; COLOR: #FFFFFF; FONT-WEIGHT: bold; line-height:20px}
.f6 {BACKGROUND-COLOR: #FFEAD5; line-height:20px}
.f7 {BACKGROUND-COLOR: #FFF3E1; line-height:20px}
.f8 {BACKGROUND-COLOR: #014D95; COLOR: #FFFFFF; FONT-WEIGHT: bold; line-height:20px}
.f9 {BACKGROUND-COLOR: #A8BED5; line-height:20px}
.f10 {BACKGROUND-COLOR: #AEACA8; COLOR: #FFFFFF; line-height:20px}

.bar1 {FONT-SIZE: 7pt; COLOR: #000066; TEXT-TRANSFORM: uppercase; TEXT-DECORATION: none; PADDING-LEFT: 2px; PADDING-RIGHT: 2px; PADDING-TOP: 2px; PADDING-BOTTOM: 2px; BACKGROUND-COLOR: #BBCFB4}
.bar2 {COLOR: #FFFFFF; BACKGROUND-COLOR: #8FA98F;PADDING-LEFT: 2px; PADDING-RIGHT: 1px; PADDING-TOP: 1px; PADDING-BOTTOM: 1px;line-height:18px;}
.bar3 {PADDING-LEFT: 1px; PADDING-RIGHT: 1px; PADDING-TOP: 1px; PADDING-BOTTOM: 1px; BACKGROUND-COLOR: #BBCFB4}
.bar4 {PADDING-LEFT: 1px; PADDING-RIGHT: 1px; PADDING-TOP: 1px; PADDING-BOTTOM: 1px; COLOR: #FFFFFF; TEXT-DECORATION: none; BACKGROUND-COLOR: #8D8D6A}
.bar5 {padding:1px; COLOR:#CCCCCC; TEXT-DECORATION: none; BACKGROUND-COLOR: #8FA98F}
.bar6 {COLOR: #FFFFFF; BACKGROUND-COLOR: #8FA98F;PADDING-LEFT: 2px; PADDING-RIGHT: 1px; PADDING-TOP: 1px; PADDING-BOTTOM: 1px;line-height:18px;}
.bar7 {
	BACKGROUND-COLOR: #BBCFB4; 
	border-bottom-color:#8FA98F;
	line-height:18px;
	PADDING-LEFT: 2px;
	PADDING-RIGHT: 1px; 
	PADDING-TOP: 1px; 
	PADDING-BOTTOM: 1px; 
	border-bottom-width:thin; 
	border-right-width:medium;
	margin-top: 34em; 
	margin-bottom: 1px;
	border-bottom-style:dotted;
	}

input {border: black 1px solid; FONT-FAMILY: Verdana; FONT-SIZE: 10px}

.barramenu {border-left:1px solid #073C74; border-right:1px solid #184D84; border-top:1px solid #014D95; border-bottom:1px solid #AEACA8; width:100%; margin-left:1px; /*	float:left; */background:#1A5692 url('../gifs/fondo_azul.gif') repeat-x; color:#A8BED5; padding-bottom:2px; background-color:#1A5692}
.barramenu a {font:bold 11px/20px Tahoma, Helvetica, sans-serif;color:#FFFFFF;text-decoration:none;line-height:23px;}
.barramenu a:hover {color:#D4D4D4;line-height:20px;} 

.barrabusc {width:100%;/*	margin-left:1px; *//* float:right;  */	background:#DDDDDD url('http://www.smn.gov.ar/gifs/fondo_gris.gif') repeat-x; border-top-color:#D4D4D4; border-right-color:#D4D4D4; border-bottom-color:#AEACA8; border-left-color:#D4D4D4; background-color:#DDDDDD/*	border:1px solid; */	}

.barracookie {	width:100%;/*	margin-left:1px; *//* float:right;  */background:#6191AD url('http://www.smn.gov.ar/gifs/fondo_cel.gif') repeat-x; border-top-color:#D4D4D4; border-right-color:#D4D4D4; border-bottom-color:#AEACA8; border-left-color:#D4D4D4; background-color:#6191AD/*	border:1px solid; */	}

</style>
<style type="text/css">

ul#navmenu-v,
ul#navmenu-v li,
ul#navmenu-v ul {
  margin: 0;
  border: 0 none;
  padding: 0;
  width: 169px; /*For KHTML*/  /*este es el ancho del menu principal*/
  list-style: none;
  z-index:70;
}

ul#navmenu-v:after /*From IE 7 lack of compliance*/{
  clear: both;
  display: block;
  font: 1px/0px serif;
  content: ".";
  height: 0;
  visibility: hidden;
    z-index:70;
}

ul#navmenu-v li {
  float: left; /*For IE 7 lack of compliance*/
  display: block !important; /*For GOOD browsers*/
  display: inline; /*For IE*/
  position: relative;
    z-index:70;
}

/* Root Menu */
ul#navmenu-v a {
  border: 1px solid #FFF;
  border-right-color: #CCC;
  border-bottom-color: #CCC;
  padding: 0 0px;
  display: block;
  background: #EEE;
  color: #666;
  font: bold 10px/18px Verdana, Arial, Helvetica, sans-serif;
  text-decoration: none;
  height: auto !important;
  height: 1%; /*For IE*/
    z-index:70;
}

/* Root Menu Hover Persistence */
ul#navmenu-v a:hover,
ul#navmenu-v li:hover a,
ul#navmenu-v li.iehover a {
  background: #8FA98F;
  color: #FFF;
    z-index:70;
}

/* 2nd Menu */
ul#navmenu-v li:hover li a,
ul#navmenu-v li.iehover li a {
  background: #EEE;
  color: #666;
    z-index:300;
}

/* 2nd Menu Hover Persistence */
ul#navmenu-v li:hover li a:hover,
ul#navmenu-v li:hover li:hover a,
ul#navmenu-v li.iehover li a:hover,
ul#navmenu-v li.iehover li.iehover a {
  background: #8FA98F;
  color: #FFF;
    z-index:300;
}

/* 3rd Menu */
ul#navmenu-v li:hover li:hover li a,
ul#navmenu-v li.iehover li.iehover li a {
  background: #EEE;
  color: #666;
    z-index:300;
}

/* 3rd Menu Hover Persistence */
ul#navmenu-v li:hover li:hover li a:hover,
ul#navmenu-v li:hover li:hover li:hover a,
ul#navmenu-v li.iehover li.iehover li a:hover,
ul#navmenu-v li.iehover li.iehover li.iehover a {
  background: #8FA98F;
  color: #FFF;
    z-index:300;
}

/* 4th Menu */
ul#navmenu-v li:hover li:hover li:hover li a,
ul#navmenu-v li.iehover li.iehover li.iehover li a {
  background: #EEE;
  color: #666;
    z-index:300;
}

/* 4th Menu Hover */
ul#navmenu-v li:hover li:hover li:hover li a:hover,
ul#navmenu-v li.iehover li.iehover li.iehover li a:hover {
  background: #8FA98F;
  color: #FFF;
    z-index:300;
}

ul#navmenu-v ul,
ul#navmenu-v ul ul,
ul#navmenu-v ul ul ul {
  display: none;
  position: absolute;
  top: 0;
  right: 166px;
    z-index:300;
}

/* Do Not Move - Must Come Before display:block for Gecko */
ul#navmenu-v li:hover ul ul,
ul#navmenu-v li:hover ul ul ul,
ul#navmenu-v li.iehover ul ul,
ul#navmenu-v li.iehover ul ul ul {
  display: none;
    z-index:300;
}

ul#navmenu-v li:hover ul,
ul#navmenu-v ul li:hover ul,
ul#navmenu-v ul ul li:hover ul,
ul#navmenu-v li.iehover ul,
ul#navmenu-v ul li.iehover ul,
ul#navmenu-v ul ul li.iehover ul {
  display: block;
    z-index:300;
}

#header
{
	margin: 0px;
	width:780px;
	height:155px;
}

#cabecera
{
	margin: 0px auto;
	padding: 0;
	width:780px;
	height:155px;
	float:right;
	text-align:left;
}

#contenedorPie{
	width:780px;
	height:65px;
	margin: 0px auto;
}

#pie
{
	width:742px; 
	height:53px; 
	background-image: url(http://www.smn.gov.ar/gifs/header/fondo_pie.jpg);	
	background-repeat:no-repeat; 
	float:left; 
	font-family:Verdana, Arial, Helvetica, sans-serif; 
	font-size:9px; 
	font-weight:normal; 
	color:#3D6080; 
	padding-top:12px; 
	padding-left:38px; 
	text-align:center;
}

#Items{
	width:170px;
	height:100%;
	margin: 0px;
	text-align:left;
	float:left;
}

#barra_buscar{
	width:170px;
	height:24px;
	margin: 0px;
	float:left;
	text-align:left;
}

#contenedor_global{
	width:780px;
	height:100%;
	margin: 0px auto !important;
	position:relative;
	background-image: url(http://www.smn.gov.ar/gifs/header/sombra.jpg);	
	background-repeat:repeat-y;
}

#barra_global{
	width:780px;
	height:24px;
	margin: 0px auto !important;
	position:relative;
	background-image: url(http://www.smn.gov.ar/gifs/header/sombra.jpg);	
	background-repeat:repeat-y;
}

#contenedor{
	width:608px;
	height:100%;
	margin: 0px auto;
	float:left;
}

#cookie{
	width:610px;
	height:19px;
	padding-top:5px;
	margin:0 auto;
	float:left;
}

.titulodia {background-color:#E0E9F4;padding:3px 3px 3px 10px; display:block; font:normal 12px/17px Arial, sans-serif;}

.pronextendido {margin-top:20px;}

.pronextendido ul li {width:178px;border: 1px dotted #E0E9F4; padding:3px 3px 10px 3px;text-align:center;font:normal 12px/17px Arial, sans-serif;float:left;margin-left:2px;display:inline; background-color:#C7DDB7;}

.pronextendido ul li .manana img, .pronextendido ul li .tarde img{margin:5px 0;}

.pronextendido .last {border-right: 1px dotted #E0E9F4;}

.manana {float:left;margin-left:3px;}

.tarde {float:right;}

.manana, .tarde {width:86px;margin-top:8px;text-align:center;}

.clLevelX{
position:absolute; 
padding:2px; 
font-family:tahoma,arial,helvetica; 
font-size:8pt 
}

.clLevelX{
background: url("gifs/header/fondo_menu.jpg");
background-repeat:repeat-y;
layer-background-color:#C2C270; 
color:#4D6980;
line-height:17px;
}

.alignRight{
	float:right !important;
	width:70px;
}
#menus {
	float:right;
	width:690px;
}
#botones {
	float:left;
	width:360px;
}

#tools {
	float:left;
	width:180px;
	position:relative;
}

#menu_arriba {
	position:relative;
}

#menu_abajo {
	position:relative;
}


#menu_arriba ul{
	margin: 0 auto;
	padding: 0;
	list-style-type: none;
}

#menu_abajo ul{
	margin: 0 auto;
	padding: 0;
	list-style-type: none;
}

#menu_arriba li{
	text-align:center;
	display:inline;
}

#menu_abajo li{
	text-align:center;
	display:inline;
}

#menu_arriba a{
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
	font-weight:bold;
	text-decoration:none;
	padding-top:4px;
	padding-bottom:7px;
	padding-right:8px;
	padding-left:8px;
	color: #4D6980;
}

#menu_abajo a{
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:11px;
	font-weight:bold;
	text-decoration:none;
	padding-top:4px;
	padding-bottom:7px;
	padding-right:8px;
	padding-left:8px;
	color: #4D6980;
}

#menu_arriba a {
	line-height:23px;
}

#menu_arriba a:hover{
	text-decoration:none;
}

#menu_abajo a:hover{
	text-decoration:none;
}

#menu_arriba a:hover{
	color:#543929;
}

#menu_arriba {
	width:630px;
	top: 2px;
}

#menu_abajo{
	width:750px;
	top: 107px;
}

#menu_abajo_datos{
	width:450px;
    position:relative;
}

#menu_abajo a{
	padding: 4px 3px 7px 3px;
}

#menu_abajo a:hover{
	color:#543929;
}

#form_buscar {
	margin:0 auto;
	padding:0;
	width:180px;
	text-align:right;
}

#switch {
	position:relative;
	width:180px;
	right: -75px;
	top:117px;
}
#switch a{
	font-family:Verdana, Arial, Helvetica, sans-serif;
	font-size:10px;
	font-weight:normal;
	color: #4D6980;
}

body {
	font-family: Arial, Helvetica, sans-serif;
	margin:0 auto;
	background-image:url(http://www.smn.gov.ar/gifs/header/fondo_verde.jpg);
	background-attachment:fixed; 
	padding-top:8px;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta http-equiv="imagetoolbar" content="no">
<meta http-equiv="X-UA-Compatible" content="IE=9">
<link href="gifs/iconsmn.ico" rel="shortcut icon" type="image/x-icon">
<title>Clima</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head> 
<body style="background-color:#F0F9EE;">
<div id="txtHint" class="table-responsive"></div>
</body> 
</html>
    <script>
        var pais =""; //Este parametro para la busqueda en Argentina no se utiliza.
        var provincia =""; //Este parametro identifica la provincia.
        var division = ""; //Este parametro identifica la subdivision de la provincia, ej: Ciudad, Partido, Localidad, Barrio, etc.
      $.getJSON('https://geoip-db.com/json/geoip.php?jsonp=?') //Llamada de JSON para obtener los datos basados en Geolocalizacion.
         .done (function(location) // Cuando la funcion esta en estado done.
         { //Parametros.
            pais = location.country_name;
            provincia = location.state;
            division = location.city;
            $.ajax({
        url: "<?php echo site_url()."/Climac/climaget"; ?>",
        data: {'pais': pais, 'provincia': provincia, 'division': division}, // Parametros.
        type: 'POST', //POST mas seguro que GET.
        success: function(responseText) { // Una vez que la funcion terminó (asincronía).
            document.getElementById("txtHint").innerHTML = responseText; // Lo que devuelve la función se plasma en el inner.
        }
                });
         });
    </script>
<?php



