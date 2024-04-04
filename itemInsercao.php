
<style>
  #containerItens{
    margin-top:7vw; 
    max-height:70vh;
    overflow: auto;
    border-left:0.2px solid black; 
    padding-left:2vw;
  }

</style>

<?php
require("conexao.php");
$sqlAcharItens = "SELECT * FROM tarefas WHERE id = '{$_SESSION['user']}'";
$resposta = $conexaoBancoDeDados->query($sqlAcharItens);
$contador = 0;
?>
 <div  id="containerItens">
  <h4>Sua lista de tarefas é aqui!  </h4>
<?php while($item = $resposta->fetch()){ 
    $contador++;

  ?>

  <div id="itens">
   <h1><?php echo $contador .".  ". $item["tarefaNome"]; ?></h1>
    <span>
   <div class="card">
  <div class="card-header">
    Descrição do item
  </div>
  <textarea class="card-body" readonly>
    <blockquote class="blockquote mb-0">
    <?php echo $item["descTarefa"]; ?>
    </textarea>
  </div>

</div>
<span style="display:flex; flex-direction:row; align-items: center;">
<form action="ExecutarexcluirItem.php?itemExclusao=<?php echo $item['tarefaNome']; ?>" method="POST" class="mt-3">
  <button type="submit" class="btn btn-danger">Excluir item ❌</button>

</form>
<form action="editarItemDaLista.php" class="mt-3 ml-2">
<button type="submit" class="btn btn-primary">Editar descrição 📝 </button>

</form>
</span>
<hr>

<?php } ?>
</div>

