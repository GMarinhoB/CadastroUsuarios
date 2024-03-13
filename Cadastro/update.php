<?php

include_once('config.php');

    if(isset($_POST['update']))
    {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $profissao = $_POST['profissao'];

        $result = mysqli_query($conexcao, "UPDATE formulario SET cep='$cep',rua='$rua',cidade='$cidade',uf='$uf',bairro='$bairro',numero='$numero',complemento='$complemento',profissao='$profissao' WHERE nome='$nome' AND sobrenome='$sobrenome'");
    }

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <script src = "cep.js" type="text/javascript"></script>

    <title>Document</title>
</head>

<body>

    <div id="MenuSuperior">
        <a href="formulario.php"> Formulario </a>
        <a href="buscar.php"> Buscar Por Nome </a>
        <a href="update.php"  id="selected"> Update </a>
        <a href="delete.php"> Deletar </a>
    </div>

    <div id="AreaPrincipal">
        <form action="update.php" method="POST">
        
            <p> NOTE: A BUSCA SERÁ FEITA PELO </p>
            <p>NOME E SOBRENOME, NÃO OS ALTERE!</p>
            <label for="name"> Nome: </label>
            <input type="text" id="nome" name="nome" required>
            <br>
            <label for="name"> Sobrenome: </label>
            <input type="text" id="sobrenome" name="sobrenome" required>
            <br>
            <label for="name"> CEP: </label>
            <input type="text" id="cep" name="cep" required>
            <br>
            <label for="name"> Rua: </label>
            <input type="text" id="rua" name="rua" required>
            <br>
            <label for="name"> Cidade: </label>
            <input type="text" id="cidade" name="cidade" required>
            <br>
            <label for="name"> UF: </label>
            <input type="text" id="uf" name="uf" required>
            <br>
            <label for="name"> Bairro: </label>
            <input type="text" id="bairro" name="bairro" required>
            <br>
            <label for="name"> Número: </label>
            <input type="text" id="numero" name="numero" required>
            <br>
            <label for="name"> Complemento: </label>
            <input type="text" id="complemento" name="complemento">
            <br>
            <label for="name"> Profissão: </label>
            <input type="text" id="profissao" name="profissao">
            <br>
            <input type="submit" value="Update" name="update" id ="botao">
        </form>
       
    </div>
</body>
</html>