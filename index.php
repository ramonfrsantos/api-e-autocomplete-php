<?php

include_once './conexao.php';

?>

<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <title>Autocomplete Service</title>
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    
    </head>

    <body>

        <h1>Pesquisar</h1>
        <form method="POST" action="">
            <label>Usuário: </label>
            <input type="text" name="deslogin" id="deslogin" placeholder="Pesquisar pelo usuário">

            <input type="submit" name="SendPesqMsg" value="Pesquisar">
        </form><br><br>
        
        <?php

        $SendPesqMsg = filter_input(INPUT_POST, 'SendPesqMsg', FILTER_SANITIZE_STRING);
        if ($SendPesqMsg) {
            $deslogin = filter_input(INPUT_POST, 'deslogin', FILTER_SANITIZE_STRING);

            //SQL para selecionar os registros
            $result_msg_cont = "SELECT * FROM tb_usuarios WHERE deslogin LIKE '%" . $deslogin . "%' ORDER BY deslogin ASC LIMIT 7";
            $resultado_msg_cont = $conn->prepare($result_msg_cont);
            $resultado_msg_cont->execute();

            while ($row_msg_cont = $resultado_msg_cont->fetch(PDO::FETCH_ASSOC)) {
                echo "ID: " . $row_msg_cont['idusuario'] . "<br>";
                echo "Nome: " . $row_msg_cont['deslogin'] . "<br>";
                echo "Cadastro: " . $row_msg_cont['dtcadastro'] . "<br><hr>";
            }
        }

        ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

        <script>

            $(function () {
                $("#deslogin").autocomplete({
                    source: 'proc_pesq_msg.php'
                });
            });

        </script>

    </body>

</html>
