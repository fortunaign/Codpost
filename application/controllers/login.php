<?php

class Login extends CI_Controller
{
    public function index()
    {
                        //clase input que contiene un metodo post.
        $email      = $this->input->post('email');
        $password   = $this->input->post('password');
        
        //  Arreglo para almacenar los datos en la clase sesion
        /*
        $data = array(
            'user'  => $email,
            'id'    => '0',
            'log'   => true
        );*/

        //   Ahora voy a cargar el modelo de logueo ya creado
       $this->load->model('user');

       //   ya cargado el modelo, utilizaremos el metodo getUser, donde le pasamos el parametro email
       $fila = $this->user->getUser($email); //    Este medoto retorna una fila, asi que los almacenaremos en una variable.

       //   Ahora comprovaremos si la fila no es null
       if($fila != null) // si es diferente de null contiene datos
       {
            /* En este punto coprovamos que el email ingresado 
            si existe en nuestra base de datos, ahora comprovaremos que
            la contraseña ingresada cohinsida con la contraseña de la db.
            */
            if($fila->password == $password) 
            {
                $data = array(
                    'user'  => $email,
                    'id'    => '0',
                    'log'   => true
                );
                header("Location: " . base_url());
            }else{
                header("Location: " . base_url());
            }
       }

        //  Agregando datos a la clase sesion gracias al arreglo ya creado.
        $this->session->set_userdata($data);
    }

    public function logOut()
    {
        $this->session->sess_destroy();
        header("Location: " . base_url());
    }
}