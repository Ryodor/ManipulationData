<?php
// pic_on_sit.php for  in /home/pruvos_j/web_commerce/etape3/pruvos_j
// 
// Made by PRUVOST joffrey
// Login   <pruvos_j@etna-alternance.net>
// 
// Started on  Tue Nov  8 16:26:19 2016 PRUVOST joffrey
// Last update Fri Nov 18 14:57:42 2016 PRUVOST joffrey
//

function        product_picture($hero)
{
  $servername = "localhost";
  $username = "root";
  $password = "verratti";
  $dbname = "site_pruvos_j";

    try
      {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT path FROM Hero WHERE Hero='$hero'";
	$res = $conn->query($sql);
	$line = $res->fetch();

	return $line['path'];
      }
    catch(PDOException $e)
      {
	echo "ERREUR\n" . "<br>" . $e->getMessage();
      }
    $conn = null;
}
