<?php
if(isset($_POST["set_user"])){
    include 'database.php';
    if($_POST["ID"] == ""){
        $query = "INSERT INTO PERSONA(CEDULA, NOMBRE_COM, SEXO, FECHA_NAC, ESTADO) VALUES('";
        $query .= $_POST["CEDULA"] . "','" . $_POST["NOMBRE"] . "','" . $_POST["SEXO"] . "','" . $_POST["FENA"] . "', '1')";
    }else{
        $query = "UPDATE PERSONA SET ";
        $query .= "NOMBRE = '" . $_POST["NOMBRE"] . "', SEXO = '" . $_POST["SEXO"] . "', FECHA_NAC = '" . $_POST["FENA"] . "'".$_POST["Estado"]."' WHERE ID = '" . $_POST["ID"]."'";
    }
    //echo $query;
    if(mysqli_query($conn, $query)){
        echo "Guardado!!";
    }else{
        echo "Error al guardar " .mysqli_error($conn);
    }
    mysqli_close($conn);
    header('Location:../Controlador/manetenimiento.php');
}
?>