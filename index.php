<?php
require_once("inc".DIRECTORY_SEPARATOR."config.php");

$sql = new Sql();
$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
echo json_encode($usuarios);
?>