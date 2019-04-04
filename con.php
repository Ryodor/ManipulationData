#!/usr/bin/env php
   <?php
   // con.php for conn in /home/pruvos_j/web_commerce/etape3/pruvos_j/pruvost
   // 
   // Made by PRUVOST joffrey
   // Login   <pruvos_j@etna-alternance.net>
   // 
   // Started on  Mon Nov  7 13:43:05 2016 PRUVOST joffrey
// Last update Fri Nov 18 09:44:01 2016 PRUVOST joffrey
   //
session_destroy();
session_unset();
session_start();
$servername = "localhost";
$username = "root";
$password = "verratti";
$mail = $_POST["email"];
$pass = $_POST["Password"];

if ((!empty($mail)) && (!empty($pass)))
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
    echo "ici ?";
    $pass = MD5($pass);
    $query = "SELECT Email, Pass_word, Role, Login FROM Utilisateurs WHERE Email='$mail' AND Pass_word='$pass'";
    $prep = $conn->prepare($query);
    $prep->execute();
    $arrAll = $prep->fetch();
    $log = $arrAll['Login'];
    $_SESSION["Login"] = $log;
    if (!empty($arrAll))
      {
	echo "Bonjour";
	if ($arrAll['Role'] == 2)
	  {
	    echo $arrAll['Email'];
	    echo $arrAll['Pass_word'];
	    header("Location: accueil.php");
	  }
	else
	  {
	    header("Location: accueil.php");
	  }
      }
    else
      {
	echo $arrAll['Email'];
	echo $arrAll['Pass_word'];
	$message = "Invalid mail or Password";
	header("Location: connect.php?var1=$message");
      }
    $prep->closeCursor();
  }
else
  {
    $message = "Please complete the fields";
    header("Location: connect.php?var1=$message");
  }
?>