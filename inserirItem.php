<?php
    session_start();
    require("conexao.php");


    function salvarItem( $usuario, $texto,$titulo, $conexaoBancoDeDados){
        $SqlSalvarItem = "INSERT INTO tarefas(id, tarefaNome, descTarefa) VALUES ('$usuario', '$titulo', '$texto')";
        
        $conexaoBancoDeDados->query($SqlSalvarItem);
    }
    $usuario = $_SESSION["user"];
    $texto = $_POST["desc"];
    $titulo = $_POST["tarefa"];


        salvarItem($usuario, $texto, $titulo, $conexaoBancoDeDados );
        header("Location:telaPrincipal.php?enviado=true");
        
    
?>