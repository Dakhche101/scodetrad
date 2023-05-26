<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SCODETRAD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap+Condensed:ital@1&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Asap+Condensed:ital@1&display=swap');
      
       .accueil{
        height:500px;
        background-image: url('imges/bg.jpg');
        background-size: cover;
       }
       
     
        .about{
            width:60%;
        }
        .apropos{
            padding-top:15px;
            height:50%;
        }
        .about{
            font-family: 'Asap Condensed', sans-serif;
            margin-top:60px;
        }
        body::-webkit-scrollbar{
            display: none;
        }
        hr{
            border-color:black;
        }
       
        
        #apropos,#products{
            height:30px;
        }
        nav.topBotomBordersOut a:before, nav.topBotomBordersOut a:after
{
    position: absolute;
    left: 0px;
    width: 100%;
    height: 2px;
    background: #FFF;
    content: "";
    opacity: 0;
    transition: all 0.3s;
}

nav.topBotomBordersOut a:before
{
    top: 0px;
    transform: translateY(10px);
}

nav.topBotomBordersOut a:after
{
    bottom: 0px;
    transform: translateY(-10px);
}

nav.topBotomBordersOut a:hover:before, nav.topBotomBordersOut a:hover:after
{
    opacity: 1;
    transform: translateY(0px);
}
.nav-link:hover{
    text-decoration:underline;
    transition:2.7s;
}
.img{
    margin-left:6px;
}
.products{
    height:auto;
    padding-top:12px;
    
    
}
.containers {
  position: relative;
  height: 100vh; /* Adjust this as needed */
}

.content {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  /* Styles for the centered content */
}









@media screen and (max-width: 1000px) {
    .img{
        width:360px;
        margin-top:6px;
        margin-bottom:6px;
    }
}








    </style>
</head>
<body style="background-image: url('images/bg.jpg');background-size: cover;background-repeat: no-repeat;">

<nav id="element" class=" navbar navbar-expand-lg navbar-light bg-transparent  container topBotomBordersOut">
    <div class="container-fluid">
        <img src="images/logo.png" alt="logo" width=120px>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item ">
                    <a class="nav-link text-dark" href="#">ACCUEIL</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark" href="#apropos">À PROPOS</a>
                </li>
                <li class="nav-item">
        <a class="nav-link text-dark" href="#products"><li>NOS PRODUITS</li></a>
                    
                </li>
                <li class="nav-item">
        <a class="nav-link text-dark" href="/register"><li>BOUTIQUE</li></a>

            </li>
                <li class="nav-item">
        <a class="nav-link text-dark" href="#"><li>CONTACT</li></a>

            </li>
            </ul>
        </div>
    </div>
</nav>



        
<div  class="container containers accueil">
    <div class="content" >
    <div class=' d-flex flex-column'>
        <span style="font-family: 'Asap Condensed', sans-serif;" class="h1 text-white">
        Découvrez vos espaces
        </span>
        <span style="margin-left:45px; font-family: 'Asap Condensed', sans-serif;" class="h1 text-white">
        selon vos goûts
        </span>
    </div>
    <div style="margin-left:100px" class="socialLink">
        <a href="#">fb</a>
        <a href="#">insta</a>
        <a href="#">whatsapp</a>
        <a href="#">limkdin</a>
    </div>
    </div>
    
</div>
<div id="apropos" ></div>
<div  class="apropos container-fluid d-flex  bg-light ">
    
        <div class="aboutpicture "><img id="myImage" src="images/aboutImage.png" alt="about picture" ></div>
        <div class="about ">Avec plus de 40 ans d’expérience sur le marché marocain Scodetrad est une société 100% Marocaine implanté à Temmara nous sommes le leader en Carrelage, aménagement d’intérieur, Carrelage sol, Carrelage mur, Carrelage spécial piscine.
Scodetrad est là pour satisfaire les besoins des particuliers, des artisans et des petites collectivités, et grande entreprise à travers le Maroc dans les domaines du Carrelage du Sanitaire de la piscine, de la Maison & Déco, de la pienture, de la plomberie, et de l’électricité.
<div id="demo" class="collapse">
Découvrez notre sélection de carrelages de sol et mur pour donner corps à toutes vos idées de décoration. Poser du carrelage, c’est opter pour un matériel résistant et très facile d’entretien, qui donnera de l’élégance à votre intérieur. Pour vos murs comme vos sols, les produits proposés répondent à des critères de qualité, de fiabilité de sécurité très rigoureux et en différentes matières dont des carreaux de ciment, des faïences, des mosaïques ou encore des galets et autres pierres naturelles. nous avons certainement ce qu’il vous faut sur des marques renommées et leader sur leur marché comme Argenta, Roca, Geotiles, etc… et plein d’autre marque afin de vous garantir des produits innovants et de qualité.
Les designs variés de nos pièces, de couleur unie ou avec des motifs, vous permettront de jouer sur les styles pour obtenir de nombreux effets : rétro ou moderne, chaleureux ou épuré…
Vous trouverez également sur notre site les outils nécessaires pour une pose aisée de votre carrelage de sol ou de mur, dont des profilés de finition, pour une pose bien droite, des coupe-carreaux, pour pouvoir ajuster les carreaux aux angles et autres spécificités de vos sols et murs, ainsi que des joints et colles adaptés à chaque type de carrelage.
</div>
<br>
<button id="btnContent" class=" btn btn-danger" data-bs-toggle="collapse" data-bs-target="#demo" >plus détaille</button>
</div>
</div>
<hr>
<div id="products"></div>
<div class=" container-fluid">
    <p class="h1 text-center text-white">NOS PRODUITS</p>
    <div class="products container-fluid bg-light ">
        <img class="img" src="images/robinettrie/mian.jpg" alt="robinettrie" width="400px">
        <img class="img" src="images/sanitaire/main.jpg" alt="sanitaire" width="400px">
        <img class="img" src="images/carllage.jpg" alt="sanitaire" width="400px">
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<br>
@include('user.footer')
<script>
    function changeImageSizeOnWidth() {
  var image = document.getElementById('myImage');
  var screenWidth = window.innerWidth;

  var desiredWidth = screenWidth < 1000 ? '220px' : '450px';
  var desiredHeight = screenWidth < 1000 ? '220px' : '430px';

  image.style.width = desiredWidth;
  image.style.height = desiredHeight;
}

changeImageSizeOnWidth();

window.addEventListener('resize', changeImageSizeOnWidth);
    function changeClassOnWidth() {
  var element = document.getElementById('element');

  if (window.innerWidth < 1000) {
    element.className = 'navbar navbar-expand-lg navbar-light bg-light';
  } else {
    element.className = 'navbar navbar-expand-lg navbar-light bg-transparent  container topBotomBordersOut';
  }
}

// Call the function when the page loads
changeClassOnWidth();

// Call the function when the window is resized
window.addEventListener('resize', changeClassOnWidth);
</script>
</body>
</html>