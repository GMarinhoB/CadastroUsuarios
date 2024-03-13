<?php

    if(isset($_POST['enviar']))
    {
        include_once('config.php');

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

        $result = mysqli_query($conexcao, "INSERT INTO formulario(nome, sobrenome, cep, rua, cidade, uf, bairro, numero, complemento, profissao) VALUES ('$nome', '$sobrenome', '$cep', '$rua', '$cidade', '$uf', '$bairro', '$numero', '$complemento', '$profissao')");
    }

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "cep.js" type="text/javascript"></script>
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>

    <div id="MenuSuperior">
    <a href="formulario.php" id="selected"> Formulario </a>
    <a href="buscar.php"> Buscar Por Nome </a>
    <a href="update.php"> Update </a>
    <a href="delete.php"> Deletar </a>
    </div>

    <div id="AreaPrincipal">
        <form action="formulario.php" method="POST">
            <label for="name"> Nome: </label>
            <input type="text" id="nome" name="nome" required minlength="3" maxlength="24">
            <br>
            <label for="name"> Sobrenome: </label>
            <input type="text" id="sobrenome" name="sobrenome" required maxlength="99">
            <br>
            <label for="name"> CEP: </label>
            <input type="text" id="cep" name="cep" required maxlength=8>
            <p> DIGITE APENAS OS NÚMEROS, SEM ' - ' </p>
            <br>
            <label for="name"> Rua: </label>
            <input type="text" id="rua" name="rua"required >
            <br>
            <label for="name"> Cidade: </label>
            <input type="text" id="cidade" name="cidade"required >
            <br>
            <label for="name"> UF: </label>
            <input type="text" id="uf" name="uf"required >
            <br>
            <label for="name"> Bairro: </label>
            <input type="text" id="bairro" name="bairro"required >
            <br>
            <label for="name"> Número: </label>
            <input type="number" id="numero" name="numero" required>
            <br>
            <label for="name"> Complemento: </label>
            <input type="text" id="complemento" name="complemento">
            <br>
            <label for="name"> Profissão: </label>
            <input type="text" id="profissao" name="profissao">
            <br>
            <input type="submit" value="Enviar" name="enviar" id ="botao">
        </form>
        
        <br>
        <br>
    </div>

</body>
</html>