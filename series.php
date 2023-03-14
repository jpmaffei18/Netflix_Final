<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início - Netflix </title>
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
    width: 600px;
    height:150px;
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
    margin-left: 5px;
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
    
                <video width="320" height="240" autoplay muted class="bg_video">
                    <source src="The Flash - Trailer.mp4" type="video/mp4">
                    <source src="The Flash - Trailer.ogg" type="video/ogg">
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
                <img src="http://occ-0-1380-185.1.nflxso.net/dnm/api/v6/tx1O544a9T7n8Z_G12qaboulQQE/AAAABdhzox8O3jwhHwRzatM2J3cu9Gm1A9geKcErsEkJ97h9YfmKGlzSKdQtEsC-p1trDWoeulwhmdtWbxmXCz3VUBcLCNGGTiNmJ5rPglJaqK0.webp?r=166">
                

                <h1> The Flash </h1>
                <p>Um perito forense desperta de um coma com poderes especiais que serão <br> postos à prova na luta contra forças que ameaçam a cidade..</p> 
                
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
          <td><img src="https://occ-0-1380-185.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABXl6qAsDfmov4u5NZEFA_1Cf9AUs_zFqD383rCGbiaaiAXhbT9U8LAntTQbewVJaVkvM0vngxSd9k-cSVJo9SygP3O6ff1Y8xr1tjok6RgMase_cFoLry-vuvHq3X-oZgVr0WPf1RwWIVwdFCIHglELZ3C6o1PIz6k8ThkOphI0pTlsYAO7QRyik3gAWLA94whI0yn_svd7gHx7SA_rfDzl7No8IWN1X5wup5P2cRxP_dS0kgeOlrbTW1mmFcoS02tln8C2mv-to333Pj3dVGR8lQqVG.webp?r=615" style="border: solid 1px white"></td>
          <td><img src="https://occ-0-1380-185.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABd1gD34UIxSe67UnPedw5t54k1F-FgEJv9oyts8qtiGe5ntzzq1wFcpAjscToe9hFke1-37LLSVWomzI0fCsSAe-yrroZX8Dmfo.webp?r=3d2"></td>
          <td><img src="https://occ-0-1380-185.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABWJXCq_RuDFRkI7VvWHYhxmBKMa1omLYL4meMwVM--tIVTHEjeM3r0UT73ZtD6w2I5sABb24ZoJyCM5Saja1qHvKf4RY37615u6SmfXcf1Cerj1O0AsYHB_EmAiI5yXIdNUO.jpg?r=c04"></td>
          <td><img src="https://occ-0-1380-185.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABWjXGcZj2cpHSQndLvguD2zSc4D5YFYOP9La721fkRwLUTwVxf8dPuWAWrR8uzyNDmcjN7ZSfzwOQfDhLBWa3whR2qjOFiNtjQ9WDCGHglQpjKHPjf3_BCFI6M-_OH_p7g3MPwzlVbqSW8Wd0nD9X8L9yadO9Uc-fx11agsD_xlhNxsu8wEB5pro4N7LNrjqwEwQBnEhhIEp9cFiaE73qqFf0NJ8Ofie8uB0T2l61Nc_DsyLb4ESuUIVUejcTdLbOAGYRyDqL-kUKsBe4f7kVCcX9fW6IfMz0x0t0FyjyFprTT9YGGp0k85ndSs.jpg?r=769" alt="pre-playGlassOnio"></td>
          <td><img src="https://occ-0-1380-185.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABWFAGPVM3cZn0V4-bK1mTYgS19g7SCN8WFhtF5JY2QKsTiBxKYXQ1wG5J9XYsCUiLn7-LaPWGHpgvbVMlROTUf8guCMPibgTG-S40oE8Jp0LSwMcVsMXAYE6E4GT-PVfV3_F.jpg?r=e51"></td>
          <td><img src="https://occ-0-1380-185.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABY2d2r40Lahi2HRRVejrGuHgzzYS4MYnLweFt90_3Gv95beVIrrNZEPOb7qA0B6HJnU37pu92y4S2H2mD-LTzvHlLYpDitVqiaVRKFcxG6h6yUycSJK4U1iiCbzgTbrwMeFw.jpg?r=660"></td>
          
        </tr>
</div>
        
</body>
</html>