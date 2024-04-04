<?php

    try{

        require("conexao.php");
        require("validacao.php");
        if($_POST["senha"] != "" && $_POST["id"] != ""){
        $senha = $_POST["senha"];
        $id = $_POST["id"];

        $validacao = validarTextoGenerico($senha);
        $validacao = validarTextoGenerico($id);
        $sqlVerificarUsuarioExistente = "SELECT * FROM usuarios WHERE id = '$id'";
        $respostaBD = $conexaoBancoDeDados->query($sqlVerificarUsuarioExistente);
        if($respostaBD->rowCount() > 0){
            header("Location: index.php?usuarioExiste=true");
        } else{
            $senha = password_hash("$senha", PASSWORD_DEFAULT);
            $sqlSalvarUsuario = "INSERT INTO usuarios(id, senha) VALUES ('$id', '$senha')";
            $conexaoBancoDeDados->query( $sqlSalvarUsuario);
            header("Location: index.php?criadoUsuario=true");
            exit();

        }

        }

    } catch(Exception $e){
        echo "<h1> Algo deu errado :( </h1>" . $e;
    }


?>