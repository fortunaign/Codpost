<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
<h1>Inventario</h1>
    <form action="libreria.php" method="post" enctype="multipart/form-data" autocomplete="off">
        <span>Nombre</span>
        <input type="text" name="nombre" id="" required>
        <span>Precio</span>
        <input type="text" name="precio" id="" required>
        <span>Imagen</span>
        <input type="file" accept="image/*" name="img" id="">
        <span>...</span>
        <input type="submit" name="save" value="Guardar">
    </form>
</body>
</html>