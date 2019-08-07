<?php
require_once("config.php");

$sql = new sql();

$usuarios =  $sql->SELECT("SELECT * FROM usuarios");

echo $usuarios;


?>