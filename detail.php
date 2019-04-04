<?php
session_start();
require('info_product.php');
require('pic_on_sit.php');
$hero = $_GET['ID'];
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title> e-commerce </title>
    <link rel="stylesheet" type="text/css" href="detail.css" />
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
      <li><a href="connect.php">Deconnectez-vous</a></li>
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
  <br/><h2><?php product_name($hero); ?></h2>
      <table style="width:100%">
      <tr id="tableau">
        <td><?php echo '<img src=' . product_picture($hero) . ' width="500" height="320" />' ?></td>
        <td>
	<h4>GROUPE : <?php product_group($hero)?> <br></h4>
	<h4>Description :</h4>
	<?php product_description($hero);?> </td>
        <td> <form action="location.php" method="post"> <h4> Price by hours : 
  <?php product_name($hero); ?>
  <?php product_sale($hero);?> $ <br/><br/> Number of hours : <br/><select name="Hours">
    <option value="1"> 1 heure</option>
    <option value="2">2 heures</option>
    <option value="3">3 heures</option>
  <option value="4"> 4 heures</option>
  <option value="5">5 heures</option>
  <option value="6">6 heures</option>
  <option value="7"> 7 heures</option>
  <option value="8">8 heures</option>
  <option value="9">9 heures</option>
  <option value="10"> 10 heures</option>
  <option value="11">11 heures</option>
  <option value="12">12 heures</option>
  <option value="13"> 13 heures</option>
  <option value="14">14 heures</option>
  <option value="15">15 heures</option>
  <option value="16"> 16 heures</option>
  <option value="17">18 heures</option>
  <option value="18">18 heures</option>
  <option value="19"> 19 heures</option>
  <option value="20">20 heures</option>
  <option value="21">21 heures</option>
  <option value="22">22 heures</option>
  <option value="23"> 23 heures</option>
  <option value="24">24 heures </option>
  </select>
  <br/><br/>
  When : <br/><input type="date" name="date" placeholder="JJ-MM-AAAA"> <br/><br/>
  At what time : <br > <select name="hour_begin">
  <option value="00"> 00</option>
  <option value="01"> 01</option>
  <option value="02">02</option>
  <option value="03">03</option>
  <option value="04"> 04</option>
  <option value="05">05</option>
  <option value="06">06</option>
  <option value="07">07</option>
    <option value="08">08 </option>
    <option value="09">09</option>
    <option value="10"> 10</option>
    <option value="11">11</option>
    <option value="12">12</option>
    <option value="13"> 13</option>
    <option value="14">14</option>
    <option value="15">15</option>
    <option value="16"> 16</option>
    <option value="17">18 </option>
    <option value="18">18 </option>
    <option value="19"> 19</option>
    <option value="20">20 </option>
    <option value="21">21 </option>
    <option value="22">22 </option>
    <option value="23"> 23</option>
  </select>
  hours
  
<br><br>
<input type="submit" value="Ajouter au Panier"> </form> </td>
  </tr></h4>
  </table>
  <div id="footer">
 Copyright © pruvos_j & selatn_r - 2016
  </div>
  </body>
</html>
