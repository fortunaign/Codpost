<?php

class Home extends CI_Controller
{
    public function index()
    {
        //print("Hola Mundo");
        $data = array('barra' => 'Blog | Inicio', 'title' => 'Negocio', 'subtitle' => 'Blog de facturacion', 'pro_table' => 'Productos');
        $this->load->view("home", $data);
    }
}