<?php
$servidorlocal = "127.0.0.1";
$username = "useradmin";
$password = "fortuna95";
$dbname = "tienda";
$conn = mysqli_connect($servidorlocal, $username, $password, $dbname);
if(!$conn){
    die("Conexion fallida: ".mysqli_connect_error());
}
?>