#!/usr/bin/env php
<?php
// product_Price.php for  in /home/selatn_r/web/boosting_a_website
// 
// Made by SELATNI Ryad
// Login   <selatn_r@etna-alternance.net>
// 
// Started on  Mon Nov  7 09:48:49 2016 SELATNI Ryad
// Last update Mon Nov  7 11:21:40 2016 SELATNI Ryad
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
      $sql = "SELECT * FROM Produits WHERE Libelle='Thor'";
      $res = $conn->query($sql);
      echo $res['Libelle'];
      echo "Done!\n";
    }
  catch(PDOException $e)
    {
      echo "ERREUR\n" . "<br>" . $e->getMessage();
    }
  $conn = null;
}

product_sale($argv[1]);