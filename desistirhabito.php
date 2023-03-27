<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $bancodedados = "listadehabito";

    $conn = new mysqli($servidor
                        , $usuario
                        , $senha
                        , $bancodedados);
    
    if($conn->connect_error){
        die("Falha na conexão: ".$conn->connect_error);
    }

    $id = $_GET["id"];
    $sql = "DELETE FROM habito WHERE id=".$id;

    if(!($conn->query($sql) === TRUE)){
        die("Erro ao excluir: ".$conn->error);
    }

    $conn->close();
    header("Location: index.php")

    ?>