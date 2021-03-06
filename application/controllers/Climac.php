<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Climac extends CI_Controller {
    
    function __construct()
{
   parent::__construct();
   $this->load->model('Clima_model', 'geografia');
}

public function index(){
    $this->load->view('clima/principal.php'); // Voy a la vista.s
}
public function climaget(){
    $pais = $_POST['pais'];
    $provincia = $_POST['provincia'];
    $division = $_POST['division'];
    $provincia = $this->geografia->adecuartexto($provincia); // Adecuo los caracteres especiales.
    $division = $this->geografia->adecuartexto($division); // Adecuo los caracteres especiales.
    $response=$this->geografia->getclima($pais, $provincia, $division);
    echo $response; //El response lo recibe el success: function de la llamada de Ajax.
}
}
