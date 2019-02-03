
<?php

// Conexion a la base de datos
function Database($server, $user, $pass, $db){
    return mysqli_connect($server, $user, $pass, $db);
}

// Control de decimales
function Seevalue($v){
    $look = number_format($v, 2, '.', ',');
    return $look;
}

// Obtener valor unico
function Getvalue($db, $query){  
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $value = $row["value"];
        }
    }
    mysqli_close($db);
    return $value;
}

// Obtener valor multiples
function GetMulvalue($db, $query){
    $result = mysqli_query($db, $query);
    if(mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $value = $row["art_pv"];
        }
    }
    mysqli_close($db);
    return $value;
}

// Enviar datos
function Setvalue($db, $query){
    mysqli_query($db, $query);
    mysqli_close($db);
}

// guardar datos
if(isset($_POST['save'])){

    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    
    //print_r($_FILES);
    if($_FILES["img"]["error"]>0){
        echo "Error al cargar imagen";
    }else{

        $file_type = array("image/gif", "image/png", "image/jpg", "image/jpeg"); 
        $size_limit = 200;
        
        if(!in_array($_FILES["img"]["type"], $file_type)){
            echo "Formato no permitido";
        } elseif($_FILES["img"]["size"] <= $size_limit * 1024){
            
            $ruta = "files/inventario/";

            if(!file_exists($ruta)){
                mkdir($ruta);
            }

            $img = $ruta.$nombre."_img_".$_FILES["img"]["name"];

            if(move_uploaded_file($_FILES["img"]["tmp_name"], $img)){
                echo "Archivo guardado";
                $db = Database("127.0.0.1", "root", "", "apuntesweb");
                $query = "insert into inventario(in_nombre, in_img, in_precio) values('".$nombre."', '".$img."', '".$precio."')";
                Setvalue($db, $query);
            }else{
                echo "Archivo no guardado";
            }
        }else{
            echo "Tamaño de archivo no permitido";
        }
        
    }
}