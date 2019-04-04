<?php
session_start();
require('info_product.php');
require('pic_on_sit.php');
if ($_SESSION["Login"] == "Non connecté")
  {
    $bouton = "Connectez-vous";
  }
else
  {
    $bouton = "Deconnectez-vous";
  }
$_SESSION["bouton"] = $bouton;
?>

<html>
<head>
<meta charset="UTF-8">
   <title> e-commerce </title>
   <link rel="stylesheet" type="text/css" href="accueil.css" />
   </head>
   <body>
   <h1> Adopte-un-hero.com </h1> <h3 id="login5"> <?php echo $_SESSION["Login"]; ?></h3>
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
   <li><a href="exclusive.php">Exclusif</a></li>
   </ul>
   </li>
   <li><a href="produits.php">Tous les produits</a>
   </li>
   <li><a href="#">Mon compte</a>
   <ul>
   <li><a href="#">Votre Profil</a></li>
   <li><a href="panier.php">Votre pannier </a></li>
  <li><a href="connect.php"><?php echo $_SESSION["bouton"]; ?></a></li>
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
   <?php echo $_GET["var1"]; ?>
   <h2 id="freq"> Héros fréquemment achetés </h2><br>

  <a href="detail.php?ID=Batman"><?php echo "<img src=" . product_picture("Batman_a") . " id='Batman' alt='Batman'/>" ?>  </a>
  <a href="detail.php?ID=Captain_America"><?php echo "<img src=" . product_picture("Captain_America_a") . " id='Captain_America' alt='Captain_America'/>" ?>  </a>
  <a href="detail.php?ID=Dancing_Groot"><?php echo "<img src=" . product_picture("Dancing_Groot") . " id='Dancing_Groot' alt='Dancing_Groot'/>" ?>  </a>
  <a href="detail.php?ID=Harley_Quinn"><?php echo "<img src=" . product_picture("Harley_Quinn_a") . " id='Harley_Quinn' alt='Harley Quinn'/>" ?>  </a>

  <h3 id="prix-bat" >Price : <?php product_sale("Batman");?>  $/h </h3>
<h3 id="prix-cap" >Price : <?php product_sale("Captain_America");?> $/h </h3>
<h3 id="prix-groot" >Price : <?php product_sale("Dancing_Groot");?> $/h </h3>
<h3 id="prix-harley" >Price : <?php product_sale("Harley_Quinn");?> $/h </h3>
   <h2 id="Promo"> Promos </h2><br>

  <a href="detail.php?ID=Aquaman"><?php echo "<img src=" . product_picture("Aquaman_a") . " id='Aquaman' alt='Aquaman'/>" ?>  </a>
  <a href="detail.php?ID=Black_Widow"><?php echo "<img src=" . product_picture("Black_Widow_a") . " id='Black_Widow' alt='Black Widow'/>" ?>  </a>
  <a href="detail.php?ID=Rocket_Raccoon"><?php echo "<img src=" . product_picture("Rocket_Raccoon") . " id='Rocket_Raccoon' alt='Rocket Raccoon'/>" ?>  </a>
  <a href="detail.php?ID=Killer_Croc"><?php echo "<img src=" . product_picture("Killer_Croc_a") . " id='Killer_Croc' alt='Killer Croc'/>" ?>  </a>
  
  <h3 id="prix-aqua" >Price : <?php product_sale("Aquaman");?>  $/h </h3>
<h3 id="prix-widow" >Price : <?php product_sale("Black_Widow");?>  $/h </h3>
<h3 id="prix-rocket" >Price : <?php product_sale("Rocket_Raccoon");?>  $/h </h3>
<h3 id="prix-croc" >Price : <?php product_sale("Killer_Croc");?>  $/h </h3>
   <h4 id="prix-aqua2" > Ancien prix: 2000 $/h </h4>
   <h4 id="prix-widow2" > Ancien prix: 50 000 $/h </h4>
   <h4 id="prix-rocket2" > Ancien prix: 1800 $/h </h4>
   <h4 id="prix-croc2" > Ancien prix: 800 $/h </h4>
   <br>
   <h2 id="Promo"> Nouveautés </h2><br>

  <a href="detail.php?ID=Cyborg"><?php echo "<img src=" . product_picture("Cyborg_a") . " id='Aquaman' alt='Cyborg'/>" ?>  </a>
    <a href="detail.php?ID=Hulk"><?php echo "<img src=" . product_picture("Hulk_a") . " id='Black_Widow' alt='Hulk'/>" ?>  </a>
    <a href="detail.php?ID=Gamora"><?php echo "<img src=" . product_picture("Gamora") . " id='Rocket_Raccoon' alt='Gamora'/>" ?>  </a>
  <a href="detail.php?ID=Enchantress"><?php echo "<img src=" . product_picture("Enchantress_a") . " id='Killer_Croc' alt='Killer Croc'/>" ?>  </a>
    
  
  <h3 id="prix-aqua" >Price : <?php product_sale("Cyborg");?>  $/h  </h3>
  <h3 id="prix-widow" >Price : <?php product_sale("Hulk");?>  $/h </h3>
  <h3 id="prix-rocket" >Price : <?php product_sale("Gamora");?>  $/h </h3>
  <h3 id="prix-croc" >Price : <?php product_sale("Enchantress");?>  $/h </h3>
   <br><br>
  <div id="footer">
   Copyright © pruvos_j & selatn_r - 2016
   </div>
   </body>
   </html>
   