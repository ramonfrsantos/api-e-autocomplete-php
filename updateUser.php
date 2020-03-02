<?php

$conn = new PDO("mysql:host=localhost;dbname=data_base","root","");

// Dados a serem alterados
$idantigo = 15;
$idnovo = 11;
$login = "Eduarda";
$password = "44444";
$cadastro = "505050";

// Modificando usuário no banco
$updateUser = $conn->prepare("UPDATE tb_usuarios SET idusuario = :IDNOVO, deslogin = :LGIN, dessenha = :PASS, dtcadastro = :CADASTRO WHERE idusuario = :IDANTIGO");

$updateUser->bindParam(":LGIN",$login);
$updateUser->bindParam(":PASS",$password);
$updateUser->bindParam(":CADASTRO",$cadastro);
$updateUser->bindParam(":IDNOVO",$idnovo);
$updateUser->bindParam(":IDANTIGO",$idantigo);

// Executando o comando desejado
$updateUser->execute();

echo "Dados modificados com sucesso."

?>