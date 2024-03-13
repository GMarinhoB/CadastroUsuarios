

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
    <a href="buscar.php"  id="selected"> Buscar Por Nome </a>
    <a href="update.php"> Update </a>
    <a href="delete.php"> Deletar </a>
</div>
    
<div id="AreaPrincipal">

        

        <form action="buscar.php" method="POST">
            <p> Informe Nome ou Sobrenome </p>
            <label for="name"> Nome: </label>
            <input type="text" id="Formulario" name="nome">
            <br>
            <label for="name"> Sobrenome: </label>
            <input type="text" id="Formulario" name="sobrenome">
            <br>
            <input type="submit" value="Buscar" name="buscar" id ="botao">
        </form>


        <div id="retorno"> 
            <?php

            include_once('config.php');
            
            if(isset($_POST['buscar']))
            {

                $nome = $_POST['nome'];
                $sobrenome = $_POST['sobrenome'];
                $busca = mysqli_query($conexcao, "SELECT * FROM formulario WHERE(nome='$nome' OR sobrenome='$sobrenome')");
                
                if ($busca) {
                    while ($row = mysqli_fetch_assoc($busca)) {
                        echo "Nome: " . $row['nome'] . "<br>";
                        echo "Sobrenome: " . $row['sobrenome'] . "<br>";
                        echo "CEP: " . $row['cep'] . "<br>";
                        echo "Rua: " . $row['rua'] . "<br>";
                        echo "Cidade: " . $row['cidade'] . "<br>";
                        echo "UF: " . $row['uf'] . "<br>";
                        echo "Bairro: " . $row['bairro'] . "<br>";
                        echo "Número: " . $row['numero'] . "<br>";
                        echo "Complemento: " . $row['complemento'] . "<br>";
                    }
                } else {
                    // Caso erro
                    echo "Erro na consulta: " . mysqli_error($conexcao);
                }
                }

                
        ?>
        </div>
 
        
</div>
</body>
</html>