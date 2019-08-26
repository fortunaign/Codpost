<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mantenimiento | Registro Persona</title>
</head>
<body>
    <h1>Registro Persona</h1>
    <form action="../Modelo/Persona.php" method="post" autocomplete="off">
    <ul>
        <li>ID</li>
        <li><input type="text" name="ID" id=""></li>
        <li>Estado</li>
        <li>
        <select name="Estado" id="">
        <option value="1">Activo</option>
        <option value="1">Desactivado</option>
        </select>
        </li>
        <li>Cedula</li>
        <li><input type="text" name="CEDULA"></li>
        <li>Nombre</li>
        <li><input type="text" name="NOMBRE" id=""></li>
        <li>Sexo</li>
        <li>
        <select name="Sexo" id="">
        <option value="M">Masculino</option>
        <option value="F">Femenino</option>
        </select>
        </li>
        <li>Fecha Nacimiento</li>
        <li><input type="date" name="FENA" id=""></li>
        <li><input type="submit" name="set_user" value="Guardar"><input type="reset" value="Cancelar"></li>
    </ul>
</form>
</body>
</html>