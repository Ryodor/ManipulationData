<?php
session_destroy();
session_unset();
session_start();
$nop = "Non connecté";
$_SESSION["Login"] = $nop;
?>
<html>
<head>
<meta charset="UTF-8">
   <title> e-commerce </title>
   <link rel="stylesheet" type="text/css" href="register.css" />
   </head>
   <body>
   <h1> Adopte-un-hero.com </h1>
  <h3 id="login5"> <?php echo $_SESSION["Login"]; ?></h3> 
   <nav id="nav">
   <ul id="menu">
   <li><a href="accueil.php">Accueil</a>
   </li>
   <li><a href="#">Catégories</a>
   <ul>
	<li><a href="avengers.php">Avengers</a></li>
        <li><a href="justice_league.php">Justice League</a></li>
        <li><a href="suicide_squad.php">Suicide Squad </a></li>
        <li><a href="guardians_of_the_galaxy.php">Guardian of the Galaxy</a></li>
        <li><a href="exclusive.php">Exclusivif</a></li>
   </ul>
   </li>
   <li><a href="produits.php">Tous les produits</a>
   </li>
   <li><a href="#">Mon compte</a>
   <ul>
   <li><a href="panier.php">Votre pannier </a></li>
   <li><a href="register.php">Inscrivez-vous</a></li>
   </ul>
   </li>
   <li><a href="#">Informations</a>
   <ul>
   <li><a href="#">A propos de nous </a></li>
   <li><a href="#">Nous contacter </a></li>
   <li><a href="#">Nous localiser</a></li>
   </ul>
   </li>
   </ul>
   </nav>
   <form action="con.php" method="post">
<fieldset>
   <legend>Information de connexion</legend>
   Email
   <br>
   <input type="text" name="email" placeholder="login@testcom">
   <br>
   Mot de passe
   <br>
   <input type="password" name="Password" placeholder="password">
   <br><br>
   <input type="submit" value="Connectez-vous">
   </fieldset>
  <?php echo $_GET["var1"]; ?>
   </form>
   <br><br>
   <div id="footer">
   Copyright © pruvos_j & selatn_r - 2016
   </div>
   </body>
   </html>
   