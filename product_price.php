<?php
// product_Price.php for  in /home/selatn_r/web/boosting_a_website
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Mon Nov  7 09:48:49 2016 SELATNI Ryad
// Last update Tue Nov  8 11:35:48 2016 PRUVOST joffrey
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
      $sql = "SELECT * FROM Produits WHERE Libelle='$hero'";
      $res = $conn->query($sql);
      $line = $res->fetch();
      
      echo $line['Prix_vente'];
    }
  catch(PDOException $e)
    {
      echo "ERREUR\n" . "<br>" . $e->getMessage();
    }
  $conn = null;
}

function        product_buy($hero)
{
  $servername = "localhost";
  $username = "root";
  $password = "verratti";
  $dbname = "site_pruvos_j";

    try
      {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM Produits WHERE Libelle='$hero'";
	$res = $conn->query($sql);
	$line = $res->fetch();

	echo $line['Prix_achat'];
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
	$sql = "SELECT * FROM Produits WHERE Libelle='$hero'";
	$res = $conn->query($sql);
	$line = $res->fetch();

	echo $line['Description'];
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
	  $sql = "SELECT Categories.Libelle FROM Categories 
INNER JOIN Categorie_Produit ON Categories.ID = Categorie_Produit.ID_Categorie 
INNER JOIN Produits ON Categorie_Produit.ID_Produit = Produits.ID WHERE Produits.Libelle='Thor'";
	  $res = $conn->query($sql);
	  $line = $res->fetch();

	  echo $line['Libelle'];
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
	  $sql = "SELECT Libelle FROM Produits WHERE Libelle='$hero'";
	  $res = $conn->query($sql);
	  $line = $res->fetch();

	  echo $line['Libelle'];
	}
      catch(PDOException $e)
	{
	  echo "ERREUR\n" . "<br>" . $e->getMessage();
	}
      $conn = null;
}