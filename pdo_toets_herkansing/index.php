<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pdo_toets_herkansing";


?>

<!doctype html>
<html lang="en">


<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>maakjeburrito</title>
</head>

<body>
    <form action="./create.php" method="post">
        <div class="card mb-3" id="card1">
            <div class="card-body">
                <div id="title1"> Maak je eigen burrito!</div>

                <!-- dropdown 1-->
                <h5 class="card-title">burritoformaat</h5>
                <select name="formaat" class="form-select" aria-label="Default select example" id="dropdown1">
                    <option selected>Maak je keuze</option>
                    <option value="1">small</option>
                    <option value="2">medium</option>
                    <option value="3">large</option>
                </select>

                <!-- dropdown 2-->
                <h5 class="card-title">saus</h5>
                <select name="saus" class="form-select" aria-label="Default select example" id="dropdown2">
                    <option selected>Maak je keuze</option>
                    <option value="1">mayo</option>
                    <option value="2">salsa</option>
                    <option value="3">secrets</option>
                </select>

                <!-- radio form1-->
                <div  class="form-check" id="form1">
                    <div class="form-title">Bonen</div>
                    <input class="form-check-input" type="radio" name="bonen" value="kidney bonen" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        kidney bonen
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bonen" value="zwarte bonen" id="defaultCheck2">
                    <label class="form-check-label" for="defaultCheck1">
                        Zwarte bonen
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="bonen"value="bruine bonen" id="defaultCheck3">
                    <label class="form-check-label" for="defaultCheck1">
                        Bruine bonen
                    </label>
                </div>

                <!--  radio form 2-->
                <div   class="form-check" id="form1">
                    <div class="form-title">rijst</div>
                    <input class="form-check-input" type="radio"name="rijst" value="witte rijst" id="defaultCheck4">
                    <label class="form-check-label" for="defaultCheck1">
                        witte rijst
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rijst" value="zwarte rijst" id="defaultCheck5">
                    <label class="form-check-label" for="defaultCheck1">
                        zwarte rijst
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rijst" value="bruine rijst" id="defaultCheck6">
                    <label class="form-check-label" for="defaultCheck1">
                        bruine rijst
                    </label>
                </div>


            </div>
            <!-- bestel button-->

            <button type="submit" class="btn btn-primary btn-lg" id="button1">bestel</button>

        </div>
    </form>
</body>

</html>