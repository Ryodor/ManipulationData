<?php
session_start();
require('info_product.php');
require('pic_on_sit.php');
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Justice League</title>
    <link rel="stylesheet" type="text/css" href="justice_league.css" />
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
    <div class="avengers"><h3>JUSTICE LEAGUE</h3></div><br/>
    <table style="width:100%">
      <tr>
	<th><h4>Batman<h4></th>
	<th><h4>Superman<h4></th>
	<th><h4>Wonder Woman<h4></th>
	<th><h4>Aquaman<h4></th>
	<th><h4>Flash<h4></th>
	<th><h4>Cyborg<h4></th>
      </tr>
      <tr>
  <th><a href="detail.php?ID=Batman"><?php echo "<img src=" . product_picture("Batman") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Superman"><?php echo "<img src=" . product_picture("Superman") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Wonder_Woman"><?php echo "<img src=" . product_picture("Wonder_Woman") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Aquaman"><?php echo "<img src=" . product_picture("Aquaman") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Flash"><?php echo "<img src=" . product_picture("Flash") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Cyborg"><?php echo "<img src=" . product_picture("Cyborg") . " id='profil_hero'/>" ?>  </a></th>
      </tr>
      <tr>
  <th><h4><?php product_sale("Batman");?> $<h4></th>
  <th><h4><?php product_sale("Superman");?> $<h4></th>
  <th><h4><?php product_sale("Wonder_Woman");?> $<h4></th>
  <th><h4><?php product_sale("Aquaman");?> $<h4></th>
  <th><h4><?php product_sale("Flash");?> $<h4></th>
  <th><h4><?php product_sale("Cyborg");?> $<h4></th>
      </tr>
    </table>
    <div id="footer">
      Copyright © pruvos_j & selatn_r - 2016
    </div>
  </body>
</html>

