<?php
try{
    session_start(); 
    require("conexao.php");
    $nomeItem = $_GET["itemExclusao"];
    $idUsuario = $_SESSION["user"];
    $SQLExclusao = "DELETE FROM tarefas WHERE tarefaNome = '$nomeItem'";
    $conexaoBancoDeDados->query($SQLExclusao);
    header("Location: telaPrincipal.php?exluido=true");
    exit();
} catch(Exception $e){
    echo "Erro ao excluir, tente novamente";
}

?>