<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT * FROM burrito");
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $records = "";
    while ($record = $stmt->fetch()) {
        $records .= "<tr>
                <th scope='row'>" . $record["id"] . "</th>
                <td> " . $record["formaat"] . "</td>
                <td> " . $record["saus"] . "</td>
                <td> " . $record["bonen"] . "</td>
                <td> " . $record["rijst"] . "</td>
                <td>
                    <a href='./update.php?id=" . $record['id'] . "'>
                    <i class='fa fa-pencil'></i>
                    </a>
                </td>
                <td>
                    <a href='./delete.php?id=" . $record['id'] . "'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x' viewBox='0 0 16 16'>
                            <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
                        </svg>
                    </a>
                </td>   
                </tr>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
</head>


<!--creates the table with the names of the info that you want to see -->
<body>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    id
                </th>
                <th scope="col">
                    formaat
                </th>
                <th scope="col">
                    saus
                </th>
                <th scope="col">
                    bonen
                </th>
                <th scope="col">
                    rijst
                </th>
            </tr>
        </thead>
        <tbody>
            <?= $records ?>
        </tbody>
    </table>


    <form method="get" action="./index.php">
        <button type="submit">create</button>
    </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


</body>

</html>