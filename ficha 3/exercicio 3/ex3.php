<?php
            /* 
                ************DESCRIÇÃO DO DOCUMENTO************
                * Nome do ficheiro ex3.php                   *
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
    <title>exercicio 3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
</head>
    <body>
        <?php
            $val1 = $_POST["val1"];
            $val2 = $_POST["val2"];
            $i=$val1;
            while($val1<$val2) {
                 $i=$i*($val1+1);
                 $val1++;
                }

                echo ("O valor da multiplicação dos numeros é ".$i."!");
                
             
           
        ?>
            

    </body>
</html>