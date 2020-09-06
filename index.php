<?php 

require_once("config.php");

//Carrega um usuário
//$user = new Usuario();
//$user->loadById(1);
//echo $jose;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuários buscando pelo login
//$search = Usuario::search("jo");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("joao", "345678");
//echo $usuario;

/*Criando um novo usuário
$aluno = new Usuario("aluno", "@lun0");
$aluno->insert();
echo $aluno;
*/

$usuario = new Usuario();

$usuario->loadById(6);

$usuario->update("Professor", "!@#$%&+");

echo $usuario;

 ?>