<?php session_start(); ?>
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
    <form action="php_register.php" method="post">
      <fieldset>
        <legend>Inscription</legend>
        Login
        <br>
        <input type="text" name="login" placeholder="login">
        <br>
        Nom
        <br>
        <input type="text" name="Nom" placeholder="first name">
        <br>
        Prénom
        <br>
        <input type="text" name="prenom" placeholder="last name">
        <br>
	Date de naissance
	<br>
	<input type="date" name="Date_de_naissance">
	<br>
	Sexe
	<br>
	<INPUT type="radio" name="sexe" value="M"> Homme <INPUT type="radio" name="sexe" value="F"> Femme
	<br>
        Mot de passe
        <br>
        <input type="password" name="password" placeholder="password">
        <br>
        Confirmer mot de passe
        <br>
        <input type="password" name="password2" placeholder="password">
        <br>
        Email
        <br>
        <input type="text" name="email" placeholder="test@test.com">
        <br>
        Adresse
        <br>
        <input type="text" name="Adresse" placeholder="36 rue des sangliers">
	<br>
	Ville
	<br>
	<input type="text" name="Ville" placeholder="Ivry">
        <br>
        Code Postal
        <br>
        <input type="text" name="code" placeholder="94 000">
	<br>
	Pays
	<br>
	<input type="text" name="pays" placeholder="FRANCE">
	<br><br>
        <input type="submit" value="Inscription">
      </fieldset>
   <br>
   <?php echo $_GET["var2"] ?>
    </form>
    <div id="footer">
      Copyright © pruvos_j & selatn_r - 2016
    </div>
  </body>
</html>
