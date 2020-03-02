<?php

$conn = new PDO("mysql:host=localhost;dbname=data_base","root","");

// Dados a serem alterados
$id = 10;
$login = "João";
$password = "54321";
$cadastro = "115112";

// Modificando usuário no banco
$updateUser = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LGIN, dessenha = :PASS, dtcadastro = :CADASTRO WHERE idusuario = :ID");

$updateUser->bindParam(":LGIN",$login);
$updateUser->bindParam(":PASS",$password);
$updateUser->bindParam(":CADASTRO",$cadastro);
$updateUser->bindParam(":ID",$id);

// Executando o comando desejado
$updateUser->execute();

echo "Dados modificados com sucesso."

?>