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
            $val1 = $_POST["val1"];
            $val2 = $_POST["val2"];
            for($i=$val1 ; $i<=$val2 ; $i++) {
                if ( $i % 2 == 0 ) {
                    echo ($i." ");
                }
                
            } 
           
        ?>
            

    </body>
</html>