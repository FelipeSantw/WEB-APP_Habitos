<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="listahabitos.css">
        <title>Lista de Cadastro de Habitos.</title>
    </head>
    <body>

        <div class="center">
            <h1>Novo Hábito</h1>

            <form id="formulario" action="inserthabito.php">
                <p><label>Nome: <input type="text" id="nome" name="nome" autofocus></label></p>
                <p><input type="submit" value="Criar"></p>
            </form>

        </div>

        <script type="text/javascript">
            
            var validaForm = function(){
                var nomeHabito = document.getElementById("nome").value;
                if("" == nomeHabito){
                    alert("É necessário informar o nome do Hábito.");
                    return FALSE;
                }
            }

            document.getElementById("formulario").onsubmit = validaForm;
            
        </script>
    </body>
</html>