<?php
if(isset($_POST["set_luser"]) && $_POST["passa"] == $_POST["passb"]){
    include 'database.php';
    if($_POST["ID"] == ""){
        $query = "INSERT INTO USUARIO(PERSONA, NOMBRE, CONTRA, ESTADO) VALUES('";
        $query .= $_POST["Persona"] . "','" . $_POST["User"] . "','" . $_POST["passa"] ."', '1')";
    }else{
        $query = "UPDATE USUARIO SET ";
        $query .= "CONTRA = '" . $_POST["passa"] ."'".$_POST["estado"]."' WHERE ID = '" . $_POST["ID"]."'";
    }
    //echo $query;
    if(mysqli_query($conn, $query)){
        echo "Guardado!!";
    }else{
        echo "Error al guardar " .mysqli_error($conn);
    }
    mysqli_close($conn);
    header('Location:../Controlador/Usuario.php');
}else{
    header('Location:../Controlador/Usuario.php?msj=101');
}
?>