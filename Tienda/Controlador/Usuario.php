<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tienda | Administrador</title>
</head>
<body>
    <h1>Registro de Usuario</h1>
    <form action="../Modelo/Usuario.php" method="post" autocomplete="off">
    <ul>
        <li>ID <input type="text" name="ID" id=""> Persona <input type="text" name="Persona" id=""></li>
        <li>Usuario</li>
        <li><input type="text" name="User" id=""></li>
        <li>Contraseña</li>
        <li><input type="password" name="passa" id=""> Repetir <input type="password" name="passb" id=""></li>
        <li>Estado</li>
        <li>
            <select name="estado" id="">
                <option value="1">Activo</option>
                <option value="0">Desactivado</option>
            </select>
        </li>
        <li><input type="submit" name="set_luser" value="Enviar"><input type="reset" value="Cancelar"></li>
    </ul>
    </form>
    <?
    if($msj=='101'){ echo "Constraseñas no son iguales!!"; }
    ?>
</body>
</html>