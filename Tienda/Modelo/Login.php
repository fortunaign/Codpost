<?php
include 'database.php';
$query = "SELECT * FROM USUARIO WHERE NOMBRE = ";
$query .= "'".$_POST["user"]."'";
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        if($row["ESTADO"] == 1){
            if($row["CONTRA"] == $_POST["pass"]){
                header('Location:../inicio.php');
            }
        }
    }
}else{
    header('Location:../');
}
?>