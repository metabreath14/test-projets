<?php

//Connexion avec la bdd

$database = mysqli_connect("localhost" , "root" , "" , "stage"); 

//verification de la connexion bdd
if (!$database) {
    echo "Failed to connect";
} else {
    echo "You have sucessfully connect your database";
};

//sélection de la structure de la base de données 
$mysql = mysqli_select_db($database , $link = 'stage')	 OR die('Sélection de la base impossible');

//RESULT
// ordre des colonnes date, titre, description, entreprise, remunération, lieu, contact, référence

//essais bdd

$annonce6 = 'SELECT * FROM stages WHERE REFERENCE=\'6\';';

var_dump($annonce6);

$result = mysqli_query($database , $annonce6 , $result_mode = MYSQLI_STORE_RESULT);

var_dump($result);

if ($result=mysqli_query($database,$annonce6)) {

  while ($row = mysqli_fetch_row($result)) {
      echo "%s (%s)\n", $row[0], $row[1], $row[2], $row[3], $row[4], $row[5], $row[6], $row[7];
  }
}

mysqli_close($database);

//question en suspens: comment utiliser les données de mes lignes



//titres des pages

$title = "Stage Connect";
$offre = "Poster une offre";
$stage = "Trouver un stage";
$citationpart1 = "Trouve ton stage de rêve ";
$citationpart2 = "grâce à tes anciens camarades !";
$intro = "Présentation";
$texteintro = "Bienvenue à toi Ecamien(ne), 
Sur notre site, nous te proposons quelques offres de stage en France et à l’étranger que tes camarades ou alumnis ont effectué.  
Objectif ? Te créer un carnet de contacts ! ";
$news = "Les dernières offres de stage !";



echo '<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
          <link rel= "stylesheet" href= "stylejane.css" type= "text/css"/>
		      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		      <link href="https://fonts.googleapis.com/css?family=Prata&display=swap" rel="stylesheet">
		      <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
		      <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Odibee+Sans&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Bowlby+One+SC&display=swap" rel="stylesheet">
          <script src="https://code.jquery.com/jquery-3.3.1.js"
	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	crossorigin="anonymous"></script>
        <title>'.$row[1].'</title>
    </head>
	<body>
	<header>
	<nav>
	<div class="symbole">
	<img src="SC3.png" alt="SC.png"/></div>
	<div class="menu">
	<ul>
		<li><a href="a">'.$offre.'</a></li>
		
		<li><a href="a">'.$stage.'</a></li>
		
		
		</ul></div>
	</nav>
	
	
	<script>
	$(window).on("scroll", function(){
	if($(window).scrollTop()){
	$("nav").addClass("scroll");
	}
				else {
					$("nav").removeClass("scroll");
					}
			
	})
	</script>
	
	
	<div class=back>
	<div class=sclong><a href="janedoe.html"><img src="SC2.png" alt="SC.png"/></a></div>
	<h1>'.$citationpart1.'<span class="colmar">'.$citationpart2.'</span></h1>
</header>


</div>
<div class="backpres"><h2>'.$intro.'</h2>
<p>'.$texteintro.'</p>

</div>
<h1>'.$news.'</h1>
<div class="special">

    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="D1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="D2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="D3.jpg" alt="">
        </div>
        <div class="slide">
          <img src="D4.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

    <script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById("radio" + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
	</script>
</div>


<div class="contact">
<h1>Contact</h1>
<form action="formulaire.php" method="post">
Votre nom</br> <input type="text" id="nom" name="user_name"></br>
Votre E-mail</br> <input type="email" id="mail" name="user_mail"></br>
Votre message</br>
<textarea name="message" rows="10" cols="30">Indiquez votre message</textarea><br/><input type="submit" value="ENVOYER">
</form>
</div>


	
	</body>
	</html>';
?>
