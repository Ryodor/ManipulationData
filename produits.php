<?php
session_start();
require('info_product.php');
require('pic_on_sit.php');
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title> e-commerce </title>
    <link rel="stylesheet" type="text/css" href="produits.css" />
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
    <br/>
    <div class="avengers"><h3>JUSTICE LEAGUE</h3></div><br/>
    <table style="width:100%">
      <tr>
        <th><h4>Batman<h4></th>
        <th><h4>Superman<h4></th>
        <th><h4>Wonder-Woman<h4></th>
        <th><h4>Flash<h4></th>
        <th><h4>Aquaman<h4></th>
        <th><h4>Cyborg<h4></th>
      </tr>
      <tr>

  <th><a href="detail.php?ID=Batman"><?php echo "<img src=" . product_picture("Batman") . " id='profil_batman'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Superman"><?php echo "<img src=" . product_picture("Superman") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Wonder_Woman"><?php echo "<img src=" . product_picture("Wonder_Woman") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Flash"><?php echo "<img src=" . product_picture("Flash") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Aquaman"><?php echo "<img src=" . product_picture("Aquaman") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Cyborg"><?php echo "<img src=" . product_picture("Cyborg") . " id='profil_hero'/>" ?>  </a></th>
  
      </tr>
      <tr>
   <th><h4><?php product_sale("Batman");?> $<h4></th>
   <th><h4><?php product_sale("Superman");?> $<h4></th>
   <th><h4><?php product_sale("Wonder_Woman");?> $<h4></th>
   <th><h4><?php product_sale("Flash");?> $<h4></th>
   <th><h4><?php product_sale("Aquaman");?> $<h4></th>
   <th><h4><?php product_sale("Cyborg");?> $<h4></th>
      </tr>
    </table>
    <br/>
    <div class="avengers"><h3>THE GUARDIANS OF THE GALAXY</h3></div><br/>
    <table style="width:100%">
      <tr>
        <th><h4>Star-Lord<h4></th>
        <th><h4>Groot<h4></th>
        <th><h4>Gamora<h4></th>
        <th><h4>Rocket Raccoon<h4></th>
        <th><h4>Drax<h4></th>
      </tr>
      <tr>
  <th><a href="detail.php?ID=Star_Lord"><?php echo "<img src=" . product_picture("Star_Lord") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Groot"><?php echo "<img src=" . product_picture("Groot") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Gamora"><?php echo "<img src=" . product_picture("Gamora") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Rocket_Raccoon"><?php echo "<img src=" . product_picture("Rocket_Raccoon") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Drax"><?php echo "<img src=" . product_picture("Drax") . " id='profil_hero'/>" ?>  </a></th>
  
      </tr>
      <tr>
   <th><h4><?php product_sale("Star_Lord");?> $<h4></th>
   <th><h4><?php product_sale("Groot");?> $<h4></th>
   <th><h4><?php product_sale("Gamora");?> $<h4></th>
   <th><h4><?php product_sale("Rocket_Raccoon");?> $<h4></th>
   <th><h4><?php product_sale("Drax");?> $<h4></th>
      </tr>
    </table>
    
    <br/>
    <div class="avengers"><h3>SUICIDE SQUAD</h3></div><br/>
    <table style="width:100%">
      <tr>
        <th><h4>Rick Flag<h4></th>
        <th><h4>Deadshot<h4></th>
        <th><h4>Harley Quinn<h4></th>
        <th><h4>El Diablo<h4></th>
        <th><h4>Killer Croc<h4></th>
      </tr>
      <tr>
  <th><a href="detail.php?ID=Rick_Flag"><?php echo "<img src=" . product_picture("Rick_Flag") . " id='profil_batman'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Deadshot"><?php echo "<img src=" . product_picture("Deadshot") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Harley_Quinn"><?php echo "<img src=" . product_picture("Harley_Quinn") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=El_Diablo"><?php echo "<img src=" . product_picture("El_Diablo") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Killer_Croc"><?php echo "<img src=" . product_picture("Killer_Croc") . " id='profil_hero'/>" ?>  </a></th>
     
      </tr>
      <tr>
   <th><h4><?php product_sale("Rick_Flag");?> $<h4></th>
   <th><h4><?php product_sale("Deadshot");?> $<h4></th>
   <th><h4><?php product_sale("Harley_Quinn");?> $<h4></th>
   <th><h4><?php product_sale("El_Diablo");?> $<h4></th>
   <th><h4><?php product_sale("Killer_Croc");?> $<h4></th>
      </tr>
    </table>
    <br/>
    <table id="tabl4" style="width:80%;">
      <tr>
        <th><h4>Captain Boomerang<h4></th>
        <th><h4>Katana<h4></th>
        <th><h4>Enchantress<h4></th>
        <th><h4>Slipknot<h4></th>
      </tr>
      <tr>
  <th><a href="detail.php?ID=Captain_Boomerang"><?php echo "<img src=" . product_picture("Captain_Boomerang") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Katana"><?php echo "<img src=" . product_picture("Katana") . " id='profil_hero'/>" ?>  </a></th>
  <th><a href="detail.php?ID=Enchantress"><?php echo "<img src=" . product_picture("Enchantress") . " id='profil_hero'/>" ?>  </a></th>
    <th><a href="detail.php?ID=Slipknot"><?php echo "<img src=" . product_picture("Slipknot") . " id='profil_hero'/>" ?>  </a></th>
  
      </tr>
      <tr>
   <th><h4><?php product_sale("Captain_Boomerang");?> $<h4></th>
   <th><h4><?php product_sale("Katana");?> $<h4></th>
   <th><h4><?php product_sale("Enchantress");?> $<h4></th>
   <th><h4><?php product_sale("Slipknot");?> $<h4></th>
      </tr>
    </table>
    
    <br/>
    
  <div id="footer">
    Copyright © pruvos_j & selatn_r - 2016
  </div>
  </body>
</html>
