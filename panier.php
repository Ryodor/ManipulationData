<?php
<?php
session_start();
require('info_product.php');
require('pic_on_sit.php');
require('location.php');
?>
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title> e-commerce </title>
    <link rel="stylesheet" type="text/css" href="panier.css" />
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
      <li><a href="avengers.php">Avenger</a></li>
      <li><a href="justice_league.php">Justice League</a></li>
      <li><a href="suicide_squad.php">Suicide Squad </a></li>
      <li><a href="guardians_of_the_galaxy.php">Guardian of the Galaxy</a></li>
      <li><a href="exclusive.php">Exclusivités</a></li>
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
    <table style="width:100%">
      <tr id="tableau">
        <td><img src="./pictures/profil/Batman_profil.jpg" width="40%"></td>
        <td> BATMAN <br><br> Un génie, milliardaire, playboy, philanthrope, badass, tenebreux</td>
        <td> Prix a l'heure: 3000 € <br> Nbr d'heure choisi: 1h <br> Prix final: 3000 € </td>
      </tr>
      </table>
      <table style="width:100%">
      <tr id="tableau2">
        <td><img src="./pictures/profil/Captain-profil.jpg" width="40%"></td>
        <td> CAPTAIN AMERICA <br><br> Super soldat, leader, ingenieux, strategique, ne supporte pas les gros mots, deteste les nazis </td>
        <td> Prix a l'heure: 2000 € <br> Nbr d'heure choisi: 2h <br> Prix final: 4000 €</td>
      </tr>
      </table>
      <table style="width:100%">
      <tr id="tableau3">
        <td><img src="./pictures/profil/Harley-quinn.png" width="40%"></td>
        <td> HARLEY QUINN <br><br> Badass, dangereuse, assassin, voleuse, aime s'amuser et son poussin (le joker), mais surtout folle</td>
        <td> Prix a l'heure: 8000 € <br> Nbr d'heure choisi: 2h <br> Prix final: 16 000 €</td>
      </tr>
      </table>
      <img id="trait" src="./photo/trait.png">
      <br>
       <p1 id="tableau4"> Frais de livraison: 40 € <br> Total: 23 040 € </p1>
       <br>
      <input type="submit" value="Payer">
  <div id="footer">
 Copyright © pruvos_j & selatn_r - 2016
  </div>
  </body>
</html>
