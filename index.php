<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>
        body{
            width:100vw;
            height:100vh; 
            display:flex;
            align-items:center; 
            justify-content:center;
        }
        form{
            width:45%;
            border:1.5px solid lightblue;
            padding:4vw;
            border-radius:1vw;
        }
    </style>
</head>
<body>
    <!-- Formulário de login -->
    <form action="processarLogin.php" method="POST" id="loginFormulario">
    <h4>Faça seu login ou cadastro no nosso app de tarefas!</h4>
    <?php

      if(isset($_GET["incorreto"])){
            echo '<div class="alert alert-danger" role="alert">'.
            'Senha ou ID incorretos!'.
           '</div>';
        }
        
      if(isset($_GET["criadoUsuario"])){
                echo '<div class="alert alert-success" role="alert">'.
                'Usuário criado com sucesso!'.
               '</div>';
            }

        else if(isset($_GET["usuarioExiste"])){
                    echo '<div class="alert alert-danger" role="alert">'.
                    'Usuário já cadastrado! Entre com ele e sua senha!'.
                   '</div>';
                }
            ?>
    <label for="id">Digite seu ID: </label>
    <input type="text" placeholder="ID com letras e números" class="form-control" name="id" required>
  
    <label for="senha">Digite sua senha: </label>
    <input type="password" placeholder="Crie uma senha forte!" class="form-control" name="senha" required>

     <button type="submit" class="btn btn-success mt-3">Entrar</button>

     <input type="button" value="Me cadastrar no site" class="btn btn-warning mt-3" id="abrirCadastro">

    </form>

    <form action="executarCadastro.php" method="POST" hidden id="cadastroFormulario">
    <h4>Crie sua conta no nosso app de tarefas!</h4>

    <label for="id">Crie seu ID: </label>
    <input type="text" placeholder="ID com letras e números" class="form-control" name="id" required>
  
    <label for="senha">Crie sua senha: </label>
    <input type="password" placeholder="Crie uma senha forte!" class="form-control" name="senha" required>

     <button type="submit" class="btn btn-success mt-3">Me cadastrar</button>
     <!-- Botão para abrir o formulário de login -->
     <input type="button" value="Já tenho conta! Fazer login"class="btn btn-warning mt-3" id="abrirLogin" >

    </form>

    <!-- Script JavaScript para alternar entre os formulários -->
    <script>
        let BotaoabrirLogin = window.document.getElementById("abrirLogin");
        let BotaoCadastro = window.document.getElementById("abrirCadastro");

        BotaoCadastro.addEventListener("click", function(){

            window.document.getElementById("cadastroFormulario").hidden = false;
            window.document.getElementById("loginFormulario").hidden = true;
        })
        BotaoabrirLogin.addEventListener("click", function(){
            // Exibe o formulário de login e oculta o de cadastro
            window.document.getElementById("cadastroFormulario").hidden = true;
            window.document.getElementById("loginFormulario").hidden = false;
        })
    </script>

</body>
</html>
