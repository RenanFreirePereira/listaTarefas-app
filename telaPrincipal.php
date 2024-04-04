<?php 

session_start();

?>
    <?php
            if(isset($_SESSION["logado"])){
    ?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Tarefas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>
 <form action="sairSessao.php" method="POST">
      <menu>

      <button  class="btn btn-danger" class="bntSair" style="position:absolute">Sair da minha conta</button>

        </menu>
    </form>


      <?php
          require ("formularioinsercao.php");
      ?>


  <?php
     require ("iteminsercao.php");
?>


</span>
   </div>
</body>
</html>
<?php
            } else{
                header("Location: index.php");
            }

?>