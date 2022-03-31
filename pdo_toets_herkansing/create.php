<?php
//var_dump($_POST);exit();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO burrito (formaat, saus, bonen, rijst)
  VALUES (:formaat, :saus, :bonen, :rijst)");
  $stmt->bindParam(':formaat', $formaat);
  $stmt->bindParam(':saus', $saus);
  $stmt->bindParam(':bonen', $bonen);
  $stmt->bindParam(':rijst', $rijst);

  // insert a row
  $id = NULL;
  $formaat = $_POST["formaat"];
  $saus = $_POST["saus"];
  $bonen = $_POST ["bonen"];
  $rijst = $_POST ["rijst"];

  // var dump 
  $stmt->execute();


  echo "New records created successfully";
  header("Refresh:3; ./read.php");
} catch(PDOException $e) {
    header("Location: ./index.php"); 
  echo  $e->getMessage();
}
$conn = null;
?>