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


</style>

<body>
    
                <video width="320" height="240" autoplay muted class="bg_video">
                    <source src="Spider-man 3 (2007) - Trailer.mp4" type="video/mp4">
                    <source src="Spider-man 3 (2007) - Trailer.ogg" type="video/ogg">
                </video>

    <div class="container-fluid">


<header class="row">  

<div class="logo">
<img src="https://assets.stickpng.com/images/580b57fcd9996e24bc43c529.png"></div>
<div class="Título">
<ul class="menu_list">
    <li>
        <a href="inicio5.php"> Início </a>
    </li>

    <li>
        <a href="series5.php"> Séries </a>
    </li>

    <li>
        <a href="filmes5.php"> Filmes </a>
    </li>

    <li>
        <a href="podcasts5.php"> Podcasts </a>
    </li>

    <li>
        <a href="#"> Mais recentes </a>
    </li>

    <li>
        <a href="#"> Minha Lista </a>
    </li>

    <a href="http://localhost:8080/senac_php3/netflix/netflix.php" style="font-size: 20px; float: right; margin-right: 40px; padding-top:0; color: white; text-decoration: none; font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; "> sair </a>
    <a href="http://localhost:8080/senac_php3/netflix/perfis.php">
    <img src="https://mir-s3-cdn-cf.behance.net/project_modules/disp/bb3a8833850498.56ba69ac33f26.png" style="width: 30px; float: right; margin-right: 20px;">
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
                <img src="https://occ-0-1380-185.1.nflxso.net/dnm/api/v6/LmEnxtiAuzezXBjYXPuDgfZ4zZQ/AAAABVX1IY3HxFlVNXL6iBglgde2ZHsW48qDmC5DlIE4_SqxyXNWmTm_-T3H-HT_hKNRbIbtVAcXSkTKq_TntEv_a0arN5_ybpF6THboTOPSPdl5.png?r=331">
                

                <h1> Homem-aranha 3 </h1>
                <p>Peter Parker enfrenta uma nova safra de vilões e uma força misteriosa que <br> mexe não só com seu traje de Homem-Aranha, mas também com seu comportamento.</p> 
                
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
          <td><img src="https://occ-0-1380-185.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABZu9ZCpYV-wbClWuG3zYsQ7rtEwc3YYyXTg8kZyedBkkAiHa_M4u6esm_e7shfW8wmjqt9IB0JwA-mM-ANPjLUvnbonCH8rC1mg.webp?r=f41
" style="border: solid 1px white"></td>
<td><img src="https://occ-0-420-1740.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABYPB-5vbMXaodx2KCe0Cxiz5w8CBFHXZYN1Zzc8sC78BFNaTHUuEVBu2jLnQglc-9sLJKdPV2aDjTefdMdiOtWNTpUYYH8SwMuc.webp?r=91a"></td>
          <td><img src="https://occ-0-420-1740.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABY0IEqvZJ3BJFV_5X46A9EXvJSZpMLCUwps6q0TMKp-qkgDYrgjbw8SPNFztHIvvElGTpUtDr9_H0KUPxbOHN5OXLIw7P3U861Y.webp?r=2ed"></td>
          <td><img src="https://occ-0-1380-185.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABWQ_40IveCyyikW5TlUBwFPtRj77hPzcyo0OP6IVydTFsL5J1yJIiBciyg3E772KwtcGALIB6fhO8NR6p9LshuQU5241wtSgUQ2J9MAzi23RKTvOkbrKcD3GBJPk89iAQhQr.jpg?r=81f" alt="pre-playGlassOnio"></td>
          <td><img src="https://occ-0-1380-185.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABfKPeCTQ6VoVukPF9zvoB0_z6-G_DYzIpni1vGum3gJVQrxb8QNY8HG_aAq0ZcWNSEZoStdhzyms6mhFqVz-Cxpod-AAJAL1Rdw.webp?r=956"></td>
          <td><img src="https://occ-0-1380-185.1.nflxso.net/dnm/api/v6/6gmvu2hxdfnQ55LZZjyzYR4kzGk/AAAABdJiIUiThRYJHrJW5EVoKVSSfuPzpvQ-t3OR5BHyLAXkxMeWds0XubJF520iyPJUtwMf96xOcevXTcaBwrISWZKEIXNfNvBnMYI.webp?r=d24"></td>
          
        </tr>
</div>
        
</body>
</html>