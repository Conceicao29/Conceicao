
        <main>
        <form name="teste" method="POST" action="insert.inc.php">
        <br>
        <div class="row">
            <div class="col-3">
                <input type="text" class="form-control" placeholder="Nome" name="nome"> <br>
                <input type="number" class="form-control" placeholder="Telemóvel" name="numero"><br>
            </div>
            <div class="col-3">
                <input type="email" class="form-control" placeholder="Email" name="email"><br>
            </div>
        </div>
    
        <div class="form-row align-items-center">
            <div class="col-3 my-1">
            <select id="quarto" name="quarto" class="form-control">
                
               <?php 
                    $query = $fpma->query("SELECT id_quarto , tipo FROM quarto;");
                    $dados_quarto = $query->fetchAll(PDO::FETCH_ASSOC);

                    echo "<option value=''> --ESCOLHER-- </option>"; 
                    foreach ($dados_quarto as $quarto) {
                        echo "<option value='$quarto[id_quarto]'>$quarto[tipo]</option>";
                    }
                ?>
            </select>

            <br>
            
            <select id="plano" name="plano" class="form-control">
                <?php
                    $query = $fpma->query("SELECT id_plano, tipo_plano FROM plano;");
 					$dados_plano = $query->fetchAll(PDO::FETCH_ASSOC);

                     echo "<option value=''> --ESCOLHER-- </option>";
					foreach ($dados_plano as $plano) {
                        echo "<option value='$plano[id_plano]'>$plano[tipo_plano]</option>";
                    }
                ?>
                
                
            </select><br>
            </div>
        </div>
            <br>
            <label for="checkin">Check-in:</label>
            <input name="checkin" type="date" class="bordo"></input><br>
            <label for="checkout">Check-out:</label>
            <input name="checkout" type="date" class="bordo"></input><br>
            <br>
            <div class="col-md-12">
                <div class="row">
                <div class="col-6">
                    Observações:
                    <br>
                    <textarea name="observacoes" placeholder="Escreva aqui..."></textarea>
                </div>  
                </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submeter</button>
        </form>
    </main>
