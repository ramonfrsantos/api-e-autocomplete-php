<?php

$conn = new PDO("mysql:host=localhost;dbname=data_base","root","");

// ID de usuário a ser apagado
$id = 14;

// Apagando usuário do banco
$deleteUser = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$deleteUser->bindParam(":ID",$id);

// Executando o comando desejado
$deleteUser->execute();

echo "Dados apagados com sucesso."

?>