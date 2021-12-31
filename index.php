<?php
require_once("inc".DIRECTORY_SEPARATOR."config.php");

/*$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
echo json_encode($usuarios);*/

// carrega um usuario
/*$usuario = new Usuario();
$usuario->loadById(4);
echo $usuario;*/

//carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//carrega uma lista de usuarios buscando pelo login
//$busca = Usuario::search("j");
//echo json_encode($busca);

//carrega uma usuario usando login e senha
/*$usuario = new Usuario();
$usuario->login("jose","123456");
echo $usuario;*/

//insere um novo usuario
//$aluno = new Usuario();
//$aluno->setDeslogin("aluno");
//$aluno->setDessenha("@#$%");
//$aluno->insert();
//echo $aluno;

//Atualiza um novo usuario
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->update("professor","pr0f3s0r");

echo $usuario;
?>