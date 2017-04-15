<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class clima_model extends CI_Model{
    
function getclima($pais, $provincia, $division){ //Funcion que conecta con www.smn.gov.ar
header("Content-Type: text/html; charset=ISO-8859-1"); // Necesario para visualizar ñ y acentos.
if($provincia=="Buenos Aires F.D."){ // Si es Capital Federal la URL es diferente.
    $url = "http://www.smn.gov.ar/?mod=pron&id=1";
}
else{
  $url = "http://www.smn.gov.ar/?mod=pron&id=4&provincia=".$provincia."&ciudad=".$division; //Construyo la busqueda basada en los datos.  
}
if($provincia=="Buenos%20Aires" && $division=="Haedo"){ //Para Haedo no existe, el mas cercano es Morón.
    $url = "http://www.smn.gov.ar/?mod=pron&id=4&provincia=Buenos%20Aires&ciudad=Mor%F3n";
}
//Procedimientos utilizando curl para obtener el response de la pagina.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_HEADER,0); // Necesario para visualizar ñ y acentos.
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
curl_setopt($ch, CURLOPT_ENCODING, "gzip,deflate"); // This is what solved the issue (Accepting gzip encoding)   
$response = curl_exec($ch); //La variable response almacena el response de la pagina.
curl_close($ch);
//Proceso de filtrado para obtener solo los datos del clima y no otras cosas.
$filtro = explode('<div id="pruebaajax">',$response,2);
$filtro = explode('VER PRONOSTICO 
      DE OTRAS CIUDADES',$filtro[1]);
$filtro = $filtro[0];
return $filtro; //Retorno el response filtrado solo con los datos del filtrado.
}

public function adecuartexto($texto){
    $texto = str_replace("á","%E1",$texto);
    $texto = str_replace("Á","%C1",$texto);
    $texto = str_replace("é","%E9",$texto);
    $texto = str_replace("É","%C9",$texto);
    $texto = str_replace("í","%ED",$texto);
    $texto = str_replace("Í","%CD",$texto);
    $texto = str_replace("ó","%F3",$texto);
    $texto = str_replace("Ó","%D3",$texto);
    $texto = str_replace("ú","%FA",$texto);
    $texto = str_replace("Ú","%DA",$texto);
    $texto = str_replace(" ","%20",$texto);
    $texto = str_replace("ñ","%F1",$texto);
    $texto = str_replace("Ñ","%D1",$texto);
    return $texto;
}

}