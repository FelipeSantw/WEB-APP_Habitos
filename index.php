<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="listahabitos.css">
    <title>Lista de Hábitos.</title>
</head>
<body>
    <div class="center">
        <h1>Lista de Hábitos</h1>
        <p>Cadastre aqui os hábitos que você tem que vencer para melhorar sua vida!</p>
            <?php
            // Obter lista de dados do MySQL

            $servidor = "localhost";
            $usuario = "root";
            $senha = "";
            $bancodedados = "listadehabito"

            //Criar conexão com o BD:

            $conexao = new mysqli($servidor
                                , $usuario
                                , $senha
                                , $bancodedados);
            
            if($conexao->connect_error){
                die("Falha na conexão: ".
                $conexao->connect_error);
            }

            $sql = " SELECT id ". 
                    "     , nome ".
                    " FROM habito ".
                    "WHERE status = 'A'";
            $resultado = $conexao->query($sql);

            if($resultado->num_rows > 0){
                ?>
            
            <br />
            <table class="center">
                <tbody>
                    <?
                    while($registro = $resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td><? echo $registro["nome"]; ?></td>
                        <td><a href="vencerhabito.php?id=<? echo $registro["id"]; ?>">Vencer</a></td>
                        <td><a href="desistirhabito.php?id=<? echo $registro["id"]; ?>">Desistir</a></td>
                    </tr>
                    <? 
                    }
                    ?>
                </tbody>
            </table>
        <p>Continue mudando sua vida!</p>
        <p>Cadastre mais Hábitos!</p>
                    <? 
            } else {
                ?>
            <p>Você não possui hábitos cadastrados!</p>
            <p>Comece já a mudar sua vida!</p>
                <?
            }
            $conexao->close();
            ?>
            <a href="novohabito.php">Cadastrar Hábito</a>
    </div>
</body>
</html>