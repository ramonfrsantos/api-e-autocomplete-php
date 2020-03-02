<?php

$conn = new PDO("mysql:host=localhost;dbname=data_base","root","");

// Dados a serem cadastrados
$login = "Eduarda";
$pass = "22444"; // 5 dígitos
$cadastro = "442130"; // 6 dígitos

// Inserindo dados no banco
$getUser = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha, dtcadastro) VALUES(:LGIN,:PASS,:CADASTRO)");
$getUser->bindParam(":LGIN",$login);
$getUser->bindParam(":PASS",$pass);
$getUser->bindParam(":CADASTRO",$cadastro);

// Executando o comando desejado
$getUser->execute();

echo "Dados cadastrados com sucesso.";

?>