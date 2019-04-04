#!/usr/bin/env php
   <?php
   // register.php for php_register.php in /home/pruvos_j/web_commerce/etape3/pruvos_j/pruvost
   // 
   // Made by PRUVOST joffrey
   // Login   <pruvos_j@etna-alternance.net>
   // 
   // Started on  Mon Nov  7 13:25:45 2016 PRUVOST joffrey
// Last update Fri Nov 18 11:38:29 2016 PRUVOST joffrey
   //

session_start();
$servername = "localhost";
$username = "root";
$password = "verratti";
$nom= $_POST["Nom"];
$prenom= $_POST["prenom"];
$date= $_POST["Date_de_naissance"];
$sexe= $_POST["sexe"];
$pass= $_POST["password"];
$pass1= $_POST["password2"];
$mail= $_POST["email"];
$adresse= $_POST["Adresse"];
$ville= $_POST["Ville"];
$code= $_POST["code"];
$pays= $_POST["pays"];
$login=$_POST["login"];

if ((!empty($login)) && (!empty($pass)) && (!empty($mail))
    && (!empty($nom)) && (!empty($prenom)) && (!empty($date))
    && (!empty($pass1)) && (!empty($sexe)) && (!empty($adresse))
    && (!empty($ville)) && (!empty($code)) && (!empty($pays)))
  {
    try
      {
	$conn = new PDO("mysql:host=$servername;dbname=site_pruvos_j", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
    catch(PDOException $e)
      {
	echo "Connection failed: " . $e->getMessage() . "\n";
      }
    $query = "SELECT Email FROM Utilisateurs WHERE Email='$mail';";
    $prep = $conn->prepare($query);
    $prep->execute();
    $arrAll = $prep->fetch();
    $prep->closeCursor();
    $prep = NULL;
    if ($arrAll['Email'] == $mail)
      {
	$message = "Le compte existe deja";
	header("Location: register.php?var2=$message");
      }
    else
      {
	if (strlen($login) >= 3 && strlen($login) <= 20 && preg_match("/^[a-zA-Z]+[-_ ]?[a-zA-Z]+[-_ ]?[a-zA-Z]+$/", $login))
	  if (strlen($pass) >= 8 && strlen($pass) <= 120 && ctype_alnum($pass))
	    if (filter_var($mail, FILTER_VALIDATE_EMAIL) && strlen($mail) <= 150)
	      if (ctype_alpha($pays))
		if( ctype_alpha($nom))
		  if (ctype_alpha($prenom))
		    if (preg_match("/^[a-zA-Z]+[- ]?[a-zA-Z]+[- ]?[a-zA-Z]+$/", $ville))
		      if (preg_match("/^[0-9]{4}+[- ]?[0-9]{2}+[- ]?[0-9]{2}$/", $date))
			if (ctype_digit($code) && strlen($code) == 5)
			  if ($pass == $pass1)
			    {
			      $query = "INSERT INTO Utilisateurs (Nom, Prenom, Date_de_naissance, Ville, Adresse, Code_postale, Pays, sexe, Role, Login, Email, Pass_word, Date_creation, Date_modification) VALUES ('$nom', '$prenom', '$date', '$ville', '$adresse', '$code', '$pays', '$sexe', '2', '$login', '$mail', MD5('$pass'), NOW(), NOW())";
			      $prep = $conn->prepare($query);
			      $prep->execute();
			      $message = "Votre compte a bien été créé.";
			      header("Location: connect.php?var1=$message");
			    }
			  else
			    {
			      $message = "Le mot de passe est different du mot de passe confirmer";
			      header("Location: register.php?var2=$message");
			    }
			else
			  {
			    $message = "Le code postale doit contenir uniquement 5 chiffres";
			    header("Location: register.php?var2=$message");
			  }
		      else
			{
			  $message = "Veuillez respecter le format de date. Exemple: 1996-04-18";
			  header("Location: register.php?var2=$message");
			}
		    else
		      {
			$message = "La ville ne doit comporter que des lettres";
			header("Location: register.php?var2=$message");
		      }
		  else
		    {
		      $message = "Le prenom ne doit comporter que des lettres";
		      header("Location: register.php?var2=$message");
		    }
		else
		  {
		    $message = "Le nom ne doit comporter que des lettres";
		    header("Location: register.php?var2=$message");
		  }
	      else
		{
		  $message = "Le pays ne doit comporter que des lettres";
		  header("Location: register.php?var2=$message");
		}
	    else
	      {
		$message = "L'adresse mail doit etre conforme a la norme RFC";
		header("Location: register.php?var2=$message");
	      }
	  else
	    {
	      $message = "Le password doit avoir entre 8 et 16 caractere et doit etre alphanumerique";
	      header("Location: register.php?var2=$message");
	    }
	else
	  {
	    $message = "Le login doit contenir que des caractere alpha numerique et doit avoir moins de 8 caractere";
	    header("Location: register.php?var2=$message");
	  }
      }
    $prep->closeCursor();
    $prep = NULL;
  }
else
  {
    $message = "Veuillez remplir tout les champs";
    header("Location: register.php?var2=$message");
  }
?>