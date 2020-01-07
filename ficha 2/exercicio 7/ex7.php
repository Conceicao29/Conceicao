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
    <title>exercicio 7</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-UA-compatible" content="IE-edge">
</head>
    <body>
        <div style="text-align:center;">
        <?php
            $teste = $_GET['teste'];
            $trabalho = $_GET['trabalho'];
            $projeto = $_GET['projeto'];

            echo "Nota do teste:".($teste*0.30)."valores (ponderação de 30%) <br>";
            echo "Nota do trabalho:".($trabalho*0.20)."valores (ponderação de 20%) <br>";
            echo "Nota do projeto prático:".($projeto*0.50)."valores (ponderação de 50%) <br>";
            echo "<strong> Nota final do aluno:".(($teste*0.30)+($trabalho*0.20)+($projeto*0.50))."valores </strong>";
        ?>
        </div>

    </body>
</html>