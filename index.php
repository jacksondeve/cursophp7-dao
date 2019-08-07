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

// $usuario = new usuario();
// $usuario->login("root","123456");

// echo $usuario;

///////////////////////////////////////

//criando novo usuario
                //$login, $senha
// $aluno new usuario();

// $aluno->setusulogin("vitoria");
// $aluno->setsenha("243523");

// $aluno->insert();

// echo $aluno;

////////////////////////////////////////

//UPDATE 

$usuario = new usuario();
$usuario->loadbyid();
$usuario->update("preofessor", "324324");

//////////////////////////////////////////////

$usuario = new usuario();
$usuario loadbyid(6);

$usuario->delete();

?>