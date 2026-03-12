<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processa</title>
</head>
<body>
    <?php
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $idade = $_POST['idade'];
        $ano_atual = date('Y');

        $nascimento = $ano_atual - $idade ;

        //echo $nome;
    ?>

    <p>O nome é: <?php echo $nome; ?> </p>
    <p>O email é: <?php echo $email;?></p>
    <p>A idade é: <?php echo $idade;?></p>
    <p>Seu ano de nascimento é: <?php echo $nascimento;?></p>
    
    <?php
        if ($idade >= 18) {
            echo "<p style='color:red;'>VOCÊ É MAIOR DE IDADE - COR VERMELHO";
        }else {
            echo "<p style='color:blue;'>VOCÊ É MENOR DE IDADE - COR AZUL ";
        }
        

        echo "<h1>Lista de clientes</h1>";
        echo "<ul>";
        //laço de repetição
        for ($i=1; $i <= 3 ; $i++) { 
            echo "<li>Cliente $i</li>";
        }

        echo "</ul>";
    ?>

    <!-- <h1>LISTA DE CLIENTES</h1>
    <ul>
        <li>Cliente 1</li>
        <li>Cliente 2</li>
        <li>Cliente 3</li>
    </ul> -->

</body>
</html>




