<?php
// ob_start();
   include_once('config.php');
 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand grow" href="#"><img src="img/rigzlogo.png" height="50px" alt="" /></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle
					navigation">
                <span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <div class="pt-2">Welcome
                            <?php $username = $_SESSION['user_record']['username']; echo $username ?></div>
                    </li>

                    <li class="nav-item">
                        <i class="fas fa-user-circle fa-2x"></i>
                    </li>

                    <li class="nav-item">
                        <?php include_once('logout.php'); ?>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
</body>

</html>