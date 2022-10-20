<?php session_start(); ?>
<?php

require_once "db.php";


$select = "SELECT * FROM users";
$query = mysqli_query($db_conn, $select);






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

                        <table class="table table-special">
                            <thead>
                                <tr>
                                    <th>#ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>
                                        Actions
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($query as $key => $item) { ?>
                                    <tr>
                                        <td><?= $key+1 ?></td>
                                        <td><?= $item['name'] ?></td>
                                        <td><?= $item['email'] ?></td>
                                        <td>
                                            <a href="" class="btn btn-danger">Delete</a>
                                        </td>


                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>




                    </div>
                </div>

            </div>

        </div>


        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            <?php if (isset($_SESSION["success"]) && !empty($_SESSION["success"])) { ?>

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: '<?= $_SESSION["success"]; ?>',
                    showConfirmButton: false,
                    timer: 3000
                })
            <?php } ?>
        </script>


</body>

</html>

<?php
unset($_SESSION["success"]);
?>