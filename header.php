<?php
// ob_start();
   include_once('config.php');
 
?>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <title>CMS Login System </title>


</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light mb-5">
            <div class="container">
                <a class="navbar-brand grow" href="#"><img src="img/rigzlogo.png" height="60px" alt="" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle
					navigation">
                    <span class="custom-toggler-icon"><i class="fas fa-bars"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active mt-2">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn p-2" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn p-2" href="register.php">Signup</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>