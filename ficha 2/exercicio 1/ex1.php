<?php
            /* 
                ************DESCRIÇÃO DO DOCUMENTO************
                * Nome do ficheiro ex1.php                   *
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
    <title>exercicio 9</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
</head>
    <body>
        <?php
            $num = $_GET["numero"];
            if($num<100)
                echo "O número $_GET[numero] é menor que 100";
                else if($num>100)
                    echo "O número $_GET[numero] é maior que 100";
                    else
                        echo "O número $_GET[numero] é igual que 100";
        ?>

    </body>
</html>