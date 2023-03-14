<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Podcasts </title>
    <link href="https://i.pinimg.com/originals/0f/66/dc/0f66dc3fe8ea994a70ed78472b2aa50f.png" rel="icon">
</head>

<style>

.img:hover{
    border: 3px solid white;
    overflow: hidden;
}    

.bg_video{
	position: fixed; 
	right: 0; 
	bottom: 0;
	min-width: 100%; 
	min-height: 100%;
	width: 100%; 
	height: auto; 
	z-index: -1000;
}

body{
    color: white;
    padding: 0;
    margin: 0;
    height:700px;
}

.menu_list{
    list-style: none;
    padding-left: 0;
    padding-top: 30px;
    padding-bottom: 0
    
}

.menu_list li{

    display: inline-block;
    margin-left: 15px;
    
}

.menu_list li a{

color: white;
text-decoration: none;
font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.logo img{
width: 150px;
height:75px;
float: left;
margin-left: 20px;
margin-right: 35px;
padding-top: 0;
}

.titulo img{
    width: 400px;
    height:250px;
    margin-left: 1px;
    margin-right: 900px;
    margin-top: 175px;
}

.titulo h1{
margin-left: 50px;
font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.titulo p{
margin-left: 50px;
font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;

}

.titulo button{
    width: 150px;
    height: 50px;
    color: black;
    border-radius: 5px;
    border: none;
    font-weight: bold;
    margin-left: 50px;
    float: left;
    font-size:20px;
}

.informacoes button{
    width: 200px;
    height: 50px;
    color: white;
    border-radius: 5px;
    border: none;
    font-weight: bold;
    margin-left: 20px;
    float: left;
    background-color: #6D6D6EB3;
    opacity: 100%;
}

.filmes{
    margin-top: 140px;
    padding-left: 40px;
}

.filmes p{
    font-weight:bolder;
    font-size: 30px;
    font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    margin-top: 50px;
    margin-left:10px;
}

.filmes img
{
    width: 240px;
    margin-left: 15px;
    border-radius:3px; 
}

.popup {
  margin: 70px auto;
  padding: 20px;
  background: black;
  border: solid 2px red;
  border-radius: 15px;
  width: 30%;
  position: relative;
  transition: all 5s ease-in-out;
}

.popup h2 {
  margin-top: 0;
  color: red;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: white;
}
.popup .close:hover {
  color: red;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
  color: white;
}

.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.content button{
    background-color: red;
    border-radius: 30px;
    color: white;
    width: 100px;
    height: 25px;
    margin-left: 15px;
    margin-top: 10px; 
}

.host {
    margin-left: 100px;
    border: solid 2px red;
    border-radius: 20px; 
    width: 130px;
    height: 110px;
    float: left;
}

.content p{
    margin-top: 10px;
    margin-left: 30px;
    
}

#numeroGerado{
    margin-left: 40px;
    float: left;
    margin-top: 0;
}

#numeroGerado2{
    margin-left: 0;
    margin-top: 0;
    float: left;
}

#numeroGerado3{
    margin-left: 0;
    margin-top: 0;
    float: left;
    margin-top: 0;
}

#numeroGerado4{
    margin-left: 0;
    margin-top: 0;
    float: left;
}

#numeroGerado5{
    margin-left: 0;
    margin-top: 0;
    float: left;
}

.convidado{
    float: left;
    margin-left: 100px;
    border: solid 2px red;
    width: 100px;
    border-radius: 20px; 
    height: 100px;
    padding: 10px;
    padding-bottom: 0;
}

.convidado input{
    margin-top: 20px;
    width: 90px;
}

</style>

<body>
    
                <video width="320" height="240" autoplay muted class="bg_video" loop>
                    <source src="podpah.mp4" type="video/mp4">
                    <source src="podpah.ogg" type="video/ogg">
                </video>

    <div class="container-fluid">


<header class="row">  

<div class="logo">
<img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c529.png"></div>
<div class="Título">
<ul class="menu_list">
    <li>
        <a href="inicio.php"> Início </a>
    </li>

    <li>
        <a href="series.php"> Séries </a>
    </li>

    <li>
        <a href="filmes.php"> Filmes </a>
    </li>

    <li>
        <a href="podcasts.php"> Podcasts </a>
    </li>

    <li>
        <a href="#"> Mais recentes </a>
    </li>

    <li>
        <a href="#"> Minha Lista </a>
    </li>

    <li>
    <a href="#popup1" >Party</a>
    

        <div id="popup1" class="overlay">
	<div class="popup">
		<h2>Netflix Party</h2>
		<a class="close" href="#">&times;</a>
		<div class="content">

    <div class="host">
    <button onclick="gerarNumero(10)"> HOST</button>
    <p> CÓDIGO: </p>
    <p id="numeroGerado"></p>
    <p id="numeroGerado2"></p>
    <p id="numeroGerado3"></p>
    <p id="numeroGerado4"></p>
    <p id="numeroGerado5"></p>
    </div>



    <script>
        function gerarNumero(tamanho) {
            
            var caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
            const numeroAleatorio = caracteres.charAt(Math.floor(Math.random() * caracteres.length));
            const numeroAleatorio2 = caracteres.charAt(Math.floor(Math.random() * caracteres.length));
            const numeroAleatorio3 = caracteres.charAt(Math.floor(Math.random() * caracteres.length));
            const numeroAleatorio4 = caracteres.charAt(Math.floor(Math.random() * caracteres.length));
            const numeroAleatorio5 = caracteres.charAt(Math.floor(Math.random() * caracteres.length));
            
            document.getElementById("numeroGerado").textContent = numeroAleatorio;
            document.getElementById("numeroGerado2").textContent = numeroAleatorio2;
            document.getElementById("numeroGerado3").textContent = numeroAleatorio3;
            document.getElementById("numeroGerado4").textContent = numeroAleatorio4;
            document.getElementById("numeroGerado5").textContent = numeroAleatorio5;

            
        }
    </script>

        <div class="convidado">
        <label>Insira o código de convite:<label>
        <br>    
        <input type="text"> </input>
        </div> 

		</div>
	</div>
</div>

    </li>

    <a href="http://localhost:8080/senac_php3/netflix/netflix.php" style="font-size: 20px; float: right; margin-right: 40px; padding-top:0; color: white; text-decoration: none; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; "> sair </a>
    <a href="http://localhost:8080/senac_php3/netflix/perfis.php">
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/e70b1333850498.56ba69ac32ae3.png" style="width: 30px; float: right; margin-right: 20px;">
    </a>
    <img src="https://www.udop.com.br/u_img/buscar/lupa.png" style="width: 30px; float: right; margin-right: 20px; ">
    
</ul>

</div>



</header>
</div>

<div id="hero" class="container-fluid">
    <div class="container-fluid">
        <div class="row" id="hero_infos">
            <div class="col-6">
                <div class="titulo">
                <img src="https://cdn-bchbc.nitrocdn.com/vdaMyoNtMTUgDnoGhiSJXhHWfZYNDDGk/assets/static/optimized/rev-e898bbc/wp-content/uploads/2021/04/podpah.png">
                

                <h1> Top 1 de hoje no Brasil </h1>
                <p>Podpah é um podcast brasileiro apresentado por Igor Cavalari e Thiago Marques. <br> É considerado um dos maiores podcasts do país.</p> 
                
                <button>Assistir</button>
                <div class="informacoes">
                <button>Mais Informações</button>
                </div>
                </div>



            </div>
        </div>
    </div>
</div>
            


        <div class="filmes">

        <p>Minha Lista</p>
        <tr>
          <td></td>
          <td><img src="https://i.scdn.co/image/ab6765630000ba8ada018f5c18ecebc5d3ff3b59" style="border: solid 1px white; margin-left: 50px;"></td>
          <td><img src="https://pbs.twimg.com/profile_images/1564999047261442048/HR9LoNrT_400x400.jpg"></td>
          <td><img src="https://yt3.googleusercontent.com/ytc/AL5GRJVjTc0SMu--M2Xp5T1LWnC7rHzRohdF9WYy6Kptcw=s900-c-k-c0x00ffffff-no-rj"></td>

          
          <td><img src="https://cdns-images.dzcdn.net/images/talk/cb93154c5865a5990e1b1726da6f5f4c/1000x1000.jpg" alt="pre-playGlassOnio"></td>
          <td><img src="https://yt3.googleusercontent.com/7r9qo3jwLYtWsuy08sceaSaQcXRSWdbwAwRWgF7Jdosa67603miVjyKJ9sDOH9DiztNy3RRbvQ=s900-c-k-c0x00ffffff-no-rj"></td>
          <td><img src="https://i.scdn.co/image/ab6765630000ba8a29534d8b9e2804724aaf569e"></td>
          
        </tr>
</div>
        
</body>
</html>