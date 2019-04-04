<?php
session_start();
require('info_product.php');
require('pic_on_sit.php');
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Suicide Squad</title>
    <link rel="stylesheet" type="text/css" href="suicide_squad.css" />
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
    <div class="avengers"><h3>SUICIDE SQUAD</h3></div><br/>
    <table style="width:100%">
      <tr>
	<th><h4>Harley Quinn<h4></th>
	<th><h4>Captain-Boomerang<h4></th>
	<th><h4>Deadshot<h4></th>
	<th><h4>El-Diablo<h4></th>
	<th><h4>Enchanteresse<h4></th>
	<th><h4>Katana<h4></th>
      </tr>
      <tr>
  <th><a href="detail.php?ID=Harley_Quinn"><?php echo "<img src=" . product_picture("Harley_Quinn") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Captain_Boomerang"><?php echo "<img src=" . product_picture("Captain_Boomerang") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Deadshot"><?php echo "<img src=" . product_picture("Deadshot") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=El_Diablo"><?php echo "<img src=" . product_picture("El_Diablo") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Enchantress"><?php echo "<img src=" . product_picture("Enchantress") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Katana"><?php echo "<img src=" . product_picture("Katana") . " id='profil_hero'/>" ?>  </a></th>
      </tr>
      <tr>
  <th><h4><?php product_sale("Harley_Quinn");?> $<h4></th>
  <th><h4><?php product_sale("Captain_Boomerang");?> $<h4></th>
  <th><h4><?php product_sale("Deadshot");?> $<h4></th>
  <th><h4><?php product_sale("El_Diablo");?> $<h4></th>
  <th><h4><?php product_sale("Enchantress");?> $<h4></th>
  <th><h4><?php product_sale("Katana");?> $<h4></th>
      </tr>
    </table>
    
    <table style="width:100%">
      <tr>
	<th><h4>Killer Croc<h4></th>
	<th><h4>Rick Flag<h4></th>
	<th><h4>Slipknot.jpg<h4></th>
      </tr>
      <tr>
  <th><a href="detail.php?ID=Killer_Croc"><?php echo "<img src=" . product_picture("Killer_Croc") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Rick_Flag"><?php echo "<img src=" . product_picture("Rick_Flag") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Slipknot"><?php echo "<img src=" . product_picture("Slipknot") . " id='profil_hero'/>" ?>  </a></th>
        </tr>
      <tr>
  <th><h4><?php product_sale("Killer_Croc");?> $<h4></th>
  <th><h4><?php product_sale("Rick_Flag");?> $<h4></th>
  <th><h4><?php product_sale("Slipknot");?> $<h4></th>
      </tr>
    </table>
    
  
    <div id="footer">
      Copyright © pruvos_j & selatn_r - 2016
    </div>
  </body>
</html>
