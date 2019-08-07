<?php
require_once("config.php");

// $sql = new sql();

// $usuarios =  $sql->SELECT("SELECT * FROM usuarios");

// echo $usuarios;

$root = new usuario();

$root->loadbyid(5);

echo $root;

?>