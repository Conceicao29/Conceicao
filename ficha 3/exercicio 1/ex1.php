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
    <title>exercicio 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
</head>
    <body>
        <?php
            $mes = $_POST["mes"];
            switch ($mes){
                case "1": echo "O mes correspondente ao número 1 é Janeiro"; break;
                case "2": echo "O mes correspondente ao número 2 é Fevereiro";break;
                case "3": echo "O mes correspondente ao número 3 é Março";break;
                case "4": echo "O mes correspondente ao número 4 é Abril";break;
                case "5": echo "O mes correspondente ao número 5 é Maio";break;
                case "6": echo "O mes correspondente ao número 6 é Junho";break;
                case "7": echo "O mes correspondente ao número 7 é Julho";break;
                case "8": echo "O mes correspondente ao número 8 é Agosto";break;
                case "9": echo "O mes correspondente ao número 9 é Setembro";break;
                case "10": echo "O mes correspondente ao número 10 é Outubro";break;
                case "11": echo "O mes correspondente ao número 11 é Novembro";break;
                case "12": echo "O mes correspondente ao número 12 é Dezembro";break;
                default: echo "Erro, valor introduzido não é permitido!!"; break;
            }
        ?>
            

    </body>
</html>