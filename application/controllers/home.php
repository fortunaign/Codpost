<?php

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('invitado/nav');
        
        $resultado = $this->post->getPost();
        $data = array('consulta' => $resultado);
        $this->load->view('invitado/body', $data);

        $this->load->view('invitado/footer');
    }
}