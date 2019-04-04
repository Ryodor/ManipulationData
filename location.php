<?php
// location.php for  in /home/pruvos_j/web_commerce/etape3/pruvos_j
// 
// Made by PRUVOST joffrey
// Login   <pruvos_j@etna-alternance.net>
// 
// Started on  Fri Nov 18 15:15:07 2016 PRUVOST joffrey
// Last update Fri Nov 18 16:45:35 2016 PRUVOST joffrey
//

function        add_in_basket()
{
  $servername = "localhost";
  $username = "root";
  $password = "verratti";
  $dbname = "site_pruvos_j";
  $ID_hero = $_POST[''];
  $ID_user= $_POST[''];
  $Date_begin= $_POST[''];
  $Hour_begin= $_POST[''];
  $Hours= $_POST[''];

  try
      {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql ="INSERT INTO Location (ID, ID_Hero, ID_User, Date_begin, Hour_begin, Hours) 
VALUES ('', '$ID_hero', '$ID_user', '$Date_begin', '$Hour_begin', '$Hours')";
	$res = $conn->query($sql);
	$line = $res->fetch();
      }
    catch(PDOException $e)
      {
	echo "ERREUR\n" . "<br>" . $e->getMessage();
      }
    $conn = null;
}