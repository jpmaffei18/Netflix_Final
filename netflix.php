<?php


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link href="https://i.pinimg.com/originals/0f/66/dc/0f66dc3fe8ea994a70ed78472b2aa50f.png" rel="icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>


<style> 

body{
    padding: 0;
    margin: 0;
    height: 100vh;
    width:100% ;
    position: relative;
    background-image: url(https://assets.nflxext.com/ffe/siteui/vlv3/e89c9679-2f5f-491d-924c-c58924a8ee4b/f9c4098e-22e1-4b5c-b668-47519ee56dc7/BR-pt-20221121-popsignuptwoweeks-perspective_alpha_website_large.jpg);  
    background-image: cover;
    background-repeat: no-repeat;
    overflow-y: scroll;
}

body::before {
content:'';
background-color: rgba(0,0,0,.65);
width: 100%;
height: 100%;
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
}

.form-control {

    border-bottom-right-radius: none;
    border-top-right-radius: none;
}

.form{
    height: 570px;
    width: 400px;
    background-color: rgba(0,0,0,.75);
    border-radius:5px;
    margin-left: 50%;
    margin-top:0;
    padding: 30px;
    padding-left:10px;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 
    'Open Sans', 'Helvetica Neue', sans-serif;
    color: white;
    position: relative;
    z-index:90;
    transform: translateX(-50%)


}
h1{
    text-align: left;  
    margin-left: 50px;
}

.inputs{
    padding: 5px;
    border-radius: 5px;
    
}



img{
width: 200px;
height:125px;
padding-left:30px;
padding-top: 0;
position: relative;
}



 
.box{
    text-align: left;
    justify-content: left;  
    align-items: left;
    margin-left: 50px;
    float: left;

}

p{float:left;}

</style>



<body>


<img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c529.png">


<div class="form">
<h1>Entrar</h1>
    <form method="POST">
        <input type="email" name="email" id="email" class="email"placeholder="Email ou número de telefone" style="width: 311px; height: 45px; border: none; border-radius:5px; margin-bottom: 10px; margin-left: 50px; background-color: #333333; padding-left: 20px;  color: white; font-size: 15px;" required/>
        <br/>
        
      <div class="input-group">

  <input type="password" name="password" id="password" class="form-control" data-toggle="password" placeholder="Senha" style="width: 200px; height: 45px; border: none; border-radius:5px; border-top-right-radius: 0px; border-bottom-right-radius: 0px; background-color: #333333; color: white; padding-left: 20px; margin-bottom: 5px;margin-left: 50px; font-size: 15px;" required/>

  <div class="input-group-append" >

    <span class="input-group-text" style=" background-color: #333333; border: none; width: 40px; height: 45px;">

      <i  class="fa fa-eye" onclick="mostrarSenha()" style="color: white;"></i>

    </span>

  </div>

</div>



        <script>
        function mostrarSenha(){
        var tipo = document.getElementById("password")
        if(tipo.type == "password"){
            tipo.type ="text";
        }
        else{
            tipo.type ="password";
        }
        }
        </script>
        <br/>
        
        
        <input type="submit" name="submit" id="submit" class="submit" onclick="location.href='perfis.php'" style="background-color: red; color: white; width: 311px; height: 45px; border-radius:5px; border:solid 1px black; margin-bottom: 5px; margin-left: 50px; font-weight:900; font-size: 15px; " value="Entrar"/>
        


        <br/>
        <div class="box">
        <input type="checkbox" style="opacity: 0.8" value="lembre-se de mim" style="margin-left: 10px; background-color:grey;"/> 
        <label for="lembre-se de mim" style="font-size: 12px; color:grey;">Lembre-se de mim</label>
        </div>
        
        <a href="https://www.netflix.com/br/LoginHelp" style="float: left; font-size:12px; margin-left: 90px; color:grey; text-decoration: none; margin-top: 4px;"> Precisa de ajuda?</a>
        
        <p style="margin-left:50px; margin-top:80px;color:grey;">Novo por aqui? <a href="http://localhost:8080/senac_php3/netflix/home.php" style="color: white; text-decoration: none;">Assine agora.</a></p> 
        <p style="margin-left:50px; margin-top: 0; color:grey; font-size: 13px; float: left;">Esta página é protegida pelo Google reCAPTCHA para garantir que você não é um robô. <a href="#" style="color: #0071eb; text-decoration: none;">Saiba mais.</a></p>
        
    </form>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script  src="/path/to/bootstrap-show-password.js"></script>



</body>
</html>