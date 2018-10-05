<?php

class User extends CI_Model
{
    public function getUser($email = '')
    {
        //  Esto retorna una matris
        $result = $this->db->query("SELECT * FROM login WHERE email = '" . $email . "' LIMIT 1");

        //  Ahora vamos a verificar si la tabla retornada contiene datos
        if($result->num_rows() > 0) //  num_rows() nos devuelve el numero de filas que contiene una matris o tabla
        {
            return $result->row(); //  si la query ya creada devuelve datos el resultado lo convertiremos en un array
        }else {
            return null;
        }
    }
}