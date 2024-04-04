<form action="inserirItem.php" method="POST" class="inserirItem">

        <h4 id="titulo">Insira uma nova tarefa!</h4>
        <?php 

        if(isset($_GET['enviado'])){
            echo '<div class="alert alert-success" role="alert">'.
            'Enviado com sucesso!'.
           '</div>';
        } 
        else if(isset($_GET['erro'])){
            echo '<div class="alert alert-danger" role="alert">'.
            'Erro ao enviar :('.
           '</div>';
        } 
        else if(isset($GET_['exluido'])){
            echo '<div class="alert alert-danger" role="alert">'.
            'Item apagado com sucesso!'.
           '</div>';
        }

?>
        <span id="areaEnvio">
            <input type="text" name="tarefa" placeholder="Insira seu novo item" class="form-control textoEnviar" required>
            <button type="submit" class="btn btn-success" id="enviar" >Inserir 🔔</button>
        </span>
        <span style="display:flex; flex-direction:column">
        <label for="desc">Insira uma descrição para sua tarefa</label>
        <textarea name="desc" cols="40" rows="9" required name="desc" pattern="'~<[^>]+>|[;\'"\\\\]~"></textarea>
       </span>

   </form>
