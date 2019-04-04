<?php
// product_Price.php for  in /home/selatn_r/web/boosting_a_website
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Mon Nov  7 09:48:49 2016 SELATNI Ryad
// Last update Fri Nov 18 15:14:21 2016 PRUVOST joffrey
//

function        product_sale($hero)
{
  $servername = "localhost";
  $username = "root";
  $password = "verratti";
  $dbname = "site_pruvos_j";

  try
    {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT prix FROM Hero WHERE hero='$hero'";
      $res = $conn->query($sql);
      $line = $res->fetch();
      
      echo $line['prix'];
    }
  catch(PDOException $e)
    {
      echo "ERREUR\n" . "<br>" . $e->getMessage();
    }
  $conn = null;
}

function        product_description($hero)
{
  $servername = "localhost";
  $username = "root";
  $password = "verratti";
  $dbname = "site_pruvos_j";

    try
      {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT description FROM Hero WHERE hero='$hero'";
	$res = $conn->query($sql);
	$line = $res->fetch();

	echo $line['description'];
      }
    catch(PDOException $e)
      {
	echo "ERREUR\n" . "<br>" . $e->getMessage();
      }
    $conn = null;
}

function        product_group($hero)
{
  $servername = "localhost";
  $username = "root";
  $password = "verratti";
  $dbname = "site_pruvos_j";

      try
	{
	  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "SELECT groupe FROM Hero WHERE hero='$hero'";
	  $res = $conn->query($sql);
	  $line = $res->fetch();

	  echo $line['groupe'];
	}
      catch(PDOException $e)
	{
	  echo "ERREUR\n" . "<br>" . $e->getMessage();
	}
      $conn = null;
}

function        product_name($hero)
{
  $servername = "localhost";
  $username = "root";
  $password = "verratti";
  $dbname = "site_pruvos_j";

      try
	{
	  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	  $sql = "SELECT hero_name FROM Hero WHERE hero='$hero'";
	  $res = $conn->query($sql);
	  $line = $res->fetch();

	  echo $line['hero_name'];
	}
      catch(PDOException $e)
	{
	  echo "ERREUR\n" . "<br>" . $e->getMessage();
	}
      $conn = null;
}