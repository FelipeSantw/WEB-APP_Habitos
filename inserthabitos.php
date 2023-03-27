<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "listadehabito";

    $conexao = new mysqli( $servidor
                            , $usuario
                            , $senha
                            , $bancodedados);
                        
    if($conexao->connect_error){
        die("A conexão falhou: ".$conexao->connect_error);
    }

    $nome = $_GET["nome"];
    $sql = "INSERT INTO habito (nome, status)
    VALUES ('".$nome."','A')";

    if(!($conexao->query($sql) === TRUE)) {
        $conexao->close();
        die("Erro: ".$sql."<br>".$conexao->error);
    }
    $conexao->close();

    ?>
    