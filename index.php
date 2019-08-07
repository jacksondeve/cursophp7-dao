<?php
require_once("config.php");

// $sql = new sql();

// $usuarios =  $sql->SELECT("SELECT * FROM usuarios");

// echo $usuarios;

// $root = new usuario();

// $root->loadbyid(5);

// echo $root;

/////////////////////////////

//carega lista de usuarios
// $lista = usuario::getlist();
// echo json_encode($lista);

////////////////////////////////

$usuario = new usuario();
$usuario->login("root","123456");

echo $usuario;
?>