<?php
include 'db/connect.php';
include 'db/vars.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lesson Planner</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/animate.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css" />
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <link rel="stylesheet" href="MaterialDesign-Webfont-master/css/materialdesignicons.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/bd-wizard.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- Custom js -->
    <link rel="stylesheet" href="css/style2.css" />
</head>

<body>
    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand absolute" href="index.php">
                    <div class="icon mr-4">
                        <h1 class="flaticon-university"></h1>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse navbar-light p-5" id="navbarsExample05">
                    <ul class="navbar-nav absolute-right">
                        <?php if (!isset($_COOKIE["userId"])) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">Register</a>
                            </li>
                        <?php } elseif (isset($_COOKIE["userId"])) {
                            echo '<li class="nav-item">
                                <a class="nav-link">Hi ' . $_COOKIE["fName"] . '</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="db/logOut.php">Logout</a>
                            </li>
                            ';
                        } ?>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <!-- Toast msg -->
    <div class="toast m-3 text-center" role="alert" aria-live="assertive" aria-atomic="false" style="min-width: 200px;" data-delay="10000">
        <div class="toast-header">
            <span class="mdi mdi-message mdi-18px"></span>
            <strong class="mr-auto ml-2">Alert</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body p-4">
            Hello there, in the weldi!
        </div>
    </div>