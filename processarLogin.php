<?php
require("conexao.php");

if(isset($_POST['id']) && isset($_POST['senha'])){
    $id = $_POST['id'];
    $senha = $_POST['senha'];

    $consultaVerificacaoUsuario = "SELECT * FROM usuarios WHERE id = '$id'";
    $resposta = $conexaoBancoDeDados->query($consultaVerificacaoUsuario);
    $dadosUsuario = $resposta->fetch();

    if($resposta->rowCount()){
        $senhaArmazenada = $dadosUsuario["senha"]; 

        if(password_verify($senha, $senhaArmazenada)){
            session_start();
            $_SESSION["logado"] = true;
            $_SESSION["user"] = $id; 
            header("Location: telaPrincipal.php");
            exit();
        } else {
            header("Location: index.php?incorreto=true"); 
            exit();
        }
    } else {
        header("Location: index.php?incorreto=true"); 
        exit();
    }
}
else{
    echo "<h1> ERRO </h1>";
}
?>
