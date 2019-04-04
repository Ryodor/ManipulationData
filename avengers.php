<?php
session_start();
require('info_product.php');
require('pic_on_sit.php');
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Avengers</title>
    <link rel="stylesheet" type="text/css" href="avengers.css" />
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
    <div class="avengers"><h3>AVENGERS</h3></div><br/>
    <table style="width:100%">
      <tr>
	<th><h4>Captain America<h4></th>
	<th><h4>Iron Man<h4></th>
	<th><h4>Thor<h4></th>
	<th><h4>Hulk<h4></th>
	<th><h4>Black Widow<h4></th>
	<th><h4>Hawkeye<h4></th>
      </tr>
      <tr>
  <th><a href="detail.php?ID=Captain_America"><?php echo "<img src=" . product_picture("Captain_America") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Iron_Man"><?php echo "<img src=" . product_picture("Iron_Man") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Thor"><?php echo "<img src=" . product_picture("Thor") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Hulk"><?php echo "<img src=" . product_picture("Hulk") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Black_Widow"><?php echo "<img src=" . product_picture("Black_Widow") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Hawkeye"><?php echo "<img src=" . product_picture("Hawkeye") . " id='profil_hero'/>" ?>  </a></th>
  </tr>
      <tr>
	<th><h4><?php product_sale("Captain_America");?> $<h4></th>
	<th><h4><?php product_sale("Iron_Man");?> $<h4></th>
	<th><h4><?php product_sale("Thor");?> $<h4></th>
	<th><h4><?php product_sale("Hulk");?> $<h4></th>
	<th><h4><?php product_sale("Black_Widow");?> $<h4></th>
	<th><h4><?php product_sale("Hawkeye");?> $<h4></th>
      </tr>
          </table>
      <div id="footer">
      Copyright © pruvos_j & selatn_r - 2016
    </div>
  </body>
</html>
