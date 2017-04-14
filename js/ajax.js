function objetoAjaxPrincipal()
{
	var xmlhttp=false;
	try {
		xmlhttp = new ActivexObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
		   xmlhttp = new ActivexObject("Microsoft.XMLHTTP");
		} catch (E) {
			xmlhttp = false;
  		}
	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}

function muestraPagina(datos,fondoImagen){
	var divHeader = document.getElementById('header');
	divHeader.style.background = "url('gifs/header/" + fondoImagen + "')";
	var divResultado = document.getElementById('pruebaajax');
	divResultado.innerHTML= "<div aling='center' style='padding-left:20px; padding-top:20px;'><p aling='center'><strong> Procesando su requerimiento, aguarde por favor ...</strong></p><p><img src='../gifs/esperando.gif' width='14' height='14' /></p></div>";
	var ajax=objetoAjaxPrincipal();
	ajax.open("GET", datos,true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			divResultado.innerHTML = ajax.responseText
		}
	}
	ajax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	ajax.send(null);
}
