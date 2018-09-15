<?php
class Post extends CI_Model
{
    public function getPost()
    {
        return $this->db->get('post');
    }

    public function ReadPostbyId($id = '') 
    {
        $resultado = $this->db->query("SELECT * FROM post WHERE id = '" . $id ."' LIMIT 1");
        return $resultado->row();
    }
}