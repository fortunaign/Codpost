<?php

class Home extends CI_Controller
{
    public function index()
    {
        if($this->session->userdata('log'))
        {
            $this->load->view('usuario/user_nav');
        }else{
            $this->load->view('invitado/nav');
        }
        
        $resultado = $this->post->getPost();
        $data = array('consulta' => $resultado);
        $this->load->view('invitado/body', $data);
        $this->load->view('invitado/footer');
        $this->load->view('invitado/login.php');
    }

    public function signin()
    {
        $this->load->view('invitado/nav');
    }

    public function read($id = '')
    {
        $this->load->view('invitado/nav');
            $fila = $this->post->ReadPostbyId($id);
            $data = array(
                'titu'  => $fila->titulo,
                'desa'  => $fila->desarrollo,
                'date'  => $fila->fecha
            );
            $this->load->view('reading', $data);
        $this->load->view('invitado/footer');
    }

    public function perfil()
    {
        
        if($this->session->userdata('log'))
        {
            $this->load->view('usuario/user_nav');
            $this->load->view('usuario/perfil');
            $this->load->view('invitado/footer');
        }else{
            header("Location: " . base_url());
        }
    }

    public function pro()
    {
        $this->load->view('usuario/user_nav');
        $this->load->view('usuario/pro');
        $this->load->view('invitado/footer');
    }
}