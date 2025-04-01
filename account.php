<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Haitham PHP Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<?php
session_start();

$edit = $_SESSION['edit'] ?? [];
$error = $_SESSION['error'] ?? [];

// var_dump($error);
?>

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

    <?php if (isset($_SESSION["username"])) { ?>
        <section class="container text-bg-secondary my-5 py-3">

            <a href="http://localhost/02_php_task/task/actions/logout.php" class="btn btn-danger">Sign Out</a>
        <?php } ?>

        <section class="container text-bg-secondary my-5 py-3">
            <form action="/02_php_task/task/actions/handle_signup.php" method="post">
                <?php if (isset($_SESSION["username"])) { ?>
                    <h2>Edit Profile</h2>
                <?php } else { ?>
                    <h2>Sign Up</h2>
                <?php } ?>


                <div class="form-group row mb-3">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input name="username"
                            value="<?= isset($edit['username']) ? htmlspecialchars($edit['username']) : '' ?>"
                            type="text" class="form-control" placeholder="Required" id="username">
                            <?php if (isset($error ["username_error"])) { ?>
                            <p class="alert alert-danger px-3 py-1"><?= $error ["username_error"] ?></p>
                            <?php } ?>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input name="password" type="password" class="form-control" placeholder="Required"
                            id="password">
                            <?php if (isset($error ["password_error"])) { ?>
                            <p class="alert alert-danger px-3 py-1"><?= $error ["password_error"] ?></p>
                            <?php } ?>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="passwordConfirm" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input name="password2" type="password" class="form-control" placeholder="Required"
                            id="passwordConfirm">
                            <?php if (isset($error ["password2_error"])) { ?>
                            <p class="alert alert-danger px-3 py-1"><?= $error ["password2_error"] ?></p>
                            <?php } ?>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="emailAddress" class="col-sm-2 col-form-label">Email address</label>
                    <div class="col-sm-10">
                        <input name="email" type="email"
                            value="<?= isset($edit['email']) ? htmlspecialchars($edit['email']) : '' ?>"
                            class="form-control" placeholder="Required" id="emailAddress">
                            <?php if (isset($error ["email_error"])) { ?>
                            <p class="alert alert-danger px-3 py-1"><?= $error ["email_error"] ?></p>
                            <?php } ?>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="phoneNumber" class="col-sm-2 col-form-label">Phone Number</label>
                    <div class="col-sm-10">
                        <input name="phone" type="text"
                            value="<?= isset($edit['phone']) ? htmlspecialchars($edit['phone']) : '' ?>"
                            class="form-control" placeholder="Required" id="phoneNumber">
                            <?php if (isset($error["phone_error"])) { ?>
                            <p class="alert alert-danger px-3 py-1"><?= $error["phone_error"] ?></p>
                            <?php } ?>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="facebookProfile" class="col-sm-2 col-form-label">Facebook Profile</label>
                    <div class="col-sm-10">
                        <input name="facebook"
                            value="<?= isset($edit['facebook']) ? htmlspecialchars($edit['facebook']) : '' ?>"
                            type="url" class="form-control" placeholder="Optional" id="facebookProfile">
                            <?php if (isset($error["facebook_error"])) { ?>
                            <p class="alert alert-danger px-3 py-1"><?= $error["facebook_error"] ?></p>
                            <?php } ?>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="twitterprofile" class="col-sm-2 col-form-label">Twitter Profile</label>
                    <div class="col-sm-10">
                        <input name="twitter" type="url"
                            value="<?= isset($edit['twitter']) ? htmlspecialchars($edit['twitter']) : '' ?>"
                            class="form-control" placeholder="Optional" id="twitterprofile">
                           
                            <?php if (isset($error["twitter_error"])) { ?>
                            <p class="alert alert-danger px-3 py-1"><?= $error["twitter_error"] ?></p>
                            <?php } ?>
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label for="instagramProfile" class="col-sm-2 col-form-label">Instagram Profile</label>
                    <div class="col-sm-10">
                        <input name="instagram" type="url"
                            value="<?= isset($edit['instagram']) ? htmlspecialchars($edit['instagram']) : '' ?>"
                            class="form-control" placeholder="Optional" id="instagramProfile">
                            <?php if (isset($error["instagram_error"])) { ?>
                            <p class="alert alert-danger px-3 py-1"><?= $error["instagram_error"] ?></p>
                            <?php } ?>
                            
                    </div>
                </div>

                <button type="submit" name="submitBtn" class="btn btn-primary mt-4">Submit</button>
            </form>

        </section>






        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>