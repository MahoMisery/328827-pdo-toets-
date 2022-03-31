<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE  burrito
            SET    formaat  = :formaat,
                   saus = :saus,
                   bonen = :bonen,
                   rijst = :rijst,  
            WHERE  id = :id";

    // Prepare statement
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':formaat', $formaat);
    $stmt->bindParam(':saus', $saus);
    $stmt->bindParam(':bonen', $bonen);
    $stmt->bindParam(':rijst', $rijst);
    $stmt->bindParam(':id', $id);
  
    // connects the right names with the id names
    $formaat = $_POST["formaat"];
    $saus = $_POST["saus"];
    $bonen = $_POST["bonen"];
    $rijst = $_POST["rijst"];
    $id = $_POST["id"];

    // execute the query
    $stmt->execute();

    // echo a message to say the UPDATE succeeded
    echo $stmt->rowCount() . " records UPDATED successfully";
    header("Refresh:2; ./read.php");
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
