<!doctype html>
<html lang="en">


<?php
$co        =    "Furniro";

?>


<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $co; ?></title>

    <!-- LInks -->
    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">



    <!-- FontAwesome version 6.5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- custom css  -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./images/favicon.ico">



</head>
<!-- End of Head Section -->

<body>
    <header class="header">
        <div class="container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand " href="./"><img src="./images/logo11.png" alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel"><img src="./images/logo11.png" alt=""></h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item <?php if ($page == 'home') {
                                                        echo 'active';
                                                    } ?>">
                                    <a href="./" class="nav-link">Home</a>
                                </li>
                                <li class="nav-item <?php if ($page == 'shop') {
                                                        echo 'active';
                                                    } ?>">
                                    <a href="shop.php" class="nav-link">Shop</a>
                                </li>
                                <li class="nav-item <?php if ($page == 'about') {
                                                        echo 'active';
                                                    } ?>">
                                    <a href="about" class="nav-link">About</a>
                                </li>
                                <li class="nav-item <?php if ($page == 'contact') {
                                                        echo 'active';
                                                    } ?>">
                                    <a href="contact" class="nav-link">Contact</a>
                                </li>
                            </ul>

                            <!-- Right-Side Icons -->
                            <ul class="navbar-nav ms-auto">
                                <!-- User Icon -->
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="fas fa-user"></i>
                                </a>
                            </li>
                              
                                <!-- Search Icon -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </li>

                                <!-- Heart Icon -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-heart"></i>
                                    </a>
                                </li>

                                <!-- Shopping Cart Icon -->
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>


    <!-- Header Ends -->