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
</head>

<style>

div img:hover {
    border: 3px solid white;
    overflow: hidden;
}

.body{
background-color: #141414;
color: white;
}


img{
width: 200px;
height:200px;
border-radius: 4px;
}

.perfis{
    margin-left: 30%;
    transform: translateX(-30%);
}

.perfil{
width: 150px;
height: 300px;
margin-left:210px;
text-align: center;
font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;
float: left;
color: grey;
}


.perfil2{
width: 150px;
height: 300px;
margin-left:90px;
text-align: center;
justify-content: center;
justify-items:center;
font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;
float: left;
color: grey;
}


h1{
font-size: 64px;
font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;
margin-top: 150px;
margin-left: 35%;
}

h3{
margin-left: 48px;
}


.gerenciar{
    width: 200px;
    height:40px;
    border: solid 2px grey; 
    margin-left: 675px;
    float: left;
    text-align: center;
    font-family: Netflix Sans,Helvetica Neue,Segoe UI,Roboto,Ubuntu,sans-serif;
    color: grey;
}

p{
margin-top:8px;
}
</style>
<body class="body">


<h1>Quem está assistindo?</h1>

<div class="perfis">
<div class="perfil">   
    <a href="http://localhost:8080/senac_php3/netflix/inicio.php">
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/e70b1333850498.56ba69ac32ae3.png">
    </a>
    <h3> João </h3>
</div>


<div class="perfil2">
    <a href="http://localhost:8080/senac_php3/netflix/inicio2.php">   
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/84c20033850498.56ba69ac290ea.png">
    </a>
    <h3> Henric </h3>
</div>

<div class="perfil2">   
<a href="http://localhost:8080/senac_php3/netflix/inicio3.php">
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/64623a33850498.56ba69ac2a6f7.png">
    </a>
    <h3> Rychard </h3>
</div>


<div class="perfil2">
    <a href="http://localhost:8080/senac_php3/netflix/inicio4.php">
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/bf6e4a33850498.56ba69ac3064f.png">
    </a>
    <h3> Brayan </h3>
</div>

<div class="perfil2">

    <a href="http://localhost:8080/senac_php3/netflix/inicio5.php">
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/bb3a8833850498.56ba69ac33f26.png">
    </a>
    <h3> Abner </h3>
</div>


<div class="gerenciar">
<p>Gerenciar perfis</p>
</div>

</div>

</body>
</html>