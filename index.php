<?php


session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Register Page
    </title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row ">
            <div class="col-md-6 m-auto mt-5">
                <div class="card">
                    <div class="card-header bg-info">
                        <h2>Dashbord</h2>
                    </div>

                    <div class="card-body">

                        <small class="text-danger">
                            <?php if (isset($_SESSION["success"]) && !empty($_SESSION["success"])) { ?>


                                <div class="alert alert-success" role="alert">
                                  <p class="mb-0"><?= $_SESSION["success"]; ?></p>

                                </div>

                            <?php } ?>
                        </small>




                    </div>
                </div>

            </div>

        </div>
</body>

</html>

<?php

unset($_SESSION["success"]);


?>