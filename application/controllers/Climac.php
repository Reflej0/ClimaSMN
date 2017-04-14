<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Climac extends CI_Controller {
    
    function __construct()
{
   parent::__construct();
   $this->load->model('clima_model', 'geografia');
}

public function index(){
    $this->load->view('clima/principal.php'); // Voy a la vista.s
}
public function climaget(){
    $pais = $_POST['pais'];
    $provincia = $_POST['provincia'];
    $division = $_POST['division'];
    $provincia = str_replace(" ","%20",$provincia); //Antes de pasar al modelo adapto el espacio de la geolocalizacion en un %20.
    $division = str_replace(" ","%20",$division); //Antes de pasar al modelo adapto el espacio de la geolocalizacion en un %20.
    $response=$this->geografia->getclima($pais, $provincia, $division);
    echo $response; //El response lo recibe el success: function de la llamada de Ajax.
}
}
