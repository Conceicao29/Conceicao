<?php
            /* 
                ************DESCRIÇÃO DO DOCUMENTO************
                * Nome do ficheiro ex2.php                   *
                * UC: P2                                     *
                * @author Nuno Conceição                     *
                * @version 1.0                               *
                * Data: Outubro de 2019                     *
                * Descrição: terceiro exercicio prático      *
                **********************************************
            */
?>
<!Doctype html>
<html Lang="PT">

<head>
    <meta charset="UTF-8">
    <title>exercicio 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
</head>
    <body>
        <?php
            $numA = $_POST['numA'];
            $numB = $_POST['numB'];
            $numC = $_POST['numC'];
            $numD = $_POST['numD'];
            echo "<h1>O valor presente na letra A ( $numA ) somado com o valor presente na letra C ( $numC ) é igual a ".($numA+$numC).". </h1>";
            echo "<h1>O valor presente na letra B ( $numB ) multiplicado com o valor presente na letra D ( $numD ) é igual a ".($numB*$numD).". </h1>";
            if($numA+$numC<$numB*$numD)
                echo "<h1>O resultado da soma dos valores $numA e $numB é menor que o resultado da multiplicação dos valores $numB e $numD </h1>";
                else if($numA+$numC>$numB*$numD)
                    echo "<h1>O resultado da soma dos valores $numA e $numB é maior que o resultado da multiplicação dos valores $numB e $numD </h1>";
                    else
                    echo "<h1>O resultado da soma dos valores $numA e $numB é igual que o resultado da multiplicação dos valores $numB e $numD </h1>";
        ?>

    </body>
</html>