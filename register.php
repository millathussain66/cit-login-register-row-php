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
                        <h2>Login Page</h2>
                    </div>
                    <div class="card-body">
                        <form action="register_post.php" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Your Name....">
                                <small class="text-danger">
                                    <?php if (isset($_SESSION["name_err"]) && !empty($_SESSION["name_err"])) { ?>

                                        <p class="mb-0"><?= $_SESSION["name_err"]; ?></p>

                                    <?php } ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Enter Your Email....">
                                <small class="text-danger">
                                    <?php if (isset($_SESSION["email_err"]) && !empty($_SESSION["email_err"])) { ?>

                                        <p class="mb-0"><?= $_SESSION["email_err"]; ?></p>

                                    <?php } ?>
                                </small>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="password" placeholder="Enter Your Password....">
                                <small class="text-danger">
                                    <?php if (isset($_SESSION["pass_err"]) && !empty($_SESSION["pass_err"])) { ?>

                                        <p class="mb-0"><?= $_SESSION["pass_err"]; ?></p>

                                    <?php } ?>
                                </small>
                            </div>

                            <div class="form-group mt-2">
                                <input class="form-control" type="file" name="img" onchange="document.getElementById('blah').src = window.URL.createObjectURL(this.files[0])">
                            </div>


                            <div class="">
                                <img class="img-fluid" id="blah" alt="your image" width="100" height="100" />

                            </div>

                            <input class="btn btn-success mt-2" type="submit" value="Submit">
                    </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        <?php if (isset($_SESSION["ex_error"]) && !empty($_SESSION["ex_error"])) { ?>

            Swal.fire({
                position: 'center',
                icon: 'error',
                title: '<?= $_SESSION["ex_error"]; ?>',
                showConfirmButton: false,
                timer: 3000
            })
        <?php } ?>
    </script>
</body>

</html>

<?php

unset($_SESSION["name_err"]);
unset($_SESSION["email_err"]);
unset($_SESSION["pass_err"]);
unset($_SESSION["ex_error"]);

?>