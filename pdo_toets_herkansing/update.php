<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password) ;
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // selects the id from the artikel row
    $sql = $conn->prepare("SELECT * FROM burrito WHERE id = :id");
    $id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);

    // binds the id to id
    $sql->bindParam(":id", $id);

    // makes the params into a object
    $sql->setFetchMode(PDO::FETCH_OBJ);

    //executes the query
    $sql->execute();   

    //fetches the query and shows query
    $result = $sql->fetch();
 

}catch(PDOException $e){

}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <form action="./update_script.php" method="post">
        <div class="form-group">
            <label for="">formaat</label>
            <input type="text" name="formaat" class="form-control" required value="<?=$result->formaat?>"
        </div>
        <div class="form-group">
            <label for="">saus</label>
            <input type="text" name="saus" class="form-control" required value="<?=$result->saus?>">
        </div>
        <div class="form-group">
            <label for="">bonen</label>
            <input type="text" name="bonen" class="form-control" required value="<?=$result->bonen?>">
        </div>
        <div class="form-group">
            <label for="">rijst</label>
            <input type="text" name="rijst" class="form-control" required value="<?=$result->rijst?>" >
        </div>

        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
        <input type="hidden" value="<?=$_GET['id']?>" name="id">
    </form>

    <!doctype html>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>