<?php
    for ($i=1; $i <=5 ; $i++) { 
        echo $i;
        echo "<br>";
    }
    echo "<hr>";

    $nomes = ['FULANO', 'CICLANO', 'BELTRANO','KATARINA', "LELE"];
    //echo $nomes;
    // echo $nomes[0];
    // echo "<br>";
    // echo "<hr>";

    // $qtde = count($nomes);

    // for ($i=0; $i < $qtde ; $i++) { 
    //     echo $nomes[$i];
    //     echo "<br>";
    // }
    // echo "<hr>";
    
    foreach ($nomes as $indice => $valor) {
        echo $valor . "<br>";
        echo "<hr>";
    }

    
?>