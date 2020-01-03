
        <?php
            include('database.inc.php');
            if (isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["numero"]))
            {
                $nome =  $_POST["nome"];
                $email =  $_POST["email"];
                $telemovel =  $_POST["numero"];
                $data_checkin =  $_POST["checkin"];
                $data_checkout =  $_POST["checkout"];
                $id_quarto =  $_POST["quarto"];
                $id_plano =  $_POST["plano"];
                $observacoes =  $_POST["observacoes"];

                

                try{
                    $insert_cliente = $fpma->prepare('INSERT INTO cliente(nome, email, telemovel) VALUES( :nome, :email, :telemovel )');
                    $insert_cliente->execute(array(
                        ':nome' => $nome,
                        ':email' =>  $email,
                        ':telemovel' => $telemovel, 
                    ));

                    if ($insert_cliente->rowCount() == 1) {
                        echo "<div class='alert alert-success' role='alert'>Inserido com sucesso!</div>";

                        $insert_reserva = $fpma->prepare('INSERT INTO reserva(id_cliente, id_quarto, id_plano, data_checkin, data_checkout, observacoes) VALUES( :id_cliente, :id_quarto, :id_plano, :data_checkin, :data_checkout, :observacoes )');
                        $insert_reserva->execute(array(
                            ':id_cliente' => $fpma->lastInsertId(),
                            ':id_quarto' =>  $id_quarto,
                            ':id_plano' => $id_plano, 
                            ':data_checkin' => $data_checkin, 
                            ':data_checkout' => $data_checkout, 
                            ':observacoes' => $observacoes, 
                        ));
    
                        if ($insert_reserva->rowCount() == 1) {
                            echo "<div class='alert alert-success' role='alert'>Inserido com sucesso!</div>";
                            
                        } else {
                            echo "<div class='alert alert-danger' role='alert'>Erro ao inserir!</div>";
                        }
                    } else {
                        echo "<div class='alert alert-danger' role='alert'>Erro ao inserir!</div>";
                    }
                } catch(PDOException $e) {
                    echo "<div class='alert alert-danger' role='alert'>$e->getMessage()</div>";
                }
                ?>
                <script type="text/javascript">
                window.location = "http://localhost/site/bootstrap/index.php";
                </script> 
                <?php

                 
            }
        ?>

    </body>
</html>