<?php
            /* 
                ************DESCRIÇÃO DO DOCUMENTO************
                * Nome do ficheiro ex3.php                   *
                * UC: P2                                     *
                * @author Nuno Conceição                     *
                * @version 1.0                               *
                * Data: Setembro de 2019                     *
                * Descrição: terceiro exercicio prático      *
                **********************************************
            */
?>
<!Doctype html>
<html Lang="PT">

<head>
    <meta charset="UTF-8">
    <title>exercicio 8</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
</head>
    <body>
        <?php
            
           echo "4==5 <=>".(4==5)."<br>";
           echo "4!=5 <=>".(4!=5)."<br>";
           echo "4<5 E 6>10 <=>".(4<5 && 6>10)."<br>";
           echo "40<50 OU 60>90 <=>".(4<5 || 6>10)."<br>";
           echo "NOT (40<50 OU 60>90) <=>".(!40<50 || 60>90)."<br>";

        ?>
    </body>
</html>