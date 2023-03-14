<?php
if(isset($_POST['submit'])) {

    include_once('config.php');
    
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    
    $result = mysqli_query($conexao, "INSERT INTO usuarios(email, senha) values('$email', '$senha')");
    
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Planos, Preços e Assinaturas Netflix</title>
    <link href="https://i.pinimg.com/originals/0f/66/dc/0f66dc3fe8ea994a70ed78472b2aa50f.png" rel="icon">
</head>

<style>
body{
    padding: 0;
    margin: 0;
    height: 100vh;
    width:100% ;
    background-color: #f3f3f3;
    position: relative;
    background-image: cover;
    background-repeat: no-repeat;
    overflow-y: scroll;
}

img{
width: 200px;
height:125px;
padding-left:30px;
padding-top: 0;
position: relative;
}

.form{
    height: 550px;
    width: 400px;
    border-radius:5px;
    margin-left: 50%;
    padding: 30px;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 
    'Open Sans', 'Helvetica Neue', sans-serif;
    position: relative;
    z-index:90;
    transform: translateX(-50%)
}

</style>

<body>

<img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c529.png" style="float: left;">

<a href="http://localhost:8080/senac_php3/netflix/netflix.php" style="float: right; margin: 40px; text-decoration: none; color: black; font-weight:bolder; font-family:Arial, Helvetica, sans-serif"> Entrar</a>

<div class="form" >

<form method="POST" style="margin-top: 50%;">
        <p style="margin-bottom: 0; margin-left: 50px; font-size: 12px;"> PASSO 2 DE 3 </p>
        <p style="margin-top: 0; margin-bottom: 0; margin-left: 50px; font-size: 18px; font-weight: bolder"> Assista um mês grátis</p>
        <p style="margin-top: 1px;margin-left: 50px; font-size: 15px;"> Faltam só dois passos! <br> Nós também detestamos formulários. </p>
        <p style="margin-top: 0;margin-left: 50px; font-size: 15px; font-weight: bolder"> Crie sua conta.</p>

        <input type="email" name="email" id="email" class="email"placeholder="Email ou número de telefone" style="width: 320px; height: 45px; border: none; border-radius:2px; margin-bottom: 10px; margin-left: 50px; border: solid 1px; padding-left: 20px; font-size: 15px; " required/>
        <br/>
        <input type="password" name="senha" id="senha" class="senha" placeholder="Senha" style=" width: 320px; height: 45px; border: none; border-radius:2px; padding-left: 20px; margin-bottom: 5px;margin-left: 50px; border: solid 1px; font-size: 15px;" required/>
        
        <br/>
        <button type="button" onclick="mostrarSenha()" style="width: auto; font-size:10px;margin-top: 0; margin-left: 52px; margin-bottom: 15px;"> MOSTRAR</button>
        <script>
        function mostrarSenha(){
        var tipo = document.getElementById("senha")
        if(tipo.type == "password"){
            tipo.type ="text";
        }
        else{
            tipo.type ="password";
        }
        }
        </script>

        
        <input type="submit" onclick="location.href='perfis.php'" name="submit" id="submit" class="submit" style="background-color: red; color: white; width: 345px; height: 45px; border-radius:2px; border:solid 1px black; margin-bottom: 5px; margin-left: 50px; font-weight:900; font-size: 15px;" value="CONTINUAR">
        
        
 
            
        


        </a>
        </body>
        </html>