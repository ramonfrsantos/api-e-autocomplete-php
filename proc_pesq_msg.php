<?php
include_once './conexao.php';

$deslogin = filter_input(INPUT_GET, 'term', FILTER_SANITIZE_STRING);

//SQL para selecionar os registros
$result_msg_cont = "SELECT deslogin FROM tb_usuarios WHERE deslogin LIKE '%".$deslogin."%' ORDER BY deslogin ASC LIMIT 7";

//Seleciona os registros
$resultado_msg_cont = $conn->prepare($result_msg_cont);
$resultado_msg_cont->execute();

while($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)){
    $data[] = $row_msg_cont['deslogin'];
}

echo json_encode($data);