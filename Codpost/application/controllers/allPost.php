<?php

class AllPost extends CI_Controller
{
    public function index()
    {
        $resultado = $this->post->getPost();
        $data = array('consulta' => $resultado);
        $this->load->view('allPost', $data);
    }
}