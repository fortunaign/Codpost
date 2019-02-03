<?php
require 'libreria.php';

$db = Database("127.0.0.1", "root", "", "dominio_web");
$query = "select art_pv as value from articulos where art_id = 434";

$a = Getvalue($db, $query);
$b = 0.00;

echo "Valor del producto: ".Seevalue($a);
echo "<br>";
echo "Valor: ".Seevalue($b);
echo "<br>";
$c = $a + $b;
echo "<h1>Total: ".Seevalue($c)."</h1>";