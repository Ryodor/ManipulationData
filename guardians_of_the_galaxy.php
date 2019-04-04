<?php
session_start();
require('info_product.php');
require('pic_on_sit.php');
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Guardians of the Galaxy</title>
    <link rel="stylesheet" type="text/css" href="guardians_of_the_galaxy.css" />
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
    <div class="avengers"><h3>GUARDIANS OF THE GALAXY</h3></div><br/>
    <table style="width:100%">
      <tr>
	<th><h4>Star Lord<h4></th>
	<th><h4>Rocket Racoon<h4></th>
	<th><h4>Groot<h4></th>
	<th><h4>Gamora<h4></th>
	<th><h4>Drax<h4></th>
      </tr>
      <tr>

  <th><a href="detail.php?ID=Star_Lord"><?php echo "<img src=" . product_picture("Star_Lord") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Rocket_Raccoon"><?php echo "<img src=" . product_picture("Rocket_Raccoon") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Groot"><?php echo "<img src=" . product_picture("Groot") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Gamora"><?php echo "<img src=" . product_picture("Gamora") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Drax"><?php echo "<img src=" . product_picture("Drax") . " id='profil_hero'/>" ?>  </a></th>
      </tr>
      <tr>
  <th><h4><?php product_sale("Star_Lord");?> $<h4></th>
  <th><h4><?php product_sale("Rocket_Raccoon");?> $<h4></th>
  <th><h4><?php product_sale("Groot");?> $<h4></th>
  <th><h4><?php product_sale("Gamora");?> $<h4></th>
  <th><h4><?php product_sale("Drax");?> $<h4></th>
      </tr>
          </table>
      <div id="footer">
      Copyright © pruvos_j & selatn_r - 2016
    </div>
  </body>
</html>
