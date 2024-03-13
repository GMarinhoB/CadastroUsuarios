<?php

include_once('config.php');

    if(isset($_POST['delete']))
    {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];

        $result = mysqli_query($conexcao, "DELETE from formulario WHERE nome='$nome' AND sobrenome='$sobrenome'");
    }

?>

<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">

    <title>Document</title>
</head>

<body>

    <div id="MenuSuperior">
        <a href="formulario.php"> Formulario </a>
        <a href="buscar.php"> Buscar Por Nome </a>
        <a href="update.php"> Update </a>
        <a href="delete.php"  id="selected"> Deletar </a>
    </div>

    <div id="AreaPrincipal">
        
        <form action="delete.php" method="POST">
            <p> Insira AMBOS os campos: </p>

            <label for="name"> Nome: </label>
            <input type="text" id="Formulario" name="nome" required>
            <br>
            <label for="name"> Sobrenome: </label>
            <input type="text" id="Formulario" name="sobrenome" required>
            <br>
            <input type="submit" value="Delete" name="delete" id ="botao">
        </form>
        
    </div>
</body>
</html>