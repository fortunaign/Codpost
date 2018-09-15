<?php

class Readpost extends CI_Controller
{
    public function read($id = '')
    {
        $fila = $this->post->ReadPostbyId($id);
        $data = array(
            'titu'  => $fila->titulo,
            'desa'  => $fila->desarrollo,
            'date'  => $fila->fecha
        );
        $this->load->view('reading', $data);
    }
}