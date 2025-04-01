<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haitham PHP Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .header-section {
            background-image: url('./images/BackGround.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh;
            background-attachment: scroll;
        }

        @media (max-width: 576px) {
            .w-75-sm {
                width: 75% !important;
            }
        }
    </style>

</head>



<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary d-flex items-center justify-content-between px-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Haitham</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./products.php">All Products</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if (isset($_SESSION['username'])) { ?>
                            <a class="nav-link" href="./account.php"><?= $_SESSION['username'] ?></a>
                        <?php } else { ?>
                            <a class="nav-link" href="./account.php">Account</a>
                        <?php } ?>
                    </li>


            </div>
        </div>
    </nav>

    <section class="header-section w-100 d-flex align-items-center">
        <div class="container">
            <div class="w-75-sm w-50">
                <h1 class="text-white text-center display-1 fw-bold">Welcome to <br>our store</h1>
            </div>
        </div>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>